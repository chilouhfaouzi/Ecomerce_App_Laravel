

<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__env->startSection('brodcump'); ?>
    <?php $__env->stopSection(); ?>
    <!--====== Section 1 ======-->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-p">
                    <div class="shop-p__toolbar u-s-m-b-30">
                        <?php if(isset(request()->id_cat)): ?>
                        <div class="shop-p__meta-wrap u-s-m-b-60">

                            <span class="shop-p__meta-text-1">FOUND <?php echo e($products->count()); ?> RESULTS</span>
                            <div class="shop-p__meta-text-2 mt-2">
                                <?php if(isset(request()->id_cat)): ?>
                                <span>Categorie :</span>
                                <span class="gl-tag btn--e-brand-shadow" href="#"><?php echo e($cat[0]->name); ?></span>
                                <?php endif; ?>

                            </div>
                        </div>
                        <?php endif; ?>
                        <?php if(isset(request()->search)): ?>
                        <div class="shop-p__meta-wrap u-s-m-b-60">

                            <span class="shop-p__meta-text-1">FOUND <?php echo e($products->count()); ?> RESULTS</span>
                            <div class="shop-p__meta-text-2 mt-2">

                                <span>Word searched : </span>
                                <span class="gl-tag btn--e-brand-shadow" href="#"><?php echo e(request()->search); ?></span>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div class="shop-p__tool-style">
                            <div class="tool-style__group u-s-m-b-8">


                                <span class="js-shop-grid-target is-active">Grid</span>

                                <span class="js-shop-list-target">List</span></div>
                            <form action="" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="tool-style__form-wrap">
                                    <div class="u-s-m-b-8"><select name="show_numbers" onchange="this.form.submit()"
                                            class="select-box select-box--transparent-b-2">
                                            <option <?php if($products->count() <= 8): ?> selected <?php endif; ?> value="8">Show: 8
                                            </option>
                                            <option <?php if($products->count() <= 12 && $products->count() > 8 ): ?>
                                                    selected
                                                    <?php endif; ?>
                                                    value="12">Show: 12</option>
                                            <option <?php if($products->count() <= 16 && $products->count() > 12): ?>
                                                    selected
                                                    <?php endif; ?>
                                                    value="16">Show: 16</option>
                                            <option <?php if($products->count() == 24 && $products->count() > 16): ?>
                                                selected
                                                <?php endif; ?>
                                                value="24">Show: 24</option>
                                        </select></div>
                                    <div class="u-s-m-b-8"><select name="sort_by" onchange="this.form.submit()"
                                            class="select-box select-box--transparent-b-2">
                                            <option <?php if($slc==1 ): ?> selected <?php endif; ?> value="new">Sort By: Newest Items
                                            </option>
                                            <option <?php if($slc==2 ): ?> selected <?php endif; ?> value="cheap">Sort By: Lowest Price
                                            </option>
                                            <option <?php if($slc==3 ): ?> selected <?php endif; ?> value="expensive">Sort By: Highest
                                                Price</option>
                                        </select></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="shop-p__collection">
                        <div class="row is-grid-active">

                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product-m">
                                    <div class="product-m__thumb">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                            href="<?php echo e(Route('product', $product->id)); ?>">

                                            <img class="aspect__img" src="<?php echo e($product->image); ?>" alt=""></a>
                                        <div class="product-m__quick-look">

                                            <a class="fas fa-search" data-modal="modal"
                                                data-modal-id="#quick-look<?php echo e($product->id); ?>" data-tooltip="tooltip"
                                                data-placement="top" title="Quick Look"></a></div>
                                        <div class="product-m__add-cart">
                                            <form action="<?php echo e(Route('cart-store')); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

                                                <a data-modal="modal" data-tooltip="tooltip" data-placement="top"
                                                    title="Add to Cart" class="btn--e-brand"
                                                    onclick="$(this).closest('form').submit();">Add to Cart</a>
                                            </form>


                                        </div>
                                    </div>
                                    <div class="product-m__content">
                                        <div class="product-m__category">

                                            <a href="<?php echo e(Route('items_cats',
                                    ['id_cat' =>$product->Category->id
                                    ])); ?>"><?php echo e($product->Category->name); ?></a></div>
                                        <div class="product-m__name">

                                            <a href="<?php echo e(Route('product', $product->id)); ?>"><?php echo e($product->title); ?></a></div>
                                        <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i
                                                class="far fa-star"></i><i class="far fa-star"></i>

                                        </div>
                                        <div class="product-m__price"><?php echo e(getPrice($product->price)); ?></div>
                                        <div class="product-m__hover">
                                            <div class="product-m__preview-description">

                                                <span><?php echo e($product->description); ?></span></div>
                                            <div class="product-m__wishlist">

                                                <a class="far fa-heart" href="#" data-tooltip="tooltip"
                                                    data-placement="top" title="Add to Wishlist"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== Quick Look Modal ======-->
                            <div class="modal fade quick-look" id="quick-look<?php echo e($product->id); ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content modal--shadow">
                                        <button class="btn dismiss-button fas fa-times" type="button"
                                            data-dismiss="modal"></button>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <!--====== Product Breadcrumb ======-->
                                                    <div class="pd-breadcrumb u-s-m-b-30">
                                                        <ul class="pd-breadcrumb__list">
                                                            <li class="has-separator">
                                                                <a href="<?php echo e(Route('home')); ?>">Home</a>
                                                            </li>
                                                            <li class="is-marked">
                                                                <a href="#"><?php echo e($product->Category->name); ?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!--====== End - Product Breadcrumb ======-->

                                                    <!--====== Product Detail ======-->
                                                    <div class="pd u-s-m-b-30">
                                                        <div class="pd-wrap">
                                                            <div id="js-product-detail-modal">
                                                                <div>
                                                                    <img class="u-img-fluid" src="<?php echo e($product->image); ?>"
                                                                        alt="" />
                                                                </div>                                                           
                                                            </div>
                                                        </div>
                                                        <div class="u-s-m-t-15">
                                                            <div id="js-product-detail-modal-thumbnail">
                                                              
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Product Detail ======-->
                                                </div>
                                                <div class="col-lg-7">
                                                    <!--====== Product Right Side Details ======-->
                                                    <div class="pd-detail">
                                                        <div>
                                                            <span class="pd-detail__name"><?php echo e($product->title); ?></span>
                                                        </div>
                                                        <div>
                                                            <div class="pd-detail__inline">
                                                                <span
                                                                    class="pd-detail__price"><?php echo e(getPrice($product->price)); ?></span>

                                                                <del class="pd-detail__del"><?php echo e(getPrice($product->last_price)); ?></del>
                                                            </div>
                                                        </div>
                                                        <div class="u-s-m-b-15">
                                                            <div class="pd-detail__rating gl-rating-style">
                                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i><i
                                                                    class="fas fa-star"></i><i
                                                                    class="fas fa-star-half-alt"></i>

                                                            </div>
                                                        </div>
                                                        <div class="u-s-m-b-15">
                                                            <div class="pd-detail__inline">
                                                                <span class="pd-detail__stock">200 in stock</span>

                                                                <span class="pd-detail__left">Only 2 left</span>
                                                            </div>
                                                        </div>
                                                        <div class="u-s-m-b-15">
                                                            <span
                                                                class="pd-detail__preview-desc"><?php echo e($product->description); ?></span>
                                                        </div>


                                                        <div class="u-s-m-b-15">
                                                            <form class="pd-detail__form"
                                                                action="<?php echo e(Route('cart-store')); ?>" method="POST">

                                                                <?php echo csrf_field(); ?>
                                                                <div class="pd-detail-inline-2">
                                                                    <div class="u-s-m-b-15">
                                                                        <!--====== Input Counter ======-->
                                                                        <div class="input-counter">
                                                                            <span
                                                                                class="input-counter__minus fas fa-minus"></span>

                                                                            <input
                                                                                class="input-counter__text input-counter--text-primary-style"
                                                                                type="text" value="1" data-min="1"
                                                                                data-max="1000" />

                                                                            <span
                                                                                class="input-counter__plus fas fa-plus"></span>
                                                                        </div>
                                                                        <!--====== End - Input Counter ======-->
                                                                    </div>
                                                                    <div class="u-s-m-b-15">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo e($product->id); ?>">

                                                                        <a class="btn btn--e-brand-b-2"
                                                                            title="Add to Cart"
                                                                            onclick="$(this).closest('form').submit();">
                                                                            Add to Cart
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="u-s-m-b-15">
                                                            <span class="pd-detail__label u-s-m-b-8">Product
                                                                Policy:</span>
                                                            <ul class="pd-detail__policy-list">
                                                                <li>
                                                                    <i class="fas fa-check-circle u-s-m-r-8"></i>

                                                                    <span>Buyer Protection.</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-check-circle u-s-m-r-8"></i>

                                                                    <span>Full Refund if you
                                                                        don't receive your
                                                                        order.</span>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-check-circle u-s-m-r-8"></i>

                                                                    <span>Returns accepted if
                                                                        product not as
                                                                        described.</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <!--====== End - Product Right Side Details ======-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Quick Look Modal ======-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                    <div class="u-s-p-y-60">

                        <!--====== Pagination ======-->

                        <?php echo e($products->links()); ?>


                        <!--====== End - Pagination ======-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== End - Section 1 ======-->



</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fawzi\Desktop\laravel_ecomerce_prj\resources\views/items_cats.blade.php ENDPATH**/ ?>