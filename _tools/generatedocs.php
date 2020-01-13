<?php
/**
 * Koseven Documentation Generator Class
 *
 * Use this class to Auto-Generate API and Documentation Files
 * which are compatible with jekyll and do not require PHP
 */
class Documentation_Generator {

	/**
	 * Path to downloaded and extracted GitHub Files
	 * @var string
	 */
	public static $_cloned_files_path;

	/**
	 * Path to module files
	 * @var string
	 */
	public static $_modules_path;

	/**
	 * Path to System files
	 * @var string
	 */
	public static $_system_path;

	/**
	 * Branch Name to clone files from
	 * @var string
	 */
	public $_branch = 'master';

	/**
	 * Path where to store Documentation
	 * @var string
	 */
	public $_documentation_dir = 'documentation';

	/**
	 * Path where to store API files
	 * @var string
	 */
	public $_api_dir = 'documentation'.DIRECTORY_SEPARATOR.'api';

	/**
	 * Path to asset directory
	 * @var string
	 */
	public $_asset_dir = 'assets';

	/**
	 * Parse Documentation Files
	 * @var bool
	 */
	public $_parse_doc = TRUE;

	/**
	 * Parse API Files
	 * @var bool
	 */
	public $_parse_api = TRUE;

	/**
	 * Path to temporary directory
	 * @var string
	 */
	protected $_tmp_dir;

	/**
	 * Holds Reflection class of all api classes
	 * @var array
	 */
	protected $_api_classes;

	/**
	 * Holds Api Classes pre-sorted for the menu
	 * @var array
	 */
	protected $_api_classes_menu;

	/**
	 * Provides auto-loading support of classes.
	 *
	 * You should never have to call this function, as simply calling a class
	 * will cause it to be called.
	 *
	 * @param   string  $class      Class name
	 * @return  boolean
	 */
	public static function auto_load($class) : bool
	{
		// Construct File Name
		$file = str_replace('_', DIRECTORY_SEPARATOR, $class).'.php';

		// Path to classes
		$system = glob(self::$_cloned_files_path.'system'.DIRECTORY_SEPARATOR.'classes');
		$modules = glob(self::$_cloned_files_path.'modules'.DIRECTORY_SEPARATOR.'*'.DIRECTORY_SEPARATOR.'classes');

		foreach (array_merge($system, $modules) as $dir)
		{
			// Check if is file and require
			$path = $dir.DIRECTORY_SEPARATOR.$file;
			if (is_file($path)) {
				require $path;
				return TRUE;
			}

			// Workaround for markdown vendor file
			if ($class === 'MarkdownExtra_Parser') {
				require_once self::$_cloned_files_path.'modules'.DIRECTORY_SEPARATOR.'userguide'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'markdown'.DIRECTORY_SEPARATOR.'markdown.php';
			}
		}

		// Class is not in the filesystem
		return FALSE;
	}

	/**
	 * Documentation_Generator constructor.
	 */
	public function __construct()
	{
		// We nee allow_url_fopen to be set to 1 (allow) to work correctly
		if ( ! ini_get('allow_url_fopen'))
		{
			$this->kill('Please set "allow_url_fopen" in your php.ini to 1.');
		}

		// Check if Directory is writable
		if ( ! is_writable(__DIR__)) {
			$this->kill('Directory "'.__DIR__.'" is not writable');
		}
	}

	/**
	 * Start Initializing, Cloning and Generating requested files
	 *
	 * @return void
	 */
	public function generate() : void
	{
		// Initialize Generator
		$this->initialize();

		// Clone Repository files
		$this->clone_repo();

		// Parse Documentation
		if ($this->_parse_doc)
		{
			$this->parse_doc();
		}

		// Parse API Browser
		if ($this->_parse_api)
		{
			$this->parse_api();
		}
	}

	/**
	 * Function for initial cleanup, directory and permission checks
	 *
	 * @return void
	 */
	protected function initialize() : void
	{
		// Set error reporting
		error_reporting(E_ALL ^ E_WARNING);

		// Get temp directory
		if ($this->_tmp_dir === NULL) {
			$this->_tmp_dir = sys_get_temp_dir();
		}

		// Delete if dirs already exist to avoid false content
		$this->delete_dirs();

		// Try to create required asset dir
		if ($this->_parse_doc && ( ! mkdir($this->_asset_dir, 0777, TRUE) && ! is_dir($this->_asset_dir)))
		{
			$this->kill('Directory "'.$this->_asset_dir.'" could not been created. Please check your permissions.');
		}

		// Try to create required documentation dir
		if ($this->_parse_doc && ( ! mkdir($this->_documentation_dir, 0777, TRUE) && ! is_dir($this->_documentation_dir)))
		{
			$this->kill('Directory "'.$this->_documentation_dir.'" could not been created. Please check your permissions.');
		}

		// Try to create required api dir
		if ($this->_parse_api && ( ! mkdir($this->_api_dir, 0777, TRUE) && ! is_dir($this->_api_dir)))
		{
			$this->kill('Directory "'.$this->_api_dir.'" could not been created. Please check your permissions.');
		}

		// Set Autoloader for classes
		if ($this->_parse_api) {
			spl_autoload_register(['Documentation_Generator', 'auto_load']);
		}

	}

	/**
	 * Clone repository and extract it int temporary path
	 *
	 * @return void
	 */
	protected function clone_repo() : void
	{

		// Path to store zip file
		$zip = $this->_tmp_dir.DIRECTORY_SEPARATOR.$this->_branch.'.zip';

		// Download Files from GitHub Repo
		if ( ! copy('https://github.com/koseven/koseven/archive/'.$this->_branch.'.zip', $zip))
		{
			$this->kill('Could not download repository files. Check your internet connection and try again.');
		}

		// Extract Zip
		$archive = new ZipArchive();
		$res = $archive->open($zip);

		// Check if we could open zip
		if ($res !== TRUE)
		{
			$this->kill('Could not open zip file....Maybe corrupt file?');
		}

		// Extract Zip
		if ( ! $archive->extractTo($this->_tmp_dir))
		{
			$this->kill('Error extracting Zip file....Maybe corrupt file?');
		}
		$archive->close();

		// Set Path to cloned files
		self::$_cloned_files_path = $this->_tmp_dir.DIRECTORY_SEPARATOR.'koseven-'.$this->_branch.DIRECTORY_SEPARATOR;
		self::$_modules_path = self::$_cloned_files_path.'modules'.DIRECTORY_SEPARATOR;
		self::$_system_path = self::$_cloned_files_path.'system'.DIRECTORY_SEPARATOR;

		// Define those, so we can use some koseven helpers
		define('APPPATH', self::$_cloned_files_path.'application'.DIRECTORY_SEPARATOR);
		define('SYSPATH', self::$_cloned_files_path.'system'.DIRECTORY_SEPARATOR);

		// Fake Route so we can make use of HTML class...dirty but koseven forces us to
		if ($this->_parse_api)
		{
			Route::set('docs/api', '', ['class' => '[a-zA-Z0-9_]+']);
		}
	}

	/**
	 * Parse documentation files and add required jekyll modifications to them.
	 *
	 * @return void
	 */
	protected function parse_doc() : void
	{
		// Get All 'guide' folders
		$guidePath = DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.'*';
		$modules = glob(self::$_modules_path.'*'.$guidePath);
		$system = glob(self::$_system_path.$guidePath);

		// Loop through them
		foreach (array_merge($modules, $system) as $guide)
		{

			// Skip irregular files which are no directories
			if ( ! is_dir($guide))
			{
				continue;
			}

			// Get Folder Name without full path
			$folder = strtok(str_replace([self::$_modules_path, self::$_cloned_files_path, DIRECTORY_SEPARATOR.'guide'], '', $guide), DIRECTORY_SEPARATOR);

			// Rename System folder to kohana, so we can redirect from the old page
			if($folder === 'system')
			{
				$folder = 'kohana';
			}


			// Create according dir
			if ( ! is_dir($targetDir = $this->_documentation_dir.DIRECTORY_SEPARATOR.$folder) && ! mkdir($targetDir, 0777, TRUE) && ! is_dir($targetDir))
			{
				$this->kill('Failed creating "'.$targetDir.'" directory. Please check your permissions.');
			}

			// Copy all contents of the source folder into the new folder
			foreach (
				$iterator = new \RecursiveIteratorIterator(
					new \RecursiveDirectoryIterator($guide, \RecursiveDirectoryIterator::SKIP_DOTS),
					\RecursiveIteratorIterator::SELF_FIRST) as $item
			)
			{
				// Get directory level relative to target directory
				$level = substr_count(str_replace($guide, '', $item->getPath()), DIRECTORY_SEPARATOR) + 1;

				// If item is directory we have to create it and copy the menu.md file there
				if ($item->isDir())
				{
					// Try to create the directory
					if ( ! is_dir($temp = $targetDir.DIRECTORY_SEPARATOR.$iterator->getSubPathName()) && ! mkdir($temp) && ! is_dir($temp))
					{
						$this->kill('Could not copy files. Error creating "'.$temp.'" . Please check your permissions.');
					}

					// If menu.md not existing in current path check for it in parent and copy it
					// We have to do this because jekyll tries to get it from the dir relative to the page
					if ( ! file_exists($item.DIRECTORY_SEPARATOR.'menu.md'))
					{
						// Construct path to parent folder
						$levels = '';
						for ($i = 0; $i < $level; $i++)
						{
							$levels .= '..'.DIRECTORY_SEPARATOR;
						}
						$parent = $item.DIRECTORY_SEPARATOR.$levels;

						// Copy menu to new destination
						copy($parent.'menu.md', $submenu = $temp.DIRECTORY_SEPARATOR.'menu.md');

						// Fix menu navigation
						$this->fixDocumentationLinks($submenu, $guide, TRUE);
					}
				}
				else
				{
					// Copy file and place layout header on top
					$dest = $targetDir.DIRECTORY_SEPARATOR.$iterator->getSubPathName();
					$title = ucfirst(array_slice(explode(DIRECTORY_SEPARATOR, $targetDir), -1)[0]);
					copy($item, $dest);

					// If it is a menu file, fix the links
					if (strpos($dest, 'menu.md') !== FALSE)
					{
						$this->fixDocumentationLinks($dest, $guide, TRUE);
					}

					// Else add a header to the file (NOTE: we have to convert the content t UTF-8)
					else
					{
						$content = file_get_contents($dest);
						$contUTF8 = mb_convert_encoding($content, 'UTF-8',
							mb_detect_encoding($content, 'UTF-8, ISO-8859-1', TRUE));
						file_put_contents($dest, "---\nlayout: documentation\ntitle: $title\n---\n".$contUTF8);

						// Fix links inside Documentation file
						$this->fixDocumentationLinks($dest, $guide, FALSE);
					}
				}
			}
		}
		echo '<p><span style="color: lightgreen;">Successfully</span> copied Documentation Files! You can browse them under your "'.$this->_documentation_dir.'" directory.</p>'.
			'<p>Please note all image assets are copied into the "'.$this->_asset_dir.'" directory.</p>';
	}

	/**
	 * Fix Menu Levels by adding absolute path to them
	 *
	 * @param string $path			Path to File where links need to be fixed
	 * @param string $module		Module Path
	 * @param bool	 $menu			Fix Menu or Text file?
	 *
	 * @return void
	 */
	protected function fixDocumentationLinks(string $path, string $module, bool $menu) : void
	{
		$data = file($path);
		$documentation_dir = $this->_documentation_dir;
		$api_dir = $this->_api_dir;
		$asset_dir = $this->_asset_dir;

		// Get folder without absolute path
		$folder = strtok(str_replace([self::$_modules_path, self::$_cloned_files_path, DIRECTORY_SEPARATOR.'guide'], '', $module), DIRECTORY_SEPARATOR);

		// Rename System folder to kohana, so we can redirect from the old page
		if ($folder ==='system')
		{
			$folder = 'kohana';
		}

		// Loop through each line of the file
		$data = array_map(function($line) use ($documentation_dir, $api_dir, $asset_dir, $folder, $menu, $module)
		{
			// If we are replacing a menu file we only need to fix the navigation links
			if ($menu)
			{
				if (strpos($line, '(') !== FALSE)
				{
					$repl = '/'.$documentation_dir.'/'.$folder.'/'.preg_replace('#[^()]*\((([^()]+|(?R))*)\)[^()]*#', '\1', $line);
					if (strpos($line, '##') !== FALSE)
					{
						$repl = '/'.$documentation_dir.'/'.$folder.'/'.'index';
					}
					return preg_replace("/\(([^()]*+|(?R))*\)/", '('.$repl.')', $line);
				}
				return $line;
			}

			// Now we are fixing each link inside a documentation file
			if (strpos($line, '](') !== FALSE)
			{
				// One Line can contain multiple links, therefore we need to use preg_replace_callback to be able to loop through them
				$initial = [];
				$result = preg_replace_callback('#[^()]*\((([^()]+|(?R))*)\)[^()]*#', function ($matches) use (&$initial)
				{
					// We don't update external links
					if (strpos($matches[1], 'http') === FALSE)
					{
						$initial[] = $matches[1];
					}
				}, $line);

				// Now we loop through matches and replace
				foreach ($initial as $init)
				{
					// Standard Replacement e.g /documentation/auth/initial
					$repl =  '/'.$documentation_dir.'/'.$folder.'/'.$init;

					// API link Replacement, as it is available in a different path
					if (strpos($init, '../api/') !== FALSE)
					{
						$repl = '/'.str_replace(DIRECTORY_SEPARATOR, '/', $api_dir).'/'.str_replace('../api/', '', $init);
					}

					// Image Replacement and copy, as thos also have a different path
					elseif (strpos($init, '.png') !== FALSE || strpos($init, '.jpg') !== FALSE || strpos($init, '.jpeg') !== FALSE)
					{
						// Replacement for images. NOTE: no leading slash as we use this as folder path
						$repl = $asset_dir.'/images/'.$documentation_dir.'/'.$folder.'/';

						// Image source path
						$src = strtok(dirname($module, 2).DIRECTORY_SEPARATOR.'media'.DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.basename($module).DIRECTORY_SEPARATOR.$init, ' ');

						// Skip if file does not exist
						if ( ! file_exists($src)) {
							continue;
						}

						// Recursively create path for images
						if ( !is_dir($repl) && ! mkdir($repl, 0777, TRUE) && ! is_dir($repl)) {
							throw new Exception('Error creating paths. Please check your permissions.');
						}

						// Copy File to image directory
						$repl .= strtok($init, ' ');
						copy($src, $repl);

						// Add slash at the beginning of the url path
						$repl = '/'.$repl;
					}
					$line = str_replace(']('.$init.')', ']('.$repl.')', $line);
				}
			}
			return $line;
		}, $data);

		// Write into file
		file_put_contents($path, implode('', $data));
	}

	/**
	 * Function to parse api documentation files.
	 *
	 * @return void
	 */
	protected function parse_api() : void
	{
		// Get Reflection of all classes
		$this->getClasses();

		// Generate a Universal Menu
		$this->generateAPIMenu();

		// Create Index/Table of Context File
		$this->generateAPIIndex();

		// Create Class files
		foreach($this->_api_classes as $name => $reflection)
		{
			$this->classToHTML($name, $reflection);
		}

		echo '<p><span style="color: lightgreen;">Successfully</span> copied API Files! You can browse them under your "'.$this->_api_dir.'" directory.</p>';
	}

	/**
	 * Get a reflection class of all classes
	 *
	 * @return void
	 */
	protected function getClasses() : void
	{
		// Path to classes
		$system = glob(self::$_cloned_files_path.'system'.DIRECTORY_SEPARATOR.'classes');
		$modules = glob(self::$_cloned_files_path.'modules'.DIRECTORY_SEPARATOR.'*'.DIRECTORY_SEPARATOR.'classes');

		// Now lets loop through them
		$menu_classes = [];
		$classes = [];
		foreach (array_merge($system, $modules) as $class_folder)
		{
			if (strpos($class_folder, 'unittest') !== FALSE)
			{
				continue;
			}

			$iterator = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($class_folder, RecursiveDirectoryIterator::SKIP_DOTS),
				RecursiveIteratorIterator::SELF_FIRST
			);
			foreach ($iterator as $item)
			{
				if ( ! $item->isDir())
				{
					// Remove Path and Extension from class and Extract class name only
					$class = substr(str_replace([$class_folder.DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], ['', '_'], $item), 0, -4);

					// Remove Duplicate classes for menu
					if (strpos($class, 'Kohana_') === 0)
					{
						$short = substr($class, 7);
						if (class_exists($short) && file_exists(str_replace('Kohana'.DIRECTORY_SEPARATOR, '', $item->getPathname())))
						{
							$classes[$class] = Kodoc_Class::factory($class);
							$class = $short;
						}
					}
					elseif (strpos($class, 'KO7_') === 0)
					{
						$short = substr($class, 4);
						if (class_exists($short) AND file_exists(str_replace('KO7'.DIRECTORY_SEPARATOR, '', $item->getPathname())))
						{
							$classes[$class] = Kodoc_Class::factory($class);
							$class = $short;
						}
					}

					// Check if class is valid and isn't already in our array
					if ($class !== FALSE)
					{
						// Pre sort classes for menu so we don't have to loop again
						$reflected = Kodoc_Class::factory($class);
						$package = $reflected->tags['package'][0] ?? 'Unknown';
						$category = $reflected->tags['category'][0] ?? 'Base';
						$name = $reflected->class->getName();
						if ( ! isset($menu_classes[$package][$category][$name]))
						{
							$menu_classes[$package][$category][$name] = $reflected;
						}
						if ( ! isset($classes[$name]))
						{
							$classes[$name] = $reflected;
						}
					}
				}
			}
		}

		// Sort by Package
		ksort($menu_classes);
		ksort($classes);

