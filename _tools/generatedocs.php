<?php

$branch = 'master';
$f = 'https://github.com/koseven/koseven/archive/'.$branch.'.zip';
$docu_folder = 'documentation/modules';

$template = "---\nlayout: default\n---\n";

@mkdir('tmp', 0777);
//file_put_contents('tmp/'.$branch.'.zip', file_get_contents($f));

$zip = new ZipArchive;
$res = $zip->open('tmp/'.$branch.'.zip');
if($res === TRUE) {
  $zip->extractTo('tmp/koseven/');
  $zip->close();
  
  // Get guide folders
  foreach(glob('tmp/koseven/koseven-'.$branch.'/modules/*/guide') as $g) {
    
    $folder = str_replace(array('tmp/koseven/koseven-'.$branch.'/modules/', '/guide'), array('', ''), $g);

    //@mkdir('../'.$docu_folder.'/'.$folder, 0777);

    exec('cp -rf '.$g.'/* '.'../'.$docu_folder.'/');

    foreach(glob($g.'/*/*.md') as $f) {
    	$content = file_get_contents($f);
    	file_put_contents('../'.$docu_folder.'/'.$folder.'/'.basename($f), $template.$content);
    }

  }

} else {
  echo '==> Error on unpacking.';
}

?>