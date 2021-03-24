@extends('layouts.template')

@section('content')
<div class="container">

   
    @section('title', 'cart')
   


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

            @if (Cart::count()>0)

            <!--====== Section Content ======-->
            <div class="section__content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
                            <div class="table-responsive">
                                <table class="table-p">
                                    <tbody>
                                        @foreach (Cart::content() as $cart_product)
                                             <!--====== Row ======-->
                                        <tr>
                                            <td>
                                                <div class="table-p__box">
                                                    <div class="table-p__img-wrap">

                                                        <img class="u-img-fluid"  style="height: 100%" src="{{$cart_product->model->image}}" alt=""></div>
                                                    <div class="table-p__info">

                                                        <span class="table-p__name">

                                                            <a href="product-detail.html">{{$cart_product->model->title}}</a></span>

                                                        <span class="table-p__category">

                                                            <a href="shop-side-version-2.html">{{$cart_product->model->Category->name}}</a></span>
                                                      
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                <span class="table-p__price">${{$cart_product->model->price}}.00</span></td>
                                            <td>
                                                <div class="table-p__input-counter-wrap">

                                                    <!--====== Input Counter ======-->
                                                    <div class="input-counter">

                                                        <span class="input-counter__minus fas fa-minus"></span>

                                                        <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1" data-max="1000">

                                                        <span class="input-counter__plus fas fa-plus"></span></div>
                                                    <!--====== End - Input Counter ======-->
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-p__del-wrap">
                                                        <form action="{{Route('cartdestroy',$cart_product->rowId)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="far fa-trash-alt table-p__delete-link"   onclick="$(this).closest('form').submit();"></a></div>
                                                        </form>
                                            </td>
                                        </tr>
                                        <!--====== End - Row ======-->
                                        @endforeach
                                       


                                    </tbody>
                                </table>
                            </div>
                             
                          
                           
                        </div>
                        <div class="col-lg-12">
                            <div class="route-box">
                                <div class="route-box__g1">

                                    <a class="route-box__link" href="{{Route('home')}}"><i class="fas fa-long-arrow-alt-left"></i>

                                        <span>CONTINUE SHOPPING</span></a></div>
                                <div class="route-box__g2">

                                    <a class="route-box__link" href="{{Route('clearcart')}}"><i class="fas fa-trash"></i>

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
                            <form class="f-cart">
                                <div class="row">
                                    
                                    <div class="col-lg-12 col-md-6 u-s-m-b-30">
                                        <div class="f-cart__pad-box">
                                            <div class="u-s-m-b-30">
                                                <table class="f-cart__table">
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
        @else
        <div class="alert text-center" >
           <h3> You don't have any items in your cart.</h3>
           <div class="my-3 font-weight-bold">
            <a class="gl-link" style="font-size: 16px" href="{{Route ('home')}}">Return to Store</a>

           </div>
        </div>
       @endif
    
</div>
@endsection
