<?php
$uname=$_POST['type'];
$pass=$_POST['dis'];
$type=$_POST['medi'];
$fer=$_POST['fer'];


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
$sql="INSERT INTO sunflower(type,disesess,medicion,fer) VALUES ('$uname','$pass','$type','$fer')";
if($con->query($sql)){
  echo "<script>alert('Sussesfully order,Page redirect to Home Page');document.location='http://localhost/greenscan/user/index/'</script>";
  
  

  
}
else{
  echo 'Eroor';
}

}
$con->close();


?>