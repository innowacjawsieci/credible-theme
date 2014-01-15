<?php

//Initialize the update checker.
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'credible-theme',                                            //Theme folder name, AKA "slug". 
	'http://salesapp.pl/files/credible-theme-updates/info.json' //URL of the metadata file.
);

