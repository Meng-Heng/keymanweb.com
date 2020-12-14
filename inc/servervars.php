<?php /*
  Name:             servervars
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:
  Description:
  Create Date:      17 Oct 2009

  Modified Date:    17 Oct 2009
  Authors:          mcdurdin
  Related Files:
  Dependencies:

  Bugs:
  Todo:
  Notes:
  History:          17 Oct 2009 - mcdurdin - Alter help base dir
*/
  require_once __DIR__ . '/../vendor/autoload.php';
  require_once __DIR__ . '/../_common/KeymanSentry.php';

  const SENTRY_DSN = 'https://11f513ea178d438e8f12836de7baa87d@sentry.keyman.com/10';
  \Keyman\Site\Common\KeymanSentry::init(SENTRY_DSN);

  if(file_exists(__DIR__ . '/../cdn/deploy/cdn.php')) {
    require_once __DIR__ . '/../cdn/deploy/cdn.php';
  }

  $site_url = 'keymanweb.com';

  // We allow the site to strip off everything post its basic siteurl

  function GetHostSuffix() {
    global $site_url;
    $name = $_SERVER['SERVER_NAME'];
    if(stripos($name, $site_url.'.') == 0) {
      return substr($name, strlen($site_url), 1024);
    }
    return '';
  }

  $site_suffix = GetHostSuffix();

  // $site_protocol is used only by util.php at this time.
  $site_protocol = (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';

  if($site_suffix == '') {
    $TestServer = false;
    $url_keymanweb_res = "https://r.keymanweb.com";
    $staticDomainRoot="https://s.keyman.com/";
  } else {
    $TestServer = true;
    $url_keymanweb_res = "https://r.keymanweb.com"; /// local dev domain is usually not available
    $staticDomainRoot="https://s.keyman.com/";
  }

  $site_keymanwebhelp = "help.keyman.com{$site_suffix}";
  $site_keymanwebdemo = "keymanweb.com{$site_suffix}";
  $site_keyman        = "keyman.com";

  $staticDomain="s.keyman.com/kmw/engine";

  function cdn($file) {
    global $cdn, $staticDomain, $TestServer;
    $use_cdn = !$TestServer || (isset($_REQUEST['cdn']) && $_REQUEST['cdn'] == 'force');
    if($use_cdn && $cdn && array_key_exists('/'.$file, $cdn)) {
      return "/cdn/deploy{$cdn['/'.$file]}";
    }
    return "/cdn/dev/{$file}";
  }

?>
