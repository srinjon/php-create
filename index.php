<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "tms";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
$fullname = "";
$shortname= "";
if(isset($_POST['Submit'])){
  // include("connect.php");
  $fullname = $_POST['fname'];
  $shortname = $_POST['sname'];
  $sql = "INSERT INTO `projects` (`fname`, `sname`) VALUES ('$fullname', '$shortname')";
  $result = mysqli_query($conn, $sql);
  // echo $result;
}

?>


<form action="" method="post">
  <label for="fname">Full name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Short name:</label><br>
  <input type="text" id="sname" name="sname"><br><br>
<button type="submit" name="Submit" onClick="window.location.reload();">Add Project</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
  $("#submitform").click(function(){
    alert("Form Submitted Successfully");
  });
// function refreshPage(){
//   if(window.location.reload()==true){
//   console.log("Helo")
//   }
 
// }
</script>