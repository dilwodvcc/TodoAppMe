<?php

$redis = new Redis();
$redis->connect('127.0.0.1', '6379');

$redis->set('test', 3);
echo $redis->get('test');