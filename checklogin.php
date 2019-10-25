<?php
     $User = $_POST['user'];
     $Pass = $_POST['pass'];
     $conn = mysqli_connect('localhost','root','','hanh_duahau');
if(!$conn)
{
    die('Lỗi mất rồi'.mysqli_connect_erorr());
}
else
{
    $sql = "SELECT * FROM User WHERE '$User' = Gmail AND '$Pass' = Pass ";
    mysqli_set_charset($conn,'UTF8');
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
                if($row['Admin']=='1'){
                    $_SESSION["Gmail"]=$user;
                       header("location:pageofadmin.php");
                }
                else{
                    header("Location:user.php");
                }
        }
    }
    else{
        header("location:login.php");
    }
}

?>