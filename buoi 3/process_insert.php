<?php

$ten = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$ngay_sinh = $_POST['ngay_sinh'];
$mo_ta_ban_than = $_POST['mo_ta_ban_than'];
$anh = $_POST['anh'];

$ket_noi = mysqli_connect('localhost','root','','buoi3_crud'); 
mysqli_set_charset($ket_noi,'utf8');

$sql = "insert into formdkingiu(ten,gioi_tinh,ngay_sinh,mo_ta_ban_than,anh) values('$ten','$gioi_tinh','$ngay_sinh','$mo_ta_ban_than','$anh')";

$loi = mysqli_error($ket_noi);
echo $loi;


mysqli_query($ket_noi,$sql);
