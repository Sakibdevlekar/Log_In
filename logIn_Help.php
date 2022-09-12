<?php
$connection = mysqli_connect('localhost', 'root','','authentication');

if ($connection){
    echo "connected";
}
else{
    echo "ERROR";
}

// mysqli_select_db($connection, 'authentication');


$email = $_POST['email'];
$Pass = $_POST['password'];

$data = "test1@gmail.com";
$data1 = "1235678";

$sql="select *from credentials where EMAIL = '$email' and PASSWD = '$Pass'";
$result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('Location: http://192.168.227.120:8080/')  ;
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

// if ($email == "$data" && $Pass == "$data1"){
//     header('192.168.195.120');
// }
// else{
//     header('location:error.php');;
// }
// mysqli_query($connection, $data);



?>