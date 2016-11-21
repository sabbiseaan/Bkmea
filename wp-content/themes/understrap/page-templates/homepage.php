<?php
/**
 * Template Name: HomePage
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published
 *
 * @package understrap
 */

    //get_header('landing'); 
    get_header('fullwidth'); 
?>

<div class="wrapper" id="full-width-page-wrapper">
  
    

    <header id="header" class="header-section">    
        
        <div class="navbar drop-nav" role="banner">
            <div class="container">

                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo get_template_directory_uri().'/img/hygetropin-logo.png'; ?>" alt="" class="img-responsive ">
                    </a>

                    <div class="nav-bargar pull-right">
                        <div class="bargar-meta fl-left">
                            <a href="#">BUY NOW</a>
                        </div>
                        <div  class="bargar-open fl-left">

                            <span class="cls"></span>
                            <span>
                                <ul class="sub-menu ">
                                    <li>
                                        <a href="#about" title="about">Sobre / About</a>
                                    </li>
                                    <li>
                                        <a href="#skills" title="skills">Habilidades / Skills</a>
                                    </li>
                                    <li>
                                        <a href="#buy" title="jobs">Compra / Buy Now</a>
                                    </li>
                                    <li>
                                        <a href="#contact" title="contact">Contato / Contact</a>
                                    </li>
                                </ul>
                            </span>
                            <span class="cls"></span>
                            <div class="action-bargar"></div>
                        </div>
                    </div>

                    <div class="dropnav-meta">
                        <div class="hygenep_email"><i class="fa fa-envelope"></i> sales@hygenepharmabulk.com</div>
                        <div class="hygenep_country-flag">
                            <div class="hygenep_cf-one"><img src="<?php echo get_template_directory_uri().'/img/c1.png'; ?>" alt="" class="img-responsive "></div>
                            <div class="hygenep_cf-one"><img src="<?php echo get_template_directory_uri().'/img/c2.png'; ?>" alt="" class="img-responsive "></div>
                            <div class="hygenep_cf-one"><img src="<?php echo get_template_directory_uri().'/img/c3.png'; ?>" alt="" class="img-responsive "></div>
                        </div>
                    </div>
                </div>
                <!-- NAVIGATION LINKS -->
                <div class="hygenep_country-flag response">
                    <div class="hygenep_cf-one"><img src="<?php echo get_template_directory_uri().'/img/c1.png'; ?>" alt="" class="img-responsive "></div>
                    <div class="hygenep_cf-one"><img src="<?php echo get_template_directory_uri().'/img/c2.png'; ?>" alt="" class="img-responsive "></div>
                    <div class="hygenep_cf-one"><img src="<?php echo get_template_directory_uri().'/img/c3.png'; ?>" alt="" class="img-responsive "></div>
                </div>
                
            </div>
        </div>

        <div class="hd-body">
            <div class="container">
                <div class="hd-left-part">
                    <div class="row">
                        <div class="col-sm-7 col-md-6">
                            <h1 class="_fbig">Hygetropin</h1>
                            <p class="hd-left-text">Welcome to the official trade website of Hygene Pharma.Where you can enjoy Original Hygetropin delivered to your door.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <div class="head-img">
            <div class="box-round">
                <img src="<?php echo get_template_directory_uri().'/img/hypo.jpg'; ?>" alt="" class="hypo"> 
            </div>
        </div>  
    </header>
    <section class="bulk-price">
        <div class="container">
            <div class="section-title-wrp">
                <h2 class="section-title text-center">Best Bulk Prices</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="price-box">
                                    <div class="_pb_position">
                                        <div class="price mid-font"><span>£</span>85 / <span>€</span>100 / <span>$</span>110</div>
                                        <div class="price-text">
                                            <span class="price-meta">per 100iu box</span>
                                            (20+ boxes)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="price-box">
                                    <div class="price mid-font"><span>£</span>170 / <span>€</span>200 / <span>$</span>220</div>
                                    <div class="price-text">
                                        <span class="price-meta">per 100iu box</span>
                                        (20+ boxes)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quantity-prices">
        <div class="container">
            <div class="section-title-wrp">
                <h2 class="section-title text-center">Small Quantity Prices</h2>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="price-box revrs">
                            <div class="_pb_position">
                                <div class="price"><span>£</span>120</div>
                                <div class="price-text">
                                    <span class="price-meta">1-5 x 100iu</span>
                                </div>
                            </div>  
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="price-box revrs">
                            <div class="_pb_position">
                                <div class="price"><span>£</span>110</div>
                                <div class="price-text">
                                    <span class="price-meta">6-10 x 100iu</span>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-box revrs">
                            <div class="price"><span>£</span>95</div>
                            <div class="price-text"> 
                                <span class="price-meta">0-20 x 100iu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-box revrs"> 
                            <div class="price"><span>£</span>240</div>
                            <div class="price-text">
                                <span class="price-meta">1-3 x 100iu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-box revrs">
                            <div class="price"><span>£</span>220</div>
                            <div class="price-text">
                                <span class="price-meta">3-5 x 100iu</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="price-box revrs">
                            <div class="price"><span>£</span>190</div>
                            <div class="price-text">
                                <span class="price-meta">5-10 x 100iu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="truck shipping_bg">
        <div class="sec_bg"></div>
        <div class="shipping">
            <div class="container">
                <div class="col-sm-6">
                    <div class="text-right">
                        <h2 class="promo-text ">Guaranteed <span class="color-main">Shipping</span></h2>
                        <div class="shippin-">
                            Delivery available
                            within 48-72 hours. 
                        </div>
                        <div class="shippin- _meta">Re-ship guarantee if your package doesn't reach you. </div>
                        <img src="<?php echo get_template_directory_uri().'/img/sign.png'; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-promo">
        <div class="container">
            <div class="promo-text-wrp text-center">
                <h2 class="promo-text">Best Quality</br>Chinese <span class="color-main">HGH</span></h2>
            </div>
            <div class="butto-wrp text-center">
                <button class="btn btn-pro">Buy Now</button>
            </div>
        </div>
    </section>
    <section class="payment">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="payment-pic"><img src="<?php echo get_template_directory_uri().'/img/bitcoin-drag.png'; ?>" alt="" class="img-responsive"></div>
                </div>
                <div class="col-sm-4">
                    <div class="payment-pic"><img src="<?php echo get_template_directory_uri().'/img/western-drag.png'; ?>" alt="" class="img-responsive"></div>
                </div>
                <div class="col-sm-4">
                    <div class="payment-pic"><img src="<?php echo get_template_directory_uri().'/img/moneygram-drag.png'; ?>" alt="" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="truck right">
        <div class="sec_bg"></div>
        <div class="distributor">
            <div class="container">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <div class="text-left">
                        <h2 class="promo-text "><span class="mid-font dtable mg-15-xs">The UK and European</span> <span class="color-main">Official</span> Distributor</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="howto">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <div class="section-title-wrp">
                        <h2 class="howto-title">How To Order</h2>
                    </div>
                    <ol class="list-unstyled howto-list">
                        <li class="item"><span class="color-main _sp-htl">1.</span> Decide amount of HGH needed </li>
                        <li class="item"><span class="color-main _sp-htl">2.</span> Email: sales@hygenepharmabulk</li>
                        <li class="item"><span class="color-main _sp-htl">3.</span> Receive payment instructions and invoice </li>
                        <li class="item"><span class="color-main _sp-htl">4.</span> When order is dispatched we'll send you tracking</li>
                        <li class="item"><span class="color-main _sp-htl">5.</span> Courier will require a signature or you can collect from the local depot</li>
                    </ol>
                </div>
                <div class="col-sm-6 col-sm-offset-1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="buy-option">
                                <div class="bp-img">
                                    <img src="<?php echo get_template_directory_uri().'/img/bitcoin-drag.png'; ?>" alt="" class="img-responsive">
                                </div>
                                <div class="buy-option-meta">Please Send <span class="bdashed fw-bold ">0.110334</span> Bitcoin to: <span class="bdashed bit-break">1gjasdsdyhshdsdgsgdfdfyydfdfsd</span> </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="buy-option">
                                <div class="bp-img">
                                    <img src="<?php echo get_template_directory_uri().'/img/moneygram-drag.png'; ?>" alt="" class="img-responsive">
                                </div>
                                <div class="buy-option-meta">Please Send <span class="bdashed fw-bold ">$59</span> to: <span class="bdashed"> Hygetropin local address, 36th Road 22, Blocak B, West London</span></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="buy-option">
                                <div class="bp-img">
                                    <img src="<?php echo get_template_directory_uri().'/img/western-drag.png'; ?>" alt="" class="img-responsive">
                                </div>
                                <div class="buy-option-meta">Please Send <span class="bdashed fw-bold">$59</span> to: <span class="bdashed"> Hygetropin local address, 36th Road 22, Blocak B, West London</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <footer class="site-footer">
        <div class="container-fluid">
            <div class="copyright"><h4 class="cp-text">© 2016 All rights reserved by <b>authlab.io</b></h4></div>
            <div class="call-to-up">
                <a href="#" class="call-to-up-btn">back to top <span class="ctu-icon"></span> </a>
            </div>
        </div>
    </footer>
</div><!-- Wrapper end -->

<?php get_footer(); ?>