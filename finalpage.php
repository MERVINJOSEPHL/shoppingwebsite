<?php
$server="localhost";
$user="root";
$password="";
$database="shopping";
$conn=mysqli_connect($server,$user,$password,$database);
if(!$conn){
    die("Error:".mysqli_connect_error());
}
$result="SELECT * FROM fruits;";
$results=mysqli_query($conn,$result);
$resultcheck=mysqli_num_rows($results);
if($resultcheck>0){
    while($row=mysqli_fetch_assoc($results)){
         
}
}
mysqli_close($conn);
?>