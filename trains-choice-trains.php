<?php include "./_inc/header.php" ?>
<div class="content">
    <div class="booking-form-container booking-form-container--choice-trip">
        <div class="booking-form-container__content-choise-trip">

            <div class="booking-form-mobile">
                <div>
                    <div class="booking-form-mobile__direction">
                        <span>
                            Алматы-2 
                        </span> 
                        — 
                        <span>
                            Астана
                        </span> 
                        <!-- <svg class="booking-form-mobile__svg">
                            <use xlink:href='assets/images/icons.svg#icon-round-trip'></use>
                        </svg> -->
                    </div>
                    <div>
                        <span class="booking-form-mobile__main-info">15 ноября, чт</span>
                        <span class="booking-form-mobile__main-info">1 пассажир</span>
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
                    <div class="booking-form__tabs-toggle booking-form__tabs-toggle--mobile">
                        <ul class="tabs-route-type booking-form__tabs-route-type">
                            <li class="tabs-route-type__item"><a href class=" tabs-route-type__link">В одну сторону</a></li>
                            <li class="tabs-route-type__item"><a href class=" tabs-route-type__link tabs-route-type__link--active">Туда и обратно</a></li>
                            <li class="tabs-route-type__item"><a href class=" tabs-route-type__link">Сложный маршрут</a></li>
                        </ul>
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
                                    <label for="departure-city-field-1" class="spec-field__label spec-field__label--text-city">Откуда</label>

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
                                    <label for="arrival-city-field-1" class="spec-field__label spec-field__label--text-city">Куда</label>

                                    <span class="spec-field__city-code">MOW</span>

                                </div><!-- /.spec-field -->
                            </div>
                        </div><!-- /.booking-form__spec-field -->

                        <div class="booking-form__spec-field booking-form__spec-field--date">
                            <div class="spec-field-group">
                                <div class="spec-field-group__item spec-field">
                                    <input type="text"
                                            id="dep-date-1"
                                            required
                                            class="spec-field__input"
                                            autocomplete="off" />
                                    <label for="dep-date-1" class="spec-field__label spec-field__label--text-date">Дата выезда</label>
                                    <div class="spec-field__right-part">
                                        <span class="spec-field__icon">
                                            <svg class="spec-field__svg spec-field__svg--blue">
                                                <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="spec-field-group__item spec-field" style="display: none;">
                                    <input type="text"
                                            id="back-date-1"
                                            required
                                            class="spec-field__input"
                                            ng-model="segment.backDate"
                                            autocomplete="off" />
                                    <label for="back-date-1" class="spec-field__label spec-field__label--text-date">Обратно</label>
                                    <div class="spec-field__right-part">
                                        <span class="spec-field__icon">
                                            <svg class="spec-field__svg spec-field__svg--blue">
                                                <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                                            </svg>
                                        </span>
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
                                        id="passengers-input" />
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
                        <div class="booking-form__route-mobile">
                            Составить сложный маршрут
                        </div>
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
                <div class="page__sidebar-item sidebar-filter">
                   <div class="sidebar-filter__item">
                       <button class="sidebar-filter__title sidebar-filter__title--open">
                           Класс вагона
                        </button> 
                        <div class="sidebar-filter__content">
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter1" data-id="d1" class="all"/>
                                    <label for="checkbox-filter1"></label>
                                </span>
                            Все
                            </label>
                            <label class="sidebar-filter__checkbox-block ">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter2" data-id="d1" class="one" />
                                    <label for="checkbox-filter2"></label>
                                </span>
                            Плацкарт
                                <span class="sidebar-filter__checkbox-extra">
                                    110 000 тг
                                </span>
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter3" data-id="d1" class="one"/>
                                    <label for="checkbox-filter3"></label>
                                </span>
                            Купе
                                <span class="sidebar-filter__checkbox-extra">
                                    89 300 тг
                                </span>
                            </label>
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter4" data-id="d1" class="one"/>
                                    <label for="checkbox-filter4"></label>
                                </span>
                            Люкс
                                <span class="sidebar-filter__checkbox-extra">
                                    79 600 тг
                                </span>
                            </label>
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter5" data-id="d1" class="one"/>
                                    <label for="checkbox-filter5"></label>
                                </span>
                            Общий
                                <span class="sidebar-filter__checkbox-extra">
                                    79 600 тг
                                </span>
                            </label>
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter6" data-id="d1" class="one"/>
                                    <label for="checkbox-filter6"></label>
                                </span>
                            Сидячий
                                <span class="sidebar-filter__checkbox-extra">
                                    79 600 тг
                                </span>
                            </label>
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter7" data-id="d1" class="one"/>
                                    <label for="checkbox-filter7"></label>
                                </span>
                            Мягкий
                                <span class="sidebar-filter__checkbox-extra">
                                    79 600 тг
                                </span>
                            </label>
                        </div>
                    </div>

                    <div class="sidebar-filter__item">
                        <button class="sidebar-filter__title">
                            Отправление и прибытие  
                        </button> 
                        <div class="sidebar-filter__content" style="display: none;">
                            <div class="sidebar-filter__time-block">
                                <div class="sidebar-filter__info-row">
                                    <svg class="sidebar-filter__transport-icon">
                                        <use xlink:href='/assets/images/icons.svg#icon-train'></use>
                                    </svg>
                                    <div class="sidebar-filter__info-text sidebar-filter__info-text--way">
                                        Алматы – Астана
                                    </div>
                                </div>
                                <div class="sidebar-filter__travel-time">
                                    Отправление:
                                </div>
                                <div class="sidebar-filter__info-text">
                                    1 ч 20 мин – 28 ч 25 мин
                                </div>
                                <div class="sidebar-filter__range-slider">

                                </div>
                            </div>
                            <div class="sidebar-filter__time-block">
                                 <div class="sidebar-filter__travel-time">
                                    Прибытие:
                                </div>
                                <div class="sidebar-filter__info-text">
                                    1 ч 20 мин – 28 ч 25 мин
                                </div>
                                <div class="sidebar-filter__range-slider">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- smth for example -->
            <div class="page__full-content">
                <div class="choice-trip">
                    <div class="choice-trip__direction">
                        Астана — Алматы 2, 15 ноября, чт
                        <div class="choice-trip__amount">найдено: 120 вариантов</div>
                    </div>
                </div>

                <div class="train-page-controls">
                        
                    <div class="train-page-controls__item train-page-controls__item--filter">
                        <div class="filter-dropdown filter-dropdown--t-controls-md-change">
                            <div class="filter-dropdown__icon">
                                <svg class="filter-dropdown__svg filter-dropdown__svg--sort">
                                    <use xlink:href='assets/images/icons.svg#icon-filters'></use>
                                </svg>
                            </div>
                            <div class="filter-dropdown__text">
                                <div class="filter-dropdown__text-main">Класс вагона</div>
                                <div class="filter-dropdown__text-select">Любой класс</div>
                                <div class="filter-dropdown__text-select">Фильтры</div>
                            </div>
                            <!-- <div class="filter-dropdown__text-select ">Фильтры</div> -->
                        </div>
                    </div>

                    <div class="train-page-controls__item">
                        <div class="filter-dropdown filter-dropdown--t-controls-md-only-visible">   
                            <div class="filter-dropdown__icon">
                                <svg class="filter-dropdown__svg filter-dropdown__svg--sort">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </div>
                            <div class="filter-dropdown__text">
                                <div class="filter-dropdown__text-select">По цене</div>
                            </div>
                        </div>
                    </div>

                    <div class="train-page-controls__item train-page-controls__item--filter ">
                        <div class="filter-dropdown filter-dropdown--t-controls-md-none">
                            <div class="filter-dropdown__text">
                                <div class="filter-dropdown__text-main">Отправление</div>
                                <div class="filter-dropdown__text-select">1 ч 20 мин – 28 ч 25 мин</div>
                            </div>
                        </div>
                    </div>

                    <div class="train-page-controls__item train-page-controls__item--filter"> 
                        <div class="filter-dropdown filter-dropdown--t-controls-md-none">
                            <div class="filter-dropdown__text">
                                <div class="filter-dropdown__text-main">прибытие</div>
                                <div class="filter-dropdown__text-select">1 ч 20 мин – 28 ч 25 мин</div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="sidebar-filter__item-content filter-dropdown__extra-open">
                        <label class="sidebar-filter__checkbox-block" >
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter1" data-id="d1" class="all"/>
                                <label for="checkbox-filter1"></label>
                            </span>
                        Все
                        </label>
                        <label class="sidebar-filter__checkbox-block ">
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter2" data-id="d1" class="one" />
                                <label for="checkbox-filter2"></label>
                            </span>
                        Плацкарт
                            <span class="sidebar-filter__checkbox-extra">
                                110 000 тг
                            </span>
                        </label>
                        <label class="sidebar-filter__checkbox-block">
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter3" data-id="d1" class="one"/>
                                <label for="checkbox-filter3"></label>
                            </span>
                        Купе
                            <span class="sidebar-filter__checkbox-extra">
                                89 300 тг
                            </span>
                        </label>
                        <label class="sidebar-filter__checkbox-block" >
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter4" data-id="d1" class="one"/>
                                <label for="checkbox-filter4"></label>
                            </span>
                        Люкс
                            <span class="sidebar-filter__checkbox-extra">
                                79 600 тг
                            </span>
                        </label>
                        <label class="sidebar-filter__checkbox-block" >
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter5" data-id="d1" class="one"/>
                                <label for="checkbox-filter5"></label>
                            </span>
                        Общий
                            <span class="sidebar-filter__checkbox-extra">
                                79 600 тг
                            </span>
                        </label>
                        <label class="sidebar-filter__checkbox-block" >
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter6" data-id="d1" class="one"/>
                                <label for="checkbox-filter6"></label>
                            </span>
                        Сидячий
                            <span class="sidebar-filter__checkbox-extra">
                                79 600 тг
                            </span>
                        </label>
                        <label class="sidebar-filter__checkbox-block" >
                            <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                <input type="checkbox"  id="checkbox-filter7" data-id="d1" class="one"/>
                                <label for="checkbox-filter7"></label>
                            </span>
                        Мягкий
                            <span class="sidebar-filter__checkbox-extra">
                                79 600 тг
                            </span>
                        </label>
                    </div> -->
                </div>

            </div>
        </div>
    </div>
</div><!-- /.booking-form-container__wrapper -->



<?php include "./_inc/footer.php" ?>