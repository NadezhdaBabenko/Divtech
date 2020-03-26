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
                        <td class="modal-simple-table__cell-title">Заявка</td>
                        <td class="modal-simple-table__cell-content">№112234</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Агент</td>
                        <td class="modal-simple-table__cell-content">Adeliya Bekredenova</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Service desk</td>
                        <td class="modal-simple-table__cell-content">№112234</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Клиент</td>
                        <td class="modal-simple-table__cell-content">BIONORIKA</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Тревел координатор</td>
                        <td class="modal-simple-table__cell-content">Babenko Nadezhda</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Номер травком</td>
                        <td class="modal-simple-table__cell-content">20 555</td>
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