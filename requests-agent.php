<?php include "./_inc/header.php" ?>

<div class="content">
    <div class="page">
        <div class="page__content">
            <div class="beta-requests-header">
                <div class="beta-requests-header__title-block">
                    <ul class="breadcrumbs beta-requests-header__breadcrumbs">
                        <li class="breadcrumbs__item">
                            <a href="" class="breadcrumbs__link">Мои заявки </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <span class="breadcrumbs__link breadcrumbs__link--active">Управление заявками</span>
                        </li>
                    </ul>
                    <div class="beta-requests-header__title">
                        Управление заявками
                    </div>
                </div>
            
                <div class="statistic beta-requests-header__statistic">
                    <div class="statistic__list">
                        <div class="statistic__item">
                            <p class="statistic__name">Всего заявок</p>
                            <p class="statistic__amount-all">920 <span class="statistic__piece-all">шт</span></p>
                            <p class="statistic__amount-per-month">7 900 шт/мес</p>
                        </div>

                        <div class="statistic__item">
                            <p class="statistic__name">Оформленные</p>
                            <div class="statistic__item-block">
                                <div class="statistic__percent-block">

                                </div>
                                <div class="statistic__amount-block">
                                    <p class="statistic__amount">340 <span class="statistic__piece">шт</span></p>
                                    <p class="statistic__amount-per-month">2 208 шт/мес</p>
                                </div>
                            </div>
                        </div>

                        <div class="statistic__item">
                            <p class="statistic__name">Забронированные</p>
                            <div class="statistic__item-block">
                                <div class="statistic__percent-block">

                                </div>
                                <div class="statistic__amount-block">
                                    <p class="statistic__amount">52 <span class="statistic__piece">шт</span></p>
                                    <p class="statistic__amount-per-month">2 208 шт/мес</p>
                                </div>
                            </div>
                        </div>

                        <div class="statistic__item">
                            <p class="statistic__name">Ожидают оплаты</p>
                            <div class="statistic__item-block">
                                <div class="statistic__percent-block">

                                </div>
                                <div class="statistic__amount-block">
                                    <p class="statistic__amount">4 <span class="statistic__piece">шт</span></p>
                                    <p class="statistic__amount-per-month">2 208 шт/мес</p>
                                </div>
                            </div>
                        </div>
                        <div class="statistic__item">
                            <p class="statistic__name">Отмена/Отказ</p>
                            <div class="statistic__item-block">
                                <div class="statistic__percent-block">

                                </div>
                                <div class="statistic__amount-block statistic__amount-block--red">
                                    <p class="statistic__amount statistic__amount">2 <span class="statistic__piece">шт</span></p>
                                    <p class="statistic__amount-per-month">13 шт/мес</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page__frame">
                <div class="beta-requests">
                    <div class="beta-requests-actions">
                        <div class="beta-requests-actions__search-sort-row">
                            <div class="beta-requests-actions__search-field-full">
                                <div class="input-with-btn">
                                    <input class="input-full" type="text" placeholder="Заявка/Пассажир/Город/Услуга/Статус/Агент">
                                    <button class="input-with-btn__search employees-list__btn-search">
                                        <svg class="input-with-btn__search-svg employees-list__svg-search">
                                            <use xlink:href='assets/images/icons.svg#icon-search'></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="beta-requests-actions__btn-block">
                                <div class="beta-requests-actions__filters">
                                    <div class="filter-dropdown beta-requests-actions__filter-dropdown">
                                        <div class="filter-dropdown__icon">
                                            <svg class="filter-dropdown__svg">
                                                <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                            </svg>
                                        </div>
                                        <div class="filter-dropdown__text">
                                            <div class="filter-dropdown__text-select">Сначала новые</div>
                                        </div>
                                    </div>
                                </div>

                                <button class="beta-requests-actions__excel">
                                    <svg class="beta-requests-actions__excel-svg">
                                        <use xlink:href='assets/images/icons.svg#icon-download'></use>
                                    </svg>
                                    Экспорт в Excel
                                </button>
                            </div>
                        </div>
                        <div class="beta-requests-actions__search-option-block">
                            <div class="search-option beta-requests-actions__search-option">
                                <div class="search-option__text">
                                    Air Astana
                                </div>
                                <button class="search-option__btn">
	                                &times;
                                </button>
                            </div>

                            <div class="search-option beta-requests-actions__search-option">
                                <div class="search-option__text">
                                    Туда и обратно
                                </div>
                                <button class="search-option__btn">
	                                &times;
                                </button>
                            </div>
                        </div>
                    </div><!-- /.beta-requests-actions -->

                    <div class="beta-requests__grid beta-requests-grid">
                        <table class="beta-requests-grid__table">
                            <tr class="beta-requests-grid__head-row">
                                <th class="beta-requests-grid__title"></th>
                                <th class="beta-requests-grid__title">Заявка</th>
                                <th class="beta-requests-grid__title">Пассажиры</th>
                                <th class="beta-requests-grid__title">О поездке/Общ. ст-ть/Услуги</th>
                                <th class="beta-requests-grid__title"></th>
                                <th class="beta-requests-grid__title"></th>
                                <th class="beta-requests-grid__title"></th>
                            </tr>


                            <tr class="beta-requests-grid__row">
                                <td class="beta-requests-grid__cell">
                                    <svg class="beta-requests-grid__e-status">
                                        <use xlink:href='assets/images/icons.svg#icon-online-status'></use>
                                    </svg>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <a class="beta-requests-grid__doc-num" href="#">№000568</a>
                                    <div class="beta-requests-grid__company">
                                        АО «Самрук Казына»
                                    </div>
                                    <a class="beta-requests-grid__employee" href="#">С. Касымов </a>
                                    <a class="beta-requests-grid__employee" href="#"> Е. Копылова</a>
                                    <div class="beta-requests-grid__date">
                                        02 мар, 11:34
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__passenger-block">
                                        <a class="beta-requests-grid__passenger" href="#">Сыроежкин А.А.</a>
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__svg-block">
                                            <svg class="beta-requests-grid__svg-round-trip">
                                                <use xlink:href='assets/images/icons.svg#icon-round-trip'></use>
                                            </svg>
                                        </div>

                                        <div class="beta-requests-grid__direction-content">
                                            <div class="beta-requests-grid__direction">
                                                Калининград, 16 дней
                                            </div>
                                            <div class="beta-requests-grid__trip-date">
                                                08-24 мар, 2019
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__details-row">
                                            <div class="booking-details-row">
                                                <div class="booking-details-row__main">
                                                    <svg class="booking-details-row__type-of-service">
                                                        <use xlink:href='assets/images/icons.svg#icon-plane'></use>
                                                    </svg>
                                                    <div class="booking-details-row__price">
                                                        <a class="booking-details-row__price-link" href="#">
                                                            2 650 063 <span class="booking-details-row__currency">₸</span>
                                                        </a>
                                                    </div>
                                                    <div class="booking-details-row__service-name">
                                                        AIR AST
                                                    </div>
                                                    <div  class="booking-details-row__status">
                                                        БРОНЬ ДО:
                                                    </div>
                                                </div>
                                                <div class="booking-details-row__exta">
                                                    <div class="booking-details-row__booking-number">
                                                        465-3145550771
                                                    </div>
                                                    <div class="booking-details-row__status-date">
                                                        02 мар, 11:34
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__total-price beta-requests-grid__total-price--for-agent">
                                            1 850 763 <span class="beta-requests-grid__currency">₸</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__btns-row">
                                        <button class="btn-blue beta-requests-grid__registration">
                                            Оформить
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-download"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-cancel"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon btns-icon--transparent beta-requests-grid__btn-transp">
                                            <svg class="btns-icon__svg-more">
                                                <use xlink:href='/assets/images/icons.svg#nav-link--more'></use>
                                            </svg>
                                        </button>
                                        <span class="checkbox checkbox--blue beta-requests-btn-group__checkbox">
                                            <input type="checkbox"  id="checkbox1" />
                                            <label for="checkbox1"></label>
                                        </span>
                                    </div>
                                </td>
                            </tr>


                            <tr class="beta-requests-grid__row">
                                <td class="beta-requests-grid__cell">
                                    <svg class="beta-requests-grid__e-status beta-requests-grid__e-status--blue">
                                        <use xlink:href='assets/images/icons.svg#icon-online-status'></use>
                                    </svg>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <a class="beta-requests-grid__doc-num" href="#">№000568</a>
                                    <div class="beta-requests-grid__company">
                                        АО «Самрук Казына»
                                    </div>
                                    <a class="beta-requests-grid__employee" href="#">С. Касымов </a>
                                    <a class="beta-requests-grid__employee" href="#"> Е. Копылова</a>
                                    <div class="beta-requests-grid__date">
                                        02 мар, 11:34
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__passenger-block">
                                        <a class="beta-requests-grid__passenger" href="#">Сыроежкин А.А.</a>
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__svg-block">
                                            <svg class="beta-requests-grid__svg-round-trip">
                                                <use xlink:href='assets/images/icons.svg#icon-round-trip'></use>
                                            </svg>
                                        </div>

                                        <div class="beta-requests-grid__direction-content">
                                            <div class="beta-requests-grid__direction">
                                                Астана, 16 дней
                                            </div>
                                            <div class="beta-requests-grid__trip-date">
                                                08-24 мар, 2019
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__details-row">
                                            <div class="booking-details-row booking-details-row--signed">
                                                <div class="booking-details-row__main">
                                                    <svg class="booking-details-row__type-of-service">
                                                        <use xlink:href='assets/images/icons.svg#icon-plane'></use>
                                                    </svg>
                                                    <div class="booking-details-row__price">
                                                        <a class="booking-details-row__price-link" href="#">
                                                            2 650 063 <span class="booking-details-row__currency">₸</span>
                                                        </a>
                                                    </div>
                                                    <div class="booking-details-row__service-name">
                                                        AIR AST
                                                    </div>
                                                    <div  class="booking-details-row__status">
                                                        ОФОРМЛЕН
                                                    </div>
                                                </div>
                                                <div class="booking-details-row__exta">
                                                    <div class="booking-details-row__booking-number">
                                                        465-3145550771
                                                    </div>
                                                    <div class="booking-details-row__status-date">
                                                        02 мар, 11:34
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__total-price beta-requests-grid__total-price--for-agent">
                                            1 850 763 <span class="beta-requests-grid__currency">₸</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__btns-row">
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-prohibited"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-download"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-swap"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-mail"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon btns-icon--transparent beta-requests-grid__btn-transp">
                                            <svg class="btns-icon__svg-more">
                                                <use xlink:href='/assets/images/icons.svg#header-more'></use>
                                            </svg>
                                        </button>
                                        <span class="checkbox checkbox--blue beta-requests-btn-group__checkbox">
                                            <input type="checkbox"  id="checkbox1" />
                                            <label for="checkbox1"></label>
                                        </span>
                                    </div>
                                </td>
                            </tr>


                            <tr class="beta-requests-grid__row">
                                <td class="beta-requests-grid__cell">
                                    <svg class="beta-requests-grid__e-status">
                                        <use xlink:href='assets/images/icons.svg#icon-online-status'></use>
                                    </svg>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <a class="beta-requests-grid__doc-num" href="#">№000568</a>
                                    <div class="beta-requests-grid__company">
                                        АО «Самрук Казына»
                                    </div>
                                    <a class="beta-requests-grid__employee" href="#">С. Касымов </a>
                                    <a class="beta-requests-grid__employee" href="#"> Е. Копылова</a>
                                    <div class="beta-requests-grid__date">
                                        02 мар, 11:34
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__passenger-block">
                                        <a class="beta-requests-grid__passenger" href="#">Сыроежкин А.А.</a>
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__svg-block">
                                            <svg class="beta-requests-grid__svg-round-trip">
                                                <use xlink:href='assets/images/icons.svg#icon-round-trip'></use>
                                            </svg>
                                        </div>

                                        <div class="beta-requests-grid__direction-content">
                                            <div class="beta-requests-grid__direction">
                                                Калининград, 16 дней
                                            </div>
                                            <div class="beta-requests-grid__trip-date">
                                                08-24 мар, 2019
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__details-row">
                                            <div class="booking-details-row">
                                                <div class="booking-details-row__main">
                                                    <svg class="booking-details-row__type-of-service">
                                                        <use xlink:href='assets/images/icons.svg#icon-plane'></use>
                                                    </svg>
                                                    <div class="booking-details-row__price">
                                                        <a class="booking-details-row__price-link" href="#">
                                                            2 650 063 <span class="booking-details-row__currency">₸</span>
                                                        </a>
                                                    </div>
                                                    <div class="booking-details-row__service-name">
                                                        AIR AST
                                                    </div>
                                                    <div  class="booking-details-row__status">
                                                        БРОНЬ ДО:
                                                    </div>
                                                </div>
                                                <div class="booking-details-row__exta">
                                                    <div class="booking-details-row__booking-number">
                                                        465-3145550771
                                                    </div>
                                                    <div class="booking-details-row__status-date">
                                                        02 мар, 11:34
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__total-price beta-requests-grid__total-price--for-agent">
                                            1 850 763 <span class="beta-requests-grid__currency">₸</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__btns-row">
                                        <button class="btn-blue beta-requests-grid__registration">
                                            Оформить
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-download"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-cancel"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon btns-icon--transparent beta-requests-grid__btn-transp">
                                            <svg class="btns-icon__svg-more">
                                                <use xlink:href='/assets/images/icons.svg#nav-link--more'></use>
                                            </svg>
                                        </button>
                                        <span class="checkbox checkbox--blue beta-requests-btn-group__checkbox">
                                            <input type="checkbox"  id="checkbox1" />
                                            <label for="checkbox1"></label>
                                        </span>
                                    </div>
                                </td>
                            </tr>

                            <tr class="beta-requests-grid__row">
                                <td class="beta-requests-grid__cell">
                                    <svg class="beta-requests-grid__e-status beta-requests-grid__e-status--blue">
                                        <use xlink:href='assets/images/icons.svg#icon-online-status'></use>
                                    </svg>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <a class="beta-requests-grid__doc-num" href="#">№000568</a>
                                    <div class="beta-requests-grid__company">
                                        АО «Самрук Казына»
                                    </div>
                                    <a class="beta-requests-grid__employee" href="#">С. Касымов </a>
                                    <a class="beta-requests-grid__employee" href="#"> Е. Копылова</a>
                                    <div class="beta-requests-grid__date">
                                        02 мар, 11:34
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__passenger-block">
                                        <a class="beta-requests-grid__passenger" href="#">Сыроежкин А.А.</a>
                                    </div>
                                </td>
                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__svg-block">
                                            <svg class="beta-requests-grid__svg-round-trip">
                                                <use xlink:href='assets/images/icons.svg#icon-round-trip'></use>
                                            </svg>
                                        </div>

                                        <div class="beta-requests-grid__direction-content">
                                            <div class="beta-requests-grid__direction">
                                                Астана, 16 дней
                                            </div>
                                            <div class="beta-requests-grid__trip-date">
                                                08-24 мар, 2019
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__details-row">
                                            <div class="booking-details-row booking-details-row--signed">
                                                <div class="booking-details-row__main">
                                                    <svg class="booking-details-row__type-of-service">
                                                        <use xlink:href='assets/images/icons.svg#icon-plane'></use>
                                                    </svg>
                                                    <div class="booking-details-row__price">
                                                        <a class="booking-details-row__price-link" href="#">
                                                            2 650 063 <span class="booking-details-row__currency">₸</span>
                                                        </a>
                                                    </div>
                                                    <div class="booking-details-row__service-name">
                                                        AIR AST
                                                    </div>
                                                    <div  class="booking-details-row__status">
                                                        ОФОРМЛЕН
                                                    </div>
                                                </div>
                                                <div class="booking-details-row__exta">
                                                    <div class="booking-details-row__booking-number">
                                                        465-3145550771
                                                    </div>
                                                    <div class="booking-details-row__status-date">
                                                        02 мар, 11:34
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__info">
                                        <div class="beta-requests-grid__total-price beta-requests-grid__total-price--for-agent">
                                            1 850 763 <span class="beta-requests-grid__currency">₸</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="beta-requests-grid__cell">
                                    <div class="beta-requests-grid__btns-row">
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-prohibited"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-download"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-swap"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon beta-requests-grid__btn-icon">
                                            <svg class="btns-icon__svg">
                                                <use xlink:href="/assets/images/icons.svg#icon-mail"></use>
                                            </svg>
                                        </button>
                                        <button class="btns-icon btns-icon--transparent beta-requests-grid__btn-transp">
                                            <svg class="btns-icon__svg-more">
                                                <use xlink:href='/assets/images/icons.svg#header-more'></use>
                                            </svg>
                                        </button>
                                        <span class="checkbox checkbox--blue beta-requests-btn-group__checkbox">
                                            <input type="checkbox"  id="checkbox1" />
                                            <label for="checkbox1"></label>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <div class="table-footer beta-requests__footer">
                            <div class="table-footer__pagination">
                                <ul class="pagination-list">
                                    <li class="pagination-prev disabled"><a href>&nbsp;</a></li>
                                    <li class="pagination-page active"><a href>1</a></li>
                                    <li class="pagination-page"><a href>2</a></li>
                                    <li class="pagination-page"><a href>3</a></li>
                                    <li class="pagination-page"><a href>...</a></li>
                                    <li class="pagination-page"><a href>5</a></li>
                                    <li class="pagination-next"><a href>&nbsp;</a></li>
                                </ul>
                            </div>

                            <div class="table-footer__filter-dropdown-block">
                                <div class="filter-dropdown table-footer__filter-dropdown">
                                    <div class="filter-dropdown__text">
                                        <div class="filter-dropdown__text-select">показать по: <span class="filter-dropdown__amount">30</span></div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-footer__totals">
                                <span class="table-footer__pages">1-30</span>
                                    из  
                                <span class="table-footer__all-pages">480</span>
                            </div>

                            <div class="beta-requests-btn-group table-footer__btns-group">
                                <button class="beta-requests-btn-group__btn">
                                    <svg class="beta-requests-btn-group__svg">
                                        <use xlink:href='assets/images/icons.svg#icon-combine'></use>
                                    </svg>
                                    Объединить
                                </button>
                                <button class="beta-requests-btn-group__btn">
                                    <svg class="beta-requests-btn-group__svg">
                                        <use xlink:href='assets/images/icons.svg#icon-prohibited'></use>
                                    </svg>
                                    Отменить
                                </button>
                                <button class="beta-requests-btn-group__btn">
                                    <svg class="beta-requests-btn-group__svg">
                                        <use xlink:href='assets/images/icons.svg#icon-delete'></use>
                                    </svg>
                                    Удалить
                                </button>
                                <span class="checkbox checkbox--blue beta-requests-btn-group__checkbox">
                                    <input type="checkbox"  id="checkbox-all-footer" />
                                    <label for="checkbox-all-footer"></label>
                                </span>
                            </div>
                        </div><!-- table-footer__footer -->
                    </div> <!-- beta-requests__grid /.beta-requests-grid -->
                </div><!-- beta-requests -->
            </div><!-- /.page__frame -->
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>