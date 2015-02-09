<?php
if ( !defined( "MEDIAWIKI" ) ) {
exit;
}

$wgSitename = "Mentis";
$wgScriptPath = "";
$wgScriptExtension = ".php";

$wgServer = "http://104.236.245.143";
$wgStylePath = "$wgScriptPath/skins";
$wgLogo = "$wgScriptPath/resources/assets/wiki.png";

$wgEnableEmail = true;
$wgEnableUserEmail = true;

$wgEmergencyContact = "apache@104.236.245.143";
$wgPasswordSender = "apache@104.236.245.143";
$wgEnotifUserTalk = false;
$wgEnotifWatchlist = false;
$wgEmailAuthentication = true;
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "wiki";
$wgDBuser = "mediawiki";
$wgDBpassword = "eLDr5iPklQ";
$wgDBprefix = "";
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";
$wgDBmysql5 = true;
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = array();
$wgEnableUploads = true;
$wgUseInstantCommons = false;
$wgShellLocale = "en_US.utf8";
$wgLanguageCode = "en";
$wgSecretKey = "NmZjYmEwYjA4OWYzNmExNDRmMGEzOTk3";
$wgUpgradeKey = "NmZjYmEwYjA4OWYz";
$wgRightsPage = "";
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";
$wgDiff3 = "/usr/bin/diff3";
$wgDefaultSkin = "vector";
require_once "$IP/skins/CologneBlue/CologneBlue.php";
require_once "$IP/skins/Modern/Modern.php";
require_once "$IP/skins/MonoBook/MonoBook.php";
require_once "$IP/skins/Vector/Vector.php";
