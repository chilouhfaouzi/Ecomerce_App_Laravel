

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('title', 'Checkout'); ?>
      
        <!--====== Section 3 ======-->
        <div class="u-s-p-b-60">

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="checkout-f">
                        <div class="row">
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                                <form class="checkout-f__delivery">
                                    <div class="u-s-m-b-30">
                                        <!--====== First Name, Last Name ======-->
                                        <div class="gl-inline">
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-fname">FIRST NAME *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-fname" data-bill=""></div>
                                            <div class="u-s-m-b-15">

                                                <label class="gl-label" for="billing-lname">LAST NAME *</label>

                                                <input class="input-text input-text--primary-style" type="text" id="billing-lname" data-bill=""></div>
                                        </div>
                                        <!--====== End - First Name, Last Name ======-->


                                        <!--====== E-MAIL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-email">E-MAIL *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-email" data-bill=""></div>
                                        <!--====== End - E-MAIL ======-->


                                        <!--====== PHONE ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-phone">PHONE *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-phone" data-bill=""></div>
                                        <!--====== End - PHONE ======-->


                                        <!--====== Street Address ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-street">STREET ADDRESS *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-street" placeholder="House name and street name" data-bill=""></div>
                                        <div class="u-s-m-b-15">

                                            <label for="billing-street-optional"></label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-street-optional" placeholder="Apartment, suite unit etc. (optional)" data-bill=""></div>
                                        <!--====== End - Street Address ======-->


                                        <!--====== Country ======-->
                                        <div class="u-s-m-b-15">

                                            <!--====== Select Box ======-->

                                            <label class="gl-label" for="billing-country">COUNTRY *</label><select class="select-box select-box--primary-style" id="billing-country" data-bill="">
                                                <option selected value="">Choose Country</option>
                                                <option value="uae">Morrocco (MA)</option>
                                                <option value="uk">France (FR)</option>
                                                <option value="us">United States (US)</option>
                                            </select>
                                            <!--====== End - Select Box ======-->
                                        </div>
                                        <!--====== End - Country ======-->


                                        <!--====== Town / City ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-town-city">CITY *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-town-city" data-bill=""></div>
                                        <!--====== End - Town / City ======-->

                                        <!--====== ZIP/POSTAL ======-->
                                        <div class="u-s-m-b-15">

                                            <label class="gl-label" for="billing-zip">ZIP/POSTAL CODE *</label>

                                            <input class="input-text input-text--primary-style" type="text" id="billing-zip" placeholder="Zip/Postal Code" data-bill=""></div>
                                        <!--====== End - ZIP/POSTAL ======-->

                                        <div>

                                            <button class="btn btn--e-transparent-brand-b-2" type="submit">SAVE</button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <h1 class="checkout-f__h1">ORDER SUMMARY</h1>

                                <!--====== Order Summary ======-->
                                <div class="o-summary">
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__item-wrap gl-scroll">
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">Yellow Wireless Headphone</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span></div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid" src="images/product/electronic/product18.jpg" alt=""></div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">Nikon DSLR Camera 4k</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span></div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid" src="images/product/women/product8.jpg" alt=""></div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">New Dress D Nice Elegant</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span></div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                            <div class="o-card">
                                                <div class="o-card__flex">
                                                    <div class="o-card__img-wrap">

                                                        <img class="u-img-fluid" src="images/product/men/product8.jpg" alt=""></div>
                                                    <div class="o-card__info-wrap">

                                                        <span class="o-card__name">

                                                            <a href="product-detail.html">New Fashion D Nice Elegant</a></span>

                                                        <span class="o-card__quantity">Quantity x 1</span>

                                                        <span class="o-card__price">$150.00</span></div>
                                                </div>

                                                <a class="o-card__del far fa-trash-alt"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">SHIPPING & BILLING</h1>
                                            <div class="ship-b">

                                                <span class="ship-b__text">Ship to:</span>
                                                <div class="ship-b__box u-s-m-b-10">
                                                    <p class="ship-b__p">4247 Ashford Drive Virginia VA-20006 USA (+0) 900901904</p>

                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <table class="o-summary__table">
                                                <tbody>
                                                    <tr>
                                                        <td>SHIPPING</td>
                                                        <td>$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TAX</td>
                                                        <td>$0.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SUBTOTAL</td>
                                                        <td>$379.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>GRAND TOTAL</td>
                                                        <td>$379.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="o-summary__section u-s-m-b-30">
                                        <div class="o-summary__box">
                                            <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                            <form class="checkout-f__payment">
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="cash-on-delivery" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="cash-on-delivery">Cash on Delivery</label></div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">Pay Upon Cash on delivery. (This service is only available for some countries)</span>
                                                </div>

                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="pay-with-card" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-with-card">Pay With Credit / Debit Card</label></div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">International Credit Cards must be eligible for use within the United States.</span>
                                                </div>
                                                <div class="u-s-m-b-10">

                                                    <!--====== Radio Box ======-->
                                                    <div class="radio-box">

                                                        <input type="radio" id="pay-pal" name="payment">
                                                        <div class="radio-box__state radio-box__state--primary">

                                                            <label class="radio-box__label" for="pay-pal">Pay Pal</label></div>
                                                    </div>
                                                    <!--====== End - Radio Box ======-->

                                                    <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll take you to Paypal's site to set up your billing information.</span>
                                                </div>
                                                <div class="u-s-m-b-15">

                                                    <!--====== Check Box ======-->
                                                    <div class="check-box">

                                                        <input type="checkbox" id="term-and-condition">
                                                        <div class="check-box__state check-box__state--primary">

                                                            <label class="check-box__label" for="term-and-condition">I consent to the</label></div>
                                                    </div>
                                                    <!--====== End - Check Box ======-->

                                                    <a class="gl-link">Terms of Service.</a>
                                                </div>
                                                <div>

                                                    <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Order Summary ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 3 ======-->
  

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/checkout.blade.php ENDPATH**/ ?>