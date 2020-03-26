<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Добавить услугу
            </div>
            <div class="modal-frame__table">
                <table class="modal-simple-table modal-simple-table--service">
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Client</td>
                        <td class="modal-simple-table__cell-content">Test ckient LLP (0000033144)</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Employee</td>
                        <td class="modal-simple-table__cell-content">Хамитова София</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Bundled/Stand alone</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggleClient=!toggleClient">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Bundled</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggleClient">
                                    <li class="filter-dropdown-select__item">
                                        Bundled
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Stand alone
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Service Desk</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="modal-simple-table__inputs">
                                <div class="modal-simple-table__input-half">
                                    <div class="filter-dropdown-select">
                                        <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggleSD=!toggleSD">
                                            <div class="filter-dropdown__text">
                                                <div class="filter-dropdown__text-select">Service Desk</div>
                                            </div>
                                        </div>
                                        <ul class="filter-dropdown-select__list" ng-show="toggleSD">
                                            <li class="filter-dropdown-select__item">
                                            Service Desk1
                                            </li>
                                            <li class="filter-dropdown-select__item">
                                                Service Desk2
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-simple-table__input-half">
                                    <input type="text" class="input-full">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Travel coordinator</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggleCoordinator=!toggleCoordinator">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Travel coordinator1</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggleCoordinator">
                                    <li class="filter-dropdown-select__item">
                                       Travel coordinator1
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Travel coordinator2
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Service type</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggleService=!toggleService">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Not selected</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggleService">
                                    <li class="filter-dropdown-select__item">
                                       Not selected
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                       Service type1
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Service type2
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Currency</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggleCurrency=!toggleCurrency">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">KZT</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggleCurrency">
                                    <li class="filter-dropdown-select__item">
                                       KZT
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        EUR
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Net price</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="modal-simple-table__input-half">
                                <input type="text" class="input-full">
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Client total</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="modal-simple-table__input-half">
                                <input type="text" class="input-full modal-simple-table__input-disabled" disabled>
                            </div>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">FOP</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggleFOP=!toggleFOP">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Invoice</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggleFOP">
                                    <li class="filter-dropdown-select__item">
                                       Invoice
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Invoice2
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-frame__btn-block">
                <button class="btn-blue modal-frame__btn-action">
                    Добавить услугу
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