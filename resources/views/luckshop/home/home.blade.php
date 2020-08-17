@extends('luckshop.layouts.main')
@section('page')

    <!-- Hero Section Begin -->
    @include('luckshop.layouts.slider')
    <!-- Hero Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>{{ $dmnu->name }}</h2>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            @foreach($pt_nu as $ptnu)
                            <li class="active">{{ $ptnu->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($sp_nu as $spnu)
                            <div class="product-item">
                            <div class="pi-pic">
                                @if($spnu->Images_products->count())
                                    @foreach($spnu->Images_products as $vitri => $photo)
                                        @if($vitri == 1)
                                            @php
                                                $formatImg = explode('/', $photo->link);
                                                array_shift($formatImg);
                                                $newImg = implode('/', $formatImg);
                                            @endphp
                                            <img src="{{ asset('storage') . '/' . $newImg }}" alt="">
                                        @endif
                                    @endforeach
                                @endif
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a onclick="CartAdd({{ $spnu->id }})" href="javascript:" style="background: #e7ab3c">Add to cart</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{ $spnu->Brands->name }}</div>
                                <a href="">
{{--                                    {{ route('productdetail',['slug' => $dmnu->Categories->slug, 'a' => $spnu->slug]) }}--}}
                                    <h5>{{ $spnu->name }}</h5>
                                </a>
                                <div class="product-price">
                                    @if($spnu->promo_price > 0)
                                        {{ number_format($spnu->promo_price) }}<u>đ</u>
                                        <span>{{ number_format($spnu->price) }}<u>đ</u></span>
                                    @else
                                        {{ number_format($spnu->price) }}<u>đ</u>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            @foreach($pt_nam as $ptnam)
                            <li class="active">{{ $ptnam->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($sp_nam as $spnam)
                        <div class="product-item">
                            <div class="pi-pic">
                                @if($spnam->Images_products->count())
                                    @foreach($spnam->Images_products as $vt => $foto)
                                        @if($vt == 1)
                                            @php
                                                $formatImg = explode('/', $foto->link);
                                                array_shift($formatImg);
                                                $newImg = implode('/', $formatImg);
                                            @endphp
                                            <img src="{{ asset('storage') . '/' . $newImg }}" alt="">
                                        @endif
                                    @endforeach
                                @endif
                                <div class="sale">Sale</div>
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="quick-view"><a onclick="CartAdd({{ $spnam->id }})" href="javascript:" style="background: #e7ab3c">Add to cart</a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{ $spnam->Brands->name }}</div>
                                <a href="">
{{--                                    {{ route('productdetail',['slug' => $dmnam->Categories->slug, 'a' => $spnam->slug]) }}--}}
                                    <h5>{{ $spnam->name }}</h5>
                                </a>
                                <div class="product-price">
                                    @if($spnam->promo_price > 0)
                                        {{ number_format($spnam->promo_price) }}<u>đ</u>
                                        <span>{{ number_format($spnam->price) }}<u>đ</u></span>
                                    @else
                                        {{ number_format($spnam->price) }}<u>đ</u>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>{{ $dmnam->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

@endsection


