<?php      

    include('config.php'); 
    //data input from form 
    $email = mysqli_real_escape_string($db, $_POST['email']);  
    $password = mysqli_real_escape_string($db, $_POST['password']);  
      
       
      //query
        $sql = "select * from user where email = '$email' and password = '$password'";
        //run query
        $result = mysqli_query($db, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);  
          //if data matches with table success
        if($count == 1){  
            $_SESSION['username'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header("location:index.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  