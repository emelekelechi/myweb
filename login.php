<?php
include_once './confi.php';

if(isset($_POST["submit"])){
$email = $_POST["email"];
$password = md5($_POST["password"]);
$sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
    echo $sql;
$result = $conn->query($sql);
    if($result){
           if($result->num_rows>0){
                while ($r = $result->fetch_assoc() ) {
                   //echo json_encode($r);
                    echo "<table border=1><tr><th>".json_encode($r)."</th></td></table>";
                   echo '<br/>';
                    //header("location:index.php");
                }

           }else {
               echo 'no result';
           }
    }else {
        echo 'error';
    }
}
    $conn->close();




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
        
        
        <form style="max-width:500px; margin:auto;" method="post" action="login.php">
            <div class="form-group">
            <input type="password" placeholder="password" name="password" class="form-control" required>
                </div>
            <div class="form-group">    
            <input type="text" placeholder="Email" name="email"class="form-control" required>
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