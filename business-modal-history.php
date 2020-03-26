<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame modal-frame--bigger">
            <div class="modal-frame__title">
                История
            </div>
            <div class="modal-frame__table">
                <table class="modal-header-table modal-header-table--history">
                    <tr class="modal-header-table__row">
                        <th class="modal-header-table__cell-title">№ заявки</th>
                        <th class="modal-header-table__cell-title">Услуга </th>
                        <th class="modal-header-table__cell-title">Пользователь</th>
                        <th class="modal-header-table__cell-title">Дата</th>
                        <th class="modal-header-table__cell-title">Действие</th>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">1313</td>
                        <td class="modal-header-table__cell-content">Авиа</td>
                        <td class="modal-header-table__cell-content">Бабенко Надежда Олеговна</td>
                        <td class="modal-header-table__cell-content">13.05.2019 11:58</td>
                        <td class="modal-header-table__cell-content">Запись</td>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">131315</td>
                        <td class="modal-header-table__cell-content">ЖД</td>
                        <td class="modal-header-table__cell-content">Бабенко Надежда Олеговна</td>
                        <td class="modal-header-table__cell-content">13.05.2019 11:58</td>
                        <td class="modal-header-table__cell-content">Подтверждение</td>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">87475</td>
                        <td class="modal-header-table__cell-content">Доп. кровать</td>
                        <td class="modal-header-table__cell-content"></td>
                        <td class="modal-header-table__cell-content">13.05.2019 11:58</td>
                        <td class="modal-header-table__cell-content">Подтверждение оформления</td>
                    </tr>                            
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">1313</td>
                        <td class="modal-header-table__cell-content">Трансфер</td>
                        <td class="modal-header-table__cell-content">Молокостова Кристина Юрьевна</td>
                        <td class="modal-header-table__cell-content">13.05.2019 11:58</td>
                        <td class="modal-header-table__cell-content">Оформление</td>
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