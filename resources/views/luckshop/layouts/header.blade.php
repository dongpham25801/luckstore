<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="ht-left">
                <div class="mail-service">
                    <i class=" fa fa-envelope"></i>
                    @if (Auth::check())
                        {{ Auth::user()->email }}
                    @endif
                </div>
                <div class="phone-service">
                    <i class=" fa fa-phone"></i>
                    @if (Auth::check())
                        {{ Auth::user()->phone }}
                    @endif
                </div>
            </div>
            <div class="ht-right">
                <span class="text-dark showSignUp login-panel" onclick="showSignUp()">
                @guest
                    <i id="a-icon-user" class="fa fa-user"></i>
                    <span class="btn-sign-in-up" id="btn-sign">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-warning" id="sign-in">Đăng nhập</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm btn-secondary" id="sign-up" style="margin-top: 10px">Đăng ký</a>
                        @endif
                    </span>
                @else
                    <i id="a-icon-user" class="fa fa-user-circle" aria-hidden="true"></i>
                    <span class="btn-sign-in-up" id="btn-sign">
                            <a href="" class="btn btn-sm btn-warning" id="sign-in">{{ Auth::user()->name }}</a>
                            <a href="{{ route('logout') }}" class="btn btn-sm btn-secondary" id="sign-up" style="margin-top: 10px"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </span>
                @endguest
                </span>
                <div class="top-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-linkedin"></i></a>
                    <a href="#"><i class="ti-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/">
                            <img src="img/logo-luckshop.png" alt="" height="40ox" width="120px">
                        </a>
                    </div>
{{--                    <div class="logo"><a href="#">LuckShop</a></div>--}}
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <button type="button" class="category-btn">All Categories</button>
                        <div class="input-group">
                            <input type="text" placeholder="What do you need?">
                            <button type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            <a href="#">
                                <i class="icon_heart_alt"></i>
{{--                                <span>1</span>--}}
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="{{ route('cart') }}">
                                <i class="icon_bag_alt"></i>
                                @if(Session::has('Cart') != null)
                                    <span id="total-sl-cart">{{ Session::get('Cart')->totalQty }}</span>
                                @else
                                    <span id="total-sl-cart">0</span>
                                @endif
                            </a>
                            <div class="cart-hover">
                                <div id="change-item-cart">
                                    @if(Session::has('Cart') != null)

                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                @foreach(Session::get('Cart')->items as $p)
                                                    <tr>
{{--                                                        @foreach($piktro as $key => $thumb)--}}
{{--                                                                @php--}}
{{--                                                                    $formatImg = explode('/', $thumb->link);--}}
{{--                                                                    array_shift($formatImg);--}}
{{--                                                                    $newImg = implode('/', $formatImg);--}}
{{--                                                                @endphp--}}
                                                        <td class="si-pic"><img src="{{ Storage::url($p['productInfo']->thumbnail) }}" alt="" width="70px" height="70px"></td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>{{ number_format($p['productInfo']->price) }}<u>đ</u> x {{ $p['sl'] }}</p>
                                                                <h6>{{ $p['productInfo']->name }}</h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close" data-idCart="{{ $p['productInfo']->id }}"></i>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>{{ number_format(Session::get('Cart')->totalPrice) }}<u>đ</u></h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="{{ route('cart') }}" class="primary-btn view-card">VIEW CARD</a>
                                            <a href="" class="primary-btn checkout-btn">CHECK OUT</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </li>
{{--                        <li class="cart-price">$150.00</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-item">
        <div class="container">
            <div class="nav-depart">
                <div class="depart-btn">
                    <i class="ti-menu"></i>
                    <span>All Categories</span>
                    <ul class="depart-hover">
                        @foreach($category as $cate)
                        <li class="active font-weight-bold"><a href="{{ route('menunam',$cate->slug) }}">{{ $cate->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <nav class="nav-menu mobile-menu">
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="./shop.html">New Arrival</a></li>
                    <li><a href="./shop.html">Offer</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                    <li><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="./check-out.html">Checkout</a></li>
                            <li><a href="./register.html">Register</a></li>
                            <li><a href="./login.html">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
