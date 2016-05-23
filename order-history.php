<?php
require_once('inc/header.php');
require_once('func/getOrder.php');

$orders = getOrder();


?>
<?php if ($orders) { ?>

    <table class="table table-condensed">
        <tr class="active">
            <td>id</td>
            <td>id_user</td>
            <td>price</td>
            <td>data</td>
        </tr>
        <?php foreach ((array)$orders as $rey => $value) { ?>
            <tr class="">
                <td><?= $value['id'] ?></td>
                <td><?= $value['id_user'] ?></td>
                <td><?= $value['prise'] ?>$</td>
                <td><?= date(DATE_RFC850, $value['data']) ?>ta</td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>

<?php
require_once('inc/footer.php');
?>