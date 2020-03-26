<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Elena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
<div class="main-header" ng-controller="MainHeaderController">
    <div class="main-header__container">
        <div class="menu-button" ng-class="{'menu-button--open': isMenuOpen}" ng-click="isMenuOpen = !isMenuOpen">
            <span class="menu-button__line menu-button__line--top"></span>
            <span class="menu-button__line menu-button__line--meat"></span>
            <span class="menu-button__line menu-button__line--bottom"></span>
        </div>

        <div class="main-header__logo">
            <div class="main-header__logo-img">Odyssey</div>
        </div>

        <responsive-nav class="main-header__nav header-nav" ng-class="{'header-nav--open': isMenuOpen}">
            <a ng-repeat="item in nav"
               ng-href="{{item.url}}"
               class="header-nav__link"
               ng-class="{'header-nav__link--active': item.isActive}">
                {{item.name}}
            </a>
            <div href="#" class="responsive-dropdown header-nav__more" uib-dropdown auto-close="always">
                <a href uib-dropdown-toggle class="header-nav__more-toggle">
                    <svg class="header-nav__more-icon">
                        <use xlink:href='/assets/images/icons.svg#nav-link--more'></use>
                    </svg>
                </a>
            </div>
        </responsive-nav>

        <div class="main-header__summaries">
            <div class="main-header__summary">
                <div class="header-summary" uib-dropdown auto-close="always">
                    <div class="header-summary__toggle" uib-dropdown-toggle>
                        <div class="header-summary__icon-block">
                            <svg class="svg-icon header-summary__icon">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-alarm"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            На удтвр.
                        </div>
                        <div class="header-summary__data">
                            <span>9 шт</span>
                            <svg class="header-summary__caret">
                                <use xlink:href="/assets/images/icons.svg#chevron-down"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="dropdown-menu pull-right" uib-dropdown-menu>
                        info
                    </div>
                </div>
            </div>

            <div class="main-header__summary">
                <div class="header-summary header-summary--with-notify" uib-dropdown>
                    <div class="header-summary__toggle" uib-dropdown-toggle>
                        <div class="header-summary__icon-block">
                            <span class="notifier">3</span>
                            <svg class="svg-icon header-summary__icon">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-warning"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            Заявки
                        </div>
                        <div class="header-summary__data">
                            <span>9 шт</span>
                            <svg class="header-summary__caret">
                                <use xlink:href="/assets/images/icons.svg#chevron-down"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="dropdown-menu pull-right" uib-dropdown-menu>
                        info
                    </div>
                </div>
            </div>

            <div class="main-header__summary">
                <div class="header-summary" uib-dropdown auto-close="always">
                    <div class="header-summary__toggle" uib-dropdown-toggle>
                        <div class="header-summary__icon-block">
                            <svg class="svg-icon header-summary__icon svg-icon--rotate-180">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-invoice"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            Выс.Счета
                        </div>
                        <div class="header-summary__data">
                            <span>4 выст.</span>
                            <svg class="header-summary__caret">
                                <use xlink:href="/assets/images/icons.svg#chevron-down"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="dropdown-menu pull-right" uib-dropdown-menu>
                        info
                    </div>
                </div>
            </div>

            <div class="main-header__summary">
                <div class="header-summary" uib-dropdown auto-close="always">
                    <div class="header-summary__toggle" uib-dropdown-toggle>
                        <div class="header-summary__icon-block">
                            <svg class="svg-icon header-summary__icon">
                                <use xlink:href="/assets/images/icons.svg#icon-nav-wallet"></use>
                            </svg>
                        </div>
                        <div class="header-summary__title">
                            Баланс
                        </div>
                        <div class="header-summary__data">
                            <span>225 580<span class="header-summary__currency">₸</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header__bell-div">
            <svg class="main-header__bell">
                <use xlink:href="/assets/images/icons.svg#icon-bell"></use>
            </svg>
            <span class="notifier notifier--blue">8</span>
        </div>

        <div class="main-header__user" uib-dropdown auto-close="always">
            <div class="header-user" uib-dropdown-toggle>

                <img class="header-user__avatar" src="/assets/images/avatar-mask.png" alt=""/>

                <div class="header-user__right">
                    <div class="header-user__names">
                        <div class="header-user__name">Светлана ШевченкоШевченко</div>
                        <div class="header-user__position">
                            Старший бухгалтер
                        </div>
                    </div>

                    <svg class="svg-icon header-user__caret">
                        <use xlink:href='/assets/images/icons.svg#chevron-down'></use>
                    </svg>
                </div>
            </div>

            <ul class="dropdown-menu pull-right" uib-dropdown-menu>
                <li ng-if="$ctrl.isImpersonate"><a href="/admin/users/leave-impersonate">Вернуться к админу</a></li>
                <li><a href ng-click="$ctrl.logout()">Выход</a></li>
            </ul>
        </div>

    </div>
</div>