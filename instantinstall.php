<?php
/* Instant Intall
 * An easier way to install web applications.
 * Version 0.1.0
 */  

# Get the real installer from the Instant Install site.
$r = @file_get_contents('http://instantinstall.org/installer.php');


if(strlen($r)==0){
	# If there is an error...
	echo 'Problem accessing http://instantinstall.org/installer.php.';

	# Check if remote file access is actually allowed.
	if(!ini_get('allow_url_fopen')){
		# Let the user know.
		echo '<br />';
		echo 'Your host doesn\'t support PHP remote file access. Please contact them if you\'d like to run Instant Install. (Ask for allow_url_fopen to be enabled in php.ini.)';
	}
}


else{
	eval($r);
}

?>
