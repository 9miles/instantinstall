<?php
/* Instant Intall
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

	# Get the contents.
	$zipped = @file_get_contents($appdata['download']);

	# If there's a download problem, tell the user.
	if(!$zipped){
		return 'Download error.';
	}

	# Open the zip file.
	$f = @fopen("$appname.zip", 'w+');

	if(!is_resource($f)) {
		# If it didn't open properly, it's probably a permissions error. Tell the user.
		return 'Possible permissions error.';
	}

	# Unzip.
	$result = fwrite($f, $zipped);
	fclose($f);
	$unzip_result = extract_zip("$appname.zip");
	unlink("$appname.zip");

	if($unzip_result !== true){
		# If there's an error, let the user know.
		return $unzip_result;
	}

	else{
		return true;
	}

}


function analytics_submit($appname){
	# Sends the application information to 9miles. Ignore any errors.
	@file_get_contents("http://instantinstall.org/analytics.php?app=$appname");
}


function config_and_redirect($appname, $appdata){
	# Configures the application and redirects to the installation file.
	# FIXME: Some users have experienced bugs with the app not being moved correctly.
	#        Add a pure PHP move function to resolve this.

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

@unlink(__FILE__); # Remove the installer file, ignoring any permission errors.
ob_clean(); # Get rid of any output.
analytics_submit($appname); # Submit analytics to 9miles.
header("Location: {$appdata['installer_location']}"); # Redirect to the application installer.

?>
