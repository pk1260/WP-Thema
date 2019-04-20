<!DOCTYPE html>
<html lang="<?php language_attributes();?>" dir="ltr">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="author" content="Pascal Kuiper">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
  </head>

  <body>
  <header class="header">
    <div class="container">
      <a href="<?php echo home_url();?>"><h1><?php bloginfo('name');?></h1></a>
      <p><?php bloginfo('description');?></p>
    </div>
  </header>
