<?php include "./_inc/header.php" ?>
<div class="content">
    <div class="booking-form-container booking-form-container--trains">
        <div class="booking-form-container__wrapper">
            <div class="booking-form-container__content">
                <div class="booking-form-container__block-title-tabs">
                    <div class="booking-form-container__title">
                        Бронирование ЖД-билетов
                    </div>
                    <ul class="tabs-services booking-form-container__tabs-services">
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Авиабилеты</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link tabs-services__link--active" href>ЖД-билеты</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Отели</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Получение визы</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Другое</a></li>
                    </ul>
                </div>
                <div class="booking-form-container__inputs">
                    <div class="booking-form">
                        <ul class="tabs-route-type booking-form__tabs-route-type">
                            <li class="tabs-route-type__item"><a href class=" tabs-route-type__link">В одну сторону</a></li>
                            <li class="tabs-route-type__item"><a href class=" tabs-route-type__link tabs-route-type__link--active">Туда и обратно</a></li>
                            <li class="tabs-route-type__item"><a href class=" tabs-route-type__link">Сложный маршрут</a></li>
                        </ul>

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
                                        <label for="dep-date-1" class="spec-field__label spec-field__label--text-date">Дата вылета</label>
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

                            <div class="booking-form__remove-btn" style="display: none;">
                                <a href class="text-danger">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </div>
                        </div><!-- /.booking-form__line -->

                        <ul class="booking-form__popular">
                            <li class="booking-form__popular-item">
                                <a href class="booking-form__popular-link">Алматы 2 – Астана</a>
                            </li>
                            <li class="booking-form__popular-item">
                                <a href class="booking-form__popular-link">Алматы 2 – Актогай</a>
                            </li>
                            <li class="booking-form__popular-item">
                                <a href class="booking-form__popular-link">Астана – Атырау</a>
                            </li>
                        </ul>

                        <button class="booking-form__filters">
                            <svg class="booking-form__filters-svg">
                                <use xlink:href='assets/images/icons.svg#icon-filter'></use>
                            </svg>
                            Доп. фильтры
                        </button>
                        <div class="booking-form__route-mobile">
                            Составить сложный маршрут
                        </div>
                    </div><!-- /.booking-form -->
                </div><!-- /.booking-form-container__inputs -->
            </div><!-- /.booking-form-container__content -->
        </div><!-- /.booking-form-container__wrapper -->
    </div><!-- /.booking-form-container -->
</div>


<?php include "./_inc/footer.php" ?>