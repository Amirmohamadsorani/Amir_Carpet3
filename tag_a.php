
<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فروشگاه موکت</title>
    <link rel="icon" href="images/logo/tools.png" type="image/ico"  />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="moket.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="">
        <div id="home">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a href="#" class="navbar-brand">
                </a>
                <a class="navbar-brand" href="index.php">فروشگاه موکت امیر کارپت</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                          <?php if(isset($_SESSION["login"])){ ?>
                          <li class="nav-item">
                           <a class="nav-link " href="logout.php">| خروج |</a>
                          </li>
                          <?php } else { ?>
                            <li class="nav-item">
                           <a class="nav-link " href="register.php">| ثبت نام |</a>
                          </li>
                            <li class="nav-item">
                           <a class="nav-link " href="login.php">| ورود |</a>
                          </li>

                           <?php } ?>
                           <li class="nav-item">
                            <a class="nav-link " href="sellform.php">| فرم خرید |</a>
                           </li>
                          <li class="nav-item">
                            <a class="nav-link " href="index.php">| بازگشت |</a>
                           </li>
                           <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                            <li class="nav-item">
                            <a class="nav-link " href="citynew.php">|+|</a>
                           </li>
            <?php }else{
                
            } ?>

                           <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){ ?>
                <li class="nav-item"><a class="nav-link " href="menu_mahsol.php">مدیریت</a></li>
            <?php }else{
                
            } ?>
                    </ul>
                    
                </div>
            </nav>