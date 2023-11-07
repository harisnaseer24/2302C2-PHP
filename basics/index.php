<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $a=-10;
$name ="Haris";
$Name="Haris Naseer";
$str="hello world!";

//  print($Name) ;
//  echo "<h1>Hello this is $Name </h1>";
//  echo "<h1>Hello this is ".( $a+10 )."</h1>";

// echo abs($a);
// echo round(9.6);
// echo ceil(9.1);
// echo floor(9.8);
// echo sqrt(729);


// echo (ucwords($str));
// echo (strrev($str));
// echo (str_word_count($str));
// number
$a=10;//int
$b=10.65;//float
$c=1.216545645445456454545445445454;//double

//string
$str1="hello how are you";//string

//boolean
$istrue=true;
$istrue=false;

//arrays
$students=array("Anas","afaq","ahmed",44,"Yahya");
// echo $students[3];

//functions
// function add(){
//     echo 10+20;
// }
// // calling a function
// add();

//Parameterized function

// function add($a=0,$b=0)//parameters
// {
//     echo $a+$b;//0+0
// }
// // calling a function
// add(10,20);         //arguments

//Returning function
// function add($a=0,$b=0)//parameters
// {
//    return $a+$b;
// }
// // calling a function
// $c=add(50,40);//90
// echo $c;


//conditional statements
$age=18;

// if ($age > 18) {
//    echo "you can vote";
// }
// elseif ($age = 18) {

    
//     echo '<script>alert("you can vote but get cnic first")</script>';
// }

// else {
//     echo "you can't vote";
// }


$day="saturday";
switch ($day) {
    case 'monday':
       echo "today is monday";
        break;
    case 'sunday':
       echo "today is sunday";
        break;
    case 'friday':
       echo "today is friday";
        break;
    case 'wednesday':
       echo "today is wednesday";
        break;
    
    default:
    echo "mjhe nahi pata";
        break;
}


    ?>
<!-- <h1> I want to say "
    <?php 
    // echo (ucwords($str));
     ?>." -->
</h1>



</body>
</html>