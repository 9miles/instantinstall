<?php
/* InstantIntall
 * An easier way to install web applications.
 * Version 0.1.0
 */  

/*
	Initiate this file in order to compile the Yaml application file.
*/

# Load Spyc and load up apps.yaml.
function compile_apps_yaml(){
	include('spyc.lib.php');
	$data = Spyc::YAMLLoad('apps.yaml');
	return serialize($data);
}

# Open installer.php.
$f = fopen('installer.php', 'w');

# Get the contents of funcs.php.
$funcs = file_get_contents('funcs.php');

# Get the serialized version of apps.php.
#file_get_contents('apps.php.serialized');

# Make some HTML.
$html = file_get_contents('installer_html.php');

# Serialize that Yaml!
$serialized = base64_encode(compile_apps_yaml());

# Make an application!
fwrite($f, "ob_start(); ?>\n\n");
fwrite($f, "<?php \$serialized = \"$serialized\"; \$APPDATA = unserialize(base64_decode(\$serialized)); ?>");
fwrite($f, $funcs);
fwrite($f, $html);
fclose($f);

?>
