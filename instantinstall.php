<?php
/* InstantIntall
 * An easier way to install web applications.
 * Version 0.1.0
 */  

/*
	The main file. It makes sure everything works.
*/

# Get the installer from 9miles.
$r = @file_get_contents('http://instantinstall.org/installer.php');

# If there is an error...
if(strlen($r)==0){
	
	# ...throw an error for 9miles's side...
	echo 'Problem accessing http://instantinstall.org/installer.php.';
	
	# ...or throw an error for the client-side...
	if(!ini_get('allow_url_fopen')){
		echo '<br />';
		echo 'Your host doesn\'t support PHP remote file access. Please contact them if you\'d like to run Instant Install. (Ask for allow_url_fopen to be enabled in php.ini.)';
	}
}

# ...or just evaluate $r.
else{
	eval($r);
}

?>
