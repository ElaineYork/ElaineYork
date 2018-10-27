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

<<<<<<< Updated upstream
Route::get('/3-1022', function () {
    $var = [1,2,3];

    if($var[1]) //false 0 '0'
    {
        echo 'ifå…§';
    }

    echo 'ifå¤–';

    while($var[1])
    {
        echo 'æœ‰è·‘åˆ°while';
        break;
    }

    do
    {
        echo 'æœ‰è·‘åˆ°do while';
        break;
    }while($var[1]);

    switch($var[2])
    {
        case 1:
            echo 'æˆ‘æ˜¯1';
            break;
        case 2:
            echo 'æˆ‘æ˜¯2';
            break;
        default:
            echo 'æˆ‘ä»€éº¼éƒ½ä¸æ˜¯';
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
        echo "æˆ‘çš„${key}æ˜¯${value}";
        echo '<br>';
    }
=======
Route::get('/elaine', function () {

	$string = 'elaine';

	$array1 = array('york', 123);

	$array2 = ['elaine',456];

	$int1 = 4;

        $int2 = 4578;

	echo "${string} is a girl";
	echo '${string} is a girl';

        #echo $int1 + $int2;
        #print "<br>";
        #print $int1 / $int2;

	for($int1; $int1<10; $int1++)
	{
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
	var_dump($x !== $y);#¤£µ¥©ó(±j¦æ§O)¤º®eª«¸ò«¬ºA³£¤ñ¹ï
	echo '<br>';
	var_dump($x <> $y);#¤£µ¥©ó(®z«¬§O)¥u¤ñ¹ï¤º®eª«

	$z = 0;
	var_dump((bool)$z);
	$z = '';
	var_dump($z);
>>>>>>> Stashed changes
});