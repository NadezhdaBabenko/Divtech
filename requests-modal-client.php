<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Данные по клиенту
            </div>
            <div class="modal-frame__table">
                <table class="modal-simple-table">
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Наименование</td>
                        <td class="modal-simple-table__cell-content">OSCE</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Торговое наименование</td>
                        <td class="modal-simple-table__cell-content">OSCE</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Бин</td>
                        <td class="modal-simple-table__cell-content">112234112234</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Страна</td>
                        <td class="modal-simple-table__cell-content">Kazakhstan</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Город</td>
                        <td class="modal-simple-table__cell-content">Астана</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Адрес</td>
                        <td class="modal-simple-table__cell-content">ул. Байбитшилик, 10 </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Рабочий телефон</td>
                        <td class="modal-simple-table__cell-content">+77173802768</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Мобильный телефон</td>
                        <td class="modal-simple-table__cell-content">+77075050147</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Email</td>
                        <td class="modal-simple-table__cell-content">kristina.molokostova@osc.org</td>
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