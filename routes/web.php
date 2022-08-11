<?php

/*
khai bao nhung route dc use
*/
// Admin
$_Route['admin/users/login'] = 'Admin\Users\LoginController@index';  

$_Route['admin/users/login/store'] = 'Admin\Users\LoginController@store'; 

$_Route['admin/users/forgotpass'] = 'Admin\users\ForgotpassController@index';

$_Route['admin/users/selectnewpass'] = 'Admin\users\Selectnewpass@index';

$_Route['admin/users/personalpage'] = 'Admin\users\Personal@index';




