$(document).ready(function () {

    var productList = {

        $footer: $('footer'),
        $footerTotalPrice: $('footer').find('span.price'),
        $modalPrice: $('.modal-header .modal-price'),
        totalPrice: 0,

        getItemPrice: function (string) {
            return +string.replace(" грн", "");
        },

        getSelectedItems: function () {
            var _this = this;
            var $selectedProducts = $('.btn-add-to-cart.selected');

            if ($selectedProducts.length > 0) {
                _this.totalPrice = 0;
                $selectedProducts.each(function (index, el) {
                    var elPrice = _this.getItemPrice($(el).prev().text());
                    _this.totalPrice += elPrice;
                });
            }
            else {
                _this.totalPrice = 0;
            }
            this.showBar();
        },
        showBar: function () {
            if (this.totalPrice) {
                var result = this.totalPrice.toFixed(2) + ' грн';
                this.$footerTotalPrice.text(result);
                this.$modalPrice.text(result);
                this.$footer.fadeIn('fast');
            }
            else
                this.$footer.fadeOut('fast');
        },

        bye: function () {
            var _this = this;
            $.ajax({
                type: "POST",
                url: "/func/newOrder.php",
                data: {
                    total : _this.totalPrice
                },
                dataType: "json"
            });
        }
    };


    $('.btn-add-to-cart').on('click', function (event) {
        productList.getSelectedItems();
    });

    $('.bye').on('click', function(event){
        productList.bye();
    });
    $('button.register').on('click', function(){
        $('.modal').modal('hide');
    });
});	