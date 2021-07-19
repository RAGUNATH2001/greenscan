<?php
$medicion_name=$_POST['seed_name'];
$medicion_quantity=$_POST['q'];


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
$sql="INSERT INTO seeds_order(name,quantity) VALUES ('$medicion_name','$medicion_quantity')";
if($con->query($sql)){

   echo "<script>alert('Sussesfully  seeds order,Page redirect to Home Page');document.location='http://localhost/greenscan/user/index/'</script>";

}
else{
  echo 'Eroor';
}

}
$con->close();


?>