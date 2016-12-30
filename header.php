<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php wp_title(); ?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<?php if ( has_nav_menu( 'primary' ) ) : ?>
										<ul class="nav navbar-nav navbar-right">
											<?php
												wp_nav_menu( array(
													'theme_location' => 'primary',
													'menu_class'     => 'nav navbar-nav navbar-right',
													) );
											?>
										</ul>
									<?php endif; ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


		<!-- Page Header -->
		<!-- Set your background image for this header on the line below. -->
		<header class="intro-header" style="background-color:#888">
				<div class="container">
						<div class="row">
								<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
										<div class="site-heading">
												<h1><a href="<?php echo get_option('home'); ?>">
								           <?php bloginfo('name'); ?></a>
												</h1>
												<hr class="small">
												<span class="subheading"><?php bloginfo('description'); ?></span>
										</div>
								</div>
						</div>
				</div>
		</header>




<!--
  <ul>
    <?php wp_list_categories( array(
        'orderby'    => 'name'
    ) ); ?>
</ul>
-->

	<div class="container">
		<div id="content" class="site-content">
