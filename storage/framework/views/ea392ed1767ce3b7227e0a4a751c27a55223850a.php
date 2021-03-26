

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('brodcump'); ?>
    <?php $__env->stopSection(); ?>
        <!--====== Section 1 ======-->
        <div class="u-s-p-y-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 u-s-m-b-30">
                            <div class="empty">
                                <div class="empty__wrap">

                                    <span class="empty__big-text">404</span>

                                    <span class="empty__text-1">Looks like you're in wrong place.</span>

                                    <a class="empty__redirect-link btn--e-brand" href="<?php echo e(Route('home')); ?>">GO TO HOME</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 1 ======-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/404.blade.php ENDPATH**/ ?>