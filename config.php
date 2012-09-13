<?php
// Infinite Social Wall
// 7.29.2012
//
// Philip Bjorge
// https://github.com/philipbjorge/Infinite-Social-Wall
// Dual MIT/BSD License
// http://modernizr.com/license/
//
//

//
// MODIFIABLE SETTINGS
//

// MySQL Settings
$mysql_server = "localhost";
$mysql_user = "root";
$mysql_pass = "root";
$mysql_db = "infinite_social_wall";
$mysql_table = "archived_social_items";

// "Pagination" settings - how many social items to output on each load
$results_per_page = 15;

// RSS Feeds ("APIs")
// the url key points to your RSS feed.
// uppercase keywords like {USER} are replaced by the lowercase
// key in the corresponding array.
// e.g. "http://gplus-to-rss.appspot.com/rss/{USER}" becomes "http://gplus-to-rss.appspot.com/rss/111577025166114857734"
$apis = array(
		"torfabrik" => array(
		"user" => "torfabrik",
		"url" => "http://{USER}.de/profis/rss.xml"
	),
		"11freunde" => array(
		"user" => "11freunde",
		"url" => "http://www.{USER}.de/taxonomy/term/41/feed"
	),
    "kicker" => array(
    "user" => "kicker",
    "url" => "http://rss.{USER}.de/team/borussiamoenchengladbach"
  ),
   "borussia" => array(
    "user" => "borussia",
    "url" => "http://www.{USER}.de/de/startseite.html?type=2"
  ),
   "express" => array(
    "user" => "express",
    "url" => "http://www.{USER}.de/sport/fussball/gladbach/-/3286/3286/-/view/asFeed/-/index.xml"
  ),
    "seitenwahl" => array(
    "user" => "seitenwahl",
    "url" => "http://www.{USER}.de/component/option,com_rss/feed,RSS1.0/no_html,1/"
  ),
    "wz-newsline" => array(
    "user" => "wz-newsline",
    "url" => "http://www.wz-newsline.de/cmlink/wz-rss-borussia-moenchengladbach-1.484912"
  ),
    "rp-online" => array(
    "user" => "rp-online",
    "url" => "http://feeds.rp-online.de/rp-online/rss/borussia"
  ),
    "aachener-zeitung" => array(
    "user" => "az-web",
    "url" => "http://www.{USER}.de/az/rss/Borussia_Moenchengladbach.xml"
  ),


		

);

//
// END MODIFIABLE SETTINGS
//

// MySQL Connection
$mysqli = new mysqli($mysql_server, $mysql_user, $mysql_pass, $mysql_db);
?>