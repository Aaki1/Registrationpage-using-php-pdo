<?php
$server="localhost";
$uname="root";
$pwd="";
$db="uk1";
try
{
    $name=$_POST['ename'];
    $email=$_POST['ema'];
    $password=$_POST['psw'];
    $phoneno=$_POST['phn'];
    $gender=$_POST['gen'];
    $language=$_POST['lang'];
    $zipcode=$_POST['zpc'];
    $about=$_POST['abt'];
$con=new PDO("mysql:host=$server;dbname=$db",$uname,$pwd);
$query="insert into empdo (name,email,password,phoneno,gender,language,zipcode,about) values(?,?,?,?,?,?,?,?)";
$stmt=$con->prepare($query);
if($stmt->execute([$name,$email,$password,$phoneno,$gender,$language,$zipcode,$about]))
                  
{
	$id=$con->lastinsertId();
	echo"id number:".$id." is inserted successfully";
}
else
{
	echo"error";

}
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>

