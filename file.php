<?php

// creat file in php code
// mkdir("test");
// sleep(5);

// rmdir("test");

// has content
$content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, quibusdam.";
mkdir("test");
file_put_contents("test/f.php", $content);
sleep(5);
// unlink("test/f.php");
// rmdir("test");

//emty file found
deleteDir(getcwd() . DIRECTORY_SEPARATOR . "test");
function deleteDir($path) {
	$filesInPath = scandir($path);
	if (count(scandir($path)) > 2) {
		foreach ($filesInPath as $file) {
			# code...
			if ('.' != $file && '..' != $file) {
				$filePath = $path . DIRECTORY_SEPARATOR . $file;
				unlink($filePath);

				// rmdir($path);
			}
		}
	} else {
		rmdir($path);
	}
}
