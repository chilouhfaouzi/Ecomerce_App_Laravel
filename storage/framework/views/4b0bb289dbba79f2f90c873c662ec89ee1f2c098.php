

<?php $__env->startSection('content'); ?>
<div class="container">

        <!--====== Section 1 ======-->
        <?php $__env->startSection('title', 'login'); ?>
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1 class="section__heading u-c-secondary">ALREADY REGISTERED?</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Intro ======-->


            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row row--center">
                        <div class="col-lg-6 col-md-8 u-s-m-b-30">
                            <div class="l-f-o">
                                <div class="l-f-o__pad-box">
                                    <h1 class="gl-h1">I'M NEW CUSTOMER</h1>

                                    <span class="gl-text u-s-m-b-30">By creating an account with our store, you will be able to move through the checkout process faster, store shipping addresses, view and track your orders in your account and more.</span>
                                    <div class="u-s-m-b-15">

                                        <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="<?php echo e(Route('register')); ?>">CREATE AN ACCOUNT</a></div>
                                    <h1 class="gl-h1">SIGNIN</h1>

                                    <span class="gl-text u-s-m-b-30">If you have an account with us, please log in.</span>
                                    <form method="POST" action="<?php echo e(route('login')); ?>" class="l-f-o__form">
                                        <?php echo csrf_field(); ?>                                                                       
                                        <div class="u-s-m-b-30">

                                            <label class="gl-label" for="login-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" type="text" id="login-email" placeholder="Enter E-mail"></div>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <div class="u-s-m-b-30">

                                            <label class="gl-label" for="login-password">PASSWORD *</label>

                                            <input class="input-text input-text--primary-style  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" type="text" id="login-password" placeholder="Enter Password"></div>
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                           <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            <div class="gl-inline">
                                            <div class="u-s-m-b-30">

                                                <button class="btn btn--e-transparent-brand-b-2" type="submit">LOGIN</button></div>                                        
                                        </div>
                                        <div class="u-s-m-b-30">

                                            <!--====== Check Box ======-->
                                            <div class="check-box">

                                                <input type="checkbox" name="remember" id="remember">
                                                <div class="check-box__state check-box__state--primary">

                                                    <label class="check-box__label" for="remember">Remember Me</label></div>
                                            </div>
                                            <!--====== End - Check Box ======-->
                                         
                                        </div>
                                    </form>
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

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/auth/login.blade.php ENDPATH**/ ?>