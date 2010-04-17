<?php $r = @file_get_contents('http://instantinstall.org/installer.php');
if(strlen($r)==0)
{

	echo 'Problem accessing http://instantinstall.org/installer.php.';
	if (!ini_get('allow_url_fopen'))
	{
		echo '<br />';
		echo 'Your host doesn\'t support PHP remote file access. Please contact them if you\'d like to run Instant Install. (Ask for allow_url_fopen to be enabled in php.ini.)';
	}
}
else
{
	eval($r);
} ?>
