<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php if (is_front_page()){ body_class('changeHeader'); } ?>>
  <div class="main-wrapper">

<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

    <header>
      <nav class="navbar navbar-default navbar-main navbar-fixed-top <?php if (! is_front_page()){ echo 'lightHeader'; } ?>" role="navigation">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"></a>
          </div>

          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
          ?>

<!--               <li class="dropdown searchBox">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="searchIcon"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <span class="input-group">
                      <input type="text" class="form-control" placeholder="Search..." aria-describedby="basic-addon2">
                      <span class="input-group-addon" id="basic-addon2">Search</span>
                    </span>
                  </li>
                </ul>
              </li> -->

        </div>
      </nav>
    </header>