		$this->_api_classes_menu = $menu_classes;
		$this->_api_classes = $classes;
	}

	protected function generateAPIIndex() : void
	{
		// Base Link
		$link = '/'.str_replace(DIRECTORY_SEPARATOR, '/', $this->_api_dir).'/';

		// Jekyll File Header
		$html = "---\nlayout: api\nclass: Overview\n---\n";

		// Search Header
		$html .= "<h1>Available Classes</h1>\n<label>Filter:</label>\n<input type='text' id='kodoc-api-filter-box'>\n";

		// Start creating file
		$html .= "<div class='class-list row'>\n";
		$counter = 0;

		// Sort API Classes
		ksort($this->_api_classes);

		foreach ($this->_api_classes as $name => $reflection)
		{
			// Remove Duplicate classes
			if (strpos($name, 'Kohana_') === 0)
			{
				$short = substr($name, 7);
				if (class_exists($name) && $reflection->class->getFilename()) {
					continue;
				}
			}
			elseif (strpos($name, 'KO7_') === 0)
			{
				$short = substr($name, 4);
				if (class_exists($name) && $reflection->class->getFilename()) {
					continue;
				}
			}

			$side =  $counter % 2 === 0 ? 'left' : 'right';
			$html .= "<div class='col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 class {$side}'>\n";
			$html .= "<h2>\n<a href='{$link}{$name}'>{$name}</a>\n</h2>\n";
			$methods = $reflection->methods();
			if ($methods)
			{
				$html .= "<ul class='methods'>\n";
				foreach ($methods as $method)
				{
					$declaring = $method->method->getDeclaringClass()->name;
					if ($declaring !== $name AND $declaring !== 'Kohana_'.$name AND $declaring !== 'KO7_'.$name)
					{
						continue;
					}
					$html .= "<li>\n<a href='{$link}{$name}#{$method->method->name}'>{$name}::{$method->method->name}</a>\n</li>\n";
				}
				$html .= "</ul>\n";
			}
			$html .= "</div>\n";
		}
		$html .= '</div>';

		file_put_contents($this->_api_dir.DIRECTORY_SEPARATOR.'index.md', $html);
	}

	/**
	 * Generating an Menu for the API Browser (copied from Koseven Kodoc class)
	 *
	 * @return void
	 */
	protected function generateAPIMenu() : void
	{
		$content = '## Modules';

		// Base Link
		$link = str_replace(DIRECTORY_SEPARATOR, '/', $this->_api_dir);

		foreach ($this->_api_classes_menu as $package => $categories)
		{
			// Package
			$content .= PHP_EOL.'- '.$package;

			// Sort and Print Base Classes
			ksort($categories['Base']);
			foreach ($categories['Base'] as $name => $class)
			{
				$content .= PHP_EOL.'  - ['.$name.'](/'.$link.'/'.$name.')';
				unset($categories['Base'][$name]);
			}
			unset($categories['Base']);

			// Sort the Categories
			ksort($categories);

			foreach ($categories as $category => $classes)
			{
				$content .= PHP_EOL.'  - '.$category;

				// Sort Classes
				ksort($classes);

				foreach ($classes as $name => $class)
				{
					$content .= PHP_EOL.'    - ['.$name.'](/'.$link.'/'.$name.')';
				}

			}
		}
		file_put_contents($this->_api_dir.DIRECTORY_SEPARATOR.'menu.md', $content);
	}

	/**
	 * Convert Class to Markdown file with HTML content.
	 *
	 * @param string 	   $name		Class Name to Convert
	 * @param Kodoc_Class  $reflection	Reflection Class
	 *
	 * @return void|null
	 */
	protected function classToHTML(string $name, Kodoc_Class $reflection) : void
	{
		// Base Link
		$link = '/'.str_replace(DIRECTORY_SEPARATOR, '/', $this->_api_dir).'/';

		$content = "---\nlayout: api\nclass: {$name}\n---\n";

		// Start generating file
		$content .= "<h1>{$name}</h1>\n";

		// Check if PHP internal class
		if ( ! $reflection->class->getFilename())
		{
			$anchor = 'http://php.net/manual/class.'.strtolower($reflection->class->name).'.php';
			$content .= "<div class='callout-block callout-info'>\n<div class='icon-holder'>\n".
				"<i class='fas fa-info-circle'></i>\n</div>\n<div class='content'>\n".
				"<h4 class='callout-title'>PHP Internal Class</h4>\n<p>This class is not declared in a file, it is probably an internal <a target='_blank' href='{$anchor}'>PHP class</a></p>\n</div>\n</div>\n";

			// Write to File and skip to next element
			file_put_contents($this->_api_dir.DIRECTORY_SEPARATOR.$name.'.md', $content);
			return;
		}

		// Parent Classes
		foreach ($reflection->parents as $parent)
		{
			// If class is not in our list (e.g PHP Internal class) add it to prevent 404
			if ( ! array_key_exists($parent->name, $this->_api_classes)) {
				$this->classToHTML($parent->name, Kodoc_Class::factory($parent->name));
			}
			$anchor = $link.$parent->name;
			$content .= "extends <a href='{$anchor}'>{$parent->name}</a>\n<br>\n";
		}

		// Check for interfaces
		$interfaces = $reflection->class->getInterfaceNames();
		if ($interfaces)
		{
			$content .= "<p class='interfaces'>\n<small>Implements: ";
			for ($i = 0, $split = FALSE, $count = count($interfaces); $i < $count; $i++, $split = ' | ')
			{
				// If class is not in our list (e.g PHP Internal class) add it to prevent 404
				if ( ! array_key_exists($interfaces[$i], $this->_api_classes)) {
					$this->classToHTML($interfaces[$i], Kodoc_Class::factory($interfaces[$i]));
				}
				$anchor = $link.$interfaces[$i];
				$content .= $split."<a href='{$anchor}'>{$interfaces[$i]}</a>";
			}
			$content .= "</small>\n</p>\n";
		}

		$content .= "<p>\n<i>".HTML::chars($reflection->description())."</i>\n</p>\n";

		// Get Documentation Tags
		if ($reflection->tags)
		{
			$content .= "<dl class='tags'>\n";
			foreach ($reflection->tags as $nm => $set)
			{
				$content .= "<dt>{$nm}</dt>\n";
				foreach ($set as $tag)
				{
					$content .= "<dd>{$tag}</dd>\n";
				}
			}
			$content .= "</dl>\n<br>\n";
		}

		// If class has a `Kohana`, `KO7` base class it is just a transparent class
		if (class_exists('Kohana_'.$name) OR class_exists('KO7_'.$name))
		{
			$parent = (class_exists('KO7_'.$name) ? 'KO7_' : 'Kohana_').$name;
			$anchor = $link.$parent;
			$content .= "<div class='callout-block callout-info'>\n<div class='icon-holder'>\n".
				"<i class='fas fa-info-circle'></i>\n</div>\n<div class='content'>\n".
				"<h4 class='callout-title'>Information</h4>\n<p>This class is a transparent base class for <a href='{$anchor}'>{$parent}</a></p>\n</div>\n</div>\n";
		}

		// Table of contents
		$content .= "<div class='toc row d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex'>\n<div class='constants col-4'>\n<h3>Constants</h3>\n<ul>\n";

		// Class constants
		if ($reflection->constants)
		{
			foreach ($reflection->constants() as $nm => $value)
			{
				$content .= "<li>\n<a href='#constant-{$nm}'>{$nm}</a>\n</li>\n";
			}
		}
		else
		{
			$content .= "<li>\n<em>None</em>\n</li>\n";
		}

		// Class Properties
		$content .= "</ul>\n</div>\n<div class='properties col-4'>\n<h3>Properties</h3>\n<ul>\n";
		$properties = $reflection->properties();
		if ($properties)
		{
			foreach ($properties as $prop)
			{
				$content .= "<li>\n<a href='#property-{$prop->property->name}'>\${$prop->property->name}</a>\n</li>\n";
			}
		}
		else
		{
			$content .= "<li>\n<em>None</em>\n</li>\n";
		}

		// Class Methods
		$content .= "</ul>\n</div>\n<div class='methods col-4'>\n<h3>Methods</h3>\n<ul>\n";
		$methods = $reflection->methods();
		if ($methods)
		{
			foreach ($methods as $method)
			{
				$content .= "<li>\n<a href='#{$method->method->name}'>{$method->method->name}()</a>\n</li>\n";
			}
		}
		else
		{
			$content .= "<li>\n<em>None</em>\n</li>\n";
		}
		$content .= "\n</ul>\n</div>\n</div>\n";

		// Constant Details
		if($reflection->constants)
		{
			$content .= "<div class='constant'>\n<h1 id='constants'>Constants</h1>\n<dl>\n";
			foreach ($reflection->constants() as $nm => $value)
			{
				$content .= "<dt>\n<h4 id='constant-{$nm}'>{$nm}</h4>\n</dt>\n<dd>{$value}</dd>\n";
			}
			$content .= "</dl>\n</div>\n";
		}

		// Property Details
		if ($properties)
		{
			$content .= "<h1 id='properties'>Properties</h1>\n<div class='properties'>\n<dl>\n";
			foreach ($properties as $prop)
			{
				$content .= "<dt>\n<h4 id='property-{$prop->property->name}'>{$prop->modifiers} <span class='blue'>{$prop->type}</span> \${$prop->property->name}</h4>\n</dt>\n<dd>\n ".HTML::chars(ucfirst($prop->description))."</dd>\n<dd>\n {$prop->value}</dd>\n";
				if ($prop->default !== $prop->value)
				{
					$content .= "<dd>\n<small>Default value:</small>\n<br>\n {$prop->default}</dd>\n";
				}
			}
			$content .= "</dl>\n</div>\n";
		}

		// Method Details
		if ($methods)
		{
			$content .= "<h1 id='methods'>Methods</h1>\n<div class='methods'>\n";
			foreach ($methods as $method)
			{
				$content .= $this->methodToHtml($method);
			}
			$content .= '</div>';
		}

		// We have to replace {{ and }} because it will throw an invalid liquid syntax error
		$content = str_replace(['{{', '}}'], ['{', '}'], $content);

		// Write to File
		file_put_contents($this->_api_dir.DIRECTORY_SEPARATOR.$name.'.md', $content);
	}

	/**
	 * Format Method to HTML string
	 *
	 * @param  KO7_Kodoc_Method  $method  Method to format to HTML Block
	 *
	 * @return string
	 */
	protected function methodToHtml($method) : string
	{
		// Base Link
		$link = '/'.str_replace(DIRECTORY_SEPARATOR, '/', $this->_api_dir).'/';

		// Construct HTML string
		$html = "\n<div class='method'>\n";
		$declares = $method->method->getDeclaringClass();
		$params = $method->params ? strtr($method->params_short(), ["'" => '`', '"' => "'"]) : '';
		$declLink = $link.$declares->name;

		// Title
		$html .= "<h3 id='{$method->method->name}'>{$method->modifiers}{$method->method->name}({$params})<small>(defined in <a href='{$declLink}'>{$declares->name}</a>)</small></h3>\n";

		// Description
		$html .= "<div class='description'>".HTML::chars(ucfirst($method->description))."</div>\n";

		// Parameter
		if ($method->params)
		{
			$html .= "<h4>Parameters</h4>\n<ul>\n";
			foreach ($method->params as $param)
			{
				$ref = $param->reference ? 'byref ' : '';
				$type = $param->type ? $param->type : 'unknown';
				$default = $param->default ? '<small> = '.$param->default.'</small>' : '<small>required</small>';
				$desc = $param->description ? ' - '.HTML::chars(ucfirst($param->description)) : '';
				$html .= "<li>\n{$ref} <span class='blue'>{$type}</span> <strong>\${$param->name}</strong> {$default}{$desc}</li>\n";
			}
			$html .= "</ul>\n";
		}

		// Tags
		if ($method->tags)
		{
			$html .= "<h4>Tags</h4>\n<ul class='tags'>\n";
			foreach ($method->tags as $name => $set)
			{
				$tag = ucfirst($name).($set ? ' - '.implode(', ',$set) : '');
				$html .= "<li>{$tag}</li>\n";
			}
			$html .= "</ul>\n";
		}

		// Return Values
		if ($method->return)
		{
			$html .= "<h4>Return Values</h4>\n<ul class='return'>\n";
			foreach ($method->return as $set) {
				[$type, $text] = $set;
				$type = HTML::chars($type);
				$text = $text ? ' - '.HTML::chars(ucfirst($text)) : '';
				$html .= "<li>\n<span class='blue'>{$type}</span> {$text}\n</li>";
			}
			$html .= "</ul>\n";
		}

		// Source Code
		if ($method->source)
		{
			$html .= "<div class='method-source'>\n<h4>Source Code</h4>\n<pre>\n<code class='language-php'>".HTML::chars($method->source)."</code>\n</pre>\n</div>\n";
		}

		$html .= "</div>\n";
		return $html;
	}

	/**
	 * Recursively delete all files of a directory
	 *
	 * @param string|array 	$dir	Directory or array of directories to delete
	 *
	 * @return void
	 */
	protected function rrmdir($dir) : void
	{
		// Delete all Folders
		if (is_array($dir))
		{
			foreach ($dir as $delete)
			{
				$this->rrmdir($delete);
			}
			return;
		}

		// Check if directory exists
		if ( ! is_dir($dir))
		{
			return;
		}

		// Open the source directory to read in files
		foreach (new DirectoryIterator($dir) as $f)
		{
			if ($f->isFile())
			{
				unlink($f->getRealPath());
			}
			elseif ( ! $f->isDot() AND $f->isDir())
			{
				$this->rrmdir($f->getRealPath());
			}
		}
		rmdir($dir);
	}

	/**
	 * Kill Application and Print error Message.
	 * Also clear up created directories
	 *
	 * @param string $message
	 * @return void
	 */
	protected function kill(string $message) : void
	{
		$this->delete_dirs();
		echo $message;
		die();
	}

	/**
	 * Delete all directories from this generator
	 *
	 * @return void
	 */
	protected function delete_dirs() : void
	{
		$this->rrmdir([$this->_documentation_dir, $this->_api_dir, $this->_asset_dir]);
	}
}

// Let's go!
$generator = new Documentation_Generator;
$generator->_parse_doc = (bool) ($_GET['documentation'] ?? TRUE);
$generator->_parse_api = (bool) ($_GET['api'] ?? TRUE);
$generator->generate();