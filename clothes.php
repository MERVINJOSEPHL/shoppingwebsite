<html>
    <hedad>
        <title> accessories</title>
</head>
<body>
        <?php
$accessories=array($_POST["clothes"]);
$suitnum=$_POST["suit"];
$shirtnum=$_POST["shirt"];
$pantnum=$_POST["pant"];
$suitamount=0;
$shirtamount=0;
$pantamount=0;
function apple($suitnum){
    $suitamount=$suitnum*60000;
    return $suitamount;
}
function orange($shirtnum){
    $shirtamount=$shirtnum*1000;
    return$shirtamount;
}
function banana($pantnum){
    $pantamount=$pantnum*500;
    return$pantamount;
}
if($suitnum>0){
    $suitamount=apple($suitnum);
}
if($shirtnum>0){
    $shirtamount=orange($shirtnum);
}
if($pantnum>0){
    $pantamount=banana($pantnum);
}
echo "<center> <h1>BILL</h1></center>";
if($suitnum>0){
    echo "<b>"."<center>".$suitnum."suit * 60000rs =".$suitamount."rs";
    echo"<br>";
}
if($shirtnum>0){
    echo "<b>"."<center>".$shirtnum."shirt* 1000rs =".$shirtamount."rs";
    echo "<br>";
}
if($pantnum>0){
    echo "<b>"."<center>".$pantnum."pant* 500rs =".$pantamount."rs";
    echo"<br>";
}
$accessoriesamount=$suitamount+$shirtamount+$pantamount;
echo "<b>"."<center>"."total amount =".$accessoriesamount."rs";
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
$sql_query="DELETE FROM clothes";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".mysqli_error($conn);
}
if($suitnum>0){
$sql_query="INSERT INTO clothes(clothe,quantity,rate) VALUES('Suit','$suitnum','$suitamount')";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".$sql."".mysqli_error($conn);
}
}
if($shirtnum>0){
    $sql_query="INSERT INTO clothes(clothe,quantity,rate) VALUES('Shirt','$orangenum','$orangeamount')";
    if(mysqli_query($conn,$sql_query)){
        echo" ";  
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
if($pantnum>0){
    $sql_query="INSERT INTO clothes(clothe,quantity,rate) VALUES('Pant','$banananum','$bananaamount')";
    if(mysqli_query($con,$sql_query)){
        echo "";
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
</body>