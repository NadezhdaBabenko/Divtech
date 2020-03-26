<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Сотрудники
            </div>
            <div class="modal-frame__table">
                <div class="add-employee">
                    <div class="add-employee__filter-row">
                        <div class="filter-dropdown-select add-employee__filter">
                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle=!toggle">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-select">Тип раздела</div>
                                </div>
                            </div>
                            <ul class="filter-dropdown-select__list" ng-show="toggle">
                                <li class="filter-dropdown-select__item">
                                    Отмена 
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Задержка 
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Ошибочно 
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Изменение 
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Другая 
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Без указания
                                </li>
                            </ul>
                        </div>                             
                        <div class="filter-dropdown-select add-employee__filter">
                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle1=!toggle1">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-select">Раздел</div>
                                </div>
                            </div>
                            <ul class="filter-dropdown-select__list" ng-show="toggle1">
                                <li class="filter-dropdown-select__item">
                                    Отмена командировки
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Задержка рейса
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Ошибочно оформленный
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Изменение класса
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Другая причина
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Без указания причины
                                </li>
                            </ul>
                        </div>

                        <button class="btn-blue add-employee__search-btn">
                            Поиск
                        </button>
                    </div>

                    <div class="add-employee__table-frame">
                        <div class="add-employee__table-block">
                            <table class="modal-header-table">
                                <tr class="modal-header-table__row">
                                    <th class="modal-header-table__cell-title">Список сотрудников</th>
                                    <th class="modal-header-table__cell-title">
                                        <span class="checkbox checkbox--blue">
                                            <input type="checkbox"  id="checkbox-empl-all" />
                                            <label for="checkbox-empl-all"></label>
                                        </span>
                                    </th>
                                </tr>
                                <tr class="modal-header-table__row">
                                    <td class="modal-header-table__cell-content">Бабенко Надежда Олеговна</td>
                                    <td class="modal-header-table__cell-content">
                                        <span class="checkbox checkbox--blue">
                                            <input type="checkbox"  id="checkbox-empl-1" />
                                            <label for="checkbox-empl-1"></label>
                                        </span>
                                    </td>
                                </tr>
                                <tr class="modal-header-table__row">
                                    <td class="modal-header-table__cell-content">Бабенко Надежда Олеговна</td>
                                    <td class="modal-header-table__cell-content">
                                        <span class="checkbox checkbox--blue">
                                            <input type="checkbox"  id="checkbox-empl-2" />
                                            <label for="checkbox-empl-2"></label>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="add-employee__info">
                        Сотрудники не выбраны
                    </div>

                    <button class="btn-blue add-employee__add-btn">
                        Выбрать
                    </button>
                </div>
            </div>

            <div class="modal-frame__btn-block">
                <button class="btn-cancel modal-frame__btn-action">
                    Закрыть
                </button>
            </div>
            <button class="modal-frame__close-btn">
                <svg class="modal-frame__close">
                    <use xlink:href='/assets/images/icons.svg#icon-close'></use>
                </svg>
            </button>
        </div>
    </div>
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>