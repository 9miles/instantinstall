ob_start(); ?>

<?php $serialized = "YTo5OntzOjk6IndvcmRwcmVzcyI7YTo1OntzOjQ6Im5hbWUiO3M6OToiV29yZFByZXNzIjtzOjExOiJkZXNjcmlwdGlvbiI7czo5NjoiQSBzdGF0ZS1vZi10aGUtYXJ0IHB1Ymxpc2hpbmcgcGxhdGZvcm0gd2l0aCBhIGZvY3VzIG9uIGFlc3RoZXRpY3MsIHdlYiBzdGFuZGFyZHMsIGFuZCB1c2FiaWxpdHkuIjtzOjEwOiJ6aXBfc3ViZGlyIjtzOjk6IndvcmRwcmVzcyI7czoxODoiaW5zdGFsbGVyX2xvY2F0aW9uIjtzOjI1OiJ3cC1hZG1pbi9zZXR1cC1jb25maWcucGhwIjtzOjg6ImRvd25sb2FkIjtzOjMxOiJodHRwOi8vd29yZHByZXNzLm9yZy9sYXRlc3QuemlwIjt9czo1OiJjaHlycCI7YTo1OntzOjQ6Im5hbWUiO3M6NToiQ2h5cnAiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjE5NjoiQSBibG9nZ2luZyBlbmdpbmUgZGVzaWduZWQgdG8gYmUgdmVyeSBsaWdodHdlaWdodCB3aGlsZSByZXRhaW5pbmcgZnVuY3Rpb25hbGl0eS4gSXQgaXMgcG93ZXJlZCBieSBQSFAgYW5kIGhhcyB2ZXJ5IHBvd2VyZnVsIHRoZW1lIGFuZCBleHRlbnNpb24gZW5naW5lcywgc28geW91IGNhbiBwZXJzb25hbGl6ZSBpdCBob3dldmVyIHlvdSB3YW50LiI7czoxMDoiemlwX3N1YmRpciI7czoxMDoiY2h5cnBfdjIuMCI7czoxODoiaW5zdGFsbGVyX2xvY2F0aW9uIjtzOjExOiJpbnN0YWxsLnBocCI7czo4OiJkb3dubG9hZCI7czo0MDoiaHR0cDovL2NoeXJwLm5ldC9yZWxlYXNlcy9jaHlycF92Mi4wLnppcCI7fXM6NjoiZHJ1cGFsIjthOjU6e3M6NDoibmFtZSI7czo2OiJEcnVwYWwiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjE0NzoiRXF1aXBwZWQgd2l0aCBhIHBvd2VyZnVsIGJsZW5kIG9mIGZlYXR1cmVzLCBEcnVwYWwgc3VwcG9ydHMgYSB2YXJpZXR5IG9mIHdlYnNpdGVzIHJhbmdpbmcgZnJvbSBwZXJzb25hbCB3ZWJsb2dzIHRvIGxhcmdlIGNvbW11bml0eS1kcml2ZW4gd2Vic2l0ZXMuIjtzOjEwOiJ6aXBfc3ViZGlyIjtzOjY6ImRydXBhbCI7czoxODoiaW5zdGFsbGVyX2xvY2F0aW9uIjtzOjExOiJpbnN0YWxsLnBocCI7czo4OiJkb3dubG9hZCI7czo0MToiaHR0cDovL2RsLmRyb3Bib3guY29tL3UvMjQ2MDk3L2RydXBhbC56aXAiO31zOjc6ImJicHJlc3MiO2E6NTp7czo0OiJuYW1lIjtzOjc6ImJiUHJlc3MiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjE3NzoiRm9ydW0gc29mdHdhcmUgd2l0aCBhIHR3aXN0IGZyb20gdGhlIGNyZWF0b3JzIG9mIFdvcmRQcmVzcy4gYmJQcmVzcyBpcyBmb2N1c2VkIG9uIHdlYiBzdGFuZGFyZHMsIGVhc2Ugb2YgdXNlLCBlYXNlIG9mIGludGVncmF0aW9uLCBhbmQgc3BlZWQsIGFuZCBoYXMgYW4gZXh0ZW5zaXZlIHBsdWdpbiBzeXN0ZW0uIjtzOjEwOiJ6aXBfc3ViZGlyIjtzOjc6ImJicHJlc3MiO3M6MTg6Imluc3RhbGxlcl9sb2NhdGlvbiI7czoyMDoiYmItYWRtaW4vaW5zdGFsbC5waHAiO3M6ODoiZG93bmxvYWQiO3M6Mjk6Imh0dHA6Ly9iYnByZXNzLm9yZy9sYXRlc3QuemlwIjt9czo3OiJ2YW5pbGxhIjthOjU6e3M6NDoibmFtZSI7czo3OiJWYW5pbGxhIjtzOjExOiJkZXNjcmlwdGlvbiI7czoxMTQ6IlZhbmlsbGEgaXMgYW4gb3Blbi1zb3VyY2UsIHN0YW5kYXJkcy1jb21wbGlhbnQsIG11bHRpLWxpbmd1YWwsIHRoZW1lLWFibGUsIHBsdWdnYWJsZSBkaXNjdXNzaW9uIGZvcnVtIGZvciB0aGUgd2ViLiI7czoxMDoiemlwX3N1YmRpciI7czoxNDoidmFuaWxsYS0xLjEuMTAiO3M6MTg6Imluc3RhbGxlcl9sb2NhdGlvbiI7czoxOToic2V0dXAvaW5zdGFsbGVyLnBocCI7czo4OiJkb3dubG9hZCI7czo0OToiaHR0cDovL3ZhbmlsbGFmb3J1bXMub3JnL3VwbG9hZHMvNElBVUpQVjVQVlJXLnppcCI7fXM6NToicGhwYmIiO2E6NTp7czo0OiJuYW1lIjtzOjU6InBocEJCIjtzOjExOiJkZXNjcmlwdGlvbiI7czoyMzM6IlNpbmNlIGl0cyBjcmVhdGlvbiBpbiAyMDAwLCBwaHBCQiBoYXMgYmVjb21lIHRoZSBtb3N0IHdpZGVseSB1c2VkIE9wZW4gU291cmNlIGZvcnVtIHNvbHV0aW9uLiBwaHBCQiBoYXMgYW4gZWFzeSB0byB1c2UgYWRtaW5pc3RyYXRpb24gcGFuZWwgYW5kIGEgdXNlciBmcmllbmRseSBpbnN0YWxsYXRpb24gcHJvY2Vzcywgd2hpY2ggYWxsb3dzIHlvdSB0byBoYXZlIGEgZm9ydW0gc2V0IHVwIGluIG1pbnV0ZXMuIjtzOjEwOiJ6aXBfc3ViZGlyIjtzOjY6InBocEJCMyI7czoxODoiaW5zdGFsbGVyX2xvY2F0aW9uIjtzOjE3OiJpbnN0YWxsL2luZGV4LnBocCI7czo4OiJkb3dubG9hZCI7czo3MzoiaHR0cDovL2QxMHhnNDVvNnA2ZGJsLmNsb3VkZnJvbnQubmV0L3Byb2plY3RzL3AvcGhwYmIvcGhwQkItMy4wLjctUEwxLnppcCI7fXM6Njoiam9vbWxhIjthOjU6e3M6NDoibmFtZSI7czo2OiJKb29tbGEiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjEzMjoiSm9vbWxhIGlzIGFuIGF3YXJkLXdpbm5pbmcgY29udGVudCBtYW5hZ2VtZW50IHN5c3RlbSAoQ01TKSwgd2hpY2ggZW5hYmxlcyB5b3UgdG8gYnVpbGQgV2ViIAkJc2l0ZXMgYW5kIHBvd2VyZnVsIG9ubGluZSBhcHBsaWNhdGlvbnMuIjtzOjEwOiJ6aXBfc3ViZGlyIjtzOjA6IiI7czoxODoiaW5zdGFsbGVyX2xvY2F0aW9uIjtzOjIyOiJpbnN0YWxsYXRpb24vaW5kZXgucGhwIjtzOjg6ImRvd25sb2FkIjtzOjk0OiJodHRwOi8vam9vbWxhY29kZS5vcmcvZ2YvZG93bmxvYWQvZnJzcmVsZWFzZS8xMTM5Ni80NTYxMC9Kb29tbGFfMS41LjE1LVN0YWJsZS1GdWxsX1BhY2thZ2UuemlwIjt9czoxMDoicHJlc3Rhc2hvcCI7YTo1OntzOjQ6Im5hbWUiO3M6MTA6IlByZXN0YVNob3AiO3M6MTE6ImRlc2NyaXB0aW9uIjtzOjE4OToiUHJlc3RhU2hvcCBpcyBhIGZyZWUsIG9wZW4gc291cmNlIGUtY29tbWVyY2Ugc29sdXRpb24uIFByZXN0YVNob3AgZ3VpZGVzIHVzZXJzIHRocm91Z2ggeW91ciBwcm9kdWN0IGNhdGFsb2cgaW50ZWxsaWdlbnRseSBhbmQgZWZmb3J0bGVzc2x5LCB0dXJuaW5nIGludHJpZ3VlZCB2aXNpdG9ycyBpbnRvIHBheWluZyBjdXN0b21lcnMuIjtzOjEwOiJ6aXBfc3ViZGlyIjtzOjEwOiJwcmVzdGFzaG9wIjtzOjE4OiJpbnN0YWxsZXJfbG9jYXRpb24iO3M6ODoiaW5zdGFsbC8iO3M6ODoiZG93bmxvYWQiO3M6NTc6Imh0dHA6Ly93d3cucHJlc3Rhc2hvcC5jb20vZG93bmxvYWQvcHJlc3Rhc2hvcF8xLjIuNS4wLnppcCI7fXM6ODoic3ltcGhvbnkiO2E6NTp7czo0OiJuYW1lIjtzOjg6IlN5bXBob255IjtzOjExOiJkZXNjcmlwdGlvbiI7czozMzc6IlN5bXBob255IGlzIGEgd2ViLWJhc2VkIGNvbnRlbnQgbWFuYWdlbWVudCBzeXN0ZW0gKENNUykgdGhhdCBlbmFibGVzIHVzZXJzIHRvIGNyZWF0ZSBhbmQgbWFuYWdlIHdlYnNpdGVzIGFuZCB3ZWIgYXBwbGljYXRpb25zIG9mIGFsbCBzaGFwZXMgYW5kIHNpemVzLWZyb20gdGhlIHNpbXBsZXN0IG9mIGJsb2dzIHRvIGJ1c3RsaW5nIG5ld3Mgc2l0ZXMgYW5kIGZlYXR1cmUtcGFja2VkIHNvY2lhbCBuZXR3b3Jrcy4gV2l0aCBTeW1waG9ueSwgeW91IGNhbiBidWlsZCBqdXN0IGFib3V0IGFueXRoaW5nLCBhbmQgdGhhdCdzIHdoYXQgc2V0cyBpdCBhcGFydCBmcm9tIG1vc3Qgb3RoZXIgQ01Tcy4iO3M6MTA6InppcF9zdWJkaXIiO3M6MTQ6InN5bXBob255LTIuMC43IjtzOjE4OiJpbnN0YWxsZXJfbG9jYXRpb24iO3M6MTE6Imluc3RhbGwucGhwIjtzOjg6ImRvd25sb2FkIjtzOjk3OiJodHRwOi8vZG93bmxvYWRzLnN5bXBob255LWNtcy5jb20vZ2xvYmFsLWFzc2V0LWRvd25sb2FkL3N5bXBob255LXBhY2thZ2UvMzYwMzAvc3ltcGhvbnktMi4wLjcuemlwIjt9fQ=="; $APPDATA = unserialize(base64_decode($serialized)); ?><?php
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

	$result = download_and_extract_zip($app, $APPDATA[$app]);

	# Let the user know if there's been an error.
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
