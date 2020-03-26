
<?php include "./_inc/header.php" ?>

<div class="content">
    <div class="page">
        <div class="page__content">
            <ul class="breadcrumbs">
                <li class="breadcrumbs__item">
                    <a href="" class="breadcrumbs__link">Бронирование </a>
                </li>
                <li class="breadcrumbs__item">
                    <span class="breadcrumbs__link breadcrumbs__link--active">Создать командировку</span>
                </li>
            </ul>
            <div class="page__title32">
                Создать командировку
            </div>

            <div class="page__frame">
                <div class="page__title">
                    Сотрудники
                </div>
                <div class="business-trip-options">
                    <ol class="business-trip-options__employees">
                        <li class="business-trip-options__item">
                            Бабенко Надежда Олеговна
                        </li>
                        <li class="business-trip-options__item">
                            Молокостова Кристина Юрьевна
                        </li>
                        <li class="business-trip-options__item">
                            Ефанова Мария Петровна
                        </li>
                        <li class="business-trip-options__item">
                            Шатова Кристина Андреевна
                        </li>
                    </ol>
                </div>

                <div class="business-trip">
                    <div class="business-trip__table">
                        <div class="business-trip__grid business-trip-grid">
                            <table class="business-trip-grid__table">
                                <tr class="business-trip-grid__head-row">
                                    <th class="business-trip-grid__title"></th>
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
                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="2">
                                        <div class="business-trip-grid__way">
                                            т у д а
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-plane"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Усть-Каменогорск</div>
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

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="2">
                                        <div class="business-trip-grid__docking">
                                            2 ч 03 мин
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="2">
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

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="2">
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
                            </table>
                        </div>
                    </div> 

                    <div class="business-trip__table">
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
                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="3">
                                        <div class="business-trip-grid__way">
                                            о б р а т н о
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

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="3">
                                        <div class="business-trip-grid__docking-block">
                                            <div class="business-trip-grid__docking">
                                                7 ч 43 мин
                                            </div>
                                            <div class="business-trip-grid__docking">
                                                9 ч 56 мин
                                            </div>
                                        </div>
                                    </td>

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="3">
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

                                    <td class="business-trip-grid__cell business-trip-grid__cell--without-border" rowspan="3">
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

                                <tr class="business-trip-grid__row business-trip-grid__row--last">
                                    <td class="business-trip-grid__cell">
                                        <div class="business-trip-grid__route-block">
                                            <svg class="business-trip-grid__svg">
                                                <use xlink:href="assets/images/icons.svg#icon-train"></use>
                                            </svg>
                                            <div class="business-trip-grid__route">
                                                <div class="business-trip-grid__city">Уральск</div>
                                                <div class="business-trip-grid__dash">&mdash;</div>
                                                <div class="business-trip-grid__city"> Москва</div> 
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
                            </table>
                        </div>
                    </div> 
                        <div class="business-trip__btn-block">
                            <button class="btn-blue business-trip__btn">
                                Выбрать
                            </button>
                        </div>
                </div>
            </div>
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>