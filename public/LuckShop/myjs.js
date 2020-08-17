// $(document).ready(() => {

// const { type, data } = require("jquery");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function showSignUp() {
        var showSignUp = document.getElementById("btn-sign");
        showSignUp.classList.toggle("show");
    }

    function CartAdd(id) {
        // console.log(id)
        $.ajax({
            url: `/shopping-cart/add-cart/${id}`,
            type: 'get',
        }).done(function(respone){
            renderCart(respone)
            alertify.success('Đã thêm vào giỏ hàng.')
        })

        $('#change-item-cart').on('click','.si-close i', function () {
            // console.log($(this).data('id'))
            const idItem = $(this).data('id')
            // alert(idItem)
            $.ajax({
                url: `/shopping-cart/del-item/${idItem}`,
                type: 'get',
            }).done(function(respone) {
                renderCart(respone)
                alertify.success('Đã xóa sản phẩm khỏi giỏ hàng.')
            })
        })

        function renderCart(respone) {
            $('#change-item-cart').empty();
            $('#change-item-cart').html(respone);
            $('#total-sl-cart').text($('#total-sl').val())
        }
    };


    // function delCart(id) {
    //     $.ajax({
    //         url: `/shopping-cart/del/${id}`,
    //         type: 'delete',
    //     }).done(function(respone){
    //         renderListCart(respone)
    //         alertify.success('Đã thêm vào giỏ hàng.')
    //     })
    //
    // }

    function CartSave(id) {
        // console.log(id)

        // console.log($('#sl-item-'+id).val())
        $.ajax({
            url: `/shopping-cart/save/` + id + `/` + $('#sl-item-'+id).val(),
            type: 'get',
        }).done(function(respone){
            renderListCart(respone)
            alertify.success('Đã cập nhật sản phẩm.')
        })

    }

    function renderListCart(respone) {
        $('#list-cart').empty();
        $('#list-cart').html(respone);

        var proQty = $('.pro-qty');
        proQty.prepend('<span class="dec qtybtn">-</span>');
        proQty.append('<span class="inc qtybtn">+</span>');
        proQty.on('click', '.qtybtn', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
    }

// })
