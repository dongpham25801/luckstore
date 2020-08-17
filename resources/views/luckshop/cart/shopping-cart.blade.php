@extends('luckshop.layouts.main')
@section('page')

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" id="list-cart">
                    @include('luckshop.cart.list')
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
