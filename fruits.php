<?php
$fuits=$_POST["fruits"];
$applenum=$_POST["apple"];
$orangenum=$_POST["orange"];
$banananum=$_POST["banana"];
$appleamount=0;
$orangeamount=0;
$bananaamount=0;
function apple($applenum){
    $appleamount=$applenum*50;
    return $appleamount;
}
function orange($orangenum){
    $orangeamount=$orangenum*25;
    return$orangeamount;
}
function banana($banananum){
    $bananaamount=$banananum*10;
    return$bananaamount;
}
if($applenum>0){
    $appleamount=apple($applenum);
}
if($orangenum>0){
    $orangeamount=orange($orangenum);
}
if($banananum>0){
    $bananaamount=banana($banananum);
}
echo "<center> <h1>BILL</h1></center>";
if($applenum>0){
    echo "<b>"."<center>".$applenum."apple * 50rs =".$appleamount."rs";
    echo"<br>";
}
if($orangenum>0){
    echo "<b>"."<center>".$orangenum."orange* 25rs =".$orangeamount."rs";
    echo "<br>";
}
if($banananum>0){
    echo "<b>"."<center>".$banananum."banana* 10rs =".$bananaamount."rs";
    echo"<br>";
}
$fruitamount=$appleamount+$orangeamount+$bananaamount;
echo "<b>"."<center>"."total amount =".$fruitamount."rs";
echo"<br>";
echo"<a href='frame3.html'><input type='submit' value='add another product'></a>";
$server="localhost";
$user="root";
$password="";
$database="shopping";
$conn=mysqli_connect($server,$user,$password,$database);
if(!$conn){
    die("Error:".mysqli_connect_error());
}
$sql_query="DELETE FROM fruits";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".mysqli_error($conn);
}
if($applenum>0){
$sql_query="INSERT INTO fruits(fruit,quantity,rate) VALUES('Apple','$applenum','$appleamount')";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".$sql."".mysqli_error($conn);
}
}
if($orangenum>0){
    $sql_query="INSERT INTO fruits(fruit,quantity,rate) VALUES('Orange','$orangenum','$orangeamount')";
    if(mysqli_query($conn,$sql_query)){
        echo" ";  
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
if($banananum>0){
    $sql_query="INSERT INTO fruits(fruit,quantity,rate) VALUES('Banana','$banananum','$bananaamount')";
    if(mysqli_query($con,$sql_query)){
        echo "";
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>