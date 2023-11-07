<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays  & Types of Arrays</title>
</head>
<body>
   <?php 
   //Indexed Arrays
//    $students=array("A","B","C");

//    echo "<pre>";
//    print_r($students);
//    echo "</pre>";


//    foreach ($students as $key => $value) {
//     echo "$key: $value <br>";
//    }
   

//Associative Arrays
// $student=[
// "name"=>"Haris",
// "age" =>24,
// "city"=>"Karachi"
// ];

// echo $student['name'];
// echo "<pre>";
//    print_r($student);
//    echo "</pre>";
//    foreach ($student as $key => $value) {
//         echo "$key: $value <br>";
//        }

//Multidimensional Indexed Arrays

$result=[

   ["Haris",  89],
  ["Owais",99],
    ["Ebad",75],
    ["Afzal",45]

];
// echo $result[3][1];
// echo "<pre>";
//    print_r($result);
//    echo "</pre>";
echo "<table border=1 cellpadding='7px'>
<h1>Student Result</h1>
<tr>
    <th>Name</th>
    <th>Percentage</th>
</tr>

";
   foreach ($result as $key1 => $value1) {
    echo "<tr>";
    foreach ($value1 as $key2 => $value2) {
      echo "<td>$value2</td>";
    }
    echo "</tr>";
   }
   echo "</table>";

//Multidimensional Associative Arrays

$marks=[

"Haris"=>["English"=>78,"Maths"=>100,"Physics"=>45],
"Owais"=>["English"=>65,"Maths"=>78,"Physics"=>55],
"Ebad"=>["English"=>88,"Maths"=>57,"Physics"=>66],
"Afzal"=>["English"=>89,"Maths"=>59,"Physics"=>66],
"Usama"=>["English"=>24,"Maths"=>77,"Physics"=>46]

];


// name  | Eng |Math  |Physics



// echo "<pre>";
//    print_r($marks);
//    echo "</pre>";

   echo $marks['Ebad']['Maths'];


   ?> 
</body>
</html>
