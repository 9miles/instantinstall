<?php
/* InstantIntall
 * An easier way to install web applications.
 * Version 0.1.0
 */

/*
	All the helper functions.
*/

# Extract the zipped archive.
function extract_zip($filename){
	
	# Use ZipArchive if available.
	if(class_exists('ZipArchive')){
		$zip = new ZipArchive;
		$result = $zip->open($filename);
		
		# Extract with ZipArchive
		if($result === true){
			$zip->extractTo('.');
			$zip->close();
			return true;
		}
	
	}
	
	# Otherwise, try PCLzip - there are occasionally some issues with ZipArchive::open.
	$pclziplib = file_get_contents('http://instantinstall.org/lib/pclzip.txt');
	eval($pclziplib);
	$zip = new PclZip($filename);
	
	if($zip->extract() == 0){
		return $archive->errorName();
	}
	
	else{
		return true;
	}

}

# Download the correct application and extract it.
function download_and_extract_zip($appname, $appdata){

	# Get thy contents.
	$zipped = @file_get_contents($appdata['download']);

	# Throw an error if something happens.
	if(!$zipped){
		return 'Download error.';
	}

	# Get the zipped file.
	$f = @fopen("$appname.zip", 'w+');

	# Throw a permissions error.
	if(!is_resource($f)) {
		return 'Possible permissions error.';
	}

	# Unzip.
	$result = fwrite($f, $zipped);
	fclose($f);
	$unzip_result = extract_zip("$appname.zip");
	unlink("$appname.zip");
	
	if($unzip_result !== true){
		return $unzip_result;
	}
	
	else{
		return true;
	}

}

# Send the application information to 9miles.
function analytics_submit($appname){
	@file_get_contents("http://instantinstall.org/analytics.php?app=$appname");
}

# Configure the application and redirect to the installation file.
function config_and_redirect($appname, $appdata){
	
	if ($appdata['zip_subdir'] != ''){	
		$subdir = $appdata['zip_subdir'];
		
		if (stristr(php_os, 'WIN')){
			system("move $subdir/* .");
		}
		
		else{
			system("mv $subdir/* .");
		}
		
		system("rmdir $subdir");
	}

}

@unlink(__FILE__); # Ignore any permission errors.
ob_clean(); # Get rid of any output.
analytics_submit($appname); # Submit analytics to 9miles.
header("Location: {$appdata['installer_location']}"); # Redirect to the application install.

?>
