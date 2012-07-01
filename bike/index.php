<?php
define('LoadingBike', true);

include dirname(dirname(dirname(dirname(__DIR__)))).'/wp-load.php';

function bike4wp_load_bike()
{
    require_once(dirname(__FILE__).'/breeze/Breeze.php');
}
