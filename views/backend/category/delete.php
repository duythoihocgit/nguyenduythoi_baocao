<?php
 use App\Models\Category; 
use App\Libraries\MyClass;

 $id= $_REQUEST['id'];
 $category= Category::find($id);

 if($category==NULL)
 {
   MyClass::set_flash('message',['msg'=>'Lỗi trang 404','type'=>'danger']);
    header("location:index.php?option=category");
 }
 
 $category->status =0;

 $category->created_at = date('Y-m-d H:i:s');
 $category->created_by = (isset($_SESSION['user_id'])) ? $_SESSION['user_id'] : 1 ;
 $category->save();
 MyClass::set_flash('message',['msg'=>'Xóa thành công','type'=>'success']);
 header("location:index.php?option=category");