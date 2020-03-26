<?php include "./_inc/header.php" ?>

<div class="page" ng-init="mod = 'avia'">
    <div class="content page__container">
        <div class="page__sidebar">
            <div class="travel-policy-total">
                <div class="travel-policy-total__title">
                    Создание трэвел-политики
                </div>
                <div class="travel-policy-total__text">
                    Вы можете создавать гибкие условия по услугам для Ваших сотрудников.
                </div>
                <div class="travel-policy-total__items">
                    <div class="travel-policy-total__item">
                        <svg class="travel-policy-total__svg">
                            <use xlink:href='/assets/images/icons.svg#icon-approve'></use>
                        </svg>
                        <div class="travel-policy-total__text-block">
                            <div class="travel-policy-total__item-title">
                                Тип услуги:
                            </div>
                            <div class="travel-policy-total__item-text-block">
                                <svg class="travel-policy-total__item-svg">
                                    <use xlink:href='/assets/images/icons.svg#icon-plane'></use>
                                </svg>
                                <div class="travel-policy-total__item-text">
                                    Авиаперелеты
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="travel-policy-total__item">
                        <svg class="travel-policy-total__svg">
                            <use xlink:href='/assets/images/icons.svg#icon-approve'></use>
                        </svg>
                        <div class="travel-policy-total__text-block">
                            <div class="travel-policy-total__item-title">
                                Тип политики:
                            </div>
                            <div class="travel-policy-total__item-text">
                                Какой-то тип
                            </div>
                        </div>
                    </div>
                    <div class="travel-policy-total__item">
                        <svg class="travel-policy-total__svg">
                            <use xlink:href='/assets/images/icons.svg#icon-approve'></use>
                        </svg>
                        <div class="travel-policy-total__text-block">
                            <div class="travel-policy-total__item-title">
                                Условия политики:
                            </div>
                            <div class="travel-policy-total__item-text">
                                Какие-то условия
                            </div>
                        </div>
                    </div>
                </div>

                <button class="btn-blue travel-policy-total__btn">
                    Сохранить и создать политику
                </button>
            </div>
        </div>


        <div class="page__content">
            <div class="page__frame travel-policy-making">
                    <form form class="travel-policy-making__form">
                        <div class="travel-policy-making__title">
                            1. Тип политики и услуги
                        </div>
                        <div class="travel-policy-making__main-text">
                            Описание политики
                        </div>
                        <textarea class="travel-policy-making__textarea" name="travel-policy-description"></textarea>
                    </form>
            </div>

            <div class="page__frame travel-policy-making travel-policy-making--second">
                    <form class="travel-policy-making__form">
                        <div class="travel-policy-making__title">
                            2. Условия политики
                        </div>

                        <ul class="tabs travel-policy-making__tabs">
                            <li class="tabs__item" >
                                <a href="" class="tabs__link" ng-click="mod = 'avia'"  ng-class="{'tabs__link--active': mod == 'avia'}">
                                    <svg class="tabs__icon">
                                        <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                                    </svg>
                                    Авиаперелеты
                                </a>
                            </li>
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod = 'rail'" ng-class="{'tabs__link--active': mod == 'rail'}">
                                    <svg class="tabs__icon">
                                        <use xlink:href="/assets/images/icons.svg#icon-train"></use>
                                    </svg>
                                    ЖД-поездки 
                                </a>
                            </li>
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod = 'hotel'" ng-class="{'tabs__link--active': mod == 'hotel'}">
                                    <svg class="tabs__icon">
                                        <use xlink:href="/assets/images/icons.svg#icon-hotel"></use>
                                    </svg>
                                    Проживание
                                </a>
                            </li>
                            <li class="tabs__item">
                                <a href="" class="tabs__link" ng-click="mod = 'transfer'" ng-class="{'tabs__link--active': mod == 'transfer'}">
                                    <svg class="tabs__icon">
                                        <use xlink:href="/assets/images/icons.svg#icon-transfer"></use>
                                    </svg>
                                    Трансфер
                                </a>
                            </li>
                        </ul>

                        <div ng-show="mod == 'avia'">
                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggle1=!toggle1">
                                    Минимальная/Максимальная стоимость
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggle1">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Мин. стоимость
                                        </div>
                                        <input type="text" class="input-full travel-policy-making__filter">
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Мин. стоимость
                                        </div>
                                        <input type="text" class="input-full travel-policy-making__filter">
                                    </div>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggle2=!toggle2">
                                    Классы бронирования
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggle2">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить эконом
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="econom=!econom">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="econom">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить бизнес
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="business=!business">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="business">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggle3=!toggle3">
                                    Стыковки
                                </div>
                                <div class="travel-policy-making__item travel-policy-making__item--no-border" ng-show="toggle3">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            1 пересадка
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="docking1=!docking1">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="docking1">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            2 пересадки
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="docking2=!docking2">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="docking2">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="travel-policy-making__grid travel-policy-making-grid" ng-show="toggle3">
                                    <table class="travel-policy-making-grid__table">
                                        <tr class="travel-policy-making-grid__head-row">
                                            <th class="travel-policy-making-grid__title">Откуда</th>
                                            <th class="travel-policy-making-grid__title">Стыковка 1</th>
                                            <th class="travel-policy-making-grid__title">Время стыковки 1</th>
                                            <th class="travel-policy-making-grid__title">Стыковка 2</th>
                                            <th class="travel-policy-making-grid__title">Время стыковки 2</th>
                                            <th class="travel-policy-making-grid__title">Куда</th>
                                            <th class="travel-policy-making-grid__title"></th>
                                        </tr>

                                        <tr class="travel-policy-making-grid__row">
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Минут">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Минут">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>

                                            <td class="travel-policy-making-grid__cell">
                                                <button class="btns-icon travel-policy-making-grid__btn-icon">
                                                    <svg class="btns-icon__svg">
                                                        <use  xlink:href="/assets/images/icons.svg#icon-delete"></use>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>

                                        <tr class="travel-policy-making-grid__row">
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Минут">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Минут">
                                            </td>
                                            <td class="travel-policy-making-grid__cell">
                                                <input type="text" class="input-full" placeholder="Аэропорт">
                                            </td>

                                            <td class="travel-policy-making-grid__cell">
                                                <button class="btns-icon travel-policy-making-grid__btn-icon">
                                                    <svg class="btns-icon__svg">
                                                        <use  xlink:href="/assets/images/icons.svg#icon-delete"></use>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    </table>
                                    <button class="btn-add-new travel-policy-making__add-btn">
                                        Добавить
                                    </button>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggle4=!toggle4">
                                    Время вылета/прилета
                                </div>
                                <div class="travel-policy-making__item-column" ng-show="toggle4">
                                    <div class="travel-policy-making__main-text">
                                        Длительность перелета
                                    </div>
                                    <input type="text" class="input-full travel-policy-making__filter-full">
                                </div>
                                <div class="travel-policy-making__item travel-policy-making__item--no-border" ng-show="toggle4">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Время вылета от
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="departuretime1=!departuretime1">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select">Не выбрано</div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="departuretime1">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Время вылета до
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="departuretime2=!departuretime2">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select">Не выбрано</div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="departuretime2">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="travel-policy-making__item" ng-show="toggle4">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Время прилета от
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="arrivaltime1=!arrivaltime1">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select">Не выбрано</div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="arrivaltime1">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Время прилета до
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="arrivaltime2=!arrivaltime2">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select">Не выбрано</div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="arrivaltime2">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div ng-show="mod == 'rail'">
                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleTrain1=!toggleTrain1">
                                    Минимальная/Максимальная стоимость
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggleTrain1">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Мин. стоимость
                                        </div>
                                        <input type="text" class="input-full travel-policy-making__filter">
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Мин. стоимость
                                        </div>
                                        <input type="text" class="input-full travel-policy-making__filter">
                                    </div>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleTrain2=!toggleTrain2">
                                    Классы 
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggleTrain2">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить сидячие
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="sitting=!sitting">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="sitting">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить плацкарт
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="reservedSeat=!reservedSeat">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="reservedSeat">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить купэ
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="coupe=!coupe">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="coupe">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить люкс
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="lux=!lux">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="lux">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleTrain3=!toggleTrain3">
                                    Места
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggleTrain3">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Разрешить места
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="place=!place">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="place">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleTrain4=!toggleTrain4">
                                    Типы поездов
                                </div>

                                <div class="travel-policy-making__item" ng-show="toggleTrain4">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Стандартный
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="standart=!standart">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="standart">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Скоростной
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="highSpeed=!highSpeed">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="highSpeed">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Тальго
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="talgo=!talgo">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="talgo">
                                                <li class="filter-dropdown-select__item">
                                                    Да
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Нет
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div ng-show="mod == 'hotel'">
                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleHotel1=!toggleHotel1">
                                    Валюта
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggleHotel1">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Валюта
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="currency=!currency">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="currency">
                                                <li class="filter-dropdown-select__item">
                                                    KZT
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    USD
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    EUR
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    RUR
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleHotel2=!toggleHotel2">
                                    Минимальная/Максимальная стоимость
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggleHotel2">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Мин. стоимость
                                        </div>
                                        <input type="text" class="input-full travel-policy-making__filter">
                                    </div>
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Мин. стоимость
                                        </div>
                                        <input type="text" class="input-full travel-policy-making__filter">
                                    </div>
                                </div>
                            </div>

                            <div class="travel-policy-making__item-block">
                                <div class="travel-policy-making__item-title" ng-click="toggleHotel3=!toggleHotel3">
                                    Услуги и удобства
                                </div>
                                <div class="travel-policy-making__item" ng-show="toggleHotel3">
                                    <div class="travel-policy-making__item-main-block">
                                        <div class="travel-policy-making__main-text">
                                            Выберите обязательные услуги
                                        </div>
                                        <div class="filter-dropdown-select travel-policy-making__filter">
                                            <div class="filter-dropdown filter-dropdown--one-line" ng-click="service=!service">
                                                <div class="filter-dropdown__text">
                                                    <div class="filter-dropdown__text-select"></div>
                                                </div>
                                            </div>
                                            <ul class="filter-dropdown-select__list" ng-show="service">
                                                <li class="filter-dropdown-select__item">
                                                    Что-то 1 
                                                </li>
                                                <li class="filter-dropdown-select__item">
                                                    Что-то 2
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<?php include "./_inc/footer.php" ?>