<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Стоимость услуги
            </div>
            <div class="modal-frame__table">
                <table class="modal-header-table modal-header-table--price">
                    <tr class="modal-header-table__row">
                        <th class="modal-header-table__cell-title">Тип услуги</th>
                        <th class="modal-header-table__cell-title">Тип операции</th>
                        <th class="modal-header-table__cell-title">Стоимость</th>
                        <th class="modal-header-table__cell-title">Сервисный сбор</th>
                        <th class="modal-header-table__cell-title">Итого</th>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">Air BSP</td>
                        <td class="modal-header-table__cell-content">продажа</td>
                        <td class="modal-header-table__cell-content">100 500 ₸</td>
                        <td class="modal-header-table__cell-content">2 500 ₸</td>
                        <td class="modal-header-table__cell-content">100 500 ₸</td>
                    </tr>
                    <tr class="modal-header-table__row">
                        <th colspan="5" class="modal-header-table__cell-full">Разница с подтвержденной стоимостью. Стоимость при бронировании:</th>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td colspan="2" class="modal-header-table__cell-content">Подтвердить разницу</td>
                        <td class="modal-header-table__cell-content">100 500 ₸</td>
                        <td class="modal-header-table__cell-content">2 500 ₸</td>
                        <td class="modal-header-table__cell-content">100 500 ₸</td>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td colspan="5" class="modal-header-table__cell-content-full">
                            Итого: <span class="modal-header-table__total">100 500 ₸</span> 
                        </td>
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