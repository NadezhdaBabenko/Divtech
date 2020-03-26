<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Детали маршрута
            </div>
            <div class="modal-frame__title-details">
                Стамбул - Алматы, 24 мая, пт 
            </div>

            <div class="modal-frame__table">
                <div class="modal-details">
                    <div class="modal-details__main-block">
                        <div class="modal-details__logo">
                        
                        </div>
                        <div class="modal-details__general-info-block">
                            <div class="modal-details__train-direction-block">
                                <div class="modal-details__place">
                                    Алматы 2 - Нурлы-жол
                                </div>
                                <svg class="modal-details__er-svg">
                                    <use xlink:href='/assets/images/icons.svg#label-er'></use>
                                </svg>
                            </div>
                            <div class="modal-details__train-num">
                                003P 
                            </div>
                        </div>
                    </div>
                    <div class="modal-details__extra-block">
                        <div class="modal-details__extra-class">
                            КТЖ, Стандарт
                        </div>
                        <div class="modal-details__extra-place-block">
                            Вагон: <span class="modal-details__extra-place">№02 КУПЕ 2Д</span>
                        </div>
                        <div class="modal-details__extra-place-block">
                            Места: <span class="modal-details__extra-place">№14 - №16</span>
                        </div>
                    </div>

                    <div class="modal-details__trip-date-block">
                        <div class="modal-details__trip-date">
                            <div class="modal-details__train-time">
                                01:10
                            </div>
                            <div class="modal-details__city">
                                АСТАНА
                            </div>
                            <div class="modal-details__date">
                                27 апр, пн
                            </div>
                        </div>
                        
                        <div class="modal-details__trip-date">
                            <div class="modal-details__total-time">
                                8 ч 10 мин
                            </div>   
                        </div>

                        <div class="modal-details__trip-date">
                            <div class="modal-details__train-time">
                                06:45
                            </div>
                            <div class="modal-details__city">
                                АЛМАТЫ-2
                            </div>
                            <div class="modal-details__date">
                                28 мая, вс
                            </div>
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