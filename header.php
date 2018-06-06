<?php  
  $meta = array(
    'title' => "Japan Ranchers | 日本牧場",
    'key' => "Japan Ranchers, ranch, ecommerce, garden, barn, seminars, fruits, livestocks",
    'description' => "",
    'thumbnail' => "http://preview.japanmedicaltourism.jp/images/social-thumbnail.jpg",
    'twitter_handle' => '@',
    'twitter_creator' => '@',
    'url' => 'www.japanranchers.com'
  );  
?>
<html>
  <head>
    <title><?php echo bloginfo('name'); ?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $meta['key'] ?>" />
    <meta name="description" content="<?php echo $meta['description'] ?>" /> 
    <meta property="og:title" content="<?php echo bloginfo('name'); ?>" />
    <meta property="og:type" content="business" />
    <meta property="og:url" content="<?php echo $meta['url'] ?>" />
    <meta property="og:image" content="<?php echo $meta['thumbnail'] ?>" />
    <meta property="og:description" content="<?php echo $meta['description'] ?>"/>
    <meta property="og:site_name" content="<?php echo $meta['title'] ?>" /> 

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo $meta['twitter_handle'] ?>">
    <meta name="twitter:creator" content="<?php echo $meta['twitter_creator'] ?>">
    <meta name="twitter:title" content="<?php echo $meta['title'] ?>">
    <meta name="twitter:description" content="<?php echo $meta['description'] ?>">
    <meta name="twitter:image" content="<?php echo $meta['thumbnail'] ?>">

   <!--  <link rel="apple-touch-icon" sizes="57x57" href="./favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="./favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff"> -->
    <?php wp_head(); ?>
  </head> 
<body>  
<?php 
  if(is_front_page()){
    get_template_part('./inc/01-welcome-section');
  }else{
    get_template_part('./inc/00-default-nav');
  }
 ?>