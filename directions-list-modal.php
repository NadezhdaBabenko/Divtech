<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame modal-frame--bigger">
            <div class="modal-frame__title">
                Алматы - Актогай
            </div>

            <div class=" modal-frame__table">
                <table class="modal-header-table modal-header-table--t-directions">
                    <tr class="modal-header-table__row">
                        <th class="modal-header-table__cell-title">Тип</th>
                        <th class="modal-header-table__cell-title">Откуда</th>
                        <th class="modal-header-table__cell-title">Куда</th>
                        <th class="modal-header-table__cell-title">Пересадка (минуты)</th>
                        <th class="modal-header-table__cell-title"></th>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle1=!toggle1">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Авиа</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list ng-hide" ng-show="toggle1">
                                    <li class="filter-dropdown-select__item">
                                        Авиа
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        ЖД
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="modal-header-table__cell-content">
                            <input type="text" class="input-full">
                        </td>
                        <td class="modal-header-table__cell-content">
                            <input type="text" class="input-full">
                        </td>
                        <td class="modal-header-table__cell-content">
                            <div class="modal-header-table__time-block">
                                <svg class="modal-header-table__svg-clock">
                                    <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                </svg>
                                <div class="modal-header-table__time">
                                    124 мин
                                </div>
                            </div>
                        </td>
                        <td class="modal-header-table__cell-content">
                            <button class="btns-icon btns-icon--transparent">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href="assets/images/icons.svg#icon-delete"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle2=!toggle2">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">ЖД</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list ng-hide" ng-show="toggle2">
                                    <li class="filter-dropdown-select__item">
                                        Авиа
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        ЖД
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td class="modal-header-table__cell-content">
                            <input type="text" class="input-full">
                        </td>
                        <td class="modal-header-table__cell-content">
                            <input type="text" class="input-full">
                        </td>
                        <td class="modal-header-table__cell-content">
                            <div class="modal-header-table__time-block">
                                <svg class="modal-header-table__svg-clock">
                                    <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                </svg>
                                <div class="modal-header-table__time">
                                    124 мин
                                </div>
                            </div>
                        </td>
                        <td class="modal-header-table__cell-content">
                            <button class="btns-icon btns-icon--transparent">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href="assets/images/icons.svg#icon-delete"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </table>
                    
                <button class="btn-add-new modal-frame__btn-add">
                    Добавить сегмент
                </button>
            </div>
            <div class="modal-frame__btn-block">
                <button type="button" class="btn-blue modal-frame__btn-action">
                    Сохранить
                </button>
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