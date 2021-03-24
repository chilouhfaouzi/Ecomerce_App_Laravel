@extends('layouts.template')

@section('content')
<div class="container">
    @section('brodcump')
    @endsection
    <!--====== Section 1 ======-->
   
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop-p">
                        <div class="shop-p__toolbar u-s-m-b-30">
                            @isset(request()->id_cat)
                            <div class="shop-p__meta-wrap u-s-m-b-60">

                                <span class="shop-p__meta-text-1">FOUND {{$products->count()}} RESULTS</span>
                                <div class="shop-p__meta-text-2 mt-2">
                                    @isset(request()->id_cat)                  
                                     <span>Categorie :</span>
                                    <span class="gl-tag btn--e-brand-shadow" href="#">{{$cat[0]->name}}</span>
                                    @endisset 
                                   
                                </div>
                            </div>
                            @endisset 
                            @isset(request()->search)                  
                            <div class="shop-p__meta-wrap u-s-m-b-60">

                                <span class="shop-p__meta-text-1">FOUND {{$products->count()}} RESULTS</span>
                                <div class="shop-p__meta-text-2 mt-2">
                                    
                                     <span>Word searched : </span>
                                    <span class="gl-tag btn--e-brand-shadow" href="#">{{request()->search}}</span>
                                </div>
                            </div>
                            @endisset 
                            
                            <div class="shop-p__tool-style">
                                <div class="tool-style__group u-s-m-b-8">


                                    <span class="js-shop-grid-target is-active">Grid</span>

                                    <span class="js-shop-list-target">List</span></div>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="tool-style__form-wrap">
                                        <div class="u-s-m-b-8"><select name="show_numbers" onchange="this.form.submit()" class="select-box select-box--transparent-b-2">
                                                <option
                                                @if($products->count() <= 8)
                                                selected
                                                @endif
                                                value="8">Show: 8</option>
                                                <option 
                                                @if($products->count() <= 12 && $products->count() > 8  )
                                                selected
                                                @endif
                                                value="12">Show: 12</option>
                                                <option
                                                @if($products->count() <= 16 && $products->count() > 12)
                                                selected
                                                @endif
                                                value="16">Show: 16</option>
                                                <option
                                                @if($products->count() == 24 && $products->count() > 16)
                                                selected
                                                @endif
                                                value="24">Show: 24</option>
                                            </select></div>
                                        <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                                <option selected>Sort By: Newest Items</option>
                                                <option>Sort By: Latest Items</option>
                                                <option>Sort By: Best Selling</option>
                                                <option>Sort By: Best Rating</option>
                                                <option>Sort By: Lowest Price</option>
                                                <option>Sort By: Highest Price</option>
                                            </select></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="shop-p__collection">
                            <div class="row is-grid-active">
                               
                                @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="product-m">
                                        <div class="product-m__thumb">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="{{$product->image}}" alt=""></a>
                                            <div class="product-m__quick-look">

                                                <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a></div>
                                            <div class="product-m__add-cart">

                                                <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a></div>
                                        </div>
                                        <div class="product-m__content">
                                            <div class="product-m__category">

                                                <a href="shop-side-version-2.html">{{$product->Category->name}}</a></div>
                                            <div class="product-m__name">

                                                <a href="product-detail.html">{{$product->title}}</a></div>
                                            <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

                                                </div>
                                            <div class="product-m__price">${{$product->price}}.00</div>
                                            <div class="product-m__hover">
                                                <div class="product-m__preview-description">

                                                    <span>{{$product->description}}</span></div>
                                                <div class="product-m__wishlist">

                                                    <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a></div>
                                            </div>
                                        </div>
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
                                                href="#"
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
                        <div class="u-s-p-y-60">

                            <!--====== Pagination ======-->
                            <ul class="shop-p__pagination">
                                <li class="is-active">

                                    <a href="shop-grid-full.html">1</a></li>
                                <li>

                                    <a href="shop-grid-full.html">2</a></li>
                                <li>

                                    <a href="shop-grid-full.html">3</a></li>
                                <li>

                                    <a href="shop-grid-full.html">4</a></li>
                                <li>

                                    <a class="fas fa-angle-right" href="shop-grid-full.html"></a></li>
                            </ul>
                            <!--====== End - Pagination ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!--====== End - Section 1 ======-->


   
</div>
@endsection
