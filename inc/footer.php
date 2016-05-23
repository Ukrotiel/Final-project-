
<footer>
    <div class="container">
        <div class="col-lg-6">
            <a href="../history.html" class="history">історія покупок</a>
        </div>
        <div class="col-lg-6">
            <div class="total-price">
                <div>
                    <span class="lbl">Загальна ціна: </span>
                    <span class="price">  0 <span class="sign">грн</span></span>
                </div>
                <button class="buy" data-toggle="modal" data-target="#myModal">Зробити замовлення</button>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
                <img src="img/icon-smile.png" alt="">
                <h2>Дякуємо за покупку</h2>
                <h5>Ваше замовлення вартує <span class="modal-price">6.98 грн.</span></h5>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left">Вхід</h3>
                <button class="register pull-right" data-toggle="modal" data-target="#myModal2">Реєстрація</button>
            </div>
            <div class="modal-body">
                <form action="/func/login.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введіть логін:</label>
                        <input type="test" required class="form-control" id="exampleInputEmail1" placeholder="username"
                               name="user[username ]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Введіть пароль:</label>
                        <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password"
                               name="user[pass]">
                    </div>
                    <button type="submit" class="btn-modal">Увійти</button>
                </form>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="pull-left">Реєстрація</h3>
            </div>
            <div class="modal-body">
                <form action="/func/userRegistration.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Введіть логін:</label>
                        <input type="test" required class="form-control" id="exampleInputEmail1" placeholder="username"
                               name="user[username ]">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Введіть пароль:</label>
                        <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Password"
                               name="user[pass]">
                    </div>
                    <button type="submit" class="btn-modal"> Зареєструватись</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.btn-add-to-cart').click(function () {
            $(this).toggleClass('selected');
        })
    });
</script>
<script src="js/app.js"></script>
</body>
</html>