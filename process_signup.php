<?php
     $ten = $_POST['ten'];
     $ho = $_POST['ho'];
     $gmail = $_POST['gmail'];
     $pass = $_POST['pass'];
     $passagain = $_POST['passagain'];
     $conn = mysqli_connect('localhost','root','','hanh_duahau');
if(!$conn)
{
    die('Lỗi mất rồi'.mysqli_connect_erorr());
}
else
{
    if($ten!=""&&$ho!=""&&$gmail!=""&&$pass!=""&&$passagain!=""){
        if($pass==$passagain){
        $sql = "INSERT INTO `user`(`ID_User`, `Ho`, `Ten`, `Gmail`, `Pass`, `Admin`) VALUES ('','$ho','$ten','$gmail','$pass',0)";
        mysqli_set_charset($conn,'UTF8');
        mysqli_query($conn,$sql);
            header("location:login.php");
    }
        elseif($pass!=$passagain){
            echo 'Xác nhận mật khẩu không chính xác';
        }
    }
    else{
        echo 'Còn ô chưa nhập thông tin';
    }
}

?>