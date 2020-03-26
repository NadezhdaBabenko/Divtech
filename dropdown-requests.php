<?php include "./_inc/header.php" ?>


<div class="requests-header" ng-init="mod = 'forApproval'">
    <div class="requests-header__block">
        <div class="main-header main-header--t-tabs">
            <div class="main-header__summary">
                <div class="header-summary" ng-click="mod = 'forApproval'"  ng-class="{'open': mod == 'forApproval'}">
                    <div class="header-summary__toggle">
                        <div class="header-summary__icon-block">
                            <svg class="svg-icon header-summary__icon">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-alarm"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            На утвр.
                        </div>
                        <div class="header-summary__data">
                            <span>9 шт</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-header__summary">
                <div class="header-summary header-summary--with-notify" ng-click="mod = 'timeLim'"  ng-class="{'open': mod == 'timeLim'}">
                    <div class="header-summary__toggle">
                        <div class="header-summary__icon-block">
                            <span class="notifier">3</span>
                            <svg class="svg-icon header-summary__icon">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-warning"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            таймлим.
                        </div>
                        <div class="header-summary__data">
                            <span>07:21</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-header__summary">
                <div class="header-summary" ng-click="mod = 'today'"  ng-class="{'open': mod == 'today'}">
                    <div class="header-summary__toggle">
                        <div class="header-summary__icon-block">
                            <svg class="svg-icon header-summary__icon">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-alarm"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            За сегод.
                        </div>
                        <div class="header-summary__data">
                            <span>4 шт.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="requests-header__grid requests-header-grid requests-header-grid--t-requests-header" ng-show="mod == 'forApproval'">
            <table class="requests-header-grid__table">
                <tr class="requests-header-grid__head-row">
                    <th class="requests-header-grid__title"></th>
                    <th class="requests-header-grid__title"></th>
                    <th class="requests-header-grid__title">Заявка</th>
                    <th class="requests-header-grid__title">Сотрудник</th>
                    <th class="requests-header-grid__title">О поездке</th>
                    <th class="requests-header-grid__title">Услуги</th>
                    <th class="requests-header-grid__title">Статус</th>
                    <th class="requests-header-grid__title">Управление</th>
                </tr>
                <tr class="requests-header-grid__row">
                    <td class="requests-header-grid__cell">
                        <span class="checkbox checkbox--blue">
                            <input type="checkbox"  id="checkbox-forApproval-1" />
                            <label for="checkbox-forApproval-1"></label>
                        </span>
                    </td>
                    <td class="requests-header-grid__cell">
                        <svg class="requests-header-grid__icon">
                            <use xlink:href="/assets/images/icons.svg#icon-online-status"></use>
                        </svg>
                    </td>
                    <td class="requests-header-grid__cell">
                        <a href="#" class="requests-header-grid__doc-num">
                            №051
                        </a>
                        <div class="requests-header-grid__position">
                            <a href="#" class="requests-header-grid__position-link">
                                Трэвел-специалист
                            </a>
                        </div>

                        <div class="requests-header-grid__agent">
                            <a href="#" class="requests-header-grid__agent-link">
                                Sofia Khamitova
                            </a>
                        </div>
                        <div class="requests-header-grid__doc-time">
                            30 мая, чт
                        </div>
                    </td>
                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__employee-block">
                            <a href="#" class="requests-header-grid__employee">
                                Утебаев НабиНабиНаби
                            </a> 
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__about-city">
                            Астана, 8 дней
                        </div>
                        <div class="requests-header-grid__about-company">
                            qazaq air
                        </div>
                        <div class="requests-header-grid__about-date">
                            01 июня, сб
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__services">
                            <svg class="requests-header-grid__services-svg">
                                <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                            </svg>
                            <a href="#" class="requests-header-grid__services-text">
                                123 456 456 ₸
                            </a>
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__booking-till">
                            бронь до:
                        </div>
                        <div class="requests-header-grid__booking-date">
                            02 мар, 11:00
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-blue requests-header-grid__btn">
                                Оформить
                            </button>
                            <button class="btns-icon btns-icon--simply-grey">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </button>
                        </div>
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-cancel requests-header-grid__btn">
                                Отменить
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="requests-header-grid__row">
                    <td class="requests-header-grid__cell">
                        <span class="checkbox checkbox--blue">
                            <input type="checkbox"  id="checkbox-forApproval-2" />
                            <label for="checkbox-forApproval-2"></label>
                        </span>
                    </td>
                    <td class="requests-header-grid__cell">
                        <svg class="requests-header-grid__icon">
                            <use xlink:href="/assets/images/icons.svg#icon-online-status"></use>
                        </svg>
                    </td>
                    <td class="requests-header-grid__cell">
                        <a href="#" class="requests-header-grid__doc-num">
                            №051
                        </a>
                        <div class="requests-header-grid__position">
                            <a href="#" class="requests-header-grid__position-link">
                                Трэвел-специалист
                            </a>
                        </div>

                        <div class="requests-header-grid__agent">
                            <a href="#" class="requests-header-grid__agent-link">
                                Sofia Khamitova
                            </a>
                        </div>
                        <div class="requests-header-grid__doc-time">
                            30 мая, чт
                        </div>
                    </td>
                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__employee-block">
                            <a href="#" class="requests-header-grid__employee">
                                Утебаев НабиНабиНаби
                            </a> 
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__about-city">
                            Астана, 8 дней
                        </div>
                        <div class="requests-header-grid__about-company">
                            qazaq air
                        </div>
                        <div class="requests-header-grid__about-date">
                            01 июня, сб
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__services">
                            <svg class="requests-header-grid__services-svg">
                                <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                            </svg>
                            <a href="#" class="requests-header-grid__services-text">
                                123 456 456 ₸
                            </a>
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__booking-till">
                            бронь до:
                        </div>
                        <div class="requests-header-grid__booking-date">
                            02 мар, 11:00
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-blue requests-header-grid__btn">
                                Оформить
                            </button>
                            <button class="btns-icon btns-icon--simply-grey">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </button>
                        </div>
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-cancel requests-header-grid__btn">
                                Отменить
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="requests-header-grid__row">
                    <td class="requests-header-grid__cell">
                        <span class="checkbox checkbox--blue">
                            <input type="checkbox"  id="checkbox-forApproval-3" />
                            <label for="checkbox-forApproval-3"></label>
                        </span>
                    </td>
                    <td class="requests-header-grid__cell">
                        <svg class="requests-header-grid__icon">
                            <use xlink:href="/assets/images/icons.svg#icon-online-status"></use>
                        </svg>
                    </td>
                    <td class="requests-header-grid__cell">
                        <a href="#" class="requests-header-grid__doc-num">
                            №051
                        </a>
                        <div class="requests-header-grid__position">
                            <a href="#" class="requests-header-grid__position-link">
                                Трэвел-специалист
                            </a>
                        </div>

                        <div class="requests-header-grid__agent">
                            <a href="#" class="requests-header-grid__agent-link">
                                Sofia Khamitova
                            </a>
                        </div>
                        <div class="requests-header-grid__doc-time">
                            30 мая, чт
                        </div>
                    </td>
                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__employee-block">
                            <a href="#" class="requests-header-grid__employee">
                                Утебаев НабиНабиНаби
                            </a> 
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__about-city">
                            Астана, 8 дней
                        </div>
                        <div class="requests-header-grid__about-company">
                            qazaq air
                        </div>
                        <div class="requests-header-grid__about-date">
                            01 июня, сб
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__services">
                            <svg class="requests-header-grid__services-svg">
                                <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                            </svg>
                            <a href="#" class="requests-header-grid__services-text">
                                123 456 456 ₸
                            </a>
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__booking-till">
                            бронь до:
                        </div>
                        <div class="requests-header-grid__booking-date">
                            02 мар, 11:00
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-blue requests-header-grid__btn">
                                Оформить
                            </button>
                            <button class="btns-icon btns-icon--simply-grey">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </button>
                        </div>
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-cancel requests-header-grid__btn">
                                Отменить
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


         <div class="requests-header__grid requests-header-grid requests-header-grid--t-header-dropdown" ng-show="mod == 'timeLim'">
            <table class="requests-header-grid__table">
                <tr class="requests-header-grid__head-row">
                    <th class="requests-header-grid__title"></th>
                    <th class="requests-header-grid__title"></th>
                    <th class="requests-header-grid__title">Заявка</th>
                    <th class="requests-header-grid__title">Сотрудник</th>
                    <th class="requests-header-grid__title">О поездке</th>
                    <th class="requests-header-grid__title">Услуги</th>
                    <th class="requests-header-grid__title">Статус</th>
                    <th class="requests-header-grid__title">Управление</th>

                </tr>
                <tr class="requests-header-grid__row">
                    <td class="requests-header-grid__cell">
                        <span class="checkbox checkbox--blue">
                            <input type="checkbox"  id="checkbox-timeLim-1" />
                            <label for="checkbox-timeLim-1"></label>
                        </span>
                    </td>
                    <td class="requests-header-grid__cell">
                        <svg class="requests-header-grid__icon">
                            <use xlink:href="/assets/images/icons.svg#icon-online-status"></use>
                        </svg>
                    </td>
                    <td class="requests-header-grid__cell">
                        <a href="#" class="requests-header-grid__doc-num">
                            №051
                        </a>
                        <div class="requests-header-grid__position">
                            <a href="#" class="requests-header-grid__position-link">
                                Трэвел-специалист
                            </a>
                        </div>

                        <div class="requests-header-grid__agent">
                            <a href="#" class="requests-header-grid__agent-link">
                                Sofia Khamitova
                            </a>
                        </div>
                        <div class="requests-header-grid__doc-time">
                            30 мая, чт
                        </div>
                    </td>
                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__employee-block">
                            <a href="#" class="requests-header-grid__employee">
                                Утебаев НабиНабиНаби
                            </a> 
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__about-city">
                            Астана, 8 дней
                        </div>
                        <div class="requests-header-grid__about-company">
                            qazaq air
                        </div>
                        <div class="requests-header-grid__about-date">
                            01 июня, сб
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__services">
                            <svg class="requests-header-grid__services-svg">
                                <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                            </svg>
                            <a href="#" class="requests-header-grid__services-text">
                                123 456 456 ₸
                            </a>
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__booking-till">
                            бронь до:
                        </div>
                        <div class="requests-header-grid__booking-date">
                            02 мар, 11:00
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-blue requests-header-grid__btn">
                                Оформить
                            </button>
                            <button class="btns-icon btns-icon--simply-grey">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </button>
                        </div>
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-cancel requests-header-grid__btn">
                                Отменить
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="requests-header-grid__row">
                    <td class="requests-header-grid__cell">
                        <span class="checkbox checkbox--blue">
                            <input type="checkbox"  id="checkbox-timeLim-2" />
                            <label for="checkbox-timeLim-2"></label>
                        </span>
                    </td>
                    <td class="requests-header-grid__cell">
                        <svg class="requests-header-grid__icon">
                            <use xlink:href="/assets/images/icons.svg#icon-online-status"></use>
                        </svg>
                    </td>
                    <td class="requests-header-grid__cell">
                        <a href="#" class="requests-header-grid__doc-num">
                            №051
                        </a>
                        <div class="requests-header-grid__position">
                            <a href="#" class="requests-header-grid__position-link">
                                Трэвел-специалист
                            </a>
                        </div>

                        <div class="requests-header-grid__agent">
                            <a href="#" class="requests-header-grid__agent-link">
                                Sofia Khamitova
                            </a>
                        </div>
                        <div class="requests-header-grid__doc-time">
                            30 мая, чт
                        </div>
                    </td>
                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__employee-block">
                            <a href="#" class="requests-header-grid__employee">
                                Утебаев НабиНабиНаби
                            </a> 
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__about-city">
                            Астана, 8 дней
                        </div>
                        <div class="requests-header-grid__about-company">
                            qazaq air
                        </div>
                        <div class="requests-header-grid__about-date">
                            01 июня, сб
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__services">
                            <svg class="requests-header-grid__services-svg">
                                <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                            </svg>
                            <a href="#" class="requests-header-grid__services-text">
                                123 456 456 ₸
                            </a>
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__booking-till">
                            бронь до:
                        </div>
                        <div class="requests-header-grid__booking-date">
                            02 мар, 11:00
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-blue requests-header-grid__btn">
                                Оформить
                            </button>
                            <button class="btns-icon btns-icon--simply-grey">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </button>
                        </div>
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-cancel requests-header-grid__btn">
                                Отменить
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>


        <div class="requests-header__grid requests-header-grid requests-header-grid--t-header-dropdown" ng-show="mod == 'today'">
            <table class="requests-header-grid__table">
                <tr class="requests-header-grid__head-row">
                    <th class="requests-header-grid__title"></th>
                    <th class="requests-header-grid__title"></th>
                    <th class="requests-header-grid__title">Заявка</th>
                    <th class="requests-header-grid__title">Сотрудник</th>
                    <th class="requests-header-grid__title">О поездке</th>
                    <th class="requests-header-grid__title">Услуги</th>
                    <th class="requests-header-grid__title">Статус</th>
                    <th class="requests-header-grid__title">Управление</th>

                </tr>
                <tr class="requests-header-grid__row">
                    <td class="requests-header-grid__cell">
                        <span class="checkbox checkbox--blue">
                            <input type="checkbox"  id="checkbox-today-1" />
                            <label for="checkbox-today-1"></label>
                        </span>
                    </td>
                    <td class="requests-header-grid__cell">
                        <svg class="requests-header-grid__icon">
                            <use xlink:href="/assets/images/icons.svg#icon-online-status"></use>
                        </svg>
                    </td>
                    <td class="requests-header-grid__cell">
                        <a href="#" class="requests-header-grid__doc-num">
                            №051
                        </a>
                        <div class="requests-header-grid__position">
                            <a href="#" class="requests-header-grid__position-link">
                                Трэвел-специалист
                            </a>
                        </div>

                        <div class="requests-header-grid__agent">
                            <a href="#" class="requests-header-grid__agent-link">
                                Sofia Khamitova
                            </a>
                        </div>
                        <div class="requests-header-grid__doc-time">
                            30 мая, чт
                        </div>
                    </td>
                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__employee-block">
                            <a href="#" class="requests-header-grid__employee">
                                Утебаев НабиНабиНаби
                            </a> 
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__about-city">
                            Астана, 8 дней
                        </div>
                        <div class="requests-header-grid__about-company">
                            qazaq air
                        </div>
                        <div class="requests-header-grid__about-date">
                            01 июня, сб
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__services">
                            <svg class="requests-header-grid__services-svg">
                                <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                            </svg>
                            <a href="#" class="requests-header-grid__services-text">
                                123 456 456 ₸
                            </a>
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__booking-till">
                            бронь до:
                        </div>
                        <div class="requests-header-grid__booking-date">
                            02 мар, 11:00
                        </div>
                    </td>

                    <td class="requests-header-grid__cell">
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-blue requests-header-grid__btn">
                                Оформить
                            </button>
                            <button class="btns-icon btns-icon--simply-grey">
                                <svg class="btns-icon__svg-icon-list">
                                    <use xlink:href='assets/images/icons.svg#icon-sorting'></use>
                                </svg>
                            </button>
                        </div>
                        <div class="requests-header-grid__btns-block">
                            <button class="btn-cancel requests-header-grid__btn">
                                Отменить
                            </button>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>






<?php include "./_inc/footer.php" ?>