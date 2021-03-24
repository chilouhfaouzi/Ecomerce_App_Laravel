@extends('layouts.template')

@section('content')
<div class="container">
    @section('brodcump')
    @endsection


        <!--====== Section 1 ======-->

        <!--====== Electronic Category ======-->
        <div class="u-s-p-y-60" id="electronic-01">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="block">
                                <span class="block__title"
                                    >TOP CATEGORY</span
                                >
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
                        @foreach ($cats as $cat)
                        <div
                            class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30"
                        >                                                             
                            <div class="category-o">
                                <div
                                    class="aspect aspect--bg-grey aspect--square category-o__img-wrap"
                                >
                                    <img
                                        class="aspect__img category-o__img"
                                        src="{{$cat->image}}"
                                        alt=""
                                    />
                                </div>
                                <div class="category-o__info">
                                    <a
                                        class="category-o__shop-now btn--e-white-brand"
                                        href="{{Route('items_cats',
                                        ['id_cat' =>$cat->id
                                        ])}}"
                                        >{{$cat->name}}</a
                                    >
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>

        <!--====== Electronic Category ======-->
        <!--====== End - Section 1 ======-->
        <!--====== Section 2 ======-->

        <!--====== End - Section 2 ======-->
        <!--====== Section 2 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-16">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    TOP TRENDING
                                </h1>

                                <span class="section__span u-c-silver"
                                    >CHOOSE CATEGORY</span
                                >
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
                        <div class="col-lg-12">
                            <div class="filter-category-container">
                                <div class="filter__category-wrapper">
                                    <button
                                        class="btn filter__btn filter__btn--style-1 js-checked"
                                        type="button"
                                        data-filter="*"
                                    >
                                        ALL
                                    </button>
                                </div>
                                @foreach ($cats as $cat)
                                <div class="filter__category-wrapper">
                                    <button
                                        class="btn filter__btn filter__btn--style-1"
                                        type="button"
                                        data-filter=".{{$cat->name}}"
                                    >
                                      
                                         {{$cat->name}} 
                                      
                                    </button>
                                </div>
                                @endforeach
                               
                               
                            </div>
                            <div
                                class="filter__grid-wrapper u-s-m-t-30"
                            >
                            <div class="row">

                         @foreach ($products as $product)
                         <div
                         class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item {{$product->Category->name}}">
                         <div
                             class="product-o product-o--hover-on product-o--radius"
                         >
                             <div
                                 class="product-o__wrap"
                             >
                                 <a
                                     class="aspect aspect--bg-grey aspect--square u-d-block"
                                     href="{{Route('product')}}"
                                 >
                                     <img
                                         class="aspect__img"
                                         src="{{$product->image}}"
                                         alt=""
                                 /></a>
                                 <div
                                     class="product-o__action-wrap"
                                 >
                                     <ul
                                         class="product-o__action-list"
                                     >
                                         <li>
                                             <a
                                                 data-modal="modal"
                                                 data-modal-id="#quick-look"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Quick View"
                                                 ><i
                                                     class="fas fa-search-plus"
                                                 ></i
                                             ></a>
                                         </li>
                                         <li>
                                             <a
                                                 data-modal="modal"
                                                 data-modal-id="#add-to-cart"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Add to Cart"
                                                 ><i
                                                     class="fas fa-plus-circle"
                                                 ></i
                                             ></a>
                                         </li>
                                         <li>
                                             <a
                                                 href="signin.html"
                                                 data-tooltip="tooltip"
                                                 data-placement="top"
                                                 title="Add to Wishlist"
                                                 ><i
                                                     class="fas fa-heart"
                                                 ></i
                                             ></a>
                                         </li>
                                        
                                     </ul>
                                 </div>
                             </div>

                             <span
                                 class="product-o__category"
                             >
                                 <a
                                     href="shop-side-version-2.html"
                                     >{{ $product->Category->name}}</a
                                 ></span
                             >

                             <span
                                 class="product-o__name"
                             >
                                 <a
                                     href="product-detail.html"
                                     >{{ $product->title }}</a
                                 ></span
                             >
                             <div
                                 class="product-o__rating gl-rating-style"
                             >
                                 <i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star"
                                 ></i
                                 ><i
                                     class="fas fa-star-half-alt"
                                 ></i>

                             </div>

                             <span
                                 class="product-o__price"
                                 >${{ $product->price }}.00

                                 <span
                                     class="product-o__discount"
                                     >$160.00</span
                                 ></span
                             >
                         </div>
                     </div>
                     
            <!--====== Quick Look Modal ======-->
            <div class="modal fade" id="quick-look">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal--shadow">
                        <button
                            class="btn dismiss-button fas fa-times"
                            type="button"
                            data-dismiss="modal"
                        ></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">
                                    <!--====== Product Breadcrumb ======-->
                                    <div class="pd-breadcrumb u-s-m-b-30">
                                        <ul class="pd-breadcrumb__list">
                                            <li class="has-separator">
                                                <a href="{{Route('home')}}">Home</a>
                                            </li>                                      
                                            <li class="is-marked">
                                                <a
                                                href="{{Route('items_cats',
                                                ['id_cat' =>$cat->id
                                                ])}}"
                                                    >{{$product->Category->name}}</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                    <!--====== End - Product Breadcrumb ======-->

                                    <!--====== Product Detail ======-->
                                    <div class="pd u-s-m-b-30">
                                        <div class="pd-wrap">
                                            <div id="js-product-detail-modal">
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="{{$product->image}}"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-2.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-3.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-4.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-5.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="u-s-m-t-15">
                                            <div
                                                id="js-product-detail-modal-thumbnail"
                                            >
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-1.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-2.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-3.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-4.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                                <div>
                                                    <img
                                                        class="u-img-fluid"
                                                        src="images/product/product-d-5.jpg"
                                                        alt=""
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Product Detail ======-->
                                </div>
                                <div class="col-lg-7">
                                    <!--====== Product Right Side Details ======-->
                                    <div class="pd-detail">
                                        <div>
                                            <span class="pd-detail__name"
                                                >{{$product->title}}</span
                                            >
                                        </div>
                                        <div>
                                            <div class="pd-detail__inline">
                                                <span class="pd-detail__price"
                                                    >${{$product->price}}</span
                                                >

                                               <del class="pd-detail__del"
                                                    >$28.97</del
                                                >
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div
                                                class="pd-detail__rating gl-rating-style"
                                            >
                                                <i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i class="fas fa-star"></i
                                                ><i
                                                    class="fas fa-star-half-alt"
                                                ></i>

                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">
                                                <span class="pd-detail__stock"
                                                    >200 in stock</span
                                                >

                                                <span class="pd-detail__left"
                                                    >Only 2 left</span
                                                >
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <span
                                                class="pd-detail__preview-desc"
                                                >{{$product->description}}</span
                                            >
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">
                                                <span
                                                    class="pd-detail__click-wrap"
                                                    ><i
                                                        class="far fa-heart u-s-m-r-6"
                                                    ></i>

                                                    <a href="signin.html"
                                                        >Add to Wishlist</a
                                                    >
                                           
                                            </div>
                                        </div>

                                        <div class="u-s-m-b-15">
                                            <form class="pd-detail__form">
                                                <div class="pd-detail-inline-2">
                                                    <div class="u-s-m-b-15">
                                                        <!--====== Input Counter ======-->
                                                        <div
                                                            class="input-counter"
                                                        >
                                                            <span
                                                                class="input-counter__minus fas fa-minus"
                                                            ></span>

                                                            <input
                                                                class="input-counter__text input-counter--text-primary-style"
                                                                type="text"
                                                                value="1"
                                                                data-min="1"
                                                                data-max="1000"
                                                            />

                                                            <span
                                                                class="input-counter__plus fas fa-plus"
                                                            ></span>
                                                        </div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                    <div class="u-s-m-b-15">
                                                        <button
                                                            class="btn btn--e-brand-b-2"
                                                            type="submit"
                                                        >
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <span
                                                class="pd-detail__label u-s-m-b-8"
                                                >Product Policy:</span
                                            >
                                            <ul class="pd-detail__policy-list">
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Buyer Protection.</span
                                                    >
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Full Refund if you
                                                        don't receive your
                                                        order.</span
                                                    >
                                                </li>
                                                <li>
                                                    <i
                                                        class="fas fa-check-circle u-s-m-r-8"
                                                    ></i>

                                                    <span
                                                        >Returns accepted if
                                                        product not as
                                                        described.</span
                                                    >
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
                         @endforeach
                          
                    </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="load-more">
                                <a
                                    class="btn btn--e-brand"
                                    type="button"
                                    href="{{Route('items_cats')}}"
                                >
                                    Load More
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 2 ======-->

        <!--====== Section 4 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    LAST ADDED
                                </h1>

                                <span class="section__span u-c-silver"
                                    >GET UP FOR NEW ARRIVALS</span
                                >
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
                        <div
                            class="owl-carousel product-slider"
                            data-item="4"
                        >
                        @foreach ($last_added as $item)
                        <div class="u-s-m-b-30">
                            <div
                                class="product-o product-o--hover-on"
                            >
                                <div class="product-o__wrap">
                                    <a
                                        class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="product-detail.html"
                                    >
                                        <img
                                            class="aspect__img"
                                            src="{{$item->image}}"
                                            alt=""
                                    /></a>
                                    <div
                                        class="product-o__action-wrap"
                                    >
                                        <ul
                                            class="product-o__action-list"
                                        >
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#quick-look"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Quick View"
                                                    ><i
                                                        class="fas fa-search-plus"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#add-to-cart"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Cart"
                                                    ><i
                                                        class="fas fa-plus-circle"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="signin.html"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Wishlist"
                                                    ><i
                                                        class="fas fa-heart"
                                                    ></i
                                                ></a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                    <a
                                        href="shop-side-version-2.html"
                                        >{{$item->Category->name}}</a
                                    ></span
                                >

                                <span class="product-o__name">
                                    <a href="product-detail.html"
                                        >{{$item->title}}</a
                                    ></span
                                >
                                <div
                                    class="product-o__rating gl-rating-style"
                                >
                                    <i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i
                                    ><i class="far fa-star"></i>

                                   
                                </div>

                                <span class="product-o__price"
                                    >${{$item->price}}

                                    <span
                                        class="product-o__discount"
                                        >$160.00</span
                                    ></span
                                >
                            </div>
                        </div>
                        @endforeach
                           
                         
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 4 ======-->

        <!--====== Section 6 ======-->
        <div class="u-s-p-y-60">
            <!--====== Section Intro ======-->
            <div class="section__intro u-s-m-b-46">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section__text-wrap">
                                <h1
                                    class="section__heading u-c-secondary u-s-m-b-12"
                                >
                                    FEATURED PRODUCTS
                                </h1>

                                <span class="section__span u-c-silver"
                                    >FIND NEW FEATURED PRODUCTS</span
                                >
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
                        @foreach ($best_offers as $offer)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30" >
                            <div
                                class="product-o product-o--hover-on u-h-100"
                            >
                                <div class="product-o__wrap">
                                    <a
                                        class="aspect aspect--bg-grey aspect--square u-d-block"
                                        href="product-detail.html"
                                    >
                                        <img
                                            class="aspect__img"
                                            src="{{$offer->image}}"
                                            alt=""
                                    /></a>
                                    <div class="product-o__action-wrap">
                                        <ul
                                            class="product-o__action-list"
                                        >
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#quick-look"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Quick View"
                                                    ><i
                                                        class="fas fa-search-plus"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    data-modal="modal"
                                                    data-modal-id="#add-to-cart"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Cart"
                                                    ><i
                                                        class="fas fa-plus-circle"
                                                    ></i
                                                ></a>
                                            </li>
                                            <li>
                                                <a
                                                    href="signin.html"
                                                    data-tooltip="tooltip"
                                                    data-placement="top"
                                                    title="Add to Wishlist"
                                                    ><i
                                                        class="fas fa-heart"
                                                    ></i
                                                ></a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                </div>

                                <span class="product-o__category">
                                    <a href="shop-side-version-2.html"
                                        >{{$offer->Category->name}}</a
                                    ></span
                                >

                                <span class="product-o__name">
                                    <a href="product-detail.html"
                                        >{{$offer->title}}</a
                                    ></span
                                >
                                <div
                                    class="product-o__rating gl-rating-style"
                                >
                                    <i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i class="fas fa-star"></i
                                    ><i
                                        class="fas fa-star-half-alt"
                                    ></i>

                                   
                                </div>

                                <span class="product-o__price"
                                    >${{$offer->price}}

                                    <span class="product-o__discount"
                                        >$160.00</span
                                    ></span
                                >
                            </div>
                        </div>
                        @endforeach
                       
       
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 6 ======-->
        <!--====== Section 9 ======-->
        <div class="u-s-p-b-60">
            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >Free Shipping</span
                                    >

                                    <span class="service__info-text-2"
                                        >Free shipping on all US order
                                        or order above $200</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i class="fas fa-redo"></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >Shop with Confidence</span
                                    >

                                    <span class="service__info-text-2"
                                        >Our Protection covers your
                                        purchase from click to
                                        delivery</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 u-s-m-b-30">
                            <div class="service u-h-100">
                                <div class="service__icon">
                                    <i
                                        class="fas fa-headphones-alt"
                                    ></i>
                                </div>
                                <div class="service__info-wrap">
                                    <span class="service__info-text-1"
                                        >24/7 Help Center</span
                                    >

                                    <span class="service__info-text-2"
                                        >Round-the-clock assistance for
                                        a smooth shopping
                                        experience</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section Content ======-->
        </div>
        <!--====== End - Section 9 ======-->
</div>
@endsection
