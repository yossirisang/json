<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/yesterday/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $mday = $parsed_json->{'history'}->{'date'}->{'mday'};
  $mon = $parsed_json->{'history'}->{'date'}->{'mon'};
  $year = $parsed_json->{'history'}->{'date'}->{'year'};
  echo "Tanggal di San Francisco sekarang adalah ${mday} - ${mon} - ${year}";
?>
<p>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/rawtide/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $tidesite = $parsed_json->{'rawtide'}->tideInfo[0]->{'tideSite'};
  $lat = $parsed_json->{'rawtide'}->tideInfo[0]->{'lat'};
  $tzname = $parsed_json->{'rawtide'}->tideInfo[0]->{'tzname'};
  echo "Di San Francisco memiliki tide info sebagai berikut :<br>
  Tide Site : ${tidesite}<br>
  Lat : ${lat}<br>
  Time Zone Name : ${tzname}";
?>
<p>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/almanac/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $ac = $parsed_json->{'almanac'}->{'airport_code'};
  $f = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'F'};
  $c = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'C'};
    echo "Di San Francisco memiliki almanac sebagai berikut :<br>
  Airport Code : ${ac}<br>
  Suhu Fahrenheit : ${f}<sup>o</sup><br>
  Suhu Celcius : ${c}<sup>o</sup>";
?>