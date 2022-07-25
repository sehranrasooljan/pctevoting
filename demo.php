<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vote";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `nominees` WHERE `designation` = 'Vice President'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
        $tmp = $row['sno'];
         $sql_count = "SELECT * FROM `tbl_vote` WHERE `vice_president` = '{$tmp}'";
            $result_count = mysqli_query($conn, $sql_count);
            $tmp_count = mysqli_num_rows($result_count);
            echo $row['name']." = ".$tmp_count."<br>";
} 
}else{
  echo "0 results";
}

mysqli_close($conn);
?>