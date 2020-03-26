<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame modal-frame--bigger">
            <div class="modal-frame__title">
                Параметры согласования заявок
            </div>
            <div class="modal-approval-request">
                <div class="modal-approval-request__row">
                    <div class="modal-approval-request__type-block">
                        <div class="modal-approval-request__type-text">
                            Модуль согласования заявок:
                        </div>
                        <div class="modal-approval-request__type-check-block">
                            <label class="modal-approval-request__type-check">
                                <span class="checkbox checkbox--blue modal-approval-request__checkbox">
                                    <input type="radio"  id="radio-1-1" name="radio-type-1"/>
                                    <label for="radio-1-1"></label>
                                </span>
                                Вкл.
                            </label>    

                            <label class="modal-approval-request__type-check">
                                <span class="checkbox checkbox--blue modal-approval-request__checkbox">
                                    <input type="radio"  id="radio-1-2" name="radio-type-1"/>
                                    <label for="radio-1-2"></label>
                                </span>
                                Откл.
                            </label>
                        </div>
                    </div>

                    <div class="modal-approval-request__add-block">
                        <div class="filter-dropdown-select modal-approval-request__dropdown">
                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle=!toggle">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-select">Не выбрано</div>
                                </div>
                            </div>
                            <ul class="filter-dropdown-select__list" ng-show="toggle">
                                <li class="filter-dropdown-select__item">
                                    Nadezhda Babenko
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Sofiya Khamitova 
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Nadezhda Babenko
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Sofiya Khamitova
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Nadezhda Babenko
                                </li>
                                <li class="filter-dropdown-select__item">
                                    Sofiya Khamitova
                                </li>
                            </ul>
                        </div>

                        <button type="button" class="btn-outlined-with-icon modal-approval-request__btn">
                            <svg class="btn-outlined-with-icon__svg">
                                <use xlink:href='/assets/images/icons.svg#icon-add-user'></use>
                            </svg>
                            Добавить отв. лицо
                        </button>
                    </div>
                </div>
                <div class="modal-approval-request__row">
                    <div class="modal-approval-request__type-block">
                        <div class="modal-approval-request__type-text">
                            Тип:
                        </div>
                        <div class="modal-approval-request__type-check-block">
                            <label class="modal-approval-request__type-check">
                                <span class="checkbox checkbox--blue modal-approval-request__checkbox">
                                    <input type="radio"  id="radio-2-1" name="radio-type-2"/>
                                    <label for="radio-2-1"></label>
                                </span>
                                Равнозначный
                            </label>    

                            <label class="modal-approval-request__type-check">
                                <span class="checkbox checkbox--blue modal-approval-request__checkbox">
                                    <input type="radio"  id="radio-2-2" name="radio-type-2"/>
                                    <label for="radio-2-2"></label>
                                </span>
                                Последовательный
                            </label>
                            <label class="modal-approval-request__type-check">
                                <span class="checkbox checkbox--blue modal-approval-request__checkbox">
                                    <input type="radio"  id="radio-2-3" name="radio-type-2"/>
                                    <label for="radio-2-3"></label>
                                </span>
                                Полный
                            </label>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal-frame__table">
                <table class="modal-header-table modal-header-table--t-approval">
                    <tr class="modal-header-table__row">
                        <th class="modal-header-table__cell-title">ФИО</th>
                        <th class="modal-header-table__cell-title">Роль</th>
                        <th class="modal-header-table__cell-title">Позиция</th>
                        <th class="modal-header-table__cell-title"></th>
                        <th class="modal-header-table__cell-title"></th>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">Nadezhda Babenko</td>
                        <td class="modal-header-table__cell-content">Executive director</td>
                        <td class="modal-header-table__cell-content">National Administrative Officer</td>
                        <td class="modal-header-table__cell-content">
                            <button type="button" class="btn-blue modal-header-table__btn-add">
                                Добавить резервный email
                            </button>
                        </td>
                        <td class="modal-header-table__cell-content">
                            <button type="button" class="btns-icon modal-header-table__btn-delete">
                                <svg class="btns-icon__svg">
                                    <use xlink:href="/assets/images/icons.svg#icon-delete"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="modal-header-table__row">
                        <td class="modal-header-table__cell-content">Nadezhda Babenko</td>
                        <td class="modal-header-table__cell-content">Executive director</td>
                        <td class="modal-header-table__cell-content">National Administrative Officer</td>
                        <td class="modal-header-table__cell-content">
                            <button type="button" class="btn-blue modal-header-table__btn-add">
                                Добавить резервный email
                            </button>
                        </td>
                        <td class="modal-header-table__cell-content">
                            <button type="button" class="btns-icon modal-header-table__btn-delete">
                                <svg class="btns-icon__svg">
                                    <use xlink:href="/assets/images/icons.svg#icon-delete"></use>
                                </svg>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="modal-frame__btn-block">
                <button type="button" class="btn-blue modal-frame__btn-action">
                    Обновить
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