<div class="cart-table">
    <table>
        <thead>
        <tr>
            <th>Image</th>
            <th class="p-name">Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Save</th>
            <th>Trash</th>
            {{--                                <th><i class="ti-close"></i></th>--}}
        </tr>
        </thead>
        <tbody>
        @if(Session::has('Cart') != null)
            @foreach(Session::get('Cart')->items as $p)
                <tr>

                    <td class="cart-pic first-row"><img src="{{ Storage::url($p['productInfo']->thumbnail) }}" width="120px" height="120px"></td>

                    <td class="cart-title first-row">
                        <h5>{{ $p['productInfo']->name }}</h5>
                    </td>
                    <td class="p-price first-row">{{ number_format($p['productInfo']->price) }}<u>đ</u></td>
                    <td class="qua-col first-row">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="{{ $p['sl'] }}" id="sl-item-{{ $p['productInfo']->id }}">
                            </div>
                        </div>
                    </td>
                    <td class="total-price first-row">{{ number_format($p['price']) }}<u>đ</u></td>
                    <td class="close-td first-row"><i class="ti-save" onclick="CartSave({{ $p['productInfo']->id }});"></i></td>
                    <td class="close-td first-row"><i class="ti-close" onclick="delCart({{ $p['productInfo']->id }});"></i></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="discount-coupon">
            <h6>Discount Codes</h6>
            <form action="#" class="coupon-form">
                <input type="text" placeholder="Enter your codes">
                <button type="submit" class="site-btn coupon-btn">Apply</button>
            </form>
        </div>
    </div>
    <div class="col-lg-4 offset-lg-4">
        <div class="proceed-checkout">
            @if(Session::has('Cart') != null)
                <ul>
                    <li class="subtotal">Số lượng <span>{{ Session::get('Cart')->totalQty }}</span></li>
                    <li class="cart-total">Tổng tiền <span>{{ number_format(Session::get('Cart')->totalPrice) }}<u>đ</u></span></li>
                </ul>
            @endif
            <a href="#" class="proceed-btn">Thanh toán</a>
        </div>
    </div>
</div>
