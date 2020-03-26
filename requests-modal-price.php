<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Стоимость услуги
            </div>
            <div class="modal-frame__table">
                <table class="modal-simple-table">
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Тип услуги</td>
                        <td class="modal-simple-table__cell-content">Air BSP</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Тип операции</td>
                        <td class="modal-simple-table__cell-content">продажа</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Стоимость</td>
                        <td class="modal-simple-table__cell-content">44 476 KZT</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Сервисный сбор</td>
                        <td class="modal-simple-table__cell-content">2 240 KZT</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Итого</td>
                        <td class="modal-simple-table__cell-content">46 716 KZT</td>
                    </tr>
                </table>
            </div>
            <button type="button" class="modal-frame__close-btn">
                <svg class="modal-frame__close">
                    <use xlink:href='/assets/images/icons.svg#icon-close'></use>
                </svg>
            </button>
        </div>
    </div>
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>