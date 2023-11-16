<?php

use App\Models\User;
$customer=User::where([['status','=',1],['id','=',$_SESSION['user_id']]])->first();

if(isset($_POST['CHANEGPASSWORD'])){
   if($_POST['address_old']==$_POST['address'])
   {
      $erro="Địa chỉ mới không hợp lệ";
   }else{
      $customer->address=$_POST['address'];
      var_dump($customer);
      $customer->save();
      header('location:index.php?option=customer&profile=true');
   }
}

?>




<?php require_once 'views/frontend/header.php'; ?>
<section class="bg-light">
<form action="index.php?option=editprofile" method="post" name="editprofile">
<div class="container">
      <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
         <ol class="breadcrumb py-2 my-0">
            <li class="breadcrumb-item">
               <a class="text-main" href="index.php">Trang chủ</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
         </ol>
      </nav>
   </div>
</section>
<section class="hdl-maincontent py-2">
   <div class="container">
      <div class="row">
         <!-- <div class="call-login--register border-bottom">
               <ul class="nav nav-fills py-0 my-0">
                  <li class="nav-item">
                     <a class="nav-link" href="login.html">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        0987654321
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="login.html">Đăng nhập</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="register.html">Đăng ký</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="profile.html">Hồ Diên Lợi</a>
                  </li>
               </ul>
            </div> -->
         <div class="col-md-9 order-1 order-md-2">
            <h1 class="fs-2 text-main">Đổi địa chỉ</h1>
            <table class="table table-borderless">
               <tr>
                  <td style="width:20%;">Địa chỉ cũ</td>
                  <td>
                     <input type="text" name="address_old" class="form-control" />
                  </td>
               </tr>
               <tr>
                  <td>Địa chỉ mới</td>
                  <td>
                     <input type="text" name="address" class="form-control" />
                  </td>
               </tr>
               <tr>
                  <td>
                     <button class="btn btn-main" type="submit" name="CHANEGADDRESS">
                        Xác nhận
                     </button>
                     <?= $erro??"";?>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</form>

</section>
<?php require_once 'views/frontend/footer.php'; ?>