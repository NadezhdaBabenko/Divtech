<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Данные заявки
            </div>
            <div class="modal-frame__table">
                <table class="modal-simple-table">
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">ФИО</td>
                        <td class="modal-simple-table__cell-content">PLETNIKOV GRIGORIY</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Дата рождения</td>
                        <td class="modal-simple-table__cell-content">20.10.1990</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Паспорт №</td>
                        <td class="modal-simple-table__cell-content">N809948502</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Уд. личности №</td>
                        <td class="modal-simple-table__cell-content">29438580090</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">ИИН</td>
                        <td class="modal-simple-table__cell-content">594306098980898</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Тел.</td>
                        <td class="modal-simple-table__cell-content">+7 877 879-98-99</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Email</td>
                        <td class="modal-simple-table__cell-content">mail@mail.com</td>
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