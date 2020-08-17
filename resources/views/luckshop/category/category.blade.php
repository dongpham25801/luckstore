@extends('luckshop.layouts.main')
@section('page')

    @include('luckshop.layouts.banner')

    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        @foreach($pro_type as $pt)
                        <h4 class="card-title font-weight-bold">{{ $pt->name }}</h4>
                        <div class="row">
                            @if($pt->Products->count())
                                @foreach($pt->Products as $pr)
                                <div class="col-lg-3 col-sm-9">
                                <div class="product-item">
                                    @if($pr->Images_products->count())
                                        @foreach($pr->Images_products as $key => $thumb)
                                            @if($key == 1)
                                                @php
                                                    $formatImg = explode('/', $thumb->link);
                                                    array_shift($formatImg);
                                                    $newImg = implode('/', $formatImg);
                                                @endphp
                                    <div class="pi-pic">
                                        <img src="{{ asset('storage') . '/' . $newImg }}" alt="">
                                        <div class="sale pp-sale">{{ $pr->MaSP }}</div>
                                        <div class="icon">
                                            <i class="icon_heart_alt" style="color: #902b2b"></i>
                                        </div>
                                        <ul>
                                            <li class="quick-view"><a onclick="CartAdd({{ $pr->id }})" href="javascript:" style="background: #e7ab3c">Add to cart</a></li>
                                        </ul>
                                    </div>
                                            @endif
                                        @endforeach
                                    @endif
                                    <div class="pi-text">
                                        <a href="{{ route('productdetail',['slug' => $pt->Categories->slug, 'a' => $pr->slug]) }}">
                                            <h5>{{ $pr->name }}</h5>
                                        </a>
                                        @if($pt->promo_price > 0)
                                        <div class="product-price">
                                            {{ $pr->promo_price }}
                                            <span>{{ $pr->price }}</span>
                                        </div>
                                        @else
                                        <div class="product-price">{{ $pr->price }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endif
                        </div>
                        @endforeach
                    </div>
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">
                            Loading More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
