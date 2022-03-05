<?php
session_start();
if (!isset($_SESSION['login_oki'])) 
{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="./images/hiltonHotelsLogo.svg.png" />
  <title>Hilton Holten Resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style-profile.css">

  <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/booking-table.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-profile.css">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./images/hiltonHotelsLogo.svg.png(1).png" alt=""></a>
      <form action="search.php" class="search-form" method="POST">
        <div class="form-group" style="left:100px;opacity:0.6;width:300px;margin-top:15px;">
          <span class="icon ion-ios-search"></span>
          <input type="search" class="form-control" placeholder="Tìm Tên Phòng & Dịch Vụ...." name="search" require>
        </div>
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
          <li class="nav-item"><a href="rooms.php" class="nav-link">Phòng</a></li>
          <li class="nav-item"><a href="restaurant-detail.php" class="nav-link">Nhà Hàng</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">Giới Thiệu</a></li>
          <?php
          require('./config/db.php');
          if (isset($_SESSION['login_oki'])) {
            $kaitorac = $_SESSION['login_oki']['id_guest'];
            $query = mysqli_query($conn, "SELECT * from db_users WHERE id_guest = '$kaitorac'");
            $row = mysqli_fetch_assoc($query);
          }
          if (isset($_SESSION['login_oki'])) {
          ?>

            <li class="nav-item" style="margin-top: 0.5rem">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret img-circle" data-toggle="dropdown" href="#">
                <span class="user-profile"><img style="margin-top: -1.5rem ; height: 50px ; width: 50px !important;" src="images/<?php echo $row['img_guest']; ?>" alt="Image" class="shadow"></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right " style="margin:-10px 150px 0 0;">
              <li class="dropdown-divider"></li>
                <li class="dropdown-item">
                    <a href="profile-guest.php?id_guest=<?php echo $row['id_guest']; ?>">Tài khoản</a>
                </li>
                <li class="dropdown-item"><a href="logout.php">Đăng Xuất</a> </li>
              </ul>
            
          <?php
          } else {
          ?>
            <li class="nav-item"><a class="nav-link" href="login.php">Đăng nhập</a></li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->