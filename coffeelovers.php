<?php 

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];


if(isset($_POST['next']))
{
 
    $host="localhost";
    $user="root";
    $password="";
    $db="cofee_website";





    $conn = mysqli_connect($host,$user,$password,$db);


    $insert = "insert into visitordata values('$name','$email')";


    mysqli_query($conn,$insert);


    if($conn){
        echo("<h1 style=color:green;>Done!</h1>");
    }
    else{
        echo("<h1 style=color:black;>Failed!</h1>");
    }
}


?>