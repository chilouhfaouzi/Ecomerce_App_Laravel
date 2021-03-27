

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('brodcump'); ?>
    <?php $__env->stopSection(); ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <!--====== Product Breadcrumb ======-->
                        <div class="pd-breadcrumb u-s-m-b-30">
                            <ul class="pd-breadcrumb__list">
                                <li class="has-separator">

                                    <a href="index.hml">Home</a></li>
                                <li class="is-marked">

                                    <a  href="<?php echo e(Route('items_cats',
                                    ['id_cat' =>$product->Category->id
                                    ])); ?>"
                                        ><?php echo e($product->Category->name); ?></a></li>
                               
                            </ul>
                        </div>
                        <!--====== End - Product Breadcrumb ======-->


                        <!--====== Product Detail Zoom ======-->
                        <div class="pd u-s-m-b-30"  style="height: 90%;margin-bottom:0">
                            <div class="slider-fouc pd-wrap" style="height: 100%">
                                <div id="pd-o-initiate">
                                    <div class="pd-o-img-wrap" data-src="<?php echo e($product->image); ?>">

                                        <img style="height: 100%" class="u-img-fluid" src="<?php echo e($product->image); ?>" data-zoom-image="<?php echo e($product->image); ?>" alt=""></div>               
                                </div>

                                <span class="pd-text">Click for larger zoom</span>
                            </div>
                            <div class="u-s-m-t-15">
                                <div class="slider-fouc">
                                    <div id="pd-o-thumbnail">
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Product Detail Zoom ======-->
                    </div>
                    <div class="col-lg-7">

                        <!--====== Product Right Side Details ======-->
                        <div class="pd-detail">
                            <div>

                                <span class="pd-detail__name"><?php echo e($product->title); ?></span></div>
                            <div>
                                <div class="pd-detail__inline">

                                    <span class="pd-detail__price"><?php echo e(getPrice($product->price)); ?></span>

                                    <span class="pd-detail__discount">(20% OFF)</span><del class="pd-detail__del"><?php echo e(getPrice($product->last_price)); ?></del></div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="u-s-m-b-15">
                                <div class="pd-detail__inline">                                   
                                    <?php echo e(checkquantity($product->quantity)); ?>

                                    </div>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__preview-desc"><?php echo e($product->description); ?></span></div>
            
                           
                            <div class="u-s-m-b-15">
                                    <form class="pd-detail__form" action="<?php echo e(Route('cart-store')); ?>" method="POST">                                           
                                        <?php echo csrf_field(); ?>
                                    <div class="pd-detail-inline-2">
                                        <div class="u-s-m-b-15">

                                            <!--====== Input Counter ======-->
                                            <div class="input-counter">

                                                <span class="input-counter__minus fas fa-minus"></span>

                                                <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                <span class="input-counter__plus fas fa-plus"></span></div>
                                            <!--====== End - Input Counter ======-->
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                                            <a
                                            data-modal="modal"
                                            data-tooltip="tooltip"
                                            data-placement="top"
                                            title="Add to Cart"
                                            class="btn btn--e-brand-b-2"
                                            onclick="$(this).closest('form').submit();"

                                            >
                                            Add to Cart
                                           </a>                                    
                                            </div>
                                    </div>
                                </form>
                            </div>
                            <div class="u-s-m-b-15">

                                <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                <ul class="pd-detail__policy-list">
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Buyer Protection.</span></li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Full Refund if you don't receive your order.</span></li>
                                    <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                        <span>Returns accepted if product not as described.</span></li>
                                </ul>
                            </div>
                        </div>
                        <!--====== End - Product Right Side Details ======-->
                    </div>
                </div>
            </div>
        </div>


        <div class="u-s-p-b-90 " style="margin-top: 160px">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary u-s-m-b-12">CUSTOMER ALSO VIEWED</h1>

                                <span class="section__span u-c-grey">PRODUCTS THAT CUSTOMER VIEWED</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="slider-fouc">
                        <div class="owl-carousel product-slider" data-item="4">
                            <?php $__currentLoopData = $also_viewd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="u-s-m-b-30">
                                <div class="product-o product-o--hover-on">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="<?php echo e(Route('product', $product->id)); ?>">

                                            <img class="aspect__img" src="<?php echo e($item->image); ?>" alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a href="<?php echo e(Route('product', $item->id)); ?>" data-tooltip="tooltip" data-placement="top" title="View"><i class="fas fa-search-plus"></i></a></li>
                                                <li>

                                                    <form action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="id" value="<?php echo e($item->id); ?>">                                                  
                                                     <a
                                                     data-modal="modal"
                                                     data-tooltip="tooltip"
                                                     data-placement="top"
                                                     title="Add to Cart"
                                                     class="add_to_cart_form"
                                                     onclick="$(this).closest('form').submit();"
                                                     ><i
                                                         class="fas fa-plus-circle"
                                                     ></i
                                                 ></a>
                                                    </form>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="<?php echo e(Route('items_cats',
                                        ['id_cat' =>$item->Category->id
                                        ])); ?>"><?php echo e($item->Category->name); ?></a></span>

                                    <span class="product-o__name">

                                        <a  href="<?php echo e(Route('product', $item->id)); ?>"><?php echo e($item->title); ?></a></span>
                                    <div class="product-o__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>

                                       </div>

                                    <span class="product-o__price"><?php echo e(getPrice($item->price)); ?>


                                        <span class="product-o__discount"><?php echo e(getPrice($item->last_price)); ?></span></span>
                                </div>
                            </div>
                         
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
     

    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/product.blade.php ENDPATH**/ ?>