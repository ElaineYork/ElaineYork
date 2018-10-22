<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/3-1022', function () {
    $var = [1,2,3];

    if($var[1]) //false 0 '0'
    {
        echo 'if內';
    }

    echo 'if外';

    while($var[1])
    {
        echo '有跑到while';
        break;
    }

    do
    {
        echo '有跑到do while';
        break;
    }while($var[1]);

    switch($var[2])
    {
        case 1:
            echo '我是1';
            break;
        case 2:
            echo '我是2';
            break;
        default:
            echo '我什麼都不是';
    }

    $userData = [
        'name'      => 'york',
        'birthday'  => '12/23',
        'sex'       => 'boy'
    ];

    foreach( $userData as $row)
    {
        var_dump($row);
    }
    echo '<br>';
    foreach( $userData as $key => $value)
    {
        echo "我的${key}是${value}";
        echo '<br>';
    }
});