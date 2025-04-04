<?php
include("tag_a.php")
?>
<?php
    if(isset( $_GET["id"])){
        $id=$_GET["id"];
        $a=mysqli_connect("localhost","root","","amir");
        $b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`='$id'");
        $row=mysqli_fetch_array($b)
        switch($_GET['actoin']){
            case 'edit':
                $query = "UPDATE products SET
                $id='$id';
                  $name='$name';
                 $ghymat='$ghymat';
                   $imageurl='$imageurl';
                WHERE $id ='$id'";
        }
        
        
        mysqli_close($a);
    }
    
    ?>


</br>
</br>

</br>

<form action="cityedit_action.php" method="post">
<input type="file" name="image" value="<?php echo($imageurl); ?>"  placeholder="تصویر">
<img src="<?php echo($row["imageurl"]); ?>" class="figure-img img-fluid rounded" class="rounded mx-auto d-block" alt="...">
    <input type="text" name="name" value="<?php echo($row["name"]);?>" >
     <input type="text" name="ghymat" value="<?php echo($row["ghymat"]);?>" >
    <input type="text"  name="id"  hidden value="<?php echo($row["id"]);?>">
    <input type="submit"  value="اضافه کردن" class="card">
</form>
<?php
include("footer2.html");
?>


