<?php
$date=date_create("2023-03-28T00:49:00+00:00");
$date->setTimezone(new DateTimeZone('America/Costa_Rica'));
echo date_format($date,"Y/m/d");
echo ("-----------");
echo date_format($date,"H:i");
?>