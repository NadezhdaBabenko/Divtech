<!DOCTYPE html> 
<html lang="ru"> 
    <head> 
    <meta charset="utf-8"> 
        <title>Odyssey</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="/assets/css/styles.css">
    </head> 
    <body> 
        <div class="registration">
            <div class="registration__left-part registration__all-parts">
                <div class="registration__description-top">
                    <p>Odyssey</p>
                    <p>B2B TRAVEL PLANNER</p>
                    <p class="registration__description-title">Быстро. Удобно. Выгодно.Управляйте поездками как никогда прежде.</p>
                    <p class="registration__description-text">Революционный продукт в сфере бизнес-туризма и путешествий. <br>Одиссей помогает организовывать командировки, бронировать билеты,  отели и другое, компаниям со штатом от 10 до 32 000 сотрудников.</p> 
                    <div>
                        <a href="#" class="registration__description-link">Подключиться</a>
                        <a href="#" class="registration__description-link">Знакомство с Odyssey</a>
                    </div>
                </div>
            </div>
            <div class="registration__right-part registration__all-parts">
                <div class="registration__log-in">   
                    <p class="registration__log-in-title">Регистрация аккаунта</p>
                    <p class="registration__log-in-text">Данные пройдут проверку, и в случае успеха - на указанный элек. ящик, будет выслано письмо с данными для авторизации.</p>
                    <form action="" class="registration__form">
                        <div class="registration__input-div">
                            <input class="registration__input form-input" type="text" placeholder="№ БИН">
                            <button class="registration__search search-button">
                                <svg class="svg-icon-search">
                                    <use xlink:href='/assets/images/icons.svg#icon-search'></use>
                               </svg>
                            </button>
                        </div>
                        <div class="registration__input-div">
                            <input class="registration__input form-input" type="text" placeholder="Фамилия">
                            <input class="registration__input form-input" type="text" placeholder="Имя">
                            <input class="registration__input form-input" type="text" placeholder="Отчество"><br>
                        </div>   
                        <input class="registration__input form-input" type="tel" placeholder="Телефон"><br>
                        <input class="registration__input form-input" type="email" placeholder="Элек. почта"><br>
                        <button class=" button button__blue registration__button">Зарегистрироваться</button>
                    </form>
                    <div class="registration__checkbox checkbox-agree"> 
                        <input type="checkbox" name="" class="registration__checkbox--blue" id="registration__checkbox-checked">
                        <label for="registration__checkbox-checked" class="registration__checkbox-agree checkbox-agree__yes">Я согласен с правилами сервиса и даю согласие на обработку  моих персональных данных</label> 
                    </div>
                    <div class="registration__enter">
                            <svg class="svg-icon-log-in">
                                <use xlink:href='/assets/images/icons.svg#icon-log-in'></use>
                            </svg>
                        <!-- <img class="registration__enter-img" src="imgs\icon-back-white.png" alt=""> -->
                        <p class="registration__enter-text">Уже есть аккаунт? <a href="#" class="registration__enter-link">Войти</a></p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="reg-footer reg-footer__left-part">
                <div>
                    <ul class="reg-footer__menu-list">
                        <li class="reg-footer__menu-item"><a href="#" class="reg-footer__menu-link">Обработка данных</a></li>
                        <li class="reg-footer__menu-item"><a href="#" class="reg-footer__menu-link">О компании</a></li>
                        <li class="reg-footer__menu-item"><a href="#" class="reg-footer__menu-link">Партнерство</a></li>
                        <li class="reg-footer__menu-item"><a href="#" class="reg-footer__menu-link">Контакты</a></li>
                        <li class="reg-footer__menu-item"><a href="#" class="reg-footer__menu-link">Помощь</a></li>
                    </ul>
                </div>
                <p class="reg-footer__copyright">&#169;«Odyssey» Business Travel Planer, 2019</p>
            </div>  
            <div class="reg-footer reg-footer__right-part">
                <p class="reg-footer__phone">+7 727 355 37 37</p>
                <p class="reg-footer__email">service@ptravels.kz</p>
            </div>
        </footer>

    </body> 
</html>