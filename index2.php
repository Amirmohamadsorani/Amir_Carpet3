
<?php
include("tag_a.php")
?>
</br>
</br>
<div class="bg-light text-dark pt-4 animate__animated animate__fadeInUp">
<?php
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
?>
<table class="table table-striped-columns" class=" animate__animated animate__fadeInLeft animate__delay-1s">
  <?php
  $counter = 0;
$row=mysqli_fetch_array($b);
            while($row)
            {
              $counter++; ?>
              
  <td class="td01" > 
    <h4>  <?php echo($row["name"]);?></h4>
    <a href="product_detail.php?id=<?php echo($row["id"]);?>">
      <img src="<?php echo($row["imageurl"]); ?>" class="aks" class="img-fluid"  >
    </a>
            </br>
 <span> قیمت :<?php echo($row["ghymat"]);?> &nbsp; ریال</span>
            </br>
<span>توضیحات : <?php echo($row["explane"]);?></span></br>
<a href="product_detail.php?id=<?php echo($row["id"]);?>" class="we">توضیحات تکمیلی و ثبت سفارش </a></br>
</td>
<?php
             $row=mysqli_fetch_array($b);           
             if($counter % 3 == 0)
             echo("</tr><tr>");
          }
          if($counter % 3 != 0)
          { echo("</br>");
  echo("</tr>");
 
}
            ?>
                   
                  </table>
                </div>
                    

                    <?php
include("footer_comment.html");
?>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>
</html>