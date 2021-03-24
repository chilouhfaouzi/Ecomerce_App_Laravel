<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8" />
        <!--[if IE
            ]><meta http-equiv="X-UA-Compatible" content="IE=edge"
        /><![endif]-->
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link href="images/favicon.png" rel="shortcut icon" />
        <title>
            Bouki Store
        </title>

        <!--====== Google Font ======-->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800"
            rel="stylesheet"
        />

        
		<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
<!--====== Vendor Css ======-->
<link rel="stylesheet" href="<?php echo e(asset('css/vendor.css')); ?>" />
        <!--====== Utility-Spacing ======-->
        <link rel="stylesheet" href="<?php echo e(asset('css/utility.css')); ?>" />

        <!--====== App ======-->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('css/newstyle.css')); ?>" />
    </head>
    <body class="config">
        <div class="preloader is-active">
            <div class="preloader__wrap">
                <img class="preloader__img" src="images/preloader.png" alt="" />
            </div>
        </div>

        <!--====== Main App ======-->
        <div id="app">
            <!--====== Main Header ======-->
            <header class="header--style-1">
                <!--====== Nav 1 ======-->
                <nav class="primary-nav primary-nav-wrapper--border">
                    <div class="container">
                        <!--====== Primary Nav ======-->
                        <div class="primary-nav">
                            <!--====== Main Logo ======-->

                            <a class="main-logo" href="<?php echo e(Route('home')); ?>">
                                <img src="images/logo/logo-1.png" alt=""
                            /></a>
                            <!--====== End - Main Logo ======-->

                            <!--====== Search Form ======-->
                            <form action="<?php echo e(Route('items_cats')); ?>" method="POST" class="main-form" style="display: inline-flex" >
                                <?php echo csrf_field(); ?>
                                <label for="main-search"></label>

                                <input
                                    class="input-text input-text--border-radius input-text--style-1"
                                    type="text"
                                    id="main-search"
                                    name="search"
                                    placeholder="Search"
                                />

                                <button
                                    class="btn btn--icon fas fa-search main-search-button"
                                    type="submit"
                                ></button>
                            </form>
                            <!--====== End - Search Form ======-->

                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation">
                                <button
                                    class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs"
                                    type="button"
                                ></button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">
                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul
                                        class="ah-list ah-list--design1 ah-list--link-color-secondary"
                                    >
                                        <li
                                            class="has-dropdown"
                                            data-tooltip="tooltip"
                                            data-placement="left"
                                            title="Account"
                                        >
                                            <a
                                                ><i
                                                    class="far fa-user-circle"
                                                ></i
                                            ></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width: 120px">
                                                <li>
                                                    <a href="<?php echo e(Route('myaccount')); ?>"
                                                        ><i
                                                            class="fas fa-user-circle u-s-m-r-6"
                                                        ></i>

                                                        <span>Account</span></a
                                                    >
                                                </li>
                                                <?php if(auth()->guard()->guest()): ?>
                                                <li>
                                                    <a href="<?php echo e(Route('register')); ?>"
                                                        ><i
                                                            class="fas fa-user-plus u-s-m-r-6"
                                                        ></i>

                                                        <span>Signup</span></a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(Route('login')); ?>" 
                                                        ><i
                                                            class="fas fa-lock u-s-m-r-6"
                                                        ></i>

                                                        <span>Signin</span></a
                                                    >
                                                </li>
                                                <?php endif; ?>
                                               <?php if(auth()->guard()->check()): ?>
                                               <li>
                                                   <form action="<?php echo e(Route('logout')); ?>" method="POST">
                                                       <?php echo csrf_field(); ?>
                                                       <a style="display: block;
                                                       padding: 8px 20px;
                                                       color: #333333;
                                                       font-size: 12px;
                                                       font-weight: 600;"  onclick="$(this).closest('form').submit();"
                                                       ><i
                                                           class="fas fa-lock-open u-s-m-r-6"
                                                       ></i>
   
                                                       <span>Signout</span></a
                                                   >
                                                   </form>
                                               
                                            </li>
                                               <?php endif; ?>
                                               
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>
                                      
                                        <li
                                            data-tooltip="tooltip"
                                            data-placement="left"
                                            title="Contact"
                                        >
                                            <a href="tel:+0900901904"
                                                ><i
                                                    class="fas fa-phone-volume"
                                                ></i
                                            ></a>
                                        </li>
                                        <li
                                            data-tooltip="tooltip"
                                            data-placement="left"
                                            title="Mail"
                                        >
                                            <a href="mailto:contact@domain.com"
                                                ><i class="far fa-envelope"></i
                                            ></a>
                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->
                        </div>
                        <!--====== End - Primary Nav ======-->
                    </div>
                </nav>
                <!--====== End - Nav 1 ======-->
                
                <!--====== Nav 2 ======-->
                <nav class="secondary-nav-wrapper">
                    <div class="container">
                        <!--====== Secondary Nav ======-->
                        <div class="secondary-nav">
                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation2">
                                <button
                                    class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog"
                                    type="button"
                                ></button>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">
                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul
                                        class="ah-list ah-list--design2 ah-list--link-color-secondary"
                                    >
                                        <li>
                                            <a href="<?php echo e(Route('home')); ?>"
                                                >HOME</a
                                            >
                                        </li>
                                        <li class="has-dropdown">
                                            <a 
                                                >PAGES<i
                                                    class="fas fa-angle-down u-s-m-l-6"
                                                ></i
                                            ></a>

                                            <!--====== Dropdown ======-->

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width: 170px">
                                                <li
                                                    class="has-dropdown has-dropdown--ul-left-100"
                                                >
                                                    <a href="<?php echo e(Route('home')); ?>"
                                                        >Home
                                                    </a>

                                                </li>
                                                <li
                                                    class="has-dropdown has-dropdown--ul-left-100"
                                                >
                                                    <a  href="<?php echo e(Route('myaccount')); ?>"
                                                        >Account</a>
                                                 
                                                </li>
                                              

                                                <li>
                                                    <a href="<?php echo e(Route('cart')); ?>">Cart</a>
                                                </li>
                                               
                                                <li>
                                                    <a href="<?php echo e(Route('checkout')); ?>"
                                                        >Checkout</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(Route('faq')); ?>">FAQ</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(Route('about')); ?>"
                                                        >About us</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(Route('contact')); ?>"
                                                        >Contact</a
                                                    >
                                                </li>                                          
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>                                    
                                        <li class="has-dropdown">
                                            <a
                                                >Categories<i
                                                    class="fas fa-angle-down u-s-m-l-6"
                                                ></i
                                            ></a>

                                            <!--====== Dropdown ======-->
                                            

                                            <span class="js-menu-toggle"></span>
                                            <ul style="width: 170px">
                                               
                                                    <?php $__currentLoopData = App\Models\Category::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li>
                                                        <a  href="<?php echo e(Route('items_cats',
                                                        ['id_cat' =>$cat->id
                                                        ])); ?>"
                                                            ><?php echo e($cat->name); ?></a
                                                        >
                                                    </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                               
                                               
                                             
                                            </ul>
                                            <!--====== End - Dropdown ======-->
                                        </li>                                    
                                        
                                        <li>
                                            <a href="<?php echo e(Route('items_cats')); ?>"
                                                >GIFT CARDS</a
                                            >
                                        </li>
                                        <?php if(auth()->guard()->check()): ?>
                                        <li>
                                            <a href="<?php echo e(Route('items_cats')); ?>"
                                                ><?php echo e(Auth::user()->email); ?></a
                                            >
                                        </li>
                                        <?php endif; ?>
                                        
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->

                            <!--====== Dropdown Main plugin ======-->
                            <div class="menu-init" id="navigation3">
                                <button
                                    class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
                                    type="button"
                                ></button>

                                <span class="total-item-round">2</span>

                                <!--====== Menu ======-->
                                <div class="ah-lg-mode">
                                    <span class="ah-close">✕ Close</span>

                                    <!--====== List ======-->
                                    <ul
                                        class="ah-list ah-list--design1 ah-list--link-color-secondary"
                                    >
                                        <li>
                                            <a href="<?php echo e(Route('home')); ?>"
                                                ><i
                                                    class="fas fa-home u-c-brand"
                                                ></i
                                            ></a>
                                        </li>
                                       
                                        <li class="has-dropdown">
                                            <a
                                            href="<?php echo e(Route('cart')); ?>"
                                            class="mini-cart-shop-link"
                                                ><i
                                                    class="fas fa-shopping-bag"
                                                ></i>

                                                <span class="total-item-round"
                                                    ><?php echo e(Cart::count()); ?></span
                                                ></a
                                            >

                                        </li>
                                    </ul>
                                    <!--====== End - List ======-->
                                </div>
                                <!--====== End - Menu ======-->
                            </div>
                            <!--====== End - Dropdown Main plugin ======-->
                        </div>
                        <!--====== End - Secondary Nav ======-->
                    </div>
                </nav>
                <!--====== End - Nav 2 ======-->
            </header>
            <!--====== End - Main Header ======-->
            <?php $__env->startSection('brodcump'); ?>
         <!--====== Section 1 ======-->
               <div class="u-s-p-y-60 py-3">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="<?php echo e(Route('home')); ?>">Home</a></li>
                            <li class="is-marked">

                                <a > <?php echo $__env->yieldContent('title'); ?> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
             </div>
    <!--====== End - Section 1 ======-->
            <?php echo $__env->yieldSection(); ?>
            <!--====== App Content ======-->

         
            
			<div class="app-content">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
            <!--====== End - App Content ======-->

            <!--====== Main Footer ======-->
            <footer>
                <div class="outer-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="outer-footer__content u-s-m-b-40">
                                    <span class="outer-footer__content-title"
                                        >Contact Us</span
                                    >
                                    <div class="outer-footer__text-wrap">
                                        <i class="fas fa-home"></i>

                                        <span
                                            >4247 Ashford Drive Virginia
                                            VA-20006 USA</span
                                        >
                                    </div>
                                    <div class="outer-footer__text-wrap">
                                        <i class="fas fa-phone-volume"></i>

                                        <span>(+0) 900 901 904</span>
                                    </div>
                                    <div class="outer-footer__text-wrap">
                                        <i class="far fa-envelope"></i>

                                        <span>contact@domain.com</span>
                                    </div>
                                    <div class="outer-footer__social">
                                        <ul>
                                            <li>
                                                <a
                                                    class="s-fb--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-facebook-f"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-tw--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-twitter"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-youtube--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-youtube"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-insta--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-instagram"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    class="s-gplus--color-hover"
                                                    href="#"
                                                    ><i
                                                        class="fab fa-google-plus-g"
                                                    ></i
                                                ></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="outer-footer__content u-s-m-b-40"
                                        >
                                            <span
                                                class="outer-footer__content-title"
                                                >Information</span
                                            >
                                            <div
                                                class="outer-footer__list-wrap"
                                            >
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo e(Route('cart')); ?>"
                                                            >Cart</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(Route('myaccount')); ?>"
                                                            >Account</a
                                                        >
                                                    </li>                                                   
                                                    <li>
                                                        <a
                                                            href="<?php echo e(Route('items_cats')); ?>"
                                                            >Shop</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div
                                            class="outer-footer__content u-s-m-b-40"
                                        >
                                            <div
                                                class="outer-footer__list-wrap"
                                            >
                                                <span
                                                    class="outer-footer__content-title"
                                                    >Our Company</span
                                                >
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo e(Route('about')); ?>"
                                                            >About us</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(Route('contact')); ?>"
                                                            >Contact Us</a
                                                        >
                                                    </li>                                             
                                                    <li>
                                                        <a
                                                            href="<?php echo e(Route('orders')); ?>"
                                                            >Delivery</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href="<?php echo e(Route('items_cats')); ?>"
                                                            >Store</a
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="lower-footer__content">
                                    <div class="lower-footer__copyright">
                                        <span>Copyright © 2018</span>

                                        <a href="index.html">Reshop</a>

                                        <span>All Right Reserved</span>
                                    </div>
                                    <div class="lower-footer__payment">
                                        <ul>
                                            <li>
                                                <i class="fab fa-cc-stripe"></i>
                                            </li>
                                            <li>
                                                <i class="fab fa-cc-paypal"></i>
                                            </li>
                                            <li>
                                                <i
                                                    class="fab fa-cc-mastercard"
                                                ></i>
                                            </li>
                                            <li>
                                                <i class="fab fa-cc-visa"></i>
                                            </li>
                                            <li>
                                                <i
                                                    class="fab fa-cc-discover"
                                                ></i>
                                            </li>
                                            <li>
                                                <i class="fab fa-cc-amex"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--====== Modal Section ======-->


          
        </div>
        <!--====== End - Main App ======-->

        <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
        <script>
            window.ga = function () {
                ga.q.push(arguments);
            };
            ga.q = [];
            ga.l = +new Date();
            ga("create", "UA-XXXXX-Y", "auto");
            ga("send", "pageview");
        </script>
        <script
            src="https://www.google-analytics.com/analytics.js') }}"
            async
            defer
        ></script>

        <!--====== Vendor Js ======-->
        <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
    	<!-- Jquery -->
      
  
     	<!-- Popper JS -->
    	<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
        <?php $__env->startSection('special_script'); ?>
 
        <?php echo $__env->yieldSection(); ?>
  
     	<!-- Bootstrap JS -->
    	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
        <!--====== jQuery Shopnav plugin ======-->
        <script src="<?php echo e(asset('js/jquery.shopnav.js')); ?>"></script>

        <!--====== App ======-->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>

        <!--====== Noscript ======-->
        <noscript>
            <div class="app-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="app-setting__wrap">
                                <h1 class="app-setting__h1">
                                    JavaScript is disabled in your browser.
                                </h1>

                                <span class="app-setting__text"
                                    >Please enable JavaScript in your browser or
                                    upgrade to a JavaScript-capable
                                    browser.</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </noscript>
    </body>
</html>
<?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/layouts/template.blade.php ENDPATH**/ ?>