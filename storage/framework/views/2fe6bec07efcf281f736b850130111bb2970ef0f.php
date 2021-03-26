

<?php $__env->startSection('content'); ?>
<div class="container">

   
    <?php $__env->startSection('title', 'cart'); ?>
   
    <?php if(Cart::count()>0): ?>


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p">
                                    <tbody>
                                        <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                             <!--====== Row ======-->
                                        <tr>
                                            <td>
                                                <div class="table-p__box">
                                                    <div class="table-p__img-wrap">

                                                        <img class="u-img-fluid"  style="height: 100%" src="<?php echo e($cart_product->model->image); ?>" alt=""></div>
                                                    <div class="table-p__info">

                                                        <span class="table-p__name">

                                                            <a href="product-detail.html"><?php echo e($cart_product->model->title); ?></a></span>

                                                        <span class="table-p__category">

                                                            <a href="shop-side-version-2.html"><?php echo e($cart_product->model->Category->name); ?></a></span>
                                                      
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                <span class="table-p__price"><?php echo e(getPrice($cart_product->model->price)); ?></span></td>
                                            <td>
                                                <div class="table-p__input-counter-wrap">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                       

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="<?php echo e($cart_product->qty); ?>" data-min="1" data-max="100" readonly>

                                                        </div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-p__del-wrap">
                                                        <form action="<?php echo e(Route('cartdestroy',$cart_product->rowId)); ?>" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                        <a class="far fa-trash-alt table-p__delete-link"   onclick="$(this).closest('form').submit();"></a></div>
                                                        </form>
                                            </td>
                                        </tr>
                                        <!--====== End - Row ======-->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                       


                                    </tbody>
                                </table>
                            </div>
                          
                        </div>
                        <div class="col-lg-12">
                            <div class="route-box">
                                <div class="route-box__g1">

                                    <a class="route-box__link" href="<?php echo e(Route('home')); ?>"><i class="fas fa-long-arrow-alt-left"></i>

                                        <span>CONTINUE SHOPPING</span></a></div>
                                <div class="route-box__g2">

                                    <a class="route-box__link" href="<?php echo e(Route('clearcart')); ?>"><i class="fas fa-trash"></i>

                                        <span>CLEAR CART</span></a>

                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->


        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <form class="f-cart" action="<?php echo e(Route('checkout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-6 u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <div class="u-s-m-b-30">
                                                <table class="f-cart__table">
                                                    <tbody>
                                                        <tr>
                                                            <td>SHIPPING</td>
                                                            <td>FREE</td>
                                                        </tr>
                                                        <tr>
                                                            <td>TAX</td>
                                                            <td><?php echo e(getPrice(Cart::tax())); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>SUBTOTAL</td>
                                                            <td><?php echo e(getPrice(Cart::subtotal())); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>GRAND TOTAL</td>
                                                            <td><?php echo e(getPrice(Cart::total())); ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div>

                                                <button class="btn btn--e-brand-b-2" type="submit"> PROCEED TO CHECKOUT</button></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
        <?php else: ?>
     
            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 u-s-m-b-30">
                                <div class="empty">
                                    <div class="empty__wrap">

                                        <span class="empty__big-text">EMPTY</span>

                                        <span class="empty__text-1">No items found on your cart.</span>

                                        <a class="empty__redirect-link btn--e-brand" href="<?php echo e(Route('home')); ?>">CONTINUE SHOPPING</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
    
       <?php endif; ?>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/cart.blade.php ENDPATH**/ ?>