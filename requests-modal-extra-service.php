<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Заявка на доп. услуги
            </div>
            <div class="modal-frame__title-details">
                Какой-то Палас Стамбул, 24 мая, пт 
            </div>

            <div class="modal-frame__table">
                <div class="modal-extra-service">
                    <div class="modal-extra-service__block">
                        <div class="modal-extra-service__column">
                            <label class="modal-extra-service__check-block">
                                <span class="checkbox checkbox--blue modal-extra-service__check">
                                    <input type="checkbox"  id="checkbox-extra-service1" />
                                    <label for="checkbox-extra-service1"></label>
                                </span>
                                <div class="modal-extra-service__check-title">
                                    Доп. кровать кровать кровать кровать кровать
                                </div>
                            </label>
                            <label class="modal-extra-service__check-block">
                                <span class="checkbox checkbox--blue modal-extra-service__check">
                                    <input type="checkbox"  id="checkbox-extra-service2" />
                                    <label for="checkbox-extra-service2"></label>
                                </span>
                                <div class="modal-extra-service__check-title">
                                    Ранний заезд
                                </div>
                            </label>
                        </div>

                        <div class="modal-extra-service__column">
                            <label class="modal-extra-service__check-block">
                                <span class="checkbox checkbox--blue modal-extra-service__check">
                                    <input type="checkbox"  id="checkbox-extra-service3" />
                                    <label for="checkbox-extra-service3"></label>
                                </span>
                                <div class="modal-extra-service__check-title">
                                    Поздний выезд
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="modal-extra-service__attention">
                        Внимание! Сумма доп.услуг будет известна только после подтверждения
                    </div>
                </div>
            </div>
            <div class="modal-frame__btn-block">
                <button class="btn-blue modal-frame__btn-action">
                    Добавить услуги
                </button>
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