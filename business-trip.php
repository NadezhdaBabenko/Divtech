
<?php include "./_inc/header.php" ?>

<div class="content" ng-init="mod = 'departureTo'; mod2 = 'all'; mod3 = '2city'" >
    <div class="page">
        <div class="page__content">
            <div class="business-trip">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="" class="breadcrumbs__link">Бронирование </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <span class="breadcrumbs__link breadcrumbs__link--active">Создать командировку</span>
                    </li>
                </ul>
                <div class="business-trip__title">
                    Создать командировку
                </div>

                <div class="bookmark">
                    <div class="bookmark__tab" ng-click="mod = 'departureTo'" ng-class="{'bookmark__tab--active': mod == 'departureTo'}">
                        <div class="bookmark__title">
                            ОТБЫТИЕ В ГОРОД КОМАНДИРОВКИ
                        </div>
                        <div class="bookmark__direction">
                            Актогай – Алматы – Нур-Султан 
                        </div>
                    </div>
                    <div class="bookmark__tab"  ng-click="mod = 'departureFrom'" ng-class="{'bookmark__tab--active': mod == 'departureFrom'}">
                        <div class="bookmark__title">
                            ОТПРАВЛЕНИЕ из ГОРОДа КОМАНДИРОВКИ
                        </div>
                        <div class="bookmark__direction">
                            Нур-Султан – Алматы – Актогай 
                        </div>
                    </div>
                </div>

                <div class="business-trip__main-block">
                    <div class="business-trip__sort-block">
                        <ul class="tabs business-trip__type-tabs">
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod2 = 'all'" ng-class="{'tabs__link--active': mod2 == 'all'}">
                                    Все
                                    <span>
                                        54
                                    </span>
                                </a>
                            </li>
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod2 = 'avia'" ng-class="{'tabs__link--active': mod2 == 'avia'}">
                                    <svg class="tabs__icon">
                                        <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                                    </svg>
                                    Авиарейсы
                                    <span>
                                        6
                                    </span>
                                </a>
                            </li>
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod2 = 'train'" ng-class="{'tabs__link--active': mod2 == 'train'}">
                                    <svg class="tabs__icon">
                                        <use xlink:href="/assets/images/icons.svg#icon-train"></use>
                                    </svg>
                                    ЖД-поезда
                                    <span>
                                        8
                                    </span>
                                </a>
                            </li>
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod2 = 'aviaTrain'" ng-class="{'tabs__link--active': mod2 == 'aviaTrain'}">
                                    <svg class="tabs__icon tabs__icon--bigger">
                                        <use xlink:href="/assets/images/icons.svg#icon-combo-trip"></use>
                                    </svg>
                                    Авиа + ЖД
                                    <span>
                                        40
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <div class="business-trip__actions-row" ng-init="radio='table'">
                            <div class="radio-buttons radio-buttons--blue business-trip__radio-buttons">
                                <div class="radio-buttons__blocks">
                                    <input class="radio-buttons__input" type="radio" name="option1" id="radio1" checked ng-model="radio" value="table">
                                    <label class="radio-buttons__label" for="radio1">Табличный вид</label>
                                </div>
                                <div class="radio-buttons__blocks">
                                    <input class="radio-buttons__input" type="radio" name="option1" id="radio2" ng-model="radio" value="constructor">
                                    <label class="radio-buttons__label" for="radio2">Конструктор</label>
                                </div>
                            </div>

                            <div class="business-trip__filters filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle=!toggle">
                                    <div class="filter-dropdown__icon">
                                        <svg class="filter-dropdown__svg">
                                            <use xlink:href="assets/images/icons.svg#icon-filter"></use>
                                        </svg>
                                    </div>
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Фильтры</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggle">
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 1
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 2
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 3
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 4
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="business-trip__filters filter-dropdown-select">
                                <div class="filter-dropdown filter-dropdown--one-line" ng-click="toggle2=!toggle2">
                                    <div class="filter-dropdown__icon">
                                        <svg class="filter-dropdown__svg">
                                            <use xlink:href="assets/images/icons.svg#icon-sorting"></use>
                                        </svg>
                                    </div>
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">По актуальности</div>
                                    </div>
                                </div>
                                <ul class="filter-dropdown-select__list" ng-show="toggle2">
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 1
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 2
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 3
                                    </li>
                                    <li class="filter-dropdown-select__item">
                                        Фильтр 4
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="business-trip__table business-trip__table--view"  ng-show="radio == 'table'">
                        <div class="business-trip__grid business-trip-grid">
                            <table class="business-trip-grid__table">
                                <tr class="business-trip-grid__head-row">
                                    <th class="business-trip-grid__title">№</th>
                                    <th class="business-trip-grid__title">Маршрут</th>
                                    <th class="business-trip-grid__title">Рейс/Поезд</th>
                                    <th class="business-trip-grid__title">Прибытие</th>
                                    <th class="business-trip-grid__title">В пути</th>
                                    <th class="business-trip-grid__title">Отбытие</th>
                                    <th class="business-trip-grid__title">СТЫКОВКА</th>
                                    <th class="business-trip-grid__title">В ПУТИ ВСЕГО</th>
                                    <th class="business-trip-grid__title">Своб. места</th>
                                    <th class="business-trip-grid__title-price">Стоимость за 1 пасс.</th>
                                    <th class="business-trip-grid__title"></th>
                                </tr>

                                <tr class="business-trip-grid__row business-trip-grid__row--first">
                                    <td class="business-trip-grid__cell" rowspan="2">
                                        <div class="business-trip-grid__num">
                                            01
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-plane"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Мюнхен</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Алматы</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/klm.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                KK31Y
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            7 ч 24 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell" rowspan="2">
                                        <div class="business-trip-grid__docking">
                                            2 ч 03 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell" rowspan="2">
                                        <div class="business-trip-grid__total-on-way-block">
                                            <svg class="business-trip-grid__svg-clock">
                                                <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                            </svg>
                                            <div class="business-trip-grid__total-time">
                                                12 ч 24 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                240
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            1 290 500 
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell" rowspan="2">
                                        <button class="btn-blue btn-blue--confirm">
                                            Выбрать  
                                        </button>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row business-trip-grid__row--last">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Степногорск</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Астана</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                351Т
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            5 ч 12 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                47
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price business-trip-grid__cell-price--with-border">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            100 500 
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>
                                </tr>





                                <tr class="business-trip-grid__row business-trip-grid__row--first">
                                    <td class="business-trip-grid__cell" rowspan="3">
                                        <div class="business-trip-grid__num">
                                            02
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-plane"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Барселона</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Прага</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                KK31Y
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            7 ч 24 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell" rowspan="3">
                                        <div class="business-trip-grid__docking-block">
                                            <div class="business-trip-grid__docking">
                                                7 ч 43 мин
                                            </div>
                                            <div class="business-trip-grid__docking">
                                                9 ч 56 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell" rowspan="3">
                                        <div class="business-trip-grid__total-on-way-block">
                                            <svg class="business-trip-grid__svg-clock">
                                                <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                            </svg>
                                            <div class="business-trip-grid__total-time">
                                                4 ч 52 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                40
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            784 888 
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell" rowspan="3">
                                        <button class="btn-blue btn-blue--confirm">
                                            Выбрать  
                                        </button>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Краков</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Варшава</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/klm.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                351Т
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            5 ч 12 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                47
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            741 852
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row business-trip-grid__row--last">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Усть-Каменогорск</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Калининград</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                351Т
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            5 ч 12 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                33
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price business-trip-grid__cell-price--with-border">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            987 444
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>
                                </tr>



                                <tr class="business-trip-grid__row business-trip-grid__row--first">
                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="4">
                                        <div class="business-trip-grid__num">
                                            03
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-plane"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Калининград</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Москва</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                KK31Y
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            7 ч 24 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="4">
                                        <div class="business-trip-grid__docking-block">
                                            <div class="business-trip-grid__docking">
                                                7 ч 43 мин
                                            </div>
                                            <div class="business-trip-grid__docking">
                                                9 ч 56 мин
                                            </div>
                                            <div class="business-trip-grid__docking">
                                                10 ч 17 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="4">
                                        <div class="business-trip-grid__total-on-way-block">
                                            <svg class="business-trip-grid__svg-clock">
                                                <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                            </svg>
                                            <div class="business-trip-grid__total-time">
                                                8 ч 11 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                40
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            855 400
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="4">
                                        <button class="btn-blue btn-blue--confirm">
                                            Выбрать  
                                        </button>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Париж</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Амстердам</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-lot-polish.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                351Т
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            5 ч 12 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                47
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            2 547 888
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Милан</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Флоренция</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                351Т
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            5 ч 12 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                47
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            360 800
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row business-trip-grid__row--last">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Берлин</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Роттердам</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                351Т
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            5 ч 12 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                33
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            <span class="business-trip-grid__from">от</span>
                                            290 500 
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div> <!-- business-trip__table -->



                    <div class="business-trip__table"  ng-show="radio == 'constructor'">
                        <div class="business-trip__grid business-trip-grid">
                            <table class="business-trip-grid__table">
                                <tr class="business-trip-grid__head-row">
                                    <th class="business-trip-grid__title">Маршрут</th>
                                    <th class="business-trip-grid__title">Рейс/Поезд</th>
                                    <th class="business-trip-grid__title">Прибытие</th>
                                    <th class="business-trip-grid__title">В пути</th>
                                    <th class="business-trip-grid__title">Отбытие</th>
                                    <th class="business-trip-grid__title">СТЫКОВКА</th>
                                    <th class="business-trip-grid__title">В ПУТИ ВСЕГО</th>
                                    <th class="business-trip-grid__title">Своб. места</th>
                                    <th class="business-trip-grid__title-price">Стоимость за 1 пасс.</th>
                                    <th class="business-trip-grid__title"></th>
                                </tr>

                                <tr class="business-trip-grid__row business-trip-grid__row--first">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-plane"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Мюнхен</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Алматы</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__trip-block">
                                            <img class="business-trip-grid__logo" src="/assets/images/avia-lot-polish.png" alt=""/>
                                            <div class="business-trip-grid__trip-num">
                                                KK31Y
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__arrival">
                                            10 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__on-way">
                                            7 ч 24 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__departure">
                                            11 мая, 11:34
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__docking">
                                            2 ч 03 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__total-on-way-block">
                                            <svg class="business-trip-grid__svg-clock">
                                                <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                            </svg>
                                            <div class="business-trip-grid__total-time">
                                                12 ч 24 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__free-places-block">
                                            <div class="business-trip-grid__free-places">
                                                Доступ. мест
                                            </div>
                                            <div class="business-trip-grid__free-places-amount">
                                                240
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell-price">
                                        <div class="business-trip-grid__price">
                                            1 290 500 
                                            <span class="business-trip-grid__currency">₸</span>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="2">
                                        <button class="btn-blue btn-blue--confirm business-trip-grid__disabled">
                                            Выбрать  
                                        </button>
                                    </td>
                                </tr>

                                <tr class="business-trip-grid__row business-trip-grid__row--last">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Степногорск</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Астана</div> 
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__no-selected">
                                            не выбрано
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                    </td>

                                    <td class="business-trip-grid__cell">
                                    </td>

                                    <td class="business-trip-grid__cell">
                                    </td>

                                    <td class="business-trip-grid__cell">
                                    </td>

                                    <td class="business-trip-grid__cell">
                                    </td>

                                    <td class="business-trip-grid__cell">
                                    </td>

                                    <td class="business-trip-grid__cell-price business-trip-grid__cell-price--with-border">
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="business-trip__tabs-block">
                            <div class="business-trip__tab" ng-click="mod3 = '2city'"  ng-class="{'business-trip__tab--active': mod3 == '2city'}">
                                Актогай &mdash; Атырау
                            </div>
                            <div class="business-trip__tab" ng-click="mod3 = '3city'"  ng-class="{'business-trip__tab--active': mod3 == '3city'}">
                                Актогай &mdash; Атырау &mdash; Усть-Каменогорск
                            </div>
                            <div class="business-trip__tab" ng-click="mod3 = '4city'"  ng-class="{'business-trip__tab--active': mod3 == '4city'}">
                                Актогай &mdash; Нур-Султан &mdash; Усть-Каменогорск &mdash; Павлодар
                            </div>
                            <div class="business-trip__tab" ng-click="mod3 = '5city'"  ng-class="{'business-trip__tab--active': mod3 == '5city'}">
                                Актогай &mdash; Нур-Султан &mdash; Усть-Каменогорск &mdash; Павлодар &mdash; Талдыкорган
                            </div>
                        </div>

                        <div class="business-trip__constructor-block business-trip__constructor-block--2item" ng-show="mod3 == '2city'">
                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>    

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-lot-polish.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="business-trip__constructor-block business-trip__constructor-block--3item" ng-show="mod3 == '3city'">
                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-lot-polish.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="business-trip__constructor-block business-trip__constructor-block--4item" ng-show="mod3 == '4city'">
                            <div class="business-trip__constructor-column">   
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/klm.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="business-trip__constructor-block business-trip__constructor-block--3item" ng-show="mod3 == '5city'">
                            <div class="business-trip__constructor-column">    
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-bekair.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="business-trip__constructor-column">
                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/klm.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>

                                <div class="business-trip__constructor constructor">
                                    <div class="constructor__company-block">
                                        <img class="constructor__logo" src="/assets/images/avia-lot-polish.png" alt=""/>
                                        <a class="constructor__trip-num">
                                            KK31Y7
                                        </a>
                                    </div>
                                    <div class="constructor__time-block">
                                        <div class="constructor__departure">
                                            <div class="constructor__time">
                                                06:45
                                            </div>
                                            <div class="constructor__date">
                                                12 сен, ср
                                            </div>
                                        </div>
                                        <div class="constructor__arrival">
                                            <div class="constructor__time">
                                                01:15
                                            </div>
                                            <div class="constructor__date">
                                                15 сен, вс
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor__total-time">
                                        <svg class="constructor__svg-clock">
                                            <use xlink:href="assets/images/icons.svg#icon-clock"></use>
                                        </svg>
                                        <div class="constructor__time-text">
                                            12 ч 24 мин
                                        </div>
                                    </div>
                                    <div class="constructor__price-block">
                                        <div class="constructor__price">
                                            90 500 <span class="constructor__currency">₸</span>
                                        </div>
                                        <div class="constructor__per-person">
                                            на 1-го пасс.
                                        </div>
                                        <button class="btn-blue constructor__selected">
                                            Выбрано
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div> <!-- business-trip__table -->
                </div>
            </div><!-- /. -->
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>