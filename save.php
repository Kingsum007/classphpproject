<?php
    include "includes/db.php";
    // if(isset($_POST['submit']))
    // {
    //     $name = $_POST['name'];
    //     $lstName = $_POST['lastName'];
    //     $image = $_FILES['name']['image'];
    //     $tmp = $_FILES['tmp_name']['image'];
    //     $query = "INSERT INTO tesTable(name,lstName) values('$name','$lstName')";
    //     $save= mysqli_query($conn,$query);
    //     if($save)
    //     {
    //         echo "Saved Successfully ";
    //     }
    //     else
    //     {
    //         echo "Error ".mysqli_error($conn);
    //     }
    // }
    $name ; $lastname ;$age ; $gender;
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

      $name = test_input($_POST['name']);
      $lastname = test_input($_POST['lastName']);
      $gender = test_input($_POST['gender']);
      echo "Your Name is $name and Last name is $lastname and you are a $gender";
    }
    
    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>