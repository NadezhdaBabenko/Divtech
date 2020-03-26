<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page" ng-init="mod = 'card'">
        <div class="modal-frame modal-frame--bigger">
            <div class="modal-frame__title">
                Выберите способ оплаты
            </div>
            <div class="modal-frame__title-details">
                Общая сумма заказа: 50 000 тг
            </div>
            <div class="modal-payment">
                <div class="modal-payment__row">
                    <label class="modal-payment__type-check" ng-click="mod = 'card'">
                        <span class="checkbox checkbox--blue modal-payment__checkbox">
                            <input type="radio"  id="radio-2-1" name="radio-type-2" checked/>
                            <label for="radio-2-1"></label>
                        </span>
                        Банковская карта
                    </label>    

                    <label class="modal-payment__type-check" ng-click="mod = 'mobile'">
                        <span class="checkbox checkbox--blue modal-payment__checkbox">
                            <input type="radio"  id="radio-2-2" name="radio-type-2"/>
                            <label for="radio-2-2"></label>
                        </span>
                        Баланс мобильного (Beeline)
                    </label>
                    <label class="modal-payment__type-check" ng-click="mod = 'defermentOfPayment'">
                        <span class="checkbox checkbox--blue modal-payment__checkbox">
                            <input type="radio"  id="radio-2-3" name="radio-type-2"/>
                            <label for="radio-2-3"></label>
                        </span>
                        Отсрочка платежа
                    </label>
                </div>
                <div class="modal-payment__item" ng-show="mod == 'card'">
                    <div class="modal-payment__main-text">
                        Пожалуйста, внесите данные по карте. Денежные средства будут списаны после нажатия на оформление. 
                    </div>
                </div>

                <div class="modal-payment__item" ng-show="mod == 'mobile'">
                    <div class="modal-payment__main-text">
                        1. Введите номер телефона
                    </div>
                    <div class="modal-payment__main-text">
                        2. Дождитесь смс с кодом
                    </div>
                    <div class="modal-payment__main-text">
                        Денежные средства будут списаны после нажатия на оформление. 
                    </div>
                    <div class="modal-payment__input">
                        <input type="text" class="input-full input-full--filled">
                    </div>
                </div>

                <div class="modal-payment__item" ng-show="mod == 'defermentOfPayment'">
                    <div class="modal-payment__main-text">
                        Внимание! Оформление билета будет произведено только после одобрения заявки на отсрочку платежа. 
                        Ответ будет отправлен на Ваш электронный адрес.
                    </div>
                    <div class="modal-payment__main-text">
                        Оплата по данному билету не позднее 
                        <span class="modal-payment__main-text modal-payment__main-text--bold">
                            5 сен, ср, 22:45 (+6 GMT)
                        </span>
                        <span class="modal-payment__main-text modal-payment__main-text--blue">
                            10 ч 59 мин.
                        </span>
                    </div>
                </div>
            </div>


            <div class="modal-frame__btn-block">
                <button type="button" class="btn-blue modal-frame__btn-make-request">
                    Оформить заявку
                </button>
            </div>

            <div class="modal-frame__agree-block">
                <label class="i-agree">
                    <span class="checkbox checkbox--blue">
                        <input type="checkbox"  id="checkbox2" />
                        <label for="checkbox2"></label>
                    </span>
                    <div class="i-agree__text">
                        Я ознакомлен и принимаю <a href="#" class="i-agree__link">условия, правила и ограничения</a> 
                    </div>
                </label>
            </div>

            <button type="button" class="modal-frame__close-btn">
                <svg class="modal-frame__close">
                    <use xlink:href='/assets/images/icons.svg#icon-close'></use>
                </svg>
            </button>
        </div>
    </div>
</div><!-- /.content -->
<?php include "./_inc/footer.php" ?>