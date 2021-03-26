

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('title', 'My Account'); ?>


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="dash">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">

                                <!--====== Dashboard Features ======-->
                                <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                    <div class="dash__pad-1">

                                        <span class="dash__text u-s-m-b-16">Hello, John Doe</span>
                                        <ul class="dash__f-list">
                                            <li>

                                                <a class="dash-active">Manage My Account</a></li>
                                            <li>

                                                <a href="<?php echo e(Route('edit_account')); ?>">My Profile</a></li>
                                           
                                       
                                            <li>

                                                <a href="<?php echo e(Route('orders')); ?>">My Orders</a></li>
                                
                                         
                                        </ul>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                    <div class="dash__pad-1">
                                        <ul class="dash__w-list">
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                                    <span class="dash__w-text"><?php echo e(getOrdersCount(Auth::user()->id)); ?></span>

                                                    <span class="dash__w-name">Orders Placed</span></div>
                                            </li>
                                         
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                                    <span class="dash__w-text"><?php echo e(Cart::count()); ?></span>

                                                    <span class="dash__w-name">Cart</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Manage My Account</h1>

                                        <span class="dash__text u-s-m-b-30">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</span>
                                        <div class="row">
                                            <div class="col-lg-6 u-s-m-b-30">
                                                <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                    <div class="dash__pad-3">
                                                        <h2 class="dash__h2 u-s-m-b-8">PERSONAL PROFILE</h2>
                                                        <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                            <a href="<?php echo e(Route('edit_account')); ?>">Edit</a></div>

                                                        <span class="dash__text"><?php echo e(Auth::user()->name); ?></span>

                                                        <span class="dash__text"><?php echo e(Auth::user()->email); ?></span>
                                                        <span class="dash__text"><?php echo e(Auth::user()->tel); ?></span>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 u-s-m-b-30">
                                                <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                    <div class="dash__pad-3">
                                                        <h2 class="dash__h2 u-s-m-b-8">ADDRESS BOOK</h2>

                                                        <span class="dash__text-2 u-s-m-b-8">Default Shipping Address</span>
                                                        <div class="dash__link dash__link--secondary u-s-m-b-8">

                                                            <a href="<?php echo e(Route('edit_account')); ?>">Edit</a></div>

                                                        <span class="dash__text"><?php echo e(Auth::user()->lines); ?> <?php echo e(Auth::user()->city); ?> - <?php echo e(Auth::user()->zip_code); ?> - <?php echo e(Auth::user()->country); ?></span>

                                                        <span class="dash__text"><?php echo e(Auth::user()->tel); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius">
                                    <h2 class="dash__h2 u-s-p-xy-20">RECENT ORDERS</h2>
                                    <div class="dash__table-wrap gl-scroll">
                                        <table class="dash__table">
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Placed On</th>
                                                    <th>Items</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $last_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($order->id); ?></td>
                                                    <td><?php echo e($order->order_date); ?></td>
                                                    <td>
                                                        <div class="dash__table-img-wrap">
                                                 
                                                            <img class="u-img-fluid" style="height: 100%" src="<?php echo e(getProduct($order->product_id)->image); ?>" alt="">
                                                                         
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <div class="dash__table-total">

                                                            <span class="font-weight-bold"><?php echo e(getPrice((getProduct($order->product_id)->price) * $order->qntty)); ?></span>
                                                          
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/myaccount.blade.php ENDPATH**/ ?>