
<?php
include("tag_a.php")
?>

</br>
</br>
<?php
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
?>
<table class="table table-striped-columns" >
  <?php
  $counter = 0;
$row=mysqli_fetch_array($b);
            while($row)
            {
              $counter++; ?>
              
  <td class="td01" >
  
    <h4> <?php echo($row["name"]);?></h4>
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
<footer>
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
   <div class="row justify-content-center">
       <div class="col-md5 text-center">
       
           <p>
             برای نصب و اجرای انواع موکت با شماره زیر تماس بگیر و از مشاوره رایگان ما بهره مند شوید
           </p>
           <p>
                شماره تلفن : 09309161300
            </p>
               <a href="#">
                   <i class="fab fa-twitter-square">

                   </i>
                   <i class="fab fa-instagram">

                   </i>
                   <i class="fab fa-facebook">

                   </i>
                   <i class="fab fa-youtube">

                   </i>
               </a>

               <hr class="footer-hr">
               <p>
                   استفاده از مطالب سایت تنها با درج لینک مستقیم به آن مطلب مجاز است

            </p>
       </div>
   </div>
</div>
</footer>
</div>
</body>
</html>