
@if(Session::has('Cart') != null)

    <div class="select-items">
        <table>
            <tbody>
            @foreach(Session::get('Cart')->items as $p)
                <tr>
{{--                    @foreach($piktro as $key => $thumb)--}}
{{--                        @if($key == 1)--}}
{{--                            @php--}}
{{--                                $formatImg = explode('/', $thumb->link);--}}
{{--                                array_shift($formatImg);--}}
{{--                                $newImg = implode('/', $formatImg);--}}
{{--                            @endphp--}}
                            <td class="si-pic"><img src="{{ Storage::url($p['productInfo']->thumbnail) }}" alt="" width="70px" height="70px"></td>
{{--                        @endif--}}
{{--                    @endforeach--}}
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
        <input id="total-sl" type="number" value="{{ Session::get('Cart')->totalQty }}" hidden>
    </div>
    <div class="select-button">
        <a href="#" class="primary-btn view-card">VIEW CARD</a>
        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
    </div>
@endif





{{--@if($newcart != null)--}}

{{--    <div class="select-items">--}}
{{--    <table>--}}
{{--        <tbody>--}}
{{--        @foreach($newcart->items as $p)--}}
{{--        @foreach(Session::get)--}}
{{--        <tr>--}}
{{--            @foreach($piktro as $key => $thumb)--}}
{{--                @if($key == 1)--}}
{{--                    @php--}}
{{--                        $formatImg = explode('/', $thumb->link);--}}
{{--                        array_shift($formatImg);--}}
{{--                        $newImg = implode('/', $formatImg);--}}
{{--                    @endphp--}}
{{--                    <td class="si-pic"><img src="{{ asset('storage') . '/' . $newImg }}" alt="" width="70px" height="70px"></td>--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--            <td class="si-text">--}}
{{--                <div class="product-selected">--}}
{{--                    <p>{{ number_format($p['productInfo']->price) }}<u>đ</u> x {{ $p['sl'] }}</p>--}}
{{--                    <h6>{{ $p['productInfo']->name }}</h6>--}}
{{--                </div>--}}
{{--            </td>--}}
{{--            <td class="si-close">--}}
{{--                <i class="ti-close" data-idCart="{{ $p['productInfo']->id }}"></i>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}
{{--</div>--}}
{{--    <div class="select-total">--}}
{{--        <span>total:</span>--}}
{{--        <h5>{{ number_format($newcart->totalPrice) }}<u>đ</u></h5>--}}
{{--    </div>--}}
{{--    <div class="select-button">--}}
{{--        <a href="#" class="primary-btn view-card">VIEW CARD</a>--}}
{{--        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>--}}
{{--    </div>--}}
{{--@endif--}}

