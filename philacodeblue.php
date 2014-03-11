<?php
/* Plugin Name: Phila Code Blue
Plugin URI: localhost/wordpress
Description: Cold Weather Warning
Version: 1.0
Author: Andrew Kennel
Author URI: localhost/wordpress
*/
add_shortcode('PhilaCodeBlue', 'philaCodeBlue_handler');

function philaCodeBlue_handler()
{
  $widget_output = buildMessage();
}

function philaCodeBlue($args, $instance) { // widget sidebar output
  extract($args, EXTR_SKIP);
  echo $before_widget; // pre-widget code from theme
  print buildMessage();
  echo $after_widget; // post-widget code from theme
}

function buildMessage() {
$message = print <<<EOM

  <div id="codeBlueContainer" style="height: 58px; background-color: #FAFAFA; border-radius: 10px; padding: 10px">
  <div id="codeBlueImage" style="float: left; margin: 2px;"><img alt="" src='wp-content/plugins/philacodeblue/codeblueicon.png' /></div>
    <div id="codeBlueLeftText" style="float: left; width: 350px"><span style="color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; line-height: 16px;">Code Blue In Effect</span><br style="color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; font-weight: bold; line-height: 16px;" /> <span style="color: #333333; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13x; font-weight: bold; line-height: 16px;">as of 2/3/2014 @ 6pm until further Notice</span></div>
    <div id="codeBlueRightText" style="float: right; width: 450px; border-left-style: solid 2px; border-left-color: black">The City of Philadelphia has declared a Code Blue Alert advising of severe cold weather.
    For all other winter related inquiries, call 311.<a href="http://www.phila.gov/InformationCenters/Pages/winterWeatherInfo.aspx">
    More Winter Weather Information »</a></div>
  </div>

EOM;

return $message;
}
?>