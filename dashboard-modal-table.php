<?php include "./_inc/header.php" ?>
    <div class="content content--blur">
        <div class="booking-form-container__choice-trip">
            <div class="booking-form-container__content-choise-trip">

                <div class="booking-form-mobile">
                    <div>
                        <div class="booking-form-mobile__direction">
                            <span class="booking-form-mobile__direction-full">
                                Алматы
                            </span>
                            <span>
                                ALA
                            </span> 
                            —
                            <span class="booking-form-mobile__direction-full">
                                Москва
                            </span>
                            <span>
                                MOW
                            </span>
                            <svg class="booking-form-mobile__svg">
                                <use xlink:href='assets/images/icons.svg#icon-round-trip'></use>
                            </svg>
                        </div>
                        <div>
                            <span class="booking-form-mobile__main-info">11 сен, вт — 5 ноя, чт</span>
                            <span class="booking-form-mobile__main-info">2 пасс, эконом</span>
                        </div>
                    </div>
                    <button class="booking-form-mobile__btn">
                        Изменить поиск
                        <svg class="booking-form-mobile__btn-svg">
                            <use xlink:href='assets/images/icons.svg#chevron-down'></use>
                        </svg>
                    </button>

                    <button class="booking-form-mobile__btn-search">
                        <svg class="booking-form-mobile__btn-search-svg">
                            <use xlink:href='assets/images/icons.svg#icon-search'></use>
                        </svg>
                    </button>
                </div>

                <div class="booking-form-container__inputs">
                    <div class="booking-form">
                        <div class="booking-form__tabs-toggle">
                            <ul class="tabs-route-type booking-form__tabs-route-type">
                                <li class="tabs-route-type__item"><a href class=" tabs-route-type__link">В одну
                                        сторону</a></li>
                                <li class="tabs-route-type__item"><a href
                                                                     class=" tabs-route-type__link tabs-route-type__link--active">Туда
                                        и обратно</a></li>
                                <li class="tabs-route-type__item"><a href class=" tabs-route-type__link">Сложный
                                        маршрут</a></li>
                            </ul>
                            <div class="booking-form__toggle">
                                <div class="toggle">
                                    <input type="checkbox" name="checkbox-arrival-time" id="checkbox-arrival-time"
                                           class="toggle__input" checked/>
                                    <label for="checkbox-arrival-time" class="toggle__label"></label>
                                </div>

                                <label for="checkbox-arrival-time" class="booking-form__item">
                                    Указать время прилета
                                </label>
                            </div>
                        </div>

                        <div class="booking-form__line">
                            <div class="booking-form__spec-field booking-form__spec-field--cities">
                                <div class="spec-field-group">
                                    <div class="spec-field-group__item spec-field">
                                        <input type="text"
                                               autocomplete="off"
                                               id="departure-city-field-1"
                                               required
                                               class="spec-field__input spec-field__input--top"/>
                                        <label for="departure-city-field-1"
                                               class="spec-field__label spec-field__label--text-city">Откуда</label>

                                        <span class="spec-field__city-code spec-field__city-code--with-img">ALA</span>

                                        <div class="spec-field__right-part spec-field__right-part--mobile">

                                            <a href class="spec-field__icon">
                                                <svg class="spec-field__svg spec-field__svg--blue">
                                                    <use xlink:href='assets/images/icons.svg#icon-swap'></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div><!-- /.spec-field -->

                                    <div class="spec-field-group__item spec-field">
                                        <input type="text"
                                               autocomplete="off"
                                               id="arrival-city-field-1"
                                               required
                                               class="spec-field__input"/>
                                        <label for="arrival-city-field-1"
                                               class="spec-field__label spec-field__label--text-city">Куда</label>

                                        <span class="spec-field__city-code">MOW</span>

                                    </div><!-- /.spec-field -->
                                </div>
                            </div><!-- /.booking-form__spec-field -->

                            <div class="booking-form__spec-field booking-form__spec-field--date">
                                <div class="spec-field-group">
                                    <div class="spec-field-group__item spec-field spec-field__with-extra-block">
                                        <input type="text"
                                               id="dep-date-1"
                                               required
                                               class="spec-field__input"
                                               autocomplete="off"/>
                                        <label for="dep-date-1" class="spec-field__label spec-field__label--text-date">Дата
                                            вылета</label>
                                        <div class="spec-field__right-part spec-field__right-part--with-extra-block">
                                            <span class="spec-field__icon">
                                                <svg class="spec-field__svg spec-field__svg--blue">
                                                    <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="spec-field__extra">
                                            <input type="text"
                                                   required
                                                   placeholder="не указано"
                                                   class="spec-field__input spec-field__input--extra"
                                                   autocomplete="off"/>
                                            <!-- <label  class="spec-field__label spec-field__label--text-date spec-field__label--extra">не указано</label> -->
                                            <div class="spec-field__right-part spec-field__right-part--extra">
                                                <span class="spec-field__icon spec-field__icon--extra">
                                                    <svg class="spec-field__svg spec-field__svg--blue">
                                                        <use xlink:href='assets/images/icons.svg#icon-clock'></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="spec-field-group__item spec-field spec-field__with-extra-block">
                                        <input type="text"
                                               id="back-date-1"
                                               required
                                               class="spec-field__input"
                                               ng-model="segment.backDate"
                                               autocomplete="off"/>
                                        <label for="back-date-1" class="spec-field__label spec-field__label--text-date">Обратно</label>
                                        <div class="spec-field__right-part spec-field__right-part--with-extra-block">
                                            <span class="spec-field__icon">
                                                <svg class="spec-field__svg spec-field__svg--blue">
                                                    <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="spec-field__extra">
                                            <input type="text"
                                                   required
                                                   placeholder="16:00 – 20:30"
                                                   class="spec-field__input spec-field__input--extra-full"
                                                   autocomplete="off"/>
                                            <!-- <label  class="spec-field__label spec-field__label--text-date spec-field__label--extra-full">16:00 – 20:30</label> -->
                                            <div class="spec-field__right-part spec-field__right-part--extra">
                                                <span class="spec-field__icon spec-field__icon--extra">
                                                    <svg class="spec-field__svg spec-field__svg--blue">
                                                        <use xlink:href='assets/images/icons.svg#icon-clock'></use>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="booking-form__dates-popup popup-wnd" style="display: none;">
                                    <div class="booking-form__calendar">
                                        <!-- Тут календарь -->
                                    </div>

                                    <div class="popup-wnd__buttons">
                                        <a href class="btn btn-default">Закрыть</a>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-form__spec-field booking-form__spec-field--passenger">
                                <div class="spec-field">
                                    <input type="text"
                                           readonly
                                           class="spec-field__input spec-field__input--valid"
                                           value="1 пассажир"
                                           id="passengers-input"/>
                                    <label class="spec-field__label spec-field__label--text-passengers">Пассажиры</label>
                                    <div class="spec-field__right-part">
                                        <span class="spec-field__icon">
                                            <svg class="spec-field__svg spec-field__svg--black">
                                                <use xlink:href='assets/images/icons.svg#chevron-down'></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="booking-form__passengers-popup popup-wnd" style="display: none;">
                                    <!-- Тут вводится класс и количество пассажиров -->

                                    <div class="popup-wnd__buttons">
                                        <a href class="btn btn-default">Выбрать</a>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="booking-form__search-btn">Найти билеты</button>

                            <div class="booking-form__remove-btn" style="display: none;">
                                <a href class="text-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- /.booking-form__line -->
                </div><!-- /.booking-form -->
            </div><!-- /.booking-form-container__inputs -->
        </div><!-- /.booking-form-container__content -->

        <div class="page">
            <div class="page__container">
                <div class="page__sidebar page__sidebar--hidden-md">
                    <div class="page__sidebar-item booking-multiple-toggle booking-multiple-toggle--desktop-only">
                        <div class="booking-multiple-toggle__container">
                            <div class="toggle booking-multiple-toggle__input">
                                <input type="checkbox" id="id-toggle-multiple-sidebar" checked/>
                                <label for="id-toggle-multiple-sidebar"></label>
                            </div>

                            <div class="booking-multiple-toggle__text">
                                <div class="booking-multiple-toggle__text-title">Выбрать несколько рейсов</div>
                                <div class="booking-multiple-toggle__text-counter">рейсов выбрано: 0</div>
                            </div>
                        </div>
                    </div>

                    <div class="page__sidebar-item sidebar-filter">
                        <div class="sidebar-filter__item">
                            <button class="sidebar-filter__title sidebar-filter__title--open">
                                Пересадки
                            </button>
                            <div class="sidebar-filter__content">
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter1" data-id="d1" class="all"/>
                                        <label for="checkbox-filter1"></label>
                                    </span>
                                    Все
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter2" data-id="d1" class="one"/>
                                        <label for="checkbox-filter2"></label>
                                    </span>
                                    Без пересадок
                                    <span class="sidebar-filter__checkbox-extra">
                                        110 000 тг
                                    </span>
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter3" data-id="d1" class="one"/>
                                        <label for="checkbox-filter3"></label>
                                    </span>
                                    1 пересадка
                                    <span class="sidebar-filter__checkbox-extra">
                                        89 300 тг
                                    </span>
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter4" data-id="d1" class="one"/>
                                        <label for="checkbox-filter4"></label>
                                    </span>
                                    2 пересадки
                                    <span class="sidebar-filter__checkbox-extra">
                                        79 600 тг
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="sidebar-filter__item">
                            <button class="sidebar-filter__title">
                                Время в пути
                            </button>
                            <div class="sidebar-filter__content" style="display: none;">
                                <div class="sidebar-filter__direction">
                                    <div class="sidebar-filter__route">
                                        <svg class="sidebar-filter__transport-icon">
                                            <use xlink:href='/assets/images/icons.svg#icon-plane'></use>
                                        </svg>
                                        <div class="sidebar-filter__bold-text">
                                            Алматы – Астана
                                        </div>
                                    </div>
                                    <div class="sidebar-filter__info-text">
                                        1 ч 20 мин – 28 ч 25 мин
                                    </div>
                                    <div class="sidebar-filter__range-slider">

                                    </div>
                                </div>
                                <div class="sidebar-filter__direction">
                                    <div class="sidebar-filter__route">
                                        <svg class="sidebar-filter__transport-icon sidebar-filter__transport-icon--back">
                                            <use xlink:href='/assets/images/icons.svg#icon-plane'></use>
                                        </svg>
                                        <div class="sidebar-filter__bold-text">
                                            Алматы – Астана
                                        </div>
                                    </div>
                                    <div class="sidebar-filter__info-text">
                                        1 ч 20 мин – 28 ч 25 мин
                                    </div>
                                    <div class="sidebar-filter__range-slider">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar-filter__item">
                            <button class="sidebar-filter__title">
                                Авиакомпании
                            </button>
                            <div class="sidebar-filter__content" style="display: none;">
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter-company1" data-id="d2" class="all"/>
                                        <label for="checkbox-filter-company1"></label>
                                    </span>
                                    Все
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter-company2" data-id="d2" class="one"/>
                                        <label for="checkbox-filter-company2"></label>
                                    </span>
                                    Air Astana
                                    <span class="sidebar-filter__checkbox-extra">
                                        78 500 тг
                                    </span>
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter-company3" data-id="d2" class="one"/>
                                        <label for="checkbox-filter-company3"></label>
                                    </span>
                                    Bek Air
                                    <span class="sidebar-filter__checkbox-extra">
                                        32 520 тг
                                    </span>
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter-company4" data-id="d2" class="one"/>
                                        <label for="checkbox-filter-company4"></label>
                                    </span>
                                    Qazaq Air
                                    <span class="sidebar-filter__checkbox-extra">
                                        45 600 тг
                                    </span>
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter-company5" data-id="d2" class="one"/>
                                        <label for="checkbox-filter-company5"></label>
                                    </span>
                                    Etihad Airways
                                    <span class="sidebar-filter__checkbox-extra">
                                        95 450 тг
                                    </span>
                                </label>
                                <label class="sidebar-filter__checkbox-block">
                                    <span class="checkbox sidebar-filter__checkbox">
                                        <input type="checkbox" id="checkbox-filter-company6" data-id="d2" class="one"/>
                                        <label for="checkbox-filter-company6"></label>
                                    </span>
                                    Lufthansa
                                    <span class="sidebar-filter__checkbox-extra">
                                        140 000 тг
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="sidebar-filter__btn-block">
                            <button class="btn-save btn-save--width1" id="sidebar-filter-close">Закрыть</button>
                        </div>
                    </div>

                    <div class="page__sidebar-item">
                        <div class="page__sidebar-container send-mail">
                            <div class="send-mail__text">
                                <p class="send-mail__text-main">Отправить на почту</p>
                                <p class="send-mail__text-extra">На указаную почту будут высланы найденые авиарейсы</p>
                            </div>
                            <input type="text" class="input-full send-mail__email-input">
                            <button class="btn-cancel btn-cancel--grey">Отправить</button>
                        </div>
                    </div>
                </div>
                <!-- smth for example -->
                <div class="page__full-content">
                    <div class="choice-trip">
                        <div class="choice-trip__direction">
                            ALA – MOW, 11 сен, вт | MOW – ALA, 15 ноя, чт
                            <div class="choice-trip__amount">найдено: 120 вариантов</div>
                        </div>
                    </div>

                    <div class="avia-page-controls">
                        <div class="avia-page-controls__multiple">
                            <div class="booking-multiple-toggle">
                                <div class="toggle booking-multiple-toggle__input">
                                    <input type="checkbox" id="id-toggle-multiple-content" checked/>
                                    <label for="id-toggle-multiple-content"></label>
                                </div>

                                <div class="booking-multiple-toggle__text">
                                    <div class="booking-multiple-toggle__text-title">Выбрать неск. рейсов</div>
                                    <div class="booking-multiple-toggle__text-counter">рейсов выбрано: 0</div>
                                </div>
                            </div>
                        </div>

                        <div class="avia-page-controls__items">
                            <div class="avia-page-controls__item">
                                <div class="filter-dropdown">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-main">Группировка по</div>
                                        <div class="filter-dropdown__text-select">Перевозчику</div>
                                    </div>
                                </div>
                            </div>

                            <div class="avia-page-controls__item avia-page-controls__item--filter"
                                 id="open-sidebar-filter">
                                <div class="filter-dropdown filter-dropdown--t-controls-md">
                                    <div class="filter-dropdown__icon">
                                        <svg class="filter-dropdown__svg filter-dropdown__svg--sort">
                                            <use xlink:href='assets/images/icons.svg#icon-filters'></use>
                                        </svg>
                                    </div>
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Фильтры</div>
                                        <div class="filter-dropdown__text-main">выбрано: 1</div>
                                    </div>
                                </div>
                            </div>

                            <div class="avia-page-controls__item">
                                <div class="filter-dropdown filter-dropdown--t-controls-lg">
                                    <div class="filter-dropdown__icon filter-dropdown__icon--sort">
                                        <svg class="filter-dropdown__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                        </svg>
                                    </div>
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-main">Сортировка по</div>
                                        <div class="filter-dropdown__text-select">Стоимости</div>
                                    </div>
                                </div>
                            </div>

                            <div class="avia-page-controls__item avia-page-controls__item--calendar">
                                <div class="filter-dropdown filter-dropdown--t-controls-lg">
                                    <div class="filter-dropdown__icon">
                                        <svg class="filter-dropdown__svg filter-dropdown__svg--sort">
                                            <use xlink:href='assets/images/icons.svg#icon-sort-price'></use>
                                        </svg>
                                    </div>
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">Календарь цен</div>
                                        <div class="filter-dropdown__text-main">на соседние даты</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.booking-form-container__wrapper -->




    <div class="modal-window-page">
        <div class="dashboard-modal-graph modal-window-page__dashboard-modal">
            <div class="dashboard-modal-graph__title">
                Пары городов, статистика
            </div>
            <button class="dashboard-modal-graph__close-btn">
                <svg class="dashboard-modal-graph__close">
                    <use xlink:href='/assets/images/icons.svg#icon-close'></use>
                </svg>
            </button>
            <ul class="tabs dashboard-modal-graph__tabs">
                <li class="tabs__item">
                    <a href class="tabs__link tabs__link--active">
                        <svg class="tabs__icon">
                            <use xlink:href='/assets/images/icons.svg#icon-plane'></use>
                        </svg>
                        Авиаперелеты <span>63</span>
                    </a>
                </li>
                <li class="tabs__item">
                    <a href class="tabs__link">
                        <svg class="tabs__icon">
                            <use xlink:href='/assets/images/icons.svg#icon-train'></use>
                        </svg>
                        ЖД-поездки <span>80</span>
                    </a>
                </li>
            </ul>

            <div class="dashboard-modal-graph__sort-row">
                <div class="dashboard-modal-graph__sort-block">
                    <div class="dashboard-modal-graph__sort-title">
                        Отобразить как
                    </div>
                    <div class="dashboard-modal-graph__sort">
                        <div class="radio-buttons dashboard-modal-graph__radio-buttons radio-buttons--blue">
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option-graph-table" id="radio-graph" />
                                <label class="radio-buttons__label" for="radio-graph">Графиком</label>
                            </div>
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option-graph-table" id="radio-table" checked />
                                <label class="radio-buttons__label" for="radio-table">Таблицей</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-modal-graph__sort-block">
                    <div class="dashboard-modal-graph__sort-title">
                        Значения как
                    </div>
                    <div class="dashboard-modal-graph__sort">
                        <div class="radio-buttons dashboard-modal-graph__radio-buttons radio-buttons--blue">
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option-sum-amount" id="radio-sum1" checked />
                                <label class="radio-buttons__label" for="radio-sum1">Сумма, тг</label>
                            </div>
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option-sum-amount" id="radio-amount1" />
                                <label class="radio-buttons__label" for="radio-amount1">Кол-во, шт</label>
                            </div>
                        </div>
                        <label class="dashboard-modal-graph__check-block">
                            <span class="checkbox checkbox--blue">
                                <input type="checkbox"  id="checkbox3" />
                                <label for="checkbox3"></label>
                            </span>
                            <p class="dashboard-modal-graph__check">
                                показать в млн.
                            </p>
                        </label>
                    </div>
                </div>

                <div class="dashboard-modal-graph__sort-block">
                    <div class="dashboard-modal-graph__sort-title">
                        Период
                    </div>
                    <div class="filter-dropdown filter-dropdown--t-dashboard">
                        <div class="filter-dropdown__icon">
                            <svg class="filter-dropdown__svg filter-dropdown__svg--sort">
                                <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                            </svg>
                        </div>
                        <div class="filter-dropdown__text">
                            <div class="filter-dropdown__text-select">1 янв 2016 – 3 сен 2018</div>
                        </div>
                    </div>

                </div>

                <div class="dashboard-modal-graph__sort-block">
                    <div class="dashboard-modal-graph__sort-title">
                        Сортировать по
                    </div>
                    <div class="tabs-round">
                        <a class="tabs-round__item tabs-round__item--active" href="#">популярности</a>
                        <a class="tabs-round__item" href="#">затраченной сумме</a>
                    </div>
                </div>
            </div>


            <div class="dashboard-modal-graph__grid dashboard-modal-grid">
                <table class="dashboard-modal-grid__table">
                    <tr class="dashboard-modal-grid__head-row-period">
                        <th class="dashboard-modal-grid__title"></th>
                        <th class="dashboard-modal-grid__title">1 янв 2016 – 31 дек 2016</th>
                        <th class="dashboard-modal-grid__title">1 янв 2017 – 31 дек 2017</th>
                        <th class="dashboard-modal-grid__title">1 янв 2018 – 3 сен 2018</th>
                    </tr>

                    <tr class="dashboard-modal-grid__head-row">
                        <th class="dashboard-modal-grid__title">Пара городов</th>
                        <th class="dashboard-modal-grid__title">Кол-во, шт / Сумма, тг / Кол-во, % / Сумма, %</th>
                        <th class="dashboard-modal-grid__title">Кол-во, шт / Сумма, тг / Кол-во, % / Сумма, %</th>
                        <th class="dashboard-modal-grid__title">Кол-во, шт / Сумма, тг / Кол-во, % / Сумма, %</th>
                    </tr>

                    <tr class="dashboard-modal-grid__row">
                        <td class="dashboard-modal-grid__cell">
                            <a href="#" class="dashboard-modal-grid__city">
                                Астана – Алматы
                            </a>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-block">
                                <div class="dashboard-modal-grid__data">
                                    140 шт
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    5.4 млн
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    17.24%
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    19.6%
                                </div>
                            </div>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-row">
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            250 шт
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            9.8 млн
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            14.3 %
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            21.3%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-row">
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            250 шт
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            9.8 млн
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            14.3 %
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            21.3%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                     <tr class="dashboard-modal-grid__row">
                        <td class="dashboard-modal-grid__cell">
                            <a href="#" class="dashboard-modal-grid__city">
                                Костанай – Семипалатинск
                            </a>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-block">
                                <div class="dashboard-modal-grid__data">
                                    140 шт
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    5.4 млн
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    17.24%
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    19.6%
                                </div>
                            </div>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-row">
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            250 шт
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            9.8 млн
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            14.3 %
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            21.3%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-row">
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            250 шт
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            9.8 млн
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            14.3 %
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            21.3%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr class="dashboard-modal-grid__row">
                        <td class="dashboard-modal-grid__cell">
                            <a href="#" class="dashboard-modal-grid__other-city">
                                Остальные <br> пары городов <span class="dashboard-modal-grid__amount-other-city">85</span>
                            </a>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-block">
                                <div class="dashboard-modal-grid__data">
                                    140 шт
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    5.4 млн
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    17.24%
                                </div>
                                <div class="dashboard-modal-grid__data">
                                    19.6%
                                </div>
                            </div>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-row">
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            250 шт
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            9.8 млн
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            14.3 %
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            21.3%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="dashboard-modal-grid__cell">
                            <div class="dashboard-modal-grid__data-row">
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            250 шт
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            9.8 млн
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame">
                                        <svg class="dashboard-modal-grid__svg">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            14.3 %
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-modal-grid__data-frame-block">
                                    <div class="dashboard-modal-grid__data-frame dashboard-modal-grid__data-frame--green">
                                        <svg class="dashboard-modal-grid__svg svg-icon svg-icon--rotate-180">
                                            <use xlink:href='assets/images/icons.svg#icon-arrow'></use>
                                        </svg>
                                        <div class="dashboard-modal-grid__data-svg">
                                            21.3%
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <button class="dashboard-modal-graph__btn-table">
                    Показать все пары
                    <svg class="dashboard-modal-graph__btn-svg-table svg-icon svg-icon--rotate-90">
                        <use xlink:href='assets/images/icons.svg#chevron-right'></use>
                    </svg>
                </button>
            </div><!-- /.employees-list__grid employees-grid -->

            </div>


        </div>
    </div>


<?php include "./_inc/footer.php" ?>