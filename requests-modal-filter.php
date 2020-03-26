<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__table">
                <table class="modal-simple-table--online-block">
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Тип услуги</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select modal-simple-table__input-half">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle1=!toggle1">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Не выбрано</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggle1">
                                    <li class="filter-dropdown-select__item">
                                        Не выбрано
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Air
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Hotel Service
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Transfer service
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Tour & package
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Rail
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Insurance
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Visa service
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Vip service
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Invitation letter
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Excursion
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Other service
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Seminar
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Additional
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                        <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title"></td>
                        <td class="modal-simple-table__cell-content">
                            <div class="modal-simple-table__type-check-row">
                                <label class="modal-simple-table__type-check">
                                    <span class="checkbox checkbox--blue modal-payment__checkbox">
                                        <input type="radio" id="radio-all" name="radio-type" checked="">
                                        <label for="radio-all"></label>
                                    </span>
                                    Все
                                </label>    

                                <label class="modal-simple-table__type-check">
                                    <span class="checkbox checkbox--blue modal-payment__checkbox">
                                        <input type="radio" id="radio-confirmed" name="radio-type">
                                        <label for="radio-confirmed"></label>
                                    </span>
                                    Подтвержденные
                                </label>
                                <label class="modal-simple-table__type-check">
                                    <span class="checkbox checkbox--blue modal-payment__checkbox">
                                        <input type="radio" id="radio-unconfirmed" name="radio-type">
                                        <label for="radio-unconfirmed"></label>
                                    </span>
                                    Неподтвержденные
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Статус</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select modal-simple-table__input-half">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle2=!toggle2">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Не выбрано</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggle2">
                                    <li class="filter-dropdown-select__item">
                                        Не выбрано
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Забронирован 
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Оформлен
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Возвращен
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Заменен
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Войд
                                    </li>                                        
                                    <li class="filter-dropdown-select__item">
                                        Отмена брони
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Клиент</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full" placeholder="Введите название или номер">
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Пассажир</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full" placeholder="Введите ФИО">
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Поставщик</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full" placeholder="Введите название или номер">
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Агент</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full" placeholder="Введите ФИО">
                        </td>
                    </tr>                        
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">№ заявки SD</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full" placeholder="Service Desk">
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Даты</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown filter-dropdown--one-line modal-simple-table__input-half">
                                <div class="filter-dropdown__icon">
                                    <svg class="filter-dropdown__svg">
                                        <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                                    </svg>
                                </div>
                                <div class="filter-dropdown__text">
                                    <input class="filter-dropdown__input" placeholder="__/__/__ - __/__/__">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>