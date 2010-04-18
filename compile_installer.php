<?php
/* Instant Intall
 * An easier way to install web applications.
 * Version 0.1.0
 */

/*
	Initiate this file in order to compile the Yaml application file, as well as
	combining funcs.php and installer_html.php
*/


function compile_apps_yaml(){
	# Load Spyc and serialize apps.yaml.
	include('spyc.lib.php');
	$data = Spyc::YAMLLoad('apps.yaml');
	return serialize($data);
}

# Get ready to write to installer.php.
$f = fopen('installer.php', 'w');

$funcs = file_get_contents('funcs.php');

$html = file_get_contents('installer_html.php');

$serialized = base64_encode(compile_apps_yaml());

# In installer.php, the initial php tag is intentionally left out to allow
# eval() to work properly.
fwrite($f, "ob_start(); ?>\n\n"); # Avoid any newlines accidentally being sent.
fwrite($f, "<?php \$serialized = \"$serialized\"; \$APPDATA = unserialize(base64_decode(\$serialized)); ?>");
fwrite($f, $funcs);
fwrite($f, $html);
fclose($f);

?>
