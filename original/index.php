<?php
include "./core/init.php";
?>
<!DOCTYPE html>
<html>
<head>
  <?php include './inc/global/head.php' ?> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.4.2/parallax.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script> 
</head> 
<body>   
  <?php 
  if(isset($_GET['catalog'])){
    include './inc/catalog/catalog.php';
  }else if (isset($_GET['catalog_list'])) {
    include './inc/catalog/catalog-list.php';
  }else if (isset($_GET['news'])) {
    include './inc/news/news.php';
  }else if (isset($_GET['news_list'])) {
    include './inc/news/news-list.php';
  }else if (isset($_GET['book'])) {
    include './inc/catalog/book.php';
  }else if (isset($_GET['seminar_list'])) {
    include './inc/catalog/seminar-list.php';
  }


  else{ ?>
  <?php include './inc/01-welcome-section.php' ?> 
    <?php include './inc/03-getstarted-section.php' ?>
    <?php include './inc/04-precatalog-section.php' ?> 
    <?php include './inc/05-preseminar-section.php' ?>
    <?php include './inc/06-discover-section.php' ?> 
    <?php include './inc/08-news-section.php' ?> 
    <?php include './inc/09-contact-section.php' ?>
    
    <?php include './inc/global/scripts.php' ?> 
    <?php } ?> 
  <?php 
   // include './inc/02-why-section.php'?>
  <!-- Scripts -->

</body>
</html>

