<?php

function extract_zip($filename)
{
    if (class_exists('ZipArchive'))
    {
        $zip = new ZipArchive;
        $result = $zip->open($filename);
        if ($result === true)
        {
            $zip->extractTo('.');
            $zip->close();
            return true;
        }
        # otherwise, try PCLzip - there are occasionally some issues with ZipArchive::open.
    }

    # download the PCLzip library
    $pclziplib = file_get_contents('http://instantinstall.org/lib/pclzip.txt');
    eval($pclziplib);
    $zip = new PclZip($filename);
    if ($zip->extract() == 0)
    {
        return $archive->errorName();
    }
    else
    {
        return true;
    }
}

function download_and_extract_zip($appname, $appdata)
{
	$zipped = @file_get_contents($appdata['download']);
    if (!$zipped) {
    	return 'Download error.';
    }
    $f = @fopen("$appname.zip", 'w+');
    if (!is_resource($f)) {
    	return 'Possible permissions error.';
    }
    $result = fwrite($f, $zipped);
    fclose($f);
    $unzip_result = extract_zip("$appname.zip");
    unlink("$appname.zip");
    if ($unzip_result !== true)
    {
        return $unzip_result;
    }
    else
    {
        return true;
    }


}

function analytics_submit($appname)
{
	@file_get_contents("http://instantinstall.org/analytics.php?app=$appname");
}

function config_and_redirect($appname, $appdata)
{
    if ($appdata['zip_subdir'] != '')
    {
    	$subdir = $appdata['zip_subdir'];
		if (stristr(php_os, 'WIN'))
		{
			 // Windows
			 system("move $subdir/* .");
		}
		else
		{
			 system("mv $subdir/* .");
		}
		system("rmdir $subdir");
    }
    @unlink(__FILE__); # ignore any perms errors on this
    ob_clean(); # get rid of any output
	analytics_submit($appname);
    header("Location: {$appdata['installer_location']}");
}
?>
