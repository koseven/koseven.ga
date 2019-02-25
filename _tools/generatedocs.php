<?php

// Set Branch where to get documentation from
$branch = $_GET['branch'] ?? 'master';

// Directory to put processed files
$processedDir = $_GET['dir'] ?? 'documentation';

// Temporary dir
$temp = sys_get_temp_dir();

// Path to store zip file
$zip = $temp.DIRECTORY_SEPARATOR.$branch.'.zip';

// We nee allow_url_fopen to be set to 1 (allow) to work correctly
if ( ! ini_get('allow_url_fopen'))
{
	kill('Please set "allow_url_fopen" in your php.ini to 1.', $processedDir);
}

// Wee need to create a few directories
if (is_dir($processedDir))
{
	rrmdir($processedDir);
}
if (
	( ! is_dir($processedDir) && ! mkdir($processedDir) && ! is_dir($processedDir)) ||
	( ! is_dir($temp) && ! mkdir($temp) && ! is_dir($temp)))
{
	kill('Not enough write permissions. Make sure "'.__DIR__.'" is writable.', $processedDir);
}

// Download Files from GitHub Repo
if ( ! copy('https://github.com/koseven/koseven/archive/'.$branch.'.zip', $zip))
{
	kill('Could not download repo.', $processedDir);
}

// Extract Zip
$archive = new ZipArchive();
$res = $archive->open($zip);

// Check if zip is open
if ($res !== TRUE)
{
	kill('Could not open zip file.', $processedDir);
}

// Extract Zip
if ( ! $archive->extractTo($temp))
{
	kill('Error extracting Zip file', $processedDir);
}
$archive->close();

// copy files and add header
$base = $temp.DIRECTORY_SEPARATOR.'koseven-'.$branch.DIRECTORY_SEPARATOR;
$end = DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.'*';
$sourceFolder = $base.'modules'.DIRECTORY_SEPARATOR;
$modules = glob($sourceFolder.'*'.$end);
$system = glob($base.'system'.$end);
foreach ($src = array_merge($modules, $system) as $g)
{
	// Skip irregular files which are no directories
	if ( ! is_dir($g))
	{
		continue;
	}

	// Get Folder Name without full path
	$folder = strtok(str_replace([$sourceFolder, $base, DIRECTORY_SEPARATOR.'guide'], '', $g), DIRECTORY_SEPARATOR);

	// Create according dir
	if ( ! is_dir($targetDir = $processedDir.DIRECTORY_SEPARATOR.$folder) && ! mkdir($targetDir, 0777, TRUE) && ! is_dir($targetDir))
	{
		kill('Failed creating "'.$processedDir.'" directories. Please check your folder permissions.', $processedDir);
	}

	// Copy all contents into new folder
	foreach (
		$iterator = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($g, \RecursiveDirectoryIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::SELF_FIRST) as $item
	)
	{
		$level = substr_count(str_replace($g, '', $item->getPath()), DIRECTORY_SEPARATOR)+1;
		if ($item->isDir())
		{
			if ( ! is_dir($temp = $targetDir.DIRECTORY_SEPARATOR.$iterator->getSubPathName()) && ! mkdir($temp) && ! is_dir($temp))
			{
				kill('Could not copy files. Maybe no permission?', $processedDir);
			}
			// If menu.md not existing check for it in parent and copy it
			if ( ! file_exists($item.DIRECTORY_SEPARATOR.'menu.md'))
			{

				// Get Levels to Parent Folder
				$levels = '';
				for ($i = 0; $i < $level; $i++)
				{
					$levels .= '..'.DIRECTORY_SEPARATOR;
				}
				$parent = $item.DIRECTORY_SEPARATOR.$levels;

				// Copy menu to new destination
				copy($parent.'menu.md', $submenu = $temp.DIRECTORY_SEPARATOR.'menu.md');

				// Fix menu navigation
				fixLinks($submenu, $processedDir, $folder, TRUE);
			}
		}
		else
		{
			// Copy file and place layout header on top
			$dest = $targetDir.DIRECTORY_SEPARATOR.$iterator->getSubPathName();
			$title = ucfirst(array_slice(explode(DIRECTORY_SEPARATOR, $targetDir), -1)[0]);
			copy($item, $dest);
			if (strpos($dest, 'menu.md') !== FALSE)
			{
				fixLinks($dest, $processedDir, $folder, TRUE);
			}
			else
			{
				$content = file_get_contents($dest);
				$contUTF8 = mb_convert_encoding($content, 'UTF-8',
					mb_detect_encoding($content, 'UTF-8, ISO-8859-1', TRUE));
				file_put_contents($dest, "---\nlayout: documentation\ntitle: $title\n---\n".$contUTF8);
				fixLinks($dest, $processedDir, $folder, FALSE);
			}

		}
	}
}
echo 'Done!';

/**
 * Fix Menu Levels by adding absolute path to them
 *
 * @param string $path			Path to menu.md
 * @param string $processedDir	Directory where files are stored
 * @param string $folder		Current Folder
 * @param bool	 $menu			Fix Menu or Text file?
 */
function fixLinks(string $path, string $processedDir, string $folder, bool $menu)
{
	// NOTE: files are small and can fit twice in memory
	$data = file($path);
	$data = array_map(function($line) use ($processedDir, $folder, $menu)
	{
		if ($menu)
		{
			if (strpos($line, '(') !== FALSE)
			{
				$repl = '/'.$processedDir.'/'.$folder.'/'.preg_replace('#[^()]*\((([^()]+|(?R))*)\)[^()]*#', '\1', $line);
				if (strpos($line, '##') !== FALSE)
				{
					$repl = '/'.$processedDir.'/'.$folder.'/'.'index';
				}
				return preg_replace("/\(([^()]*+|(?R))*\)/", '('.$repl.')', $line);
			}
			return $line;
		}
		if (strpos($line, '](') !== FALSE)
		{
			// One Line can contain multiple links, therefore we need to use preg_replace_callback to be able to loop through them
			$initial = [];
			$result = preg_replace_callback('#[^()]*\((([^()]+|(?R))*)\)[^()]*#', function ($matches) use (&$initial)
			{
				// Don't update external links
				if (strpos($matches[1], 'http') === FALSE)
				{
					$initial[] = $matches[1];
				}
			}, $line);

			// Loop through matches and replace
			foreach ($initial as $init)
			{
				$repl =  '/'.$processedDir.'/'.$folder.'/'.$init;

				// API not ported yet
				if (strpos($init, '../api/') !== FALSE)
				{
					$repl = 'https://docs.koseven.ga/guide-api/'. str_replace('../api/', '', $init);
				}
				$line = str_replace(']('.$init.')', ']('.$repl.')', $line);
			}
		}
		return $line;
	}, $data);
	file_put_contents($path, implode('', $data));
}

/**
 * Recursively Copy all Contents of a folder to a new one
 *
 * @param string $path Folder to delete
 */
function rrmdir($path)
{
	// Open the source directory to read in files
	foreach (new DirectoryIterator($path) as $f)
	{
		if ($f->isFile())
		{
			unlink($f->getRealPath());
		}
		elseif ( ! $f->isDot() && $f->isDir())
		{
			rrmdir($f->getRealPath());
		}
	}
	rmdir($path);
}

/**
 * Kill Application and clean up
 *
 * @param string $message      Exit Message to display
 * @param string $processedDir Directory which got created
 */
function kill(string $message, string $processedDir)
{
	rrmdir($processedDir);
	echo $message;
	die();
}
