<?php
# This file was automatically generated by the MediaWiki 1.26.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Greek Wiki";
$wgMetaNamespace = "Greek_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/mediawiki";

## The protocol and server name to use in fully-qualified URLs
#$wgServer = "0.0.0.0:8080";


## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@54.148.68.158";
$wgPasswordSender = "apache@54.148.68.158";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = "wikidb";
$wgDBuser = "root";
$wgDBpassword = "root";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

$wgObjectCaches['redis'] = array(
    'class'                => 'RedisBagOStuff',
    'servers'              => array('127.0.0.1:6379'),
    'connectTimeout'    => 1,
    'persistent'        => true,
    // 'password'          => 'secret',
    // 'automaticFailOver' => true,
);


## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgSessionCacheType = CACHE_NONE;
$wgMessageCacheType = CACHE_NONE;
#$wgParserCacheType = 'redis';
#$wgCacheDirectory = "./cache/wiki";
$wgUseLocalMessageCache	= true;
#$wgMemCachedServers = array();
$wgEnableSidebarCache = true;
$wgDisableCounters = true;
$wgMiserMode = true;
$wgAntiLockFlags = ALF_NO_LINK_LOCK | ALF_NO_BLOCK_LOCK;
$wgJobRunRate = 0.001;
$wgEnableTooltipsAndAccesskeys = false;
$wgSQLMode = null;
$wgUseGzip = false;
$wgHitcounterUpdateFreq = 500;
$wgTmpDirectory = "./tmp";


#$wgContentHandlerTextFallback = 'serialize'
$wgJobTypeConf['default'] = array(
 	'class'          => '127.0.0.1:6379',
 	'redisServer'    => '/tmp/redis.sock',
 	'redisConfig'    => [
                'connectTimeout' => 1
        ],
	'daemonized' => true
 );
#$wgUseFileCache = true;
#$wgFileCacheDirectory = "/var/www/html/mediawiki/filecache";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons =false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
$wgCacheDirectory = "./cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "el";

$wgSecretKey = "f96df62102beddb00d845dc2aa215d094202f8443a3f5de56c34cf0820d87eef";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "ba25a04382d8d182";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";


##Logging

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'CologneBlue' );
wfLoadSkin( 'Modern' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Vector' );


# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Gadgets' );
wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;
#wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'Poem' );
#wfLoadExtension( 'Renameuser' );
#wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
#wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'WikiEditor' );


# End of automatically generated settings.
# Add more configuration options below.
error_reporting( -1 );
ini_set( 'display_errors', 1 );
$wgShowSQLErrors = true;
$wgDebugDumpSql  = true;
$wgDebugLogFile = "/var/log/mediawiki/debug-{$wgDBname}.log";



