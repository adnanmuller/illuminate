<?php

/**
 * Copyright (c) 2014 Keith Casey
 *
 * This code is designed to accompany the lynda.com video course "Design Patterns in PHP"
 *   by Keith Casey. If you've received this code without seeing the videos, go watch the
 *   videos. It will make way more sense and be more useful in general.
 */
/**
include_once 'user.php';

$user = new User();
$user->load(1);

echo '<pre>';
print_r($user);

**/


require 'vendor/autoload.php';
include_once 'user.php';

$user = User::find(2);
$user2=User::find(3);

echo '<pre>';
print_r($user);
echo "<br>user is: ".$user2->user_first;
