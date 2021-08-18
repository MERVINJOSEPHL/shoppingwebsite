<html>
    <hedad>
        <title> accessories</title>
</head>
<body>
        <?php
$accessories=$_POST["accessories"];
$watchnum=$_POST["watch"];
$walletnum=$_POST["wallet"];
$beltnum=$_POST["belt"];
$watchamount=0;
$walletamount=0;
$beltamount=0;
function apple($watchnum){
    $watchamount=$watchnum*600;
    return $watchamount;
}
function orange($walletnum){
    $walletamount=$walletnum*200;
    return$walletamount;
}
function banana($beltnum){
    $beltamount=$beltnum*100;
    return$beltamount;
}
if($watchnum>0){
    $watchamount=apple($watchnum);
}
if($walletnum>0){
    $walletamount=orange($walletnum);
}
if($beltnum>0){
    $beltamount=banana($beltnum);
}
echo "<center> <h1>BILL</h1></center>";
if($watchnum>0){
    echo "<b>"."<center>".$watchnum."watch * 600rs =".$watchamount."rs";
    echo"<br>";
}
if($walletnum>0){
    echo "<b>"."<center>".$walletnum."wallet* 200rs =".$walletamount."rs";
    echo "<br>";
}
if($beltnum>0){
    echo "<b>"."<center>".$beltnum."belt* 100rs =".$beltamount."rs";
    echo"<br>";
}
$accessoriesamount=$watchamount+$walletamount+$beltamount;
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
$sql_query="DELETE FROM accessories";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".mysqli_error($conn);
}
if($watchnum>0){
$sql_query="INSERT INTO accessories(accessorie,quantity,rate) VALUES('Watch','$watchnum','$watchamount')";
if(mysqli_query($conn,$sql_query)){
    echo"";
}
else{
    echo"Error".$sql."".mysqli_error($conn);
}
}
if($walletnum>0){
    $sql_query="INSERT INTO accessories(accessorie,quantity,rate) VALUES('Wallet','$walletnum','$walletamount')";
    if(mysqli_query($conn,$sql_query)){
        echo" ";  
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
if($beltnum>0){
    $sql_query="INSERT INTO accessories(accessorie,quantity,rate) VALUES('Belt','$beltnum','$beltamount')";
    if(mysqli_query($con,$sql_query)){
        echo "";
    }
    else{
        echo"Error".$sql."".mysqli_error($conn);
    }
}
mysqli_close($conn);?>