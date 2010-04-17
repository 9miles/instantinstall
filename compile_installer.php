<?php

    function compile_apps_yaml()
    {
        include('spyc.lib.php');
        $data = Spyc::YAMLLoad('apps.yaml');
        return serialize($data);
    }
    $f = fopen('installer.php', 'w');
    $funcs = file_get_contents('funcs.php');
    file_get_contents('apps.php.serialized');
    $html = file_get_contents('installer_html.php');
    $serialized = base64_encode(compile_apps_yaml());
    fwrite($f, "ob_start(); ?>\n\n");
    fwrite($f, "<?php \$serialized = \"$serialized\"; \$APPDATA = unserialize(base64_decode(\$serialized)); ?>");
    fwrite($f, $funcs);
    fwrite($f, $html);
    fclose($f);
?>
