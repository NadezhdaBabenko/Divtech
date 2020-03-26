<?php include "./_inc/header.php" ?>
<div class="content">
    <div class="booking-form-container booking-form-container--choice-trip">
        <div class="booking-form-container__content-choise-trip booking-form-container__content-choise-trip--hotel">

            <div class="booking-form-mobile">
                <div>
                    <div class="booking-form-mobile__direction">
                        <span>
                            Лиссабон 
                        </span> 
                        ,
                        <span>
                            Португалия
                        </span> 
                    </div>
                    <div>
                        <span class="booking-form-mobile__main-info">11 сен, вт — 15 ноя, чт</span>
                        <span class="booking-form-mobile__main-info">2 взрослых</span>
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
                
                    <div class="booking-form__line">
                        <div class="booking-form__spec-field booking-form__spec-field--cities">
                            <div class="spec-field-group">
                                <div class="spec-field-group__item spec-field">
                                    <input type="text"
                                            autocomplete="off"
                                            id="departure-city-field-1"
                                            required
                                            class="spec-field__input spec-field__input--top"/>
                                    <label for="departure-city-field-1" class="spec-field__label spec-field__label--text-city">Нарпавление</label>
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
                                    <label for="dep-date-1" class="spec-field__label spec-field__label--text-date">Заезд</label>
                                    <div class="spec-field__right-part">
                                        <span class="spec-field__icon">
                                            <svg class="spec-field__svg spec-field__svg--blue">
                                                <use xlink:href='assets/images/icons.svg#icon-calendar'></use>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="spec-field-group__item spec-field">
                                    <input type="text"
                                            id="back-date-1"
                                            required
                                            class="spec-field__input"
                                            ng-model="segment.backDate"
                                            autocomplete="off" />
                                    <label for="back-date-1" class="spec-field__label spec-field__label--text-date">Отъезд</label>
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
                                        value="2 взрослых"
                                        id="passengers-input" />
                                <label class="spec-field__label spec-field__label--text-passengers">Количество гостей</label>
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

                        <button type="submit" class="booking-form__search-btn">Найти отели и номера</button>

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
        <div class="page__container hotel-page">
            <div class="page__sidebar page__sidebar--hidden-md">
                <div class="page__sidebar-item sidebar-filter">
                    
                   <div class="sidebar-filter__item">
                       <button class="sidebar-filter__title sidebar-filter__title--open">
                           Кол-во звезд
                        </button> 
                        <div class="sidebar-filter__content">
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter1" data-id="d1" class="all"/>
                                    <label for="checkbox-filter1"></label>
                                </span>
                            Любое кол-во
                            </label>
                            <label class="sidebar-filter__checkbox-block ">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter2" data-id="d1" class="one" />
                                    <label for="checkbox-filter2"></label>
                                </span>
                                <div class="sidebar-filter__stars-block">
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                </div>
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter3" data-id="d1" class="one"/>
                                    <label for="checkbox-filter3"></label>
                                </span>
                                <div class="sidebar-filter__stars-block">
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                </div>
                            </label>
                            <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter4" data-id="d1" class="one"/>
                                    <label for="checkbox-filter4"></label>
                                </span>
                                <div class="sidebar-filter__stars-block">
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                </div>
                            </label>
                             <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter4" data-id="d1" class="one"/>
                                    <label for="checkbox-filter4"></label>
                                </span>
                                <div class="sidebar-filter__stars-block">
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                </div>
                            </label>
                             <label class="sidebar-filter__checkbox-block" >
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter4" data-id="d1" class="one"/>
                                    <label for="checkbox-filter4"></label>
                                </span>
                                <div class="sidebar-filter__stars-block">
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--blue">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                     <svg class="sidebar-filter__stars sidebar-filter__stars--grey">
                                        <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                    </svg>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="sidebar-filter__item">
                        <button class="sidebar-filter__title">
                            Расстояние от <span class="sidebar-filter__title-extra">VKO </span><span class="sidebar-filter__title-extra sidebar-filter__title-hidden">(Внуково)</span>  
                        </button> 
                        <div class="sidebar-filter__content" style="display: none;">
                            <div class="sidebar-filter__time-block">
                                
                                <div class="sidebar-filter__info-text">
                                    2.5 км – 67 км
                                </div>
                                <div class="sidebar-filter__range-slider">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-filter__item">
                        <button class="sidebar-filter__title">
                            Стоимость <span class="sidebar-filter__title-extra">19 ночей</span> в <span class="sidebar-filter__title-extra">KZT</span>
                        </button> 
                        <div class="sidebar-filter__content" style="display: none;">
                            <div class="sidebar-filter__time-block">
                                
                                <div class="sidebar-filter__info-text">
                                    120 660 тг – 240 130 тг
                                </div>
                                <div class="sidebar-filter__range-slider">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-filter__item">
                        <button class="sidebar-filter__title">
                            Питание 
                        </button> 
                        <div class="sidebar-filter__content" style="display: none;">
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter-company1" data-id="d2"  class="all"/>
                                    <label for="checkbox-filter-company1"></label>
                                </span>
                            Все
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter-company2" data-id="d2" class="one"/>
                                    <label for="checkbox-filter-company2"></label>
                                </span>
                            Включено
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter-company3" data-id="d2" class="one"/>
                                    <label for="checkbox-filter-company3"></label>
                                </span>
                            Завтрак Включен
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter-company4" data-id="d2" class="one"/>
                                    <label for="checkbox-filter-company4"></label>
                                </span>
                            Полупансион
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter-company5" data-id="d2" class="one"/>
                                    <label for="checkbox-filter-company5"></label>
                                </span>
                            Полный пансион
                            </label>
                            <label class="sidebar-filter__checkbox-block">
                                <span class="checkbox checkbox--blue sidebar-filter__checkbox">
                                    <input type="checkbox"  id="checkbox-filter-company6" data-id="d2"class="one"/>
                                    <label for="checkbox-filter-company6"></label>
                                </span>
                            Не включено
                            </label>
                        </div>
                        <div class="sidebar-filter__btn-block">
                            <button class="btn-save btn-save--width1" id="sidebar-filter-close">Закрыть</button>
                        </div>
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








            <div class="page__full-content">
                <div class="choice-trip">
                    <div class="choice-trip__direction">
                        Номера в отелях в Санкт-Петербурге, Россия
                        <div class="choice-trip__amount">найдено: 120 вариантов</div>
                    </div>

                    <div class="hotel-page-controls">

                        <div class="input-with-btn hotel-page-controls__input-with-btn">
                            <input class="input-full input-full--height40" type="text" placeholder="Поиск по названию">
                            <button class="input-with-btn__search">
                                <svg class="input-with-btn__search-svg">
                                    <use xlink:href='/assets/images/icons.svg#icon-search'></use>
                                </svg>
                            </button>
                        </div>

                        <div class="hotel-page-controls__item hotel-page-controls__item--filter" id="open-sidebar-filter">
                            <div class="filter-dropdown filter-dropdown--t-controls-filter">
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

                        <div class="hotel-page-controls__item">
                            <div class="filter-dropdown filter-dropdown--t-controls-md">
                                <div class="filter-dropdown__icon">
                                    <svg class="filter-dropdown__svg filter-dropdown__svg--sort">
                                        <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                    </svg>
                                </div>
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-main">Сортировка по</div>
                                    <div class="filter-dropdown__text-select">Рейтингу</div>
                                </div>
                            </div>
                        </div>

                        <div class="hotel-page-controls__item"> 
                            <div class="filter-dropdown filter-dropdown--t-controls-md-none">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-main">ТИП БРОНИ</div>
                                    <div class="filter-dropdown__text-select">Все типы брони</div>
                                </div>
                            </div>
                        </div>

                        <div class="hotel-page-controls__item">
                            <div class="filter-dropdown filter-dropdown--t-controls-md-visible">
                                <div class="filter-dropdown__text">
                                    <div class="filter-dropdown__text-main">Валюта</div>
                                    <div class="filter-dropdown__text-select">KZT, тенге</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- choice-trip -->






                <div class="hotel-description-block">

                    <div class="hotel-description-card hotel-description-card--open hotel-page__description-card">
                        <div class="hotel-description">
                            <div class="hotel-photo hotel-description__photo">
                                <div class="hotel-photo__svg-block hotel-photo__svg-block--left">
                                    <svg class="hotel-photo__svg">
                                        <use xlink:href='assets/images/icons.svg#chevron-left'></use>
                                    </svg>
                                </div>
                                <div class="hotel-photo__svg-block">
                                    <svg class="hotel-photo__svg">
                                        <use xlink:href='assets/images/icons.svg#chevron-right'></use>
                                    </svg>
                                </div>

                                <div class="hotel-photo__amount">
                                    1/20
                                </div>
                            </div>

                            <div class="hotel-specifications hotel-description__specifications">
                                <div class="hotel-specifications__assessment-block">
                                    <div class="hotel-specifications__stars-block">
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                    </div>

                                    <div class="hotel-specifications__rating-block">
                                        <div class="rating rating--green hotel-specifications__rating">
                                            <svg class="rating__icon rating__icon--green">
                                                <use xlink:href='/assets/images/icons.svg#icon-crown'></use>
                                            </svg>
                                            <div class="rating__text rating__text--green">
                                                НАДЕЖНЫЙ 
                                            </div>
                                        </div>

                                        <div class="rating rating--blue hotel-specifications__rating">
                                            <svg class="rating__icon rating__icon--blue">
                                                <use xlink:href='/assets/images/icons.svg#icon-recomend'></use>
                                            </svg>
                                            <div class="rating__text rating__text--blue">
                                                рекомендуем 
                                            </div>
                                        </div>

                                        <div class="hotel-specifications__tripadv">
                                            <svg class="hotel-specifications__tripadv-svg">
                                                <use xlink:href='/assets/images/icons.svg#icon-tripadv'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-specifications__grade">
                                            5.0
                                        </div>
                                    </div>
                                </div>

                                <div class="hotel-specifications__main-info-block">
                                    <div class="hotel-specifications__main-info">
                                        <div class="hotel-specifications__title">
                                            Отель Рокко Форте Астория
                                        </div>
                                        <div class="hotel-specifications__location">
                                            Набережная Обводного канала, д.130
                                        </div>
                                    </div>

                                    <div class="hotel-specifications__services-block">
                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_spa'></use>
                                            </svg>
                                        </div>
                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_internet'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_pool'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_fitness'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_meal'></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="hotel-specifications__distance-block">
                                    <div class="hotel-specifications__distance">
                                        от 
                                        <span class="hotel-specifications__distance-airport">SVO</span>
                                         – 
                                        <span class="hotel-specifications__distance-amount">1.2 км</span>
                                        , от 
                                        <span class="hotel-specifications__distance-airport">VKO</span>
                                         – 
                                        <span class="hotel-specifications__distance-amount">3 км</span>
                                    </div>
                                    <div class="hotel-specifications__about">
                                        <a href="#" class="hotel-specifications__about-link">Подробно об отеле</a>
                                    </div>
                                </div>

                                <div class="hotel-specifications__details-block">
                                    <div class="hotel-specifications__details">
                                        <div class="hotel-specifications__category">
                                            Двухместный Люкс+
                                        </div>
                                        <div class="hotel-specifications__bed">
                                            Двуспальная кровать
                                        </div>
                                    </div>
                                    <div class="hotel-specifications__details">
                                        <div class="hotel-specifications__extra-info-block">
                                            <svg class="hotel-specifications__svg">
                                                <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                            </svg>
                                            <div class="hotel-specifications__extra-info">
                                                ЗАВТРАК ВКЛЮЧЕН
                                            </div>
                                        </div>
                                        <div class="hotel-specifications__extra-info-block">
                                            <svg class="hotel-specifications__svg">
                                                <use xlink:href='/assets/images/icons.svg#icon-cancel'></use>
                                            </svg>
                                            <div class="hotel-specifications__extra-info">
                                                БЕСПЛАТНАЯ ОТМЕНА
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hotel-specifications__details">
                                        <div class="hotel-specifications__price">
                                            195 600 &#8376;
                                        </div>
                                        <div class="hotel-specifications__price-per-person">
                                            <span class="hotel-specifications__number-of-persons">2x</span>47 800 тг за гостя
                                        </div>
                                    </div>
                                </div>

                                <div class="hotel-specifications__rooms-block">
                                    <div class="hotel-specifications__rooms-free">
                                        <div class="hotel-specifications__rooms">
                                            Свободно:9 номеров
                                        </div>
                                        <div class="hotel-specifications__rooms">
                                            ЕСТЬ НОМЕРА С ПИТАНИЕМ И БЕСПЛАТНОЙ ОТМЕНОЙ!
                                        </div>
                                    </div>
                                    <button class="hotel-specifications__button" style="display: none;">
                                        Показать все номера
                                        <svg class="hotel-specifications__btn-svg">
                                            <use xlink:href='/assets/images/icons.svg#chevron-down'></use>
                                        </svg>
                                    </button>

                                    <button class="hotel-specifications__button hotel-specifications__button--active" >
                                        Свернуть обратно
                                    </button>
                                </div>
                            </div>
                        </div> <!-- hotel-description -->



                        <div class="hotel-description-info hotel-page__description-info">
                            <ul class="tabs tabs--t-smaller hotel-description-info__tabs">
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Об отеле
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link tabs__link--active">
                                        Номера
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Расположение
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Услуги и удобства
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Отзывы
                                    </a>
                                </li>
                            </ul>
                            <div class="hotel-description-info__row">
                                <div class="hotel-description-info__available-rooms">
                                    Доступные номера на 
                                    <span class="hotel-description-info__date"> 
                                        17 апр — 26 апр 
                                    </span> 
                                    для
                                    <span class="hotel-description-info__guests">
                                        2 гостей
                                    </span>
                                </div>
                                <div class="radio-buttons hotel-description-info__radio-buttons radio-buttons--blue">
                                    <div class="radio-buttons__blocks">
                                        <input class="radio-buttons__input" type="radio" name="option" id="radio1" checked />
                                        <label class="radio-buttons__label" for="radio1">Обычная бронь</label>
                                    </div>
                                    <div class="radio-buttons__blocks">
                                        <input class="radio-buttons__input" type="radio" name="option" id="radio2" />
                                        <label class="radio-buttons__label" for="radio2">до 4-х вариантов</label>
                                    </div>
                                </div>
                            </div>



                            <div class="hotel-description-info__grid rooms-grid">  
                                <table class="rooms-grid__table">
                                    <thead>
                                        <tr class="rooms-grid__head-row">
                                            <th class="rooms-grid__title">НОмер</th>
                                            <th class="rooms-grid__title">КРОВАТЬ</th>
                                            <th class="rooms-grid__title">ПИТАНИЕ</th>
                                            <th class="rooms-grid__title">ОТМЕНА БРОНИ</th>
                                            <th class="rooms-grid__title">ЦЕНА, ЗА 9 ночей</th>
                                        </tr>
                                    </thead>

                                    <tbody class="rooms-grid__content">
                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell rooms-grid__cell--main" rowspan="3">
                                                <p class="rooms-grid__name">Двуместный номер Стандарт</p>
                                                <div class="rooms-grid__photo-square">
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-photo'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__photo">
                                                        20 фото
                                                    </span>
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-cube'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__square">
                                                        54 м &sup2;
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--green">
                                                            <use xlink:href='/assets/images/icons.svg#icon-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-green">
                                                            Бесплатная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select">   
                                                        Выбрать
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell">
                                                    <div class="rooms-grid__bed">
                                                        2х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Односпаловые кровали
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-green">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select">   
                                                        Выбрать
                                                    </button>
                                                </div>
                                            </td> 
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                            <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--green fff">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-green">
                                                        Питание включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            220 600 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select">   
                                                        Выбрать
                                                    </button>
                                                </div>
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="rooms-grid__border">

                                </div>
                                <table class="rooms-grid__table">
                                    <tbody class="rooms-grid__content">
                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell rooms-grid__cell--main" rowspan="3">
                                                <p class="rooms-grid__name">Двуместный номер Люкс +</p>
                                                <div class="rooms-grid__photo-square">
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-photo'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__photo">
                                                        20 фото
                                                    </span>
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-cube'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__square">
                                                        54 м &sup2;
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--green">
                                                            <use xlink:href='/assets/images/icons.svg#icon-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-green">
                                                            Бесплатная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select">   
                                                        Выбрать
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell">
                                                    <div class="rooms-grid__bed">
                                                        2х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Односпаловые кровали
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select">   
                                                        Выбрать
                                                    </button>
                                                </div>
                                            </td> 
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                            <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--green">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-green">
                                                        Питание включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            220 600 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select">   
                                                        Выбрать
                                                    </button>
                                                </div>
                                            </td> 
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- hotel-description-info -->
                    </div> <!-- hotel-description-card -->








                    <div class="hotel-description-card hotel-description-card--open page__hotel-description-card">
                        <div class="hotel-description">
                            <div class="hotel-photo hotel-description__photo">
                                <div class="hotel-photo__svg-block hotel-photo__svg-block--left">
                                    <svg class="hotel-photo__svg">
                                        <use xlink:href='assets/images/icons.svg#chevron-left'></use>
                                    </svg>
                                </div>
                                <div class="hotel-photo__svg-block">
                                    <svg class="hotel-photo__svg">
                                        <use xlink:href='assets/images/icons.svg#chevron-right'></use>
                                    </svg>
                                </div>

                                <div class="hotel-photo__amount">
                                    1/20
                                </div>
                            </div>

                            <div class="hotel-specifications hotel-description__specifications">
                                <div class="hotel-specifications__assessment-block">
                                    <div class="hotel-specifications__stars-block">
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                        <svg class="hotel-specifications__icon hotel-specifications__icon--blue">
                                            <use xlink:href='/assets/images/icons.svg#icon-star'></use>
                                        </svg>
                                    </div>

                                    <div class="hotel-specifications__rating-block">
                                        <div class="rating rating--green hotel-specifications__rating">
                                            <svg class="rating__icon rating__icon--green">
                                                <use xlink:href='/assets/images/icons.svg#icon-crown'></use>
                                            </svg>
                                            <div class="rating__text rating__text--green">
                                                НАДЕЖНЫЙ 
                                            </div>
                                        </div>

                                        <div class="rating rating--blue hotel-specifications__rating">
                                            <svg class="rating__icon rating__icon--blue">
                                                <use xlink:href='/assets/images/icons.svg#icon-recomend'></use>
                                            </svg>
                                            <div class="rating__text rating__text--blue">
                                                рекомендуем 
                                            </div>
                                        </div>

                                        <div class="hotel-specifications__tripadv">
                                            <svg class="hotel-specifications__tripadv-svg">
                                                <use xlink:href='/assets/images/icons.svg#icon-tripadv'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-specifications__grade">
                                            5.0
                                        </div>
                                    </div>
                                </div>

                                <div class="hotel-specifications__main-info-block">
                                    <div class="hotel-specifications__main-info">
                                        <div class="hotel-specifications__title">
                                            Отель Рокко Форте Астория
                                        </div>
                                        <div class="hotel-specifications__location">
                                            Набережная Обводного канала, д.130
                                        </div>
                                    </div>

                                    <div class="hotel-specifications__services-block">
                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_spa'></use>
                                            </svg>
                                        </div>
                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_internet'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_pool'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_fitness'></use>
                                            </svg>
                                        </div>

                                        <div class="hotel-services hotel-specifications__services">
                                            <svg class="hotel-services__svg">
                                                <use xlink:href='/assets/images/svg/hotel.svg#has_meal'></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="hotel-specifications__distance-block">
                                    <div class="hotel-specifications__distance">
                                        от 
                                        <span class="hotel-specifications__distance-airport">SVO</span>
                                         – 
                                        <span class="hotel-specifications__distance-amount">1.2 км</span>
                                        , от 
                                        <span class="hotel-specifications__distance-airport">VKO</span>
                                         – 
                                        <span class="hotel-specifications__distance-amount">3 км</span>
                                    </div>
                                    <div class="hotel-specifications__about">
                                        <a href="#" class="hotel-specifications__about-link">Подробно об отеле</a>
                                    </div>
                                </div>

                                <div class="hotel-specifications__details-block">
                                    <div class="hotel-specifications__details">
                                        <div class="hotel-specifications__category">
                                            Двухместный Люкс+
                                        </div>
                                        <div class="hotel-specifications__bed">
                                            Двуспальная кровать
                                        </div>
                                    </div>
                                    <div class="hotel-specifications__details">
                                        <div class="hotel-specifications__extra-info-block">
                                            <svg class="hotel-specifications__svg">
                                                <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                            </svg>
                                            <div class="hotel-specifications__extra-info">
                                                ЗАВТРАК ВКЛЮЧЕН
                                            </div>
                                        </div>
                                        <div class="hotel-specifications__extra-info-block">
                                            <svg class="hotel-specifications__svg">
                                                <use xlink:href='/assets/images/icons.svg#icon-cancel'></use>
                                            </svg>
                                            <div class="hotel-specifications__extra-info">
                                                БЕСПЛАТНАЯ ОТМЕНА
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hotel-specifications__details">
                                        <div class="hotel-specifications__price">
                                            195 600 &#8376;
                                        </div>
                                        <div class="hotel-specifications__price-per-person">
                                            <span class="hotel-specifications__number-of-persons">2x</span>47 800 тг за гостя
                                        </div>
                                    </div>
                                </div>

                                <div class="hotel-specifications__rooms-block">
                                    <div class="hotel-specifications__rooms-free">
                                        <div class="hotel-specifications__rooms">
                                            Свободно:9 номеров
                                        </div>
                                        <div class="hotel-specifications__rooms">
                                            ЕСТЬ НОМЕРА С ПИТАНИЕМ И БЕСПЛАТНОЙ ОТМЕНОЙ!
                                        </div>
                                    </div>
                                    <button class="hotel-specifications__button" style="display: none;">
                                        Показать все номера
                                        <svg class="hotel-specifications__btn-svg">
                                            <use xlink:href='/assets/images/icons.svg#chevron-down'></use>
                                        </svg>
                                    </button>

                                    <button class="hotel-specifications__button hotel-specifications__button--active" >
                                        Свернуть обратно
                                    </button>
                                </div>
                            </div>
                        </div> <!-- hotel-description -->

                        <div class="hotel-description-info hotel-page__description-info">
                            <ul class="tabs tabs--t-smaller hotel-description-info__tabs">
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Об отеле
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link tabs__link--active">
                                        Номера
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Расположение
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Услуги и удобства
                                    </a>
                                </li>
                                <li class="tabs__item">
                                    <a href class="tabs__link">
                                        Отзывы
                                    </a>
                                </li>
                            </ul>
                            <div class="hotel-description-info__row">
                                <div class="hotel-description-info__available-rooms">
                                    Доступные номера на 
                                    <span class="hotel-description-info__date"> 
                                        17 апр — 26 апр 
                                    </span> 
                                    для
                                    <span class="hotel-description-info__guests">
                                        2 гостей
                                    </span>
                                </div>
                                <div class="radio-buttons hotel-description-info__radio-buttons radio-buttons--blue">
                                    <div class="radio-buttons__blocks">
                                        <input class="radio-buttons__input" type="radio" name="option2" id="radio3" checked />
                                        <label class="radio-buttons__label" for="radio3">Обычная бронь</label>
                                    </div>
                                    <div class="radio-buttons__blocks">
                                        <input class="radio-buttons__input" type="radio" name="option2" id="radio4" />
                                        <label class="radio-buttons__label" for="radio4">до 4-х вариантов</label>
                                    </div>
                                </div>
                            </div>
                            















                            <div class="hotel-description-info__grid rooms-grid">  
                                <table class="rooms-grid__table">
                                    <thead>
                                        <tr class="rooms-grid__head-row">
                                            <th class="rooms-grid__title">НОмер</th>
                                            <th class="rooms-grid__title">КРОВАТЬ</th>
                                            <th class="rooms-grid__title">ПИТАНИЕ</th>
                                            <th class="rooms-grid__title">ОТМЕНА БРОНИ</th>
                                            <th class="rooms-grid__title">ЦЕНА, ЗА 9 ночей</th>
                                            <th class="rooms-grid__title"></th>
                                        </tr>
                                    </thead>

                                    <tbody class="rooms-grid__content">
                                        <tr class="rooms-grid__rows rooms-grid__rows--active">
                                            <td class="rooms-grid__cell rooms-grid__cell--main" rowspan="3">
                                                <p class="rooms-grid__name">Двуместный номер Стандарт</p>
                                                <div class="rooms-grid__photo-square">
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-photo'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__photo">
                                                        20 фото
                                                    </span>
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-cube'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__square">
                                                        54 м &sup2;
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell rooms-grid__cell--active-first">
                                                <div class="rooms-grid__bed-cell rooms-grid__bed-cell--multiple">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--green">
                                                            <use xlink:href='/assets/images/icons.svg#icon-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-green">
                                                            Бесплатная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select rooms-grid__btn-select--added">   
                                                        Добавлен
                                                        <svg class="rooms-grid__svg rooms-grid__svg--white">
                                                            <use xlink:href='/assets/images/icons.svg#icon-check'></use>
                                                        </svg>  
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell rooms-grid__cell--delete">
                                                <button class="rooms-grid__btn-delete">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--blue">
                                                        <use xlink:href='/assets/images/icons.svg#icon-delete'></use>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell rooms-grid__bed-cell--multiple">
                                                    <div class="rooms-grid__bed">
                                                        2х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Односпаловые кровали
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select rooms-grid__btn-select--add">   
                                                        Добавить    
                                                    </button>
                                                </div>
                                            </td> 
                                            <td class="rooms-grid__cell rooms-grid__cell--delete">
                                                <button class="rooms-grid__btn-delete rooms-grid__btn-delete--hidden">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--blue">
                                                        <use xlink:href='/assets/images/icons.svg#icon-delete'></use>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="rooms-grid__rows rooms-grid__rows--active">
                                            <td class="rooms-grid__cell rooms-grid__cell--active-first">
                                                <div class="rooms-grid__bed-cell rooms-grid__bed-cell--multiple">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--green fff">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-green">
                                                        Питание включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            220 600 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select rooms-grid__btn-select--added">   
                                                        Добавлен
                                                        <svg class="rooms-grid__svg rooms-grid__svg--white">
                                                            <use xlink:href='/assets/images/icons.svg#icon-check'></use>
                                                        </svg>  
                                                    </button>
                                                </div>
                                            </td> 
                                            <td class="rooms-grid__cell rooms-grid__cell--delete">
                                                <button class="rooms-grid__btn-delete">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--blue">
                                                        <use xlink:href='/assets/images/icons.svg#icon-delete'></use>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="rooms-grid__border">

                                </div>
                                <table class="rooms-grid__table">
                                    <tbody class="rooms-grid__content">
                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell rooms-grid__cell--main" rowspan="3">
                                                <p class="rooms-grid__name">Двуместный номер Люкс +</p>
                                                <div class="rooms-grid__photo-square">
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-photo'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__photo">
                                                        20 фото
                                                    </span>
                                                    <svg class="rooms-grid__svg">
                                                        <use xlink:href='/assets/images/icons.svg#icon-cube'></use>
                                                    </svg> 
                                                    <span class="rooms-grid__square">
                                                        54 м &sup2;
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell rooms-grid__bed-cell--multiple">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--green">
                                                            <use xlink:href='/assets/images/icons.svg#icon-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-green">
                                                            Бесплатная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select rooms-grid__btn-select--add">   
                                                        Добавить    
                                                    </button>
                                                </div>
                                            <td class="rooms-grid__cell rooms-grid__cell--delete">
                                                <button class="rooms-grid__btn-delete rooms-grid__btn-delete--hidden">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--blue">
                                                        <use xlink:href='/assets/images/icons.svg#icon-delete'></use>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell rooms-grid__bed-cell--multiple">
                                                    <div class="rooms-grid__bed">
                                                        2х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Односпаловые кровали
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-grey">
                                                        Питание не включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            140 500 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select rooms-grid__btn-select--add">   
                                                        Добавить    
                                                    </button>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell rooms-grid__cell--delete">
                                                <button class="rooms-grid__btn-delete rooms-grid__btn-delete--hidden">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--blue">
                                                        <use xlink:href='/assets/images/icons.svg#icon-delete'></use>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="rooms-grid__rows">
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__bed-cell rooms-grid__bed-cell--multiple">
                                                    <div class="rooms-grid__bed">
                                                        1х 
                                                    </div> 
                                                    <div class="rooms-grid__type-of-bed">
                                                        Двуспаловая кровать
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                            <div class="rooms-grid__food">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--green">
                                                        <use xlink:href='/assets/images/icons.svg#icon-food'></use>
                                                    </svg>
                                                    <div class="rooms-grid__text-green">
                                                        Питание включено
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__booking-cell">
                                                    <div class="rooms-grid__booking">
                                                        <svg class="rooms-grid__svg rooms-grid__svg--light-grey">
                                                            <use xlink:href='/assets/images/icons.svg#icon-non-cancel'></use>
                                                        </svg>
                                                        <div class="rooms-grid__text-grey">
                                                            Платная отмена
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-details">   
                                                        детали тарифа
                                                    </button>
                                                </div>
                                            </td>  
                                            <td class="rooms-grid__cell">
                                                <div class="rooms-grid__select-cell">
                                                    <div>
                                                        <div class="rooms-grid__price">
                                                            1 120 600 &#8376;
                                                        </div>
                                                        <div class="rooms-grid__for-all-guests">
                                                            за 2-х гостей
                                                        </div>
                                                    </div>
                                                    <button class="rooms-grid__btn-select rooms-grid__btn-select--add">   
                                                        Добавить    
                                                    </button>
                                                </div>
                                            </td> 
                                            <td class="rooms-grid__cell rooms-grid__cell--delete">
                                                <button class="rooms-grid__btn-delete rooms-grid__btn-delete--hidden">
                                                    <svg class="rooms-grid__svg rooms-grid__svg--blue">
                                                        <use xlink:href='/assets/images/icons.svg#icon-delete'></use>
                                                    </svg>  
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- hotel-description-info -->
                    </div> <!-- hotel-description-card -->
                        
                </div> <!-- hotel-description-block -->
            </div> <!-- page__content -->
        </div><!-- page__content -->
    </div><!-- page -->
</div><!-- /.booking-form-container__wrapper -->



<?php include "./_inc/footer.php" ?>