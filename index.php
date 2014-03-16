<?php

//multidimensional array example
$books  = array(
    array(
        'title' => 'PHP Solutions: Dynamic Web Design Made Easy, Second Edition',
        'author' => 'Jerry Akoh',
        'ISBN' => '978-1-4302-3249-0'
    ),
    array(
        'title' => 'PHP Internals: Dynamic Web Design Made Easy, Third Edition',
        'author' => 'James Philip',
        'ISBN' => '978-1-4302-3249-0'
    )
);

//echo $books[0]['author']. '<br>';
//echo '<pre>';
//print_r($books);
//echo '</pre>';
//
//$age = 17;
//$fare = $age > 16 ? 'adult':'child';
//echo $fare;

//$book = array(
//    'title' => 'PHP Solutions: Dynamic Web Design Made Easy, Second Edition',
//    'author' => 'Jerry Akoh',
//    'ISBN' => '978-1-4302-3249-0'
//);
//
//
////using foreach to loop thru the associative array named book
//foreach($book as $key => $value){
//    echo "The value of $key is $value <br>";
//}

//texting the continue in forloop and testing if it is empty
$photos = array('');
foreach($photos as $photo){
    if(empty($photo)) continue;

    echo $photo;
}

