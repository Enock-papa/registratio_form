<?php
    
$showAlert = false; 
$showError = false; 
$exists=false;
    
if(isset($_POST['signup_button'])) {
      
    // Include file which makes the
    // Database Connection.
    include 'connect.php';   
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $Tel_No = $_POST['Tel_No'];
    $username = $_POST["username"];
    $email = $_POST['email']; 
    $password = $_POST["password"]; 
    $pass_con = $_POST["pass_con"];
            
    
    $sql = "Select * from products where username='$username'";
    
    $result = mysqli_query($connect, $sql);
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if
    // the username is already present 
    // or not in our Database
    if($num == 0) {
        if(($password == $pass_con) && $exists==false) {
    
            $hash = password_hash($password, 
                                PASSWORD_DEFAULT);
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO products ( firstName, 
                lastName, Tel_No, username,email,password) VALUES ('$firstName', 
                '$lastName','$Tel_No','$username','$email','$hash')";
    
            $result = mysqli_query($connect, $sql);
    
            if ($result) {
                $showAlert = true; 
            }
        } 
        else { 
            $showError = "Passwords do not match"; 
        }      
    }// end if 
    
   if($num>0) 
   {
      $exists="Username not available"; 
   } 
   header("location: index.php");
    

    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            <button type="button" class="close"
                data-dismiss="alert" aria-label="Close"> 
                <span aria-hidden="true">×</span> 
            </button> 
        </div> '; 
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
       <button type="button" class="close" 
            data-dismiss="alert aria-label="Close">
            <span aria-hidden="true">×</span> 
       </button> 
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        <button type="button" class="close" 
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button>
       </div> '; 
     }
   
}

?>

    