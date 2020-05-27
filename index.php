<?php
include_once './confi.php';
/*if (!$conn){
    echo "does not connect" .mysql_error();
}
else{
    echo "connection successful";
} */


 if (isset($_POST["submit"])){
     $fullname = $_POST["fullname"];
     $password = md5($_POST["password"]);
     $email = $_POST["email"];
     $phonenumber = $_POST["phonenumber"];
     echo $email ." " . $phonenumber;
     
      $sql = "INSERT INTO `user`(`fullname`,`password`,`email`,`phone number`) VALUES ('$fullname','$password','$email','$phonenumber')";
//echo $sql;
$result = $conn->query($sql);
if ($result){
    $id = $conn->insert_id;
    echo $id;
}
else {
    echo "error message" . $conn->error;
}
 } 




?>
<html>
    <head>
        <title>my website</title>
        <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
        crossorigin="anonymous"/>
    </head>
    <body>
        
        
        <form style="max-width:500px; margin:auto;" method="post" action="index.php">
            <div class="form-group">
            <input type="text" placeholder="Fullname" name="fullname" class="form-control" required>
            </div>
            <div class="form-group">
            <input type="password" placeholder="password" name="password" class="form-control" required>
                </div>
            <div class="form-group">    
            <input type="text" placeholder="Email" name="email"class="form-control" required>
             </div>
            <div class="form-group">
            <input type="text" placeholder="Phone number" name="phonenumber" class="form-control" required>
                </div>
            <div class="form-group">    
                <input type="submit" placeholder="Submit" name="submit" class="form-control btn btn-primary">
            </div>
        
        </form>
        
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    
    </body>

</html>