<?php
$uname=$_POST['fullname'];
$age=$_POST['age'];
$email=$_POST['gmail'];
$department=$_POST['department'];
$lastname=$_POST['lastname'];
$sex=$_POST['sex'];
$type=$_POST['type'];
$address=$_POST['address'];

//connection

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="greenscan";

//database connection
$con=new mysqli($host,$dbusername,$dbpassword,$dbname);
if($con->connect_error){
  echo 'error';

}
else{
$sql="INSERT INTO signin(fullname,lastname,age,sex,type,department,email,address) VALUES ('$uname','$lastname','$age','$sex','$type','$department','$email','address')";
if($con->query($sql)){

   echo "<script>alert('Sussesfully sign,Page redirect to Home Page');document.location='http://localhost/greenscan/user/index/'</script>";

}
else{

    echo "Error: " . $sql . "<br>" . $con->error;
}

}
$con->close();


?>