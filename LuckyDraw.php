<?php
session_start();
 $USER = $_SESSION['username'];
 $WHEEL = $_SESSION['wheel'];
 $rand = rand(1,8);
 $timestamp = time();

 if($rand == 1){
     $phanthuong = '500 Kim Cương';
 }elseif($rand == 2){
     $phanthuong = 'SCAR TiTan';
 }elseif($rand == 3){
     $phanthuong = 'AK Hỏa Kỳ lân';
 }elseif($rand == 4){
     $phanthuong = 'MP40 Chồn Lam';
 }elseif($rand == 5){
     $phanthuong = 'Xe Thể Thao Ngân Hà';  
 }elseif($rand == 6){
     $phanthuong = '2000 Kim Cương';  
 }elseif($rand == 7){
     $phanthuong = 'Chúc May Mắn Lần Sau';  
 }elseif($rand == 8){
     $phanthuong = 'Quỷ Dạ Xoa'; 
 }
 
if(!$USER){
    echo json_encode(array("status" => "login","message" => 'Bạn Chưa Đăng Nhập'));
}elseif($WHEEL == 0){
    echo json_encode(array("status" => "error","message" => 'Bạn Đã Hết Lượt Quay Của Ngày Hôm Nay !'));
}else{
    echo json_encode(array("phanqua" => $phanthuong, "pos" => $rand, "num_roll_remain" => 3, "status" => "OK"));
 mysqli_query($conn, "INSERT INTO `history_wheel`(`username`,`phanthuong`,`date_now`)VALUES('$USER','$phanthuong','$timestamp')");
   $_SESSION['wheel'] = $WHEEL - 1;
}

?>