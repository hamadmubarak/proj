
<?php

include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';


?>





<?php include_once './parts/header.php'; ?>

    




    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">
      <img src="images/winning.jpg" alt="">
    <h1 class="display-4 fw-normal">إربح الجائزة الكبرى</h1>
    <p class="lead fw-normal">متبقي على التسجيل</p>
    <h4 id="countdown"></h4>
    
    </div>
    <div class="container">
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع حساباتنا للمستجدات</li>
  <li class="list-group-item">بث مباشر خلال السحب</li>
  <li class="list-group-item">سيام اختيار الفائز عشوائيا</li>
  <li class="list-group-item">بعد الاختيار سيتم التواصل على الايميل</li>
  <li class="list-group-item">جوائز عديدة ومتنوعة</li>
</ul>
</div>

    </div>





<div class="container">
<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<h3>يرجى إدخال المعلومات</h3>


  <div class="mb-3">
    <label for="Firstname" class="form-label">الإسم الأول</label>
    <input type="text" name="Firstname" class="form-control" id="Firstname" value="<?php echo $Firstname ?>">
    <div class="form-text error"><?php echo $errors['FirstnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="Lastname" class="form-label">الإسم الأخير</label>
    <input type="text" name="Lastname" class="form-control" id="Lastname" value="<?php echo $Lastname ?>">
    <div class="form-text error"><?php echo $errors['LastnameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="Email" class="form-label">البريد الإلكتروني</label>
    <input type="text error" name="Email" class="form-control" id="Email" value="<?php echo $Email ?>">
    <div class="form-text error"><?php echo $errors['EmailError'] ?></div>
  </div>
 
  
  <button type="submit" name="submit" class="btn btn-primary">إرسال</button>
</form>
    </div>

    </div>

     
<div class="loadercon">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

     <div class="d-grid gap-2 col-5 mx-auto my-4">
     <button type="button" id="winner" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modal">
اختيار الرابح
</button>
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>   
         
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php foreach ($users as $user): ?>
        <h2 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['FirstName']) . ' ' . htmlspecialchars($user['LastName']) . '<br>' ?></h2>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>


<?php include_once './parts/footer.php';?>

     

        
     
     