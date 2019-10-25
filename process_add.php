<?php
 session_start();
$td = $_POST['td'];
$h = $_POST['nd'];
$a =$_POST['anh'];

$conn = mysqli_connect('localhost','root','','hanh_duahau');
if(!$conn){
    die('co loi xay ra'.mysqli_connect_error());
}
else{
    $sql = " INSERT INTO `baiviet`(`mabv`, `tieude`, `noidung`, `anh`) VALUES ('','$td','$h','$a') ";
    mysqli_set_charset($conn,'UTF8');
   if(!$result = mysqli_query($conn,$sql)){
        echo'that bai';
   }
   else{
       header("location:listadd.php");
   }
}
?>