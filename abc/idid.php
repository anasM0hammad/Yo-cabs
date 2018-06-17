<?php
session_start();
  

  // session_start();
if (isset($_SESSION['username'])) {
      
     

     $var=$_SESSION['username'];
      $servername = "localhost";
$username = "root";
$password = "";
$dbname = "yocab";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table

$sql = "SELECT * FROM driver where email='$var'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
      

    	// $name=$row["name"];
    	// $email=$row["email"];
    	// $address=$row["address"];
    	$driverid=$row["driverid"];
    	// $contact_number=$row["contact_number"];
     //  $my_image=$row['image'];
      $book=$row['bookingid'];
    	// echo $address.$book;
    }
} 
// $sql = "UPDATE trip SET bookingid=null where bookingid='$book'";
// $result1 = mysqli_query($conn, $sql);
$sql = "UPDATE customer SET payment_done=0 where bookingid='$book'";
$result1 = mysqli_query($conn, $sql);
$sql = "UPDATE customer SET bookingid=null where bookingid='$book'";
$result1 = mysqli_query($conn, $sql);
$sql = "UPDATE car SET bookingid=null where bookingid='$book'";
$result1 = mysqli_query($conn, $sql);
$sql = "UPDATE driver SET bookingid=null where bookingid='$book'";
$result1 = mysqli_query($conn, $sql);


mysqli_close($conn);?>
<script type="text/javascript">
alert("success");
	window.open("../profile.php","_self");

</script><?php
    }
?>