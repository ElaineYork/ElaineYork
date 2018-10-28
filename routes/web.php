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

Route::get('/elaine', function () {

    $string = 'elaine';

    $array1 = array('york', 123);

    $array2 = ['elaine', 456];

    $int1 = 4;

    $int2 = 4578;

    echo "${string} is a girl";
    echo '${string} is a girl';

    #echo $int1 + $int2;
    #print "<br>";
    #print $int1 / $int2;

    for ($int1; $int1 < 10; $int1++) {
        echo $int1;
        echo '<br>';
    }

    #$a = 1 > 2;
    #var_dump($a);

    $x = 21;
    $y = "21";
    var_dump($x);
    echo '<br>';
    var_dump($y);
    echo '<br>';
    var_dump($x !== $y);#������(�j��O)���e���򫬺A�����
    echo '<br>';
    var_dump($x <> $y);#������(�z���O)�u��鷺�e��

    $z = 0;
    var_dump((bool)$z);
    $z = '';
    var_dump($z);
});

Route::get('/1028', function () {

    $int1 = 2;

    $int2 = 1;

    for ($int1; $int1 < 10; $int1++) {
        for ($int2; $int2 < 10; $int2++) {
            echo $int1 . '*' . $int2  . '=' . $int1 * $int2;
            echo '<br>';
        }

    }
});