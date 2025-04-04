<?php
include("tag_a.php")
?>
<?php
$carpet_name=$_POST["carpet_name"];
$username=$_POST["username"];
$meter=$_POST["meter"];
$ghymat=$_POST["ghymat"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$email=$_POST["email"];
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"INSERT INTO `sellform`(`username`, `meter` ,`ghymat`,`mobile`,`address`,`email`) VALUES ('$username','$meter','$ghymat','$mobile','$address','$email')");
mysqli_close($a);
?>

 <script>
 location.replace("header4.php");
</script>   

<?php
include("footer2.html");
?>




