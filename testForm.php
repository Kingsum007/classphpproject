<?php
require ("includes/header.php");
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }
  
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
  
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
      <h1>PHP Form Handling</h1>
      <!-- <form action="save.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" required>
          <?php
          // $x = acos(-8);
          // var_dump($x);
          // echo PHP_FLOAT_EPSILON;
          // $txt = 'PHP is Fun is!';
          // echo "The length of string: ".strlen("Hello World!"); echo "<br />";
          // echo "The Word Count: ".str_word_count($txt);  echo "<br />";
          // echo "The String Position: ".strpos($txt,'is');
          // echo $txt[0];
          // $a = 5;       // Integer
          // $b = 5.34;    // Float
          // $c = " 3.4"; // Number String
          // $d = true;    // Boolean
          // $e = NULL;    // NULL
          
          // $a = (float) $a;
          // $b = (array) $b;
          // $c = (array) $c;
          // $d = (string) $d;
          // $e = (string) $e;
          
          //To verify the type of any object in PHP, use the var_dump() function:
          // var_dump($a);
          // var_dump($b);
          // var_dump($c);
          // var_dump($d);
          // var_dump($e);
          

          // class Car
          // {
          //     public $color;
          //     public $model;
          //     public function __construct($color, $model)
          //     {
          //         $this->color = $color;
          //         $this->model = $model;
          //     }
          //     public function message()
          //     {
          //         return "My car is a " . $this->color . " " . $this->model . "!";
          //     }
          // }
          
          // $myCar = new Car("red", "Volvo");
          
          // $myCar = (array) $myCar;
          // var_dump($myCar);
//                     echo pi();
//                     echo ('</br>'.'Minimum Number '.min(0, 150, 30, 20, -8, -2000).'</br>');
//                     echo ('Maximum Number '.max(0, 150, 300, 20, -8, -2000));
//                     echo(abs(-6.7)).'<br />';
//                     echo sqrt(90).'<br />';
//                     echo(round(0.60)).'<br />';
// echo(round(0.49)).'<br />';
// echo rand(10,99);
          
          // define("GREETING","WELCOME TO NIMA");
          // const GREETING = "Welcome to NIMA";
          // echo GREETING;
//                         $x = 30;
//                         $x  = (int) $x;
//                         $y = 20;
//                         echo $x+$y;
//                         echo $y-$x;
//                         echo $x*$y;
//                         echo $x/$y;
//                         echo $x%$y;
//                         echo $x**$y;
//                         echo "<br />";
//                         // $x += $y; // x = x+y
//                         echo $x <=> $y;
//                         echo "<br />";
//                         echo $x++;
//                         $x = 'Hello';
//                         echo $x;
//                         echo "<br />";
//                         echo "<br />";
//                         echo "<br />";
// $t= 15;
//                         if($t ==14)
//                         {
//                             echo "Hello World";
//                         }
//                         elseif ($t==15)
//                         {
//                             echo "Good Night";
//                         }
//                         elseif ($t==13)
//                         {
//                             echo "Good noon";
//                         }
//                         else{
//                             echo "Good Day";
//                         }
          

          //                             $a = 5;
//                             $b = $a<10 ? "Hello" : "Bye";
//                             // if($a<10) $b ="Hello";
//                              echo $b;
          
          // if ($a == 2 && $a == 3 && $a == 4 && $a == 5 & $a == 6 && $a == 7) {
//   echo "$a is a number between 2 and 7";
// }
          
          // if(5<4)
//     { 
//         echo "Hello";
//         if(4<3)
//         {
//             if(3<2)
//             {
//                 echo "All Conditions met";
//             }
//         }
//     }
          
          // Grade Calculator
// $php = 55;
// $sqlServer = 65;
// $islamic = 60;
// $plSql = 54;
// $math = 60;
// $tEnglish = 40;
//  $average = ($php+$sqlServer+$islamic+$plSql+$math+$tEnglish) /6;
          
          //                         if($average >=90 )
//                         {
//                             echo "Your Grade is: A";
//                         }
//                         elseif ($average >=80 && $average<=89)
//                         {
//                             echo "Your Grade is: B";
//                         }
//                         elseif($average >=75 && $average<=79)
//                         {
//                             echo "Your grade is: C";
//                         }
//                         elseif($average >= 60 && $average<=74)
//                         {
//                             echo "Your grade is: D";
//                         }
//                         else{
//                             echo "Sorry You are failed";
//                         }
          

          // $i =100;
// while($i >1):
//     echo "The Value of is: ".$i."<br >";
//     if($i ==4)
//     {
//         break;
//     }
//     $i-=10;
// endwhile;
// $j =1;
// do{
//     $j++;
//     echo $j;
// }while($j<9);
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//   }
          
          // $colors = array("Red","Blue","Green","Yellow");
//     foreach($colors as &$colors)
//     {
//         if($colors =="Green") $colors="Black";
//         echo "$colors <br/>";
//     }
          
          //     $members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
          
          // foreach ($members as $x => $y) {
//   echo "$x : $y <br>";
// }
// echo "<br />";
          
          // function myFunction($x,$y): int
// {
          
          //     return  $x+$y;
// }
          
          // myFunction(299,399);
          
          // function setHeight($minheight = 50) {
//     echo "The height is : $minheight <br>";
//   }
          
          //   setHeight(350);
//   setHeight(); // will use the default value of 50
//   setHeight(135);
//   setHeight(80);
//   function sum($x, $y) {
//     $z = $x + $y;
//     return $z;
//   }
          
          //   echo "5 + 10 = " . sum(5, 10) . "<br>";
//   echo "7 + 13 = " . sum(7, 13) . "<br>";
//   echo "2 + 4 = " . sum(2, 4);
//       echo "<br />";              
//   function add_five(&$value) {
//     $value *= 5;
//   }
          
          //   $num = 2;
//   add_five($num);
//   echo $num;
          
          //   function sumMyNumbers(...$x) {
//     $n = 0;
//     $len = count($x);
//     for($i = 0; $i <= $len-1; $i++) {
//       $n += $x[$i];
//     }
//     return $n;
//   }
          
          //   $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
//   echo $a;
//                   $myString ="Hello World";
//                   $myArray = array("Volvo","BMW","Toyota","Mercedes");
//                     $myArray[2] ="Changed"; 
//                   array_push($myArray,"New ITem");
//                   echo "<br>".$myArray[2]."<br>";
//                     // var_dump($myArray);
//                     foreach($myArray as $my)
//                     {
//                       echo $my."<br/>";
//                     }
          
          // $associativeArray = array("Name" => "Ahmad", "LastName" => "Ahmadi", "age" => 30);
          // $associativeArray['age'] = 34;
          // foreach ($associativeArray as $key => $value) {
          //   echo $key . ":" . $value . "<br>";
          // }
          $myArr = [12, 1, 2, 11, 4, 5, 6, 7, 8, 9, 10, 0, 3];
          rsort($myArr);
          // $myAr = [1 => 10, 2 => 20,];
          // foreach ($myAr as $key => $value) {
          //   echo $value;
          // }
          // $myemp=[];
          // $myemp[0]=1;
          // $myemp[10]=2;
          // $myemp[8]=3;
          // array_push($myemp,30);
          // var_dump($myemp);
          // foreach($myemp as $emp)
          // {
          //   echo $emp;
          // }
          
          // array_splice($myArr,3,1);
//           foreach($myArr as $ar)
//           {
//             echo $ar."    , ";
//           }
//           // array_pop($myArr);
//           // var_dump($myArr);
//           $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
// // $newarray = array_diff($cars, ["Mustang"]);
//  krsort($cars);
// foreach($cars as $kye => $value)
// {
//   echo $value."   ,";
// }
//           ?>

        </div>
        <div class="form-group">
          <label for="lstName">Last Name</label>
          <input type="text" name="lastName" id="lstName" class="form-control" required>
        </div>
        <!-- <div class="form-group">
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="" value="Male" class="form-control"> Male
        <input type="radio" name="gender" id="" value="Female" class="form-control"> Female
      </div> -->
        <!-- <div class="form-group">
          <label for="gender">Gender</label>
          <select name="gender" id="" class="form-control">
            <option value="0">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" id="image" class="form-control">
        </div> -->
        <!-- <input type="button" value="Click Me" class="btn btn-danger">
<input type="checkbox">
<input type="color">
<input type="date">
<input type="datetime-local">
<input type="email">
<input type="file">
<input type="hidden">
<input type="image">
<input type="month">
<input type="number">
<input type="password">
<input type="radio">
<input type="range">
<input type="reset">
<input type="search">
<input type="submit">
<input type="tel">
<input type="text">
<input type="time">
<input type="url">
<input type="week"> -->
        <!-- <div class="form-group">
          <label for="submit">Submit</label><br />
          <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </div>
      </form> --> 

    </div>
  </div>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="date" name="name">
<span class="error" >* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="alert alert-outline-danger" style="color:red;">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="alert alert-danger" style="color:red;"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="alert alert-danger" style="color:red;">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form><?php
echo readfile("webdictionary.txt");

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>
<br><br>
&copy; 2010-<?php 
 date_default_timezone_set("Asia/Kabul");
echo date("Y");?>
<?php

  echo "Today is " . date("Y/m/d") . "<br>";
  echo "Today is " . date("Y.m.d") . "<br>";
  echo "Today is " . date("m-Y-d") . "<br>";
  echo "Today is " . date("l"). "<br>";
  echo "time is ".date("H:i:s:a");

// $name = $lastname = $age = $gender;
// if($_SERVER['REQUEST_METHOD'] == "POST")
// {
//   $name = test_input($_POST['name']);
//   $lastname = test_input($_POST['lastName']);
//   $gender = test_input($_POST['gender']);
//   echo "Your Name is $name and Last name is $lastname and you are a $gender";
  
// }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
include "includes/footer.php";
?>