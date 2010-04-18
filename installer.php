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
<?php
/* InstantIntall
 * An easier way to install web applications.
 * Version 0.1.0
 */  

/*
	The frontend of InstantInstall client-side.
*/

$app = $_GET['app'];

if(isset($app) and array_key_exists($app, $APPDATA)){
	
	# Download and extract.
	$result = download_and_extract_zip($app, $APPDATA[$app]);
	
	# Throw an error if something goes wrong.
	if($result !== true){
		echo "Error: $result";
	}
	
	# Otherwise, redirect.
	else{
		config_and_redirect($app, $APPDATA[$app]);
	}
	
}

else{
ob_end_clean();
# Display a nice app selection page.
?>

<!-- If you're reading this, you need to go outside. -->
<?php # And if you're reading this, you probably don't know what "outside" means and are wondering what the web address is. ?>
<!DOCTYPE html>
<html>
<head>
    <title>Instant Install</title>
    <link href="http://dl.dropbox.com/u/528245/instantinstall.css" type="text/css" rel="stylesheet" />
    <!--<link href="http://dl.dropbox.com/u/5618764/instantinstall.css" type="text/css" rel="stylesheet" />-->
</head>
<body>
    <div id="page">
        <h1>Select an Application!</h1>
            <ul class="apps">
                <?php foreach($APPDATA as $name => $data) { ?>
	            <li>
	                <a href="instantinstall.php?app=<?php echo $name; ?>" class="install">
	                    <img src="http://instantinstall.org/app_images/<?php echo $name; ?>.png" />
	                    <?php echo $data['name']; ?>
	                </a>
	                <div class="app-info" style="display:none;">
                        <p class="description">
                            <?php echo $data['description']; ?>
                        </p>
                        <a href="instantinstall.php?app=<?php echo $name; ?>" class="button">Install <?php echo $data['name']; ?></a>
                    </div>
	            </li>
                <?php } ?>
            </ul>

        </div><!-- end page -->
        <p class="footer">
            Follow us on <a href="http://twitter.com/instantinstall">Twitter</a>
            |
            A project by <a href="http://9milesmedia.com">9miles</a>
        </p>
        <!--
        <tea type="earl_grey" sugar="1" milk="false" for="Donald" />
        <coffee type="latte" sugar="1" milk="why_the_heck_are_you_asking?_it's_a_latte!!!" for="Joel" />
        <soda type="cream" sugar="..." milk="no, gross." for="Ethan" />
        <cow type="milk" sugar="false" for="Ben">
        <tea type="lady_grey" sugar="2" milk="true" for="Josh" />
        -->

    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
        $('a.install').click(function() {
            if (!$('div#slide-in').length)
            {
                $('ul.apps').fadeTo(500, 0.25);
                appname = $(this).text();
                installlink = $(this).attr('href');
                description = $(this).parent().find('.app-info .description').html()
                applink = ''
                appimg = $(this).find('img').attr('src');
                $('body').append('<div id="slide-in" style="visibility:hidden;"></div>');
                $('div#slide-in').append(' \
                    <img src="' + appimg + '" /> \
                    <div class="slide-in-content"> \
                        <h2> ' + appname + '</h2> \
                        <div class="description"> \
                        ' + description + ' \
                        </div> \
                        <a href="' + applink + '">Visit the ' + appname + ' website</a> \
                        <div class="buttons"> \
                            <a class="button cancel" href="#">Go Back</a> \
                            <a class="button go" href="' + installlink + '">Install</a> \
                        </div> \
                    </div> \
                ');
                topslide = -45 - $('div#slide-in').height()
                $('div#slide-in').css('top', topslide).css('visibility', 'visible');
                $('div#slide-in').animate({'top': -10 }, 400);
                $('div#slide-in div.buttons a.cancel').click(function() {
                    $('ul.apps').fadeTo(500, 1);
                    $('div#slide-in').animate({'top': -45 - $('div#slide-in').height()}, 500, function()
                    {
                        $('div#slide-in').remove();
                    });
                })
				$('div#slide-in a.go').click(function()
				{
					if ($(this).text() == 'Installing...')
					{
						return false;
					}
					$(this).text('Installing...')
					return true;
				})
            }
            return false;
        })
    </script>

</body>
</html>

<?php } ?>
