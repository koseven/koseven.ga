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
if ( ! ini_get('allow_url_fopen')) {
	kill('Please set "allow_url_fopen" in your php.ini to 1.', $processedDir);
}

// Wee need to create a few directories
if (is_dir($processedDir)) {
	rrmdir($processedDir);
}
if (
	( ! is_dir($processedDir) && ! mkdir($processedDir) && ! is_dir($processedDir)) ||
	( ! is_dir($temp) && ! mkdir($temp) && ! is_dir($temp))) {
	kill('Not enough write permissions. Make sure "'.__DIR__.'" is writable.', $processedDir);
}

// Download Files from GitHub Repo
if ( ! copy('https://github.com/koseven/koseven/archive/'.$branch.'.zip', $zip)) {
	kill('Could not download repo.', $processedDir);
}

// Extract Zip
$archive = new ZipArchive();
$res = $archive->open($zip);

// Check if zip is open
if ($res !== TRUE) {
	kill('Could not open zip file.', $processedDir);
}

// Extract Zip
if ( ! $archive->extractTo($temp)) {
	kill('Error extracting Zip file', $processedDir);
}
$archive->close();

// copy files and add header
$base = $temp.DIRECTORY_SEPARATOR.'koseven-'.$branch.DIRECTORY_SEPARATOR;
$end = DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.'*';
$sourceFolder = $base.'modules'.DIRECTORY_SEPARATOR;
$modules = glob($sourceFolder.'*'.$end);
$system = glob($base.'system'.$end);
foreach ($src = array_merge($modules, $system) as $g) {
	// Skip irregular files which are no directories
	if ( ! is_dir($g)) {
		continue;
	}

	// Get Folder Name without full path
	$folder = strtok(str_replace([$sourceFolder, $base, DIRECTORY_SEPARATOR.'guide'], '', $g), DIRECTORY_SEPARATOR);

	// Create according dir
	if ( ! is_dir($targetDir = $processedDir.DIRECTORY_SEPARATOR.$folder) && ! mkdir($targetDir, 0777, TRUE) && ! is_dir($targetDir)) {
		kill('Failed creating "'.$processedDir.'" directories. Please check your folder permissions.', $processedDir);
	}

	// Holds all dir's where menu.md is already placed
	$menus = [];
	$menu = NULL;

	// Copy all contents into new folder
	foreach (
		$iterator = new \RecursiveIteratorIterator(
			new \RecursiveDirectoryIterator($g, \RecursiveDirectoryIterator::SKIP_DOTS),
			\RecursiveIteratorIterator::SELF_FIRST) as $item
	) {
		if ($item->isDir()) {
			if ( ! is_dir($temp = $targetDir.DIRECTORY_SEPARATOR.$iterator->getSubPathName()) && ! mkdir($temp) && ! is_dir($temp)) {
				kill('Could not copy files. Maybe no permission?', $processedDir);
			}
			// If menu.md not existing check for it in parent...nasty but it works
			if ( ! file_exists($item.DIRECTORY_SEPARATOR.'menu.md') && file_exists($par = dirname($item).DIRECTORY_SEPARATOR.'menu.md')) {
				copy($par, $submenu = $temp.DIRECTORY_SEPARATOR.'menu.md');

				// Fix menu navigation
				// NOTE: menu files are very small and can fit twice in memory
				$data = file($submenu);
				$data = array_map(function($line) {
					if (strpos($line, '(') !== FALSE) {
						$repl = '../'.preg_replace('#[^()]*\((([^()]+|(?R))*)\)[^()]*#', '\1', $line);
						if (strpos($line, '##') !== FALSE) {
							$repl = '../index.html';
						}
						return preg_replace("/\(([^()]*+|(?R))*\)/", '('.$repl.')', $line);
					}
					return $line;
				}, $data);
				file_put_contents($submenu, implode('', $data));
			}
		} else {
			// Copy file and place layout header on top
			$dest = $targetDir.DIRECTORY_SEPARATOR.$iterator->getSubPathName();
			$title = ucfirst(array_slice(explode(DIRECTORY_SEPARATOR, $targetDir), -1)[0]);
			copy($item, $dest);
			if (strpos($dest, 'menu.md') !== FALSE) {
				// Fix menu navigation
				// NOTE: menu files are very small and can fit twice in memory
				$data = file($dest);
				$data = array_map(function($line) {
					if (strpos($line, '##') !== FALSE) {
						return preg_replace("/\(([^()]*+|(?R))*\)/", '(index.html)', $line);
					}
					return $line;
				}, $data);
				file_put_contents($dest, implode('', $data));
			} else {
				$content = file_get_contents($dest);
				$contUTF8 = mb_convert_encoding($content, 'UTF-8',
					mb_detect_encoding($content, 'UTF-8, ISO-8859-1', TRUE));
				file_put_contents($dest, "---\nlayout: documentation\ntitle: $title\n---\n".$contUTF8);
			}

		}
	}
}
echo 'Done!';

/**
 * Recursively Copy all Contents of a folder to a new one
 *
 * @param string $path Folder to delete
 */
function rrmdir($path)
{
	// Open the source directory to read in files
	foreach (new DirectoryIterator($path) as $f) {
		if ($f->isFile()) {
			unlink($f->getRealPath());
		} elseif ( ! $f->isDot() && $f->isDir()) {
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
