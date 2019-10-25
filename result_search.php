<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php  include "header.php"  ?>

  <div class="container" style="margin-bottom: 20px">
    <h3 style="text-align: center ; margin-top: 20px; margin-bottom: 20px">Kết quả tìm kiếm</h3>
    <div class="row">
      <?php
   $mabv = $_POST['mabv'];
   $conn = mysqli_connect('localhost','root','','hanh_duahau');
if(!$conn)
{
  die('Lỗi mất rồi'.mysqli_connect_erorr());
}
else
{
 $sql = "SELECT `Mabv`, `Tieude`, `Noidung`, `Anh` FROM `baiviet` WHERE Mabv = ".$mabv."";
  mysqli_set_charset($conn,'UTF8');
  $result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
         // header ("location:result_search.php")
         echo' <div class="col-md-3">';
         echo '<img src="img/bv/'.$row['Anh'].'" alt="">';
         echo '</div>';
         echo' <div class="col-md-9">';
         echo'  <h6 class="mauden"> '.$row['Tieude'].' </h6>';
         echo  '<p>'.$row['Noidung'].'</p>';
         echo '</div>';
      }
  }
  else{
      echo 'Không tìm thấy bài viết';
  }
}
?>
    </div>
  </div>
  <?php  include "footer.php"  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>