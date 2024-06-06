<?php
$a=$_POST['uname'];
$b=$_POST['passward'];
$con=mysqli_connect("localhost","root","","login");
$sql="INSERT INTO datas(uname,passward) values('$a','$b')";
$o=mysqli_query($con,$sql);
if($o){
   header("Location:index.html");
   exit;

}
else
{
    echo"not added";
}
$result = mysqli_query($con, "SELECT uname FROM datas WHERE uname = '$a'");
if ($row = mysqli_fetch_assoc($result)) {
    // Display the retrieved username
    echo "Username: " . $row['uname'];
} else {
    echo "Username not found";
}

// Close the database connection
mysqli_close($con);
?>