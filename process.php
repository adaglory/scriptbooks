<?php 
include 'dbconfig.php';



// create a variable
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$subno=$_POST['subno'];

//Execute the query


$sql = "INSERT INTO schooluser (fname,lname,mail,uname,pass,subscription) VALUES
 ('$firstname','$lastname','$email', '$username','$password','$subno')";
//var_dump ($_POST);

if($conn->query($sql) === TRUE){

    /*now we are going to redirect user after they have successfully
    created an account on our platform
    */
    header("Location: login.php");

}
?>