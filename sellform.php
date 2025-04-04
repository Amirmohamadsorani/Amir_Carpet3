<?php
include("tag_a.php")
?>
<form action="sellform_actoin.php" method="POST" enctype="multipart/form-data"></br>
</br>
</br>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نام موکت</label>
    <select id="inputState" class="form-select" name="carpet_name">
      <option selected>انتخاب کنید</option>
      <option>کات بی</option>
      <option>شبنم</option>
      <option>پونه</option>
      <option>زیبا</option>
      <option>الماس</option>
      <option>یاس</option>
      <option>صنوبر</option>
      <option>ونوس</option>
      <option>دالیا</option>
      <option>لیندا</option>
      <option>یاسمن</option>
      <option>راش</option>
      <option>پتینه</option>
      <option>افرا</option>
      <option>خزان</option>
      <option>باران</option>
      <option>نیلوفر</option>
      <option>پامچال</option>
      <option>زیبا اسپورت</option>
      <option>زیبا</option>
      <option>نعنا</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">نام و نام خانوادگی</label>
    <input type="text" class="form-control" id="inputPassword4" name="username">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">متراژ موکت (متر مربع)</label>
    <input type="text" class="form-control" id="inputCity" name="meter">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">قیمت محصول</label>
    <input type="text" class="form-control" id="inputCity" name="ghymat">  
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">شماره تماس</label>
    <input type="text" class="form-control" id="inputCity" name="mobile">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">ادرس محل زندگی  </label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="استان و شهر و خیابان و کوچه پلاک و طبقه">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ایمیل</label>
    <input type="text" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        انتخاب من را به خاطر بسپار
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ثبت سفارش</button>
  </div>
</form>
<?php
include("footer2.html");
?>