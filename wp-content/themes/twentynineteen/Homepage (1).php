<?php /* Template Name: Home Page */ ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>DevFolio Bootstrap Template</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      <!-- Bootstrap cdn -->
      <!-- Bootstrap CSS File -->
      <link href="<?php echo get_template_directory_uri()?>/home-cdn/css/bootstrap.min.css" rel="stylesheet">
      <!-- Main Stylesheet File -->
      <link href="<?php echo get_template_directory_uri()?>/home-cdn/css/style.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <div class="topbar">
         <div class="container">
            <div class="topnav">
               <a href><img class="logo" src="<?php the_field('image'); ?>" class="img-fluid rounded b-shadow-a" alt=""></a>
               <a  href="#">Get Bootstrap</a>
               <a  href="#home">Home</a>
               <a href="#news">News</a>
               <a href="#contact">Contact</a>
               <div class="topnav-right">
                  <a href="#search">Blog</a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="first-section">
         <div class="container">
            <h2><?php the_field('Head-1'); ?></h2>
            <h2>Freelancer</h2>
            <p>A one page Bootstrap portfolio theme for freelancers featuring a <br>flat design and a custom portfolio grid</p>
         </div>
         <?php the_field('svg'); ?>
      </div>
      <div class="container Frist_section">
         <div class="col-md-8 col-lg-8">
            <img class="img-1" src="<?php the_field('image-1'); ?>" class="img-fluid rounded b-shadow-a" alt="">
            <div class="discription">
               <h3 class="sub-head"><?php the_field('Description'); ?></h3>
               <p>
                  <?php the_field('description-para'); ?>
               </p>
            </div>
            <div class="discription">
               <h3 class="sub-head"><?php the_field('features'); ?></h3>
               <ul class="list-items">
                  <li><?php the_field('features li-1'); ?></li>
                  <li><?php the_field('_features_li-2'); ?></li>
                  <li><?php the_field('_features_li-3'); ?></li>
                  <li><?php the_field('_features_li-4'); ?></li>
                  <li><?php the_field('_features_li-5'); ?></li>
                  <li><?php the_field('_features_li-6'); ?></li>
                  <li><?php the_field('_features_li-7'); ?></li>
                  <li><?php the_field('_features_li-'); ?></li>
                  <li><?php the_field('_features_li-9'); ?></li>
               </ul>
            </div>
         </div>
         <div class="col-md-4 col-lg-4">
            <div class="discription">
               <div class="b1">
                  <a href="#"><span class="btn-1"><i class="fa fa-download" aria-hidden="true"></i><?php the_field('free-download'); ?></span></a>
               </div>
               <div class="b2">
                  <a href="#"><span class="btn-2"><i class="fa fa-television" aria-hidden="true"></i><?php the_field('live-preview'); ?></span>
                  </a>
               </div>
               <div class="b3">
                  <a href="#"><span class="btn-3"><i class="fa fa-github" aria-hidden="true"></i><?php the_field('view_on_github'); ?></span></a>
               </div>
            </div>
         </div>
      </div>
      </div>
   </body>
</html>