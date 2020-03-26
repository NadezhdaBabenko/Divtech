<?php include "./_inc/header.php" ?>

<div class="content">
    <div class="page">
        <div class="page__content">
            <div class="emploees-full">
                <div class="emploees-full__title-block">
                    <div class="emploees-full__title-row">
                        <div class="emploees-full__title">
                            Мои cотрудники
                        </div>
                        <div class="emploees-full__title-btns">
                            <button class="btn-main-with-icon emploees-full__title-btn">
                                <svg class="btn-main-with-icon__svg">
                                    <use xlink:href='/assets/images/icons.svg#icon-add-user'></use>
                                </svg>
                                Добавить сотрудника
                            </button>
                            <button class="emploees-full__excel">
                                <svg class="emploees-full__excel-svg">
                                    <use xlink:href='assets/images/icons.svg#icon-download'></use>
                                </svg>
                                Экспорт в Excel
                            </button>
                        </div>
                    </div>
                    <div class="emploees-full__actions">
                        <div class="emploees-full__sort-search">
                            <div class="emploees-full__sort">
                                <div class="emploees-full__sort-title">
                                    Сортировка
                                </div>
                                <div class="filter-dropdown filter-dropdown--one-line emploees-full__dropdown">
                                    <div class="filter-dropdown__icon">
                                        <svg class="filter-dropdown__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                        </svg>
                                    </div>
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">по ФИО</div>
                                    </div>
                                </div>
                            </div>

                            <div class="emploees-full__sort">
                                <div class="emploees-full__sort-title">
                                    Тип сотрудника
                                </div>
                                <div class="filter-dropdown filter-dropdown--one-line emploees-full__dropdown">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Все типы</div>
                                    </div>
                                </div>
                            </div>

                            <div class="emploees-full__sort">
                                <div class="emploees-full__sort-title">
                                    Статус
                                </div>
                                <div class="filter-dropdown filter-dropdown--one-line emploees-full__dropdown">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Любой статус</div>
                                    </div>
                                </div>
                            </div>
                            <div class="emploees-full__search">
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

                        <div class="emploees-full__pagination">
                            <div class="filter-dropdown filter-dropdown--one-line emploees-full__show">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-select">показать по: <span class="filter-dropdown__amount">30</span></div>
                                </div>
                            </div>

                            <div class="emploees-full__totals">
                                <span class="emploees-full__pages">1-30</span>
                                    из 
                                <span>480</span>
                            </div>

                            <ul class="pagination-list emploees-full__pagination">
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



                <div class="employees-full-list">
                    <div class="employees-full-list__grid employees-full-grid">
                        <table class="employees-full-grid__table">
                            <tr class="employees-full-grid__head-row">
                                <th class="employees-full-grid__title-full">ФИО</th>
                                <th class="employees-full-grid__title-full">Тип</th>
                                <th class="employees-full-grid__title-full">Статус</th>
                                <th class="employees-full-grid__title-full">Телефон</th>
                                <th class="employees-full-grid__title-full">Эл. ящик</th>
                                <th class="employees-full-grid__title-full">Документ</th>
                                <th class="employees-full-grid__title-full">Номер док.</th>
                                <th class="employees-full-grid__title-full">Срок</th>
                                <th class="employees-full-grid__title-full">Дата рож.</th>
                                <th class="employees-full-grid__title-full">Пол</th>
                                <th class="employees-full-grid__title-full">
                                    <div class="btns-group-table employees-full-grid__btns-group-table">
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
                                        <span class="checkbox employees-full-grid__checkbox">
                                            <input type="checkbox"  id="checkbox-top" />
                                            <label for="checkbox-top"></label>
                                        </span>
                                    </div>
                                </th>
                            </tr>

                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Ярушина</span> Владислава Всеволодовна 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status">
                                        Нет поездок
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         batalgaziyev@chico.kz
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Удос. лич.
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Жен
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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


                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>

                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Калининград, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox3" />
                                        <label for="checkbox3"></label>
                                    </span>
                                </td>
                            </tr>

                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                            <tr class="employees-full-grid__row">
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__fio">
                                        <span class="employees-full-grid__surname">Шведов</span> Архип Иннокентиевич 
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__type">
                                        Штатный
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                    <div class="employees-full-grid__status employees-full-grid__status--have-trip">
                                        Усть-Каменогорск, 10 дней <span class="employees-full-grid__status">до 21.10.18</span>
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__phone">
                                         +7 (701) 241 59 74
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__mail">
                                         chestnaya.n@gmail.com
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-type">
                                         Паспорт
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__doc-num">
                                         №3467083
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__time">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__date-of-birth">
                                         21.03.2028
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
                                     <div class="employees-full-grid__sex">
                                         Муж
                                    </div>
                                </td>
                                <td class="employees-full-grid__cell">
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
                                        <input type="checkbox"  id="checkbox2" />
                                        <label for="checkbox2"></label>
                                    </span>
                                </td>
                            </tr>
                        </table>
                        <div class="employees-full-list__pop-up-btns">
                            <button class="table-pop-up-btn employees-full-list__pop-up-btn">
                                <svg class="table-pop-up-btn__svg">
                                    <use xlink:href='/assets/images/icons.svg#icon-add-user'></use>
                                </svg>
                            </button>
                            <button class="table-pop-up-btn table-pop-up-btn--t-white">
                                <svg class="table-pop-up-btn__svg">
                                    <use xlink:href='assets/images/icons.svg#icon-download'></use>
                                </svg>
                            </button>
                        </div>
                    </div><!-- /.employees-full-list__grid /.employees-grid -->
                </div><!-- /.employees-full-list -->
            </div><!-- /.emploees-full -->
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>