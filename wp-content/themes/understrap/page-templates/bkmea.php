<?php
/**
 * Template Name: Bkmea
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

    //get_header('landing'); 
    get_header('fullwidth'); 
?>

    <!--head start here -->
    <header class="head">
        <div class="container">
            <div class="logo-container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6 logo">
                        <?php if (!has_custom_logo()) { ?>
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                        <?php } else { the_custom_logo(); } ?><!-- end custom logo -->
                    </div>
                    <div class="col-sm-3 col-sm-offset-6 col-xs-6 search-form">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control search-input" id="search" placeholder="search here...">
                                    <div class="show-search input-group-addon search-icon"><i class="fa fa-search"></i></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation star -->
        <nav>
            <div class="container">
                <div class="nav-bg">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#_ppnavId">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="_ppnav">
                                <?php echo wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary',
                                        'container_class' => 'collapse navbar-collapse',
                                        'menu_class' => 'nav navbar-nav navigation-header',
                                        'fallback_cb' => '',
                                        'container_id' => '_ppnavId',
                                        'walker' => new wp_bootstrap_navwalker()
                                    )
                                ); ?>  
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container -->
        </nav>
        <!-- Navigation end -->
    </header>
    <!-- head end here -->

   <!-- heading slider with news section start here -->
    <section class="heading-slider">
        <div class="container">
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
             <!-- post -->
                <?php the_content(); ?>
             <?php endwhile; ?>
             <!-- post navigation -->
             <?php else: ?>
             <!-- no posts found -->
             <?php endif; ?> 
        </div>
    </section>
    <!-- heading slider with news section end here -->



    <!-- footer start here -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-2 col-sm-4">
                        <h2 class="footer-title">Sitemap</h2>
                        <ul class="footer-list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">President Massage</a></li>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Member Profile</a></li>
                            <li><a href="#">Knitwear Industry</a></li>
                            <li><a href="#">News & Events</a></li>
                            <li><a href="#">Trade Service</a></li>
                            <li><a href="#">Notice Board</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <h2 class="footer-title">Useful Link</h2>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="footer-list">
                                    <li><a href="#">Towards Green Industry</a></li>
                                    <li><a href="#">Value Addition Form Knitwear</a></li>
                                    <li><a href="#">World' Top Sourcing HUB</a></li>
                                    <li><a href="#">Structural Safety</a></li>
                                    <li><a href="#">Green Industry Cell</a></li>
                                    <li><a href="#">Bkmea Across the Globe</a></li>
                                    <li><a href="#">Compiance Fire Safety</a></li>
                                    <li><a href="#">R&D (iART)</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="footer-list">
                                    <li><a href="#">BoDs (2014-2016)</a></li>
                                    <li><a href="#">CSR Activities</a></li>
                                    <li><a href="#">Environmental Issues</a></li>
                                    <li><a href="#">Bangladesh's Knitwear</a></li>
                                    <li><a href="#">Membership Info</a></li>
                                    <li><a href="#">For Importers</a></li>
                                    <li><a href="#">Market Research</a></li>
                                    <li><a href="#">Vision 2050</a></li>
                                    <li><a href="#">Tranning Institute</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="footer-title">Important E-Mail</h2>
                        <ul class="footer-list">
                            <li><a href="#"><span class="bold-text">Administrator:</span> bkmea@bangla.net </a></li>
                            <li><a href="#"><span class="bold-text">Compliance Cell:</span> bkmeasc@bangla.net </a></li>
                            <li><a href="#"><span class="bold-text">Fire Cell:</span> firecell@bkmea.com</a></li>
                            <li><a href="#"><span class="bold-text">Structural Safety R & D Cell:</span> iart3@bkmea.com </a></li>
                            <li><a href="#"><span class="bold-text">Public Relation:</span> bkmea.chit@bkmea.comCompiance </a></li>
                        </ul>
                        <nav class="footer-nav">
                            <a href="#"><i class="fa fa-facebook-official"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin-square"></i></a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="copy">
                    Copyrights © BKMEA. 
                    <span class="pull-right">Powerd By <a class="authlab" href="#">Authlab</a></span>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer end here -->
   


</body>

</html>


<?php get_footer(); ?>