<?php include "./_inc/header.php" ?>

<div class="page">
    <div class="content page__container">
        <div class="page__sidebar sidebar-single-line">
            <div class="sidebar page__sidebar-top sidebar-single-line__container">
                <ul class="sidebar__accordion-menu sidebar-single-line__menu">
                    <li class="sidebar-single-line__menu-item">
                        <a class="sidebar__info-link sidebar__info-link--active sidebar-single-line__menu-link sidebar-single-line__menu-link--active"
                           href="#">
                            <svg class="sidebar__icons">
                                <use xlink:href='/assets/images/icons.svg#icon-main-info'></use>
                            </svg>
                            Основная информация
                        </a>
                    </li>
                    <li class="sidebar-single-line__menu-item">
                        <div class="sidebar__dropdownlink">
                            <a class="sidebar__info-link sidebar-single-line__menu-link" href="javascript:void(0);">
                                <svg class="sidebar__icons">
                                    <use xlink:href='/assets/images/icons.svg#icon-settings'></use>
                                </svg>
                                Настройки
                            </a>
                            <i class="fas fa-chevron-right sidebar__open sidebar-single-line__hidden"></i>
                        </div>
                        <ul class="sidebar__submenu-list sidebar-single-line__submenu">
                            <li class="sidebar__submenu-item"><a href="#" class="sidebar__submenu-link">Доступ к сайту <span class="sidebar__info-date">с 12 янв 2018</span></a></li>
                            <li class="sidebar__submenu-item"><a href="#" class="sidebar__submenu-link">Роль</a></li>
                            <li class="sidebar__submenu-item"><a href="#" class="sidebar__submenu-link">Логин и пароль</a></li>
                            <li class="sidebar__submenu-item"><a href="#" class="sidebar__submenu-link">Личные поедки</a></li>
                            <li class="sidebar__submenu-item"><a href="#" class="sidebar__submenu-link">Кредитные лимиты</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="page__content">
            <div class="page__frame">
                <div class="page__breadcrumbs">
                    <ul class="breadcrumbs">
                        <li class="breadcrumbs__item">
                            <a href="" class="breadcrumbs__link">Клиенты</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="" class="breadcrumbs__link">АО «Самрук Казына»</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="" class="breadcrumbs__link">Сотрудники</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <span class="breadcrumbs__link breadcrumbs__link--active">Баталгазиев Руслан</span>
                        </li>
                    </ul>
                </div>

                <div class="profile">
                    <div class="profile__header">
                        <div class="profile__title">
                            <div class="profile__title-logo">

                            </div>
                            <div class="profile__title-client">
                                <p class="profile__client-name">Баталгазиев Руслан Владимирович</p>
                                <p class="profile__client-type">Менеджер продаж <span class="profile__client-employee">АО «Самрук Казына»</span></p>
                            </div>
                        </div>
                        <div class="statistic profile__statistic">
                            <div class="statistic__list">
                                <div class="statistic__item">
                                    <p class="statistic__name">Переплата</p>
                                    <p class="statistic__info statistic__info--blue">+2 250 800 тг</p>
                                </div>
                                <div class="statistic__item">
                                    <p class="statistic__name">Кред. лимит</p>
                                    <p class="statistic__info">960 000 тг</p>
                                </div>
                                <div class="statistic__item">
                                    <p class="statistic__name">Статус</p>
                                    <p class="statistic__info-status">Активный</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form>
                        <div class="profile__content-row">
                            <div class="profile__content-frame profile__content-frame--w70p">
                                <div class="profile-form">
                                    <div class="profile-form__header info-line">
                                        <div class="info-line__name">
                                            <p class="info-line__text">Основная информация</p>
                                        </div>
                                        <div class="info-line__date">
                                            <p class="info-line__text">23 ФЕВ 2019</p>
                                        </div>
                                    </div>

                                    <div class="profile-form__body">
                                        <div class="info-main">
                                            <div class="info-main__row">
                                                <div class="info-main__line">
                                                    <div class="info-main__line-header">
                                                        <label class="info-main__line-text">Внутр. №:</label>
                                                    </div>
                                                    <div class="info-main__inputs">
                                                        <input type="text" class="input-full input-full--filled">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-main__row">
                                                <div class="info-main__line">
                                                    <div class="info-main__line-header">
                                                        <label class="info-main__line-text">Тип и метод:</label>
                                                    </div>
                                                    <div class="info-main__selects info-main__indent">
                                                        <select class="input-full">
                                                            <option selected>Вахтовый сотрудник</option>
                                                            <option>Вахтовый сотрудник2</option>
                                                            <option>Вахтовый сотрудник3</option>
                                                            <option>Вахтовый сотрудник4</option>
                                                        </select>
                                                    </div>
                                                    <div class="info-main__selects">
                                                        <select class="input-full">
                                                            <option selected>Удаленно</option>
                                                            <option>Удаленно</option>
                                                            <option>Удаленно</option>
                                                            <option>Удаленно</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-main__row">
                                                <div class="info-main__line">
                                                    <div class="info-main__line-header">
                                                        <label class="info-main__line-text">ФИО:</label>
                                                    </div>
                                                    <div class="info-main__inputs inputs-group">
                                                        <input type="text" class="input-full inputs-group__item" />
                                                        <input type="text" class="input-full inputs-group__item" />
                                                        <input type="text" class="input-full inputs-group__item" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-main__row">
                                                <div class="info-main__line">
                                                    <div class="info-main__line-header">
                                                        <label class="info-main__line-text">ФИО, латиница:</label>
                                                    </div>
                                                    <div class="info-main__inputs inputs-group">
                                                        <input type="text" class="input-full inputs-group__item" />
                                                        <input type="text" class="input-full inputs-group__item" />
                                                        <input type="text" class="input-full inputs-group__item" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-main__row">
                                                <div class="info-main__line">
                                                    <div class="info-main__line-header">
                                                        <label class="info-main__line-text">Отображать как:</label>
                                                    </div>
                                                    <div class="info-main__inputs">
                                                        <input type="text" class="input-full">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.profile-form -->

                                <div class="profile-form">
                                    <div class="profile-form__header info-line">
                                        <div class="info-line__name">
                                            <p class="info-line__text">Личная информация</p>
                                        </div>
                                        <div class="info-line__date">
                                            <p class="info-line__text">23 ФЕВ 2019</p>
                                        </div>
                                    </div>

                                    <div class="profile-form__body">
                                        <div class="info-personal"> 
                                            <table class="info-personal__table">
                                                <tr class="info-personal__header">
                                                    <td class="info-personal__cell info-personal--text-grey">Пол</td>
                                                    <td class="info-personal__cell info-personal--text-grey">Дата рождения</td>
                                                    <td class="info-personal__cell info-personal--text-grey">ИИН</td>
                                                </tr>
                                                <tr class="info-personal__item">
                                                    <td class="info-personal__cell">
                                                        <div class="radio-buttons radio-buttons--green">
                                                            <div class="radio-buttons__blocks">
                                                                <input class="radio-buttons__input" type="radio" name="option" id="radio-male" checked />
                                                                <label class="radio-buttons__label" for="radio-male">М</label>
                                                            </div>
                                                            <div class="radio-buttons__blocks">
                                                                <input class="radio-buttons__input" type="radio" name="option" id="radio-female" />
                                                                <label class="radio-buttons__label" for="radio-female">Ж</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="info-personal__cell">
                                                        <input type="text" class="input-full">
                                                    </td>
                                                    <td class="info-personal__cell">
                                                        <input type="text" class="input-full">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- /.profile-form -->

                                <div class="profile-form">
                                    <div class="profile-form__header info-line">
                                        <div class="info-line__name">
                                            <p class="info-line__text">Данные по проездным документам</p>
                                        </div>
                                        <div class="info-line__date">
                                            <p class="info-line__text">23 ФЕВ 2019</p>
                                        </div>
                                    </div>

                                    <div class="profile-form__body">
                                        <div class="info-travel-documents"> 
                                            <ul class="travel-doc-dropdown info-travel-documents__travel-doc-dropdown">
                                                <li class="travel-doc-dropdown__item">
                                                    <div class="travel-doc-dropdown__dropdownlink">
                                                        <a class="travel-doc-dropdown__info-link" href="javascript:void(0);">
                                                            <svg class="travel-doc-dropdown__icons">
                                                                <use xlink:href='/assets/images/icons.svg#icon-passport'></use>
                                                            </svg>
                                                            Удостоверение личности
                                                            <span class="travel-doc-dropdown__is-filled travel-doc-dropdown__is-filled--no">
                                                                <svg class="travel-doc-dropdown__icons-tick">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-nav-tick'></use>
                                                                </svg>
                                                                Заполнено
                                                            </span>
                                                        </a>
                                                        <i class="fas fa-chevron-right travel-doc-dropdown__open"></i>
                                                    </div>
                                                    <div class="travel-doc-dropdown__hidden-block">
                                                        <p class="travel-doc-dropdown--text-grey">Заполните данные как в паспорте: латинцей</p>
                                                            <table class="travel-doc-dropdown__table">
                                                                <tbody class="travel-doc-dropdown__body">
                                                                    <tr class="travel-doc-dropdown__item">
                                                                        <td class="travel-doc-dropdown__cell">
                                                                        <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                            <label for="input-first-name">
                                                                                First name
                                                                            </label>    
                                                                        </div>   
                                                                            <input type="text" class="input-full" id="input-first-name">
                                                                        </td>
                                                                        <td class="travel-doc-dropdown__cell">
                                                                            <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                                <label for="input-last-name">
                                                                                    Last name
                                                                                </label>
                                                                            </div>
                                                                            <input type="text" class="input-full" id="input-last-name">
                                                                        </td>
                                                                        <td class="travel-doc-dropdown__cell">
                                                                            <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                                <label for="input-birthday-date">
                                                                                    Birthday date
                                                                                </label>
                                                                            </div>
                                                                            <input type="text" class="input-full" id="input-birthday-date">
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="travel-doc-dropdown__item">
                                                                        <td class="travel-doc-dropdown__cell">
                                                                            <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                                <label for="input-gender">
                                                                                    Gender
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio-buttons radio-buttons--green">
                                                                                <div class="radio-buttons__blocks">
                                                                                    <input class="radio-buttons__input" type="radio" name="option2" id="radio-gender-m-doc1" checked />
                                                                                    <label class="radio-buttons__label" for="radio-gender-m-doc1">Male</label>
                                                                                </div>
                                                                                <div class="radio-buttons__blocks">
                                                                                    <input class="radio-buttons__input" type="radio" name="option2" id="radio-gender-f-doc1" />
                                                                                    <label class="radio-buttons__label" for="radio-gender-f-doc1">Female</label>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="travel-doc-dropdown__cell">
                                                                            <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                                <label for="input-country">
                                                                                    Country
                                                                                </label>
                                                                            </div>
                                                                            <select class="input-full">
                                                                                <option>Qazaqstan</option>
                                                                                <option>Qazaqstan2</option>
                                                                                <option>Qazaqstan3</option>
                                                                                <option>Qazaqstan4</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                    </div>
                                                </li>

                                                <li class="travel-doc-dropdown__item">
                                                    <div class="travel-doc-dropdown__dropdownlink">
                                                        <a class="travel-doc-dropdown__info-link" href="javascript:void(0);">
                                                            <svg class="travel-doc-dropdown__icons">
                                                                <use xlink:href='/assets/images/icons.svg#icon-passport'></use>
                                                            </svg>
                                                            Паспорт
                                                            <span class="travel-doc-dropdown__is-filled">
                                                                <svg class="travel-doc-dropdown__icons-tick">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-nav-tick'></use>
                                                                </svg>
                                                                Заполнено
                                                            </span>
                                                        </a>
                                                        <i class="fas fa-chevron-right travel-doc-dropdown__open"></i>
                                                    </div>
                                                    <div class="travel-doc-dropdown__hidden-block">
                                                        <p class="travel-doc-dropdown--text-grey">Заполните данные как в паспорте: латинцей</p>
                                                        <table class="travel-doc-dropdown__table">
                                                            <tbody class="travel-doc-dropdown__body">
                                                                <tr class="travel-doc-dropdown__item">
                                                                    <td class="travel-doc-dropdown__cell">
                                                                    <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                        <label for="input-first-name">
                                                                            First name
                                                                        </label>    
                                                                    </div>   
                                                                        <input type="text" class="input-full" id="input-first-name">
                                                                    </td>
                                                                    <td class="travel-doc-dropdown__cell">
                                                                        <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                            <label for="input-last-name">
                                                                                Last name
                                                                            </label>
                                                                        </div>
                                                                        <input type="text" class="input-full" id="input-last-name">
                                                                    </td>
                                                                    <td class="travel-doc-dropdown__cell">
                                                                        <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                            <label for="input-birthday-date">
                                                                                Birthday date
                                                                            </label>
                                                                        </div>
                                                                        <input type="text" class="input-full" id="input-birthday-date">
                                                                    </td>
                                                                </tr>
                                                                <tr class="travel-doc-dropdown__item">
                                                                    <td class="travel-doc-dropdown__cell">
                                                                        <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                            <label for="input-gender">
                                                                                Gender
                                                                            </label>
                                                                        </div>
                                                                        <div class="radio-buttons radio-buttons--green">
                                                                            <div class="radio-buttons__blocks">
                                                                                <input class="radio-buttons__input" type="radio" name="option3" id="radio-gender-m-doc2" checked />
                                                                                <label class="radio-buttons__label" for="radio-gender-m-doc2">Male</label>
                                                                            </div>
                                                                            <div class="radio-buttons__blocks">
                                                                                <input class="radio-buttons__input" type="radio" name="option3" id="radio-gender-f-doc2" />
                                                                                <label class="radio-buttons__label" for="radio-gender-f-doc2">Female</label>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="travel-doc-dropdown__cell">
                                                                        <div class="travel-doc-dropdown--text-grey travel-doc-dropdown--text-indent">
                                                                            <label for="input-country">
                                                                                Country
                                                                            </label>
                                                                        </div>
                                                                        <select class="input-full">
                                                                            <option>Qazaqstan</option>
                                                                            <option>Qazaqstan2</option>
                                                                            <option>Qazaqstan3</option>
                                                                            <option>Qazaqstan4</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.profile-form -->
                            </div>

                            <div class="profile__content-frame">
                                <div class="profile-form">
                                    <div class="profile-form__header info-line">
                                            <div class="info-line__name">
                                            <p class="info-line__text">Закреп. лица и кредит. лимит</p>
                                        </div>
                                        <div class="info-line__date">
                                            <p class="info-line__text">23 ФЕВ 2019</p>
                                        </div>
                                    </div>
                                    <div class="profile-form__body profile-form__body--small">
                                    <div class="info-faces-limit">
                                                <div class="info-faces-limit__row">
                                                    <div class="info-faces-limit__line">
                                                        <div class="info-faces-limit__line-header">
                                                            <label class="info-faces-limit__line-text">Менеджер:</label>
                                                        </div>
                                                        <div class="input-with-btn info-faces-limit__input-with-btn">
                                                            <input class="input-full input-with-btn--width" type="text">
                                                            <button class="input-with-btn__search">
                                                                <svg class="input-with-btn__search-svg">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-search'></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info-faces-limit__row">
                                                    <div class="info-faces-limit__line">
                                                        <div class="info-faces-limit__line-header">
                                                            <label class="info-faces-limit__line-text">Апрувер:</label>
                                                        </div>
                                                            <div class="input-with-btn info-faces-limit__input-with-btn">
                                                                <input class="input-full input-with-btn__width input-with-btn--width" type="text">
                                                                <button class="input-with-btn__search">
                                                                    <svg class="input-with-btn__search-svg">
                                                                        <use xlink:href='/assets/images/icons.svg#icon-search'></use>
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="info-faces-limit__row">
                                                    <div class="info-faces-limit__line">
                                                        <div class="info-faces-limit__line-header">
                                                            <label class="info-faces-limit__line-text">Кредит. лимит:</label>
                                                        </div>
                                                        <div class="info-faces-limit__inputs">
                                                            <input type="text" class="input-full">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                    </div>
                                </div>

                                <div class="profile-form">
                                    <div class="profile-form__header info-line">
                                         <div class="info-line__name">
                                            <p class="info-line__text">Дополнительно</p>
                                        </div>
                                        <div class="info-line__date">
                                            <p class="info-line__text">23 ФЕВ 2019</p>
                                        </div>
                                    </div>
                                    <div class="profile-form__body profile-form__body--small">
                                        <div class="info-extra">
                                            <div class="info-extra__row">
                                                <div class="info-extra__line">
                                                    <div class="info-extra__line-header">
                                                        <label class="info-extra__line-text">Раб. период:</label>
                                                    </div>
                                                    <div class="info-extra__selects">
                                                        <select class="input-full">
                                                            <option selected>12.05.2012 — по наст. время</option>
                                                            <option>Вахтовый сотрудник2</option>
                                                            <option>Вахтовый сотрудник3</option>
                                                            <option>Вахтовый сотрудник4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-extra__row">
                                                <div class="info-extra__line">
                                                    <div class="info-extra__line-header">
                                                        <label class="info-extra__line-text">Должность:</label>
                                                    </div>
                                                    <div class="info-extra__selects">
                                                        <select class="input-full">
                                                            <option selected>Менеджер продаж</option>
                                                            <option>Менеджер продаж2</option>
                                                            <option>Менеджер продаж3</option>
                                                            <option>Менеджер продаж4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-extra__row">
                                                <div class="info-extra__line">
                                                    <div class="info-extra__line-header">
                                                        <label class="info-extra__line-text">Отдел:</label>
                                                    </div>
                                                    <div class="info-extra__selects">
                                                        <select class="input-full">
                                                            <option selected>Сейлс отдел</option>
                                                            <option>Сейлс отдел2</option>
                                                            <option>Сейлс отдел3</option>
                                                            <option>Сейлс отдел4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-extra__row">
                                                <div class="info-extra__line">
                                                    <div class="info-extra__line-header">
                                                        <label class="info-extra__line-text">Департамент:</label>
                                                    </div>
                                                    <div class="info-extra__selects">
                                                        <select class="input-full">
                                                            <option selected>Административный</option>
                                                            <option>Административный2</option>
                                                            <option>Административный3</option>
                                                            <option>Административный4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="profile-form">
                                    <div class="profile-form__header info-line">
                                         <div class="info-line__name">
                                            <p class="info-line__text">Контактные данные</p>
                                        </div>
                                        <div class="info-line__date">
                                            <p class="info-line__text">23 ФЕВ 2019</p>
                                        </div>
                                    </div>
                                    <div class="profile-form__body profile-form__body--small">
                                        <div class="info-contacts"> 
                                            <table class="info-contacts__table">
                                                <tbody class="info-contacts__body">
                                                    <tr class="info-contacts__header">
                                                        <td class="info-contacts__cell info-contacts--text-grey">Тип</td>
                                                        <td class="info-contacts__cell info-contacts--text-grey">Номер или адрес</td>
                                                        <td class="info-contacts__cell info-contacts--text-grey"></td>
                                                        <td class="info-contacts__cell info-contacts--text-grey"></td>
                                                    </tr>
                                                    <tr class="info-contacts__item">
                                                        <td class="info-contacts__cell">
                                                            <div>
                                                                <select class="input-full">
                                                                    <option selected>Сот. номер</option>
                                                                    <option>Skype</option>
                                                                    <option >Email</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td class="info-contacts__cell">
                                                            <input type="text" class="input-full">
                                                        </td>
                                                        <td class="info-contacts__cell">
                                                            <button class="btns-icon btns-icon--delete">
                                                                <svg class="btns-icon__svg-delete">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-btn-comment'></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                        <td class="info-contacts__cell">
                                                            <button class="btns-icon btns-icon--delete">
                                                                <svg class="btns-icon__svg-delete">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-remove'></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr class="info-contacts__item">
                                                        <td class="info-contacts__cell">
                                                            <div>
                                                                <select class="input-full">
                                                                    <option>Сот. номер</option>
                                                                    <option selected>Skype</option>
                                                                    <option >Email</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                        <td class="info-contacts__cell">
                                                            <input type="text" class="input-full">
                                                        </td>
                                                        <td class="info-contacts__cell">
                                                            <button class="btns-icon btns-icon--delete">
                                                                <svg class="btns-icon__svg-delete">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-btn-comment'></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                        <td class="info-contacts__cell">
                                                            <button class="btns-icon btns-icon--delete">
                                                                <svg class="btns-icon__svg-delete">
                                                                    <use xlink:href='/assets/images/icons.svg#icon-remove'></use>
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <button class="info-contacts__btn-add-new btn-add-new ">Добавить контакт</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                        <div class="profile__content-frame">
                            <div class="profile-form__body--full">
                                <div class="profile-save-form">
                                    <div>
                                        <button class="profile-save-form__btn-save btn-save">Сохранить</button>
                                    </div>
                                    <div>
                                        <button class="profile-save-form__btn-cancel btn-cancel">Отменить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./_inc/footer.php" ?>