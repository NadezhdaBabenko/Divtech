<?php include "./_inc/header.php" ?>
<div class="content">
    <div class="booking-form-container booking-form-container--trains">
        <div class="booking-form-container__wrapper">
            <div class="booking-form-container__content">
                <div class="booking-form-container__block-title-tabs">
                    <div class="booking-form-container__title">
                        Бронирование отелей
                    </div>
                    <ul class="tabs-services booking-form-container__tabs-services">
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Авиабилеты</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link" href>ЖД-билеты</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link tabs-services__link--active" href>Отели</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Получение визы</a></li>
                        <li class="tabs-services__item"><a class="tabs-services__link" href>Другое</a></li>
                    </ul>
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
                                        <label for="departure-city-field-1" class="spec-field__label spec-field__label--text-city">Куда</label>
                                    </div>
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
                        </div><!-- /.booking-form__line -->

                        <button class="booking-form__filters">
                            <svg class="booking-form__filters-svg">
                                <use xlink:href='assets/images/icons.svg#icon-filter'></use>
                            </svg>
                            Доп. фильтры
                        </button>
                    </div><!-- /.booking-form -->
                </div><!-- /.booking-form-container__inputs -->
            </div><!-- /.booking-form-container__content -->
        </div><!-- /.booking-form-container__wrapper -->
    </div><!-- /.booking-form-container -->
</div>


<?php include "./_inc/footer.php" ?>