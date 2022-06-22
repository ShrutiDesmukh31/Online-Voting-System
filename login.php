<?php
session_start();
include('connection.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$std=$_POST['std'];

$sql="Select * from 'userdata' where username='$username' and mobile='$mobile' and password='$password' and standard='$std'";

$result=mysqli_num_rows($con,$sql);
if(mysqli_num_rows($con),($sql));
	$sql="Select username,photo,votes,id from 'userdata' where standard='group'";
	$resultgroup=mysqli_query($con,$sql);
	if(mysqli_num_rows($resultgroup)>0){
		$group=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
		$_SESSION['group']=$groups;
	}
	$data=mysqli_fetch_array($result);
	$_SESSION['id']=$data['id'];
	$_SESSION['status']=$data['status'];
	$_SESSION['data']=$data;
	
echo '<script>
	window.location="..path.php";
	</script>';
}else{
	echo '<script>
	alert("Invalid credentials");
	window.location"../";
	</script>';
}


?>
	