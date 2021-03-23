

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

                                                <a class="dash-active" href="dashboard.html">Manage My Account</a></li>
                                            <li>

                                                <a href="dash-my-profile.html">My Profile</a></li>
                                            <li>

                                                <a href="dash-address-book.html">Address Book</a></li>
                                            <li>

                                                <a href="dash-track-order.html">Track Order</a></li>
                                            <li>

                                                <a href="dash-my-order.html">My Orders</a></li>
                                            <li>

                                                <a href="dash-payment-option.html">My Payment Options</a></li>
                                            <li>

                                                <a href="dash-cancellation.html">My Returns & Cancellations</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                    <div class="dash__pad-1">
                                        <ul class="dash__w-list">
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                                                    <span class="dash__w-text">4</span>

                                                    <span class="dash__w-name">Orders Placed</span></div>
                                            </li>                                         
                                            <li>
                                                <div class="dash__w-wrap">

                                                    <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                                                    <span class="dash__w-text">0</span>

                                                    <span class="dash__w-name">Wishlist</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--====== End - Dashboard Features ======-->
                            </div>
                            <div class="col-lg-9 col-md-12">
                                <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                    <div class="dash__pad-2">
                                        <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form class="dash-edit-p">
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-fname">FIRST NAME *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="reg-fname" placeholder="John"></div>
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="reg-lname">LAST NAME *</label>

                                                            <input class="input-text input-text--primary-style" type="text" id="reg-lname" placeholder="Doe"></div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">

                                                            <!--====== Date of Birth Select-Box ======-->

                                                            <span class="gl-label">BIRTHDAY</span>
                                                            <div class="gl-dob"><select class="select-box select-box--primary-style">
                                                                    <option selected>Month</option>
                                                                    <option value="male">January</option>
                                                                    <option value="male">February</option>
                                                                    <option value="male">March</option>
                                                                    <option value="male">April</option>
                                                                </select><select class="select-box select-box--primary-style">
                                                                    <option selected>Day</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                </select><select class="select-box select-box--primary-style">
                                                                    <option selected>Year</option>
                                                                    <option value="1991">1991</option>
                                                                    <option value="1992">1992</option>
                                                                    <option value="1993">1993</option>
                                                                    <option value="1994">1994</option>
                                                                </select></div>
                                                            <!--====== End - Date of Birth Select-Box ======-->
                                                        </div>
                                                        <div class="u-s-m-b-30">

                                                            <label class="gl-label" for="gender">GENDER</label><select class="select-box select-box--primary-style u-w-100" id="gender">
                                                                <option selected>Select</option>
                                                                <option value="male">Male</option>
                                                                <option value="male">Female</option>
                                                            </select></div>
                                                    </div>
                                                    <div class="gl-inline">
                                                        <div class="u-s-m-b-30">
                                                            <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>

                                                            <span class="dash__text">johndoe@domain.com</span>
                                                            <div class="dash__link dash__link--secondary">

                                                                <a href="#">Change</a></div>
                                                        </div>
                                                        <div class="u-s-m-b-30">
                                                            <h2 class="dash__h2 u-s-m-b-8">Phone</h2>

                                                            <span class="dash__text">Please enter your mobile</span>
                                                            <div class="dash__link dash__link--secondary">

                                                                <a href="#">Add</a></div>
                                                        </div>
                                                    </div>

                                                    <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/edit_account.blade.php ENDPATH**/ ?>