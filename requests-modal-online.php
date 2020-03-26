<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Онлайн заявка
            </div>
            <div class="modal-frame__table">
                <table class="modal-simple-table modal-simple-table--online-block">
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Заявка на</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full">
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Дата</td>
                        <td class="modal-simple-table__cell-content">01.01.2019 10:00</td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Причина</td>
                        <td class="modal-simple-table__cell-content">
                            <div class="filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle=!toggle">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Не выбрано</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggle">
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
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Комментарии</td>
                        <td class="modal-simple-table__cell-content">
                            <textarea name="comment" class="modal-simple-table__comment"></textarea>
                        </td>
                    </tr>
                    <tr class="modal-simple-table__row">
                        <td class="modal-simple-table__cell-title">Пользователь</td>
                        <td class="modal-simple-table__cell-content">
                            <input type="text" class="input-full modal-simple-table__input-disabled" value="Sofiya Khamitova" disabled>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-frame__btn-block">
                <button class="btn-blue modal-frame__btn-action">
                    Отправить
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