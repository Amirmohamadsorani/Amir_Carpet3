<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>فروشگاه آنلاین</title>
  <!-- لینک به بوت استرپ CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- فونت فارسی -->
  <link href="https://fonts.googleapis.com/css2?family=Vazir&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Vazir', sans-serif;
      margin: 0;
      padding: 0;
    }

    /* هدر */
    header {
      background-color: #2a3d56;
      padding: 10px 0;
    }
    .logo {
      height: 50px;
    }
    .nav-item a {
      color: #fff;
      font-size: 18px;
      padding: 10px 15px;
      transition: color 0.3s;
    }
    .nav-item a:hover {
      color: #ffcc00;
    }
    .navbar-toggler-icon {
      background-color: #fff;
    }
    .navbar-collapse {
      background-color: #2a3d56;
    }

    /* بخش Hero */
    .hero-section {
      background-image: url('https://via.placeholder.com/1600x800'); /* لینک به تصویر پس‌زمینه */
      background-size: cover;
      background-position: center;
      height: 100vh; /* ارتفاع صفحه */
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }
    .hero-content h1 {
      font-size: 4rem;
      font-weight: bold;
    }
    .hero-content p {
      font-size: 1.5rem;
    }
    .btn-primary {
      background-color: #ffcc00;
      border-color: #ffcc00;
      color: #2a3d56;
      padding: 10px 30px;
      font-size: 1.2rem;
      border-radius: 30px;
    }
    .btn-primary:hover {
      background-color: #e6b800;
      border-color: #e6b800;
    }

    /* بخش معرفی فروشگاه */
    .intro-section {
      background-color: #f8f9fa;
      padding: 60px 20px;
      text-align: center;
    }
    .intro-section h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    .intro-section p {
      font-size: 1.2rem;
      color: #555;
      margin-bottom: 30px;
    }
    .intro-section .btn {
      background-color: #2a3d56;
      color: white;
      padding: 10px 30px;
      font-size: 1.1rem;
      border-radius: 30px;
    }
    .intro-section .btn:hover {
      background-color: #ffcc00;
      color: #2a3d56;
    }
  </style>
</head>
<body>

  <!-- هدر -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="لوگو" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">خانه</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">محصولات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">درباره ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">تماس با ما</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">سبد خرید</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- بخش Hero -->
  <section class="hero-section">
    <div class="hero-content">
      <h1>خوش آمدید به فروشگاه آنلاین ما!</h1>
      <p>محصولات جدید و ویژه خود را اکنون بررسی کنید.</p>
      <a href="#" class="btn btn-primary">خرید کنید</a>
    </div>
  </section>

  <!-- بخش معرفی فروشگاه -->
  <section class="intro-section">
    <h2>چرا فروشگاه ما؟</h2>
    <p>ما بهترین محصولات را با بالاترین کیفیت و قیمت‌های رقابتی ارائه می‌دهیم. به راحتی خرید کنید و از تجربه خرید آنلاین لذت ببرید.</p>
    <a href="#" class="btn">مشاهده محصولات</a>
  </section>

  <!-- لینک‌های به بوت استرپ JS و jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
