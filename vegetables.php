<?php
$vegetables=$_POST["vegetables"];
$potatonum=$_POST["potato"];
$onionnum=$_POST["onion"];
$tomatonum=$_POST["tomato"];
$onionamount=0;
$potatoamount=0;
$tomatoamount=0;
function apple($potatonum){
    $potatoamount=$potatonum*50;
    return $potatoamount;
}
function orange($onionnum){
    $onionamount=$onionnum*70;
    return$onionamount;
}
function banana($tomatonum){
    $tomatoamount=$tomatonum*50;
    return$tomatoamount;
}
if($potatonum>0){
    $potatoamount=apple($potatonum);
}
if($onionnum>0){
    $onionamount=orange($onionnum);
}
if($tomatonum>0){
    $tomatoamount=banana($tomatonum);
}
echo "<center> <h1>BILL</h1></center>";
if($potatonum>0){
    echo "<b>"."<center>". $potatonum."potato * 50rs =".$potatoamount."rs";
    echo"<br>";
}
if($onionnum>0){
    echo "<b>"."<center>".$onionnum."onion* 25rs =".$onionamount."rs";
    echo "<br>";
}
if($tomatonum>0){
    echo "<b>"."<center>".$tomatonum."tomato* 10rs =".$tomatoamount."rs";
    echo"<br>";
}
$vegetablesamount=$potatoamount+$onionamount+$tomatoamount;
echo "<b>"."<center>"."total amount =".$vegetablesamount."rs";
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
$sql_query="DELETE FROM vegetables";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".mysqli_error($conn);
}
if($potatonum>0){
$sql_query="INSERT INTO vegetables(vegetable,quantity,rate) VALUES('Potatonum','$potatonum','$potatoamount')";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".$sql."".mysqli_error($conn);
}
}
if($onionnum>0){
    $sql_query="INSERT INTO vegetables(vegetable,quantity,rate) VALUES('Onion','$onionnum','$onionamount')";
    if(mysqli_query($conn,$sql_query)){
        echo" ";  
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
if($tomatonum>0){
    $sql_query="INSERT INTO vegetables(vegetable,quantity,rate) VALUES('Tomato','$tomatonum','$tomatoamount')";
    if(mysqli_query($con,$sql_query)){
        echo "";
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>