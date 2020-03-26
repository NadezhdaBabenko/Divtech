<?php include "./_inc/header.php" ?>

<div class="content">
    <div class="page">
        <div class="page__content">
            <div class="travel-policy">
                <div class="travel-policy__title-block">
                    <div class="travel-policy__title-row">
                        <div class="travel-policy__title">
                            Трэвел политика
                        </div>
                        <div class="travel-policy__title-btns">
                            <button class="btn-main-with-icon travel-policy__title-btn">
                                <svg class="btn-main-with-icon__svg svg-icon svg-icon--rotate-45">
                                    <use xlink:href='/assets/images/icons.svg#icon-close'></use>
                                </svg>
                                Добавить политику
                            </button>
                            <button class="travel-policy__excel">
                                <svg class="travel-policy__excel-svg">
                                    <use xlink:href='assets/images/icons.svg#icon-download'></use>
                                </svg>
                                Экспорт в Excel
                            </button>
                        </div>
                    </div>

                    <div class="travel-policy__actions">
                        <div class="travel-policy__sort-search">
                            <div class="travel-policy__search">
                                <div class="input-with-btn input-with-btn--blue">
                                    <input class="input-full" type="text" placeholder="Расширенный поиск…">
                                    <button class="input-with-btn__search">
                                        <svg class="input-with-btn__search-svg">
                                            <use xlink:href='assets/images/icons.svg#icon-search'></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="travel-policy__pagination">
                            <div class="filter-dropdown filter-dropdown--one-line travel-policy__show">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-select">показать по: <span class="filter-dropdown__amount">30</span></div>
                                </div>
                            </div>

                            <div class="travel-policy__totals">
                                <span class="travel-policy__pages">1-30</span>
                                    из 
                                <span>480</span>
                            </div>

                            <ul class="pagination-list travel-policy__pagination">
                                <li class="pagination-prev disabled"><a href>&nbsp;</a></li>
                                <li class="pagination-page active"><a href>1</a></li>
                                <li class="pagination-page"><a href>2</a></li>
                                <li class="pagination-page"><a href>3</a></li>
                                <li class="pagination-page"><a href>...</a></li>
                                <li class="pagination-page"><a href>5</a></li>
                                <li class="pagination-next"><a href>&nbsp;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="travel-policy-full-list">
                    <div class="travel-policy-grid travel-policy-grid">
                        <table class="travel-policy-grid__table">
                            <tr class="travel-policy-grid__head-row">
                                <th class="travel-policy-grid__title-full">Наименование</th>
                                <th class="travel-policy-grid__title-full">Тип услуги</th>
                                <th class="travel-policy-grid__title-full">Описание</th>
                                <th class="travel-policy-grid__title-full">Приоритет</th>
                                <th class="travel-policy-grid__title-full">Статус</th>
                                <th class="travel-policy-grid__title-full">
                                    <div class="btns-group-table travel-policy-grid__btns-group-table">
                                        <button class="btns-icon btns-icon--transparent" disabled>
                                            <svg class="btns-icon__svg-icon-list">
                                                <use xlink:href='assets/images/icons.svg#icon-refresh'></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon btns-icon--transparent btns-icon--disabled">
                                            <svg class="btns-icon__svg-icon-list">
                                                <use xlink:href='assets/images/icons.svg#icon-delete'></use>
                                            </svg>
                                        </button>
                                        <span class="checkbox travel-policy-grid__checkbox">
                                            <input type="checkbox"  id="checkbox-top" />
                                            <label for="checkbox-top"></label>
                                        </span>
                                    </div>
                                </th>
                            </tr>

                            <tr class="travel-policy-grid__row">
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__name">
                                        Авиа BSP
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__type">
                                        Авиа
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__description">
                                        Активный
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__priority">
                                         1
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__status travel-policy-grid__status--active">
                                        В работе
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-change'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-refresh'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-delete'></use>
                                        </svg>
                                    </button>
                                    <span class="checkbox employees-full-grid__checkbox">
                                        <input type="checkbox"  id="checkbox1" />
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                            </tr>

                            <tr class="travel-policy-grid__row">
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__name">
                                        ТОО "Бла-бла-бла-бла-очень-длинное-бла-бла"
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__type">
                                        Авиа
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__description">
                                        Активный
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__priority">
                                         1
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__status">
                                         Завершено
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-change'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-refresh'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-delete'></use>
                                        </svg>
                                    </button>
                                    <span class="checkbox travel-policy-grid__checkbox">
                                        <input type="checkbox"  id="checkbox1" />
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="travel-policy-grid__row">
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__name">
                                        Авиа BSP
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__type">
                                        Авиа
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__description">
                                        Активный
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__priority">
                                         1
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__status travel-policy-grid__status--active">
                                        В работе
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-change'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-refresh'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-delete'></use>
                                        </svg>
                                    </button>
                                    <span class="checkbox employees-full-grid__checkbox">
                                        <input type="checkbox"  id="checkbox1" />
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="travel-policy-grid__row">
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__name">
                                        Авиа BSP
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__type">
                                        Авиа
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <div class="travel-policy-grid__description">
                                        Активный
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__priority">
                                         1
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                     <div class="travel-policy-grid__status travel-policy-grid__status--active">
                                        В работе
                                    </div>
                                </td>
                                <td class="travel-policy-grid__cell">
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-change'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-refresh'></use>
                                        </svg>
                                    </button>
                                    <button class="btns-icon btns-icon--transparent">
                                        <svg class="btns-icon__svg-icon-list">
                                            <use xlink:href='assets/images/icons.svg#icon-delete'></use>
                                        </svg>
                                    </button>
                                    <span class="checkbox employees-full-grid__checkbox">
                                        <input type="checkbox"  id="checkbox1" />
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                            </tr>
                        </table>

                        <div class="travel-policy-full-list__pop-up-btns">
                            <button class="table-pop-up-btn travel-policy-full-list__pop-up-btn">
                                <svg class="table-pop-up-btn__svg svg-icon svg-icon--rotate-45">
                                    <use xlink:href='/assets/images/icons.svg#icon-close'></use>
                                </svg>
                            </button>
                            <button class="table-pop-up-btn table-pop-up-btn--t-white">
                                <svg class="table-pop-up-btn__svg">
                                    <use xlink:href='assets/images/icons.svg#icon-download'></use>
                                </svg>
                            </button>
                        </div>

                    </div><!-- /.travel-policy-full-list__grid /.employees-grid -->
                </div><!-- /.travel-policy-full-list -->
            </div><!-- /.emploees-full -->
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>