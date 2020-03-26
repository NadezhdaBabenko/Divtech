<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Детали услуги
            </div>
            <div class="modal-frame__title-details">
                Стамбул, 24 мая, пт - 25 мая, сб
            </div>

            <div class="modal-frame__table">
                <div class="modal-details">
                    <div class="modal-details__title">
                        Проживание
                    </div>
                    <div class="modal-details__place">
                        Belmond Гранд Отель Европа
                    </div>
                    <div class="modal-details__adress">
                        Стамбул (Турция), ул. Пушкина дом Колотушкина 69
                    </div>
                    <div class="modal-details__main-info-row">
                        <div class="modal-details__main-info">
                            <div class="modal-details__day">
                                28 <span class="modal-details__date">апр, вт</span>
                            </div>
                            <div class="modal-details__time-block">
                                заезд с: <span class="modal-details__time">9:00</span>
                            </div>
                        </div>
                        <div class="modal-details__main-info">
                            <div class="modal-details__day">
                                30 <span class="modal-details__date">апр, вт</span>
                            </div>
                            <div class="modal-details__time-block">
                                Выезд до: <span class="modal-details__time-back">9:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-details__service-class">
                        Двуместный номер Стандарт
                    </div>
                    <div class="modal-details__contacts-block">
                        <div class="modal-details__contacts-phone">
                            тел.: <span>+ 7 707 505 01 47</span> 
                        </div>
                        <div class="modal-details__contacts-mail">
                            email: <span>chestnaya.n@gmail.com</span> 
                        </div>
                    </div>
                </div>
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