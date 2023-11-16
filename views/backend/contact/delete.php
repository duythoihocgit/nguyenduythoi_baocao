<?php
 use App\Models\Contact; 
use App\Libraries\MyClass;

 $id= $_REQUEST['id'];
 $contact= Contact::find($id);

 if($contact==NULL)
 {
   MyClass::set_flash('message',['msg'=>'Lỗi trang 404','type'=>'danger']);
    header("location:index.php?option=contact");
 }
 
 $contact->status = 0;

 $contact->created_at = date('Y-m-d H:i:s');
 $contact->save();
 MyClass::set_flash('message',['msg'=>'Xóa thành công','type'=>'success']);
 header("location:index.php?option=contact");