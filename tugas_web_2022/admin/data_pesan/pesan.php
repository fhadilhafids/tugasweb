<?php
    session_start();
    if (empty($_SESSION['akses'])){
        echo "
        <script>
            alert('Mohon Login terlebih dahulu..');
            window.location.href='../../index.php';
        </script>
        ";
    };
    // else{
    //     $_SESSION['akses'];
    //     $_SESSION['akses'] = "login";
    // }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <style>
    .header {
    background: var(--bg-color-1);
    padding: 5px;
    }
    .navbar {
      overflow: hidden;
    }
    .navbar a {
      float: left;
      display: block;
      color: var(--primary-text-color);
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a.active{
        background: var(--bg-color-2);
        color: white;
    }

    .navbar a.logout{
        float: right;
        background-color:#557153;
        color:white;
    }


    .navbar input[type=text] {
      float: right;
      padding: 6px;
      width: 16%;
      border: 70%;
      border-radius: 8px;
      margin-top: 10px;
      margin-right: 20px;
      font-size: 14px;
    }

    .flex{
      display: flex;
    }
    .sidebar{
      background-color: #557153;
      padding:20px;
      padding-bottom:405px;
    }
    .nav-item{
      background-color: #557153;
    }
    .nav-link{
      text-decoration:none;
      margin-right:30px;
      color:white;
      font-size:50px;
    }
    
    ul li{
      list-style: none;
    }

        .search {
      width: 100%;
      position: relative;
      display: flex;
    }

    .searchTerm {
      width: 80%;
      border: 3px solid #00B4CC;
      border-right: none;
      padding: 5px;
      height: 37px;
      border-radius: 5px 0 0 5px;
      outline: none;
      color: #9DBFAF;
    }

    .searchTerm:focus{
      color: black;
    }

    .searchButton {
      width: 40px;
      height: 36px;
      border: 1px solid #00B4CC;
      background: #00B4CC;
      text-align: center;
      color: #fff;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      font-size: 20px;
    }
    .wrap{
      width: 20%;
      position: absolute;
      top: 15%;
      left: 85%;
      transform: translate(-50%, -50%);
    }
    .close p {
        color: #FFFFFF;
        margin :9px;
        margin-left : 25px;
        margin-right : 25px;
    }
    .close {
        display: inline-block;
        text-decoration: none;
        font-weight: bold;
        font-size: 14px;
        color: #FFFFFF;
        margin-right:10px;
        background-color: darksalmon;
    }
    .close:hover {
        background-color: salmon;
    }
    </style>
  <body>
  <div class="header">
      <div class="navbar">
          <a><?php echo date("l, d.m.Y")?></a>
          <a class="logout" href="../logout.php">LOGOUT</a>
      </div>
  </div>
  <div class="flex">
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="../data_login/admin.php">
            <span class="menu-title">Data User</span>
            <i class="mdi mdi-home menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../data_ulasan/data_ulasan.php">
            <span class="menu-title">Rating & Ulasan</span>
            <i class="mdi mdi-contacts menu-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            <span class="menu-title">Pesan</span>
            <i class="mdi mdi-contacts menu-icon"></i>
          </a>
        </li>
      </ul>
    </nav>
    <?php include 'read.php';?>
    </div>
  </body>
</html>