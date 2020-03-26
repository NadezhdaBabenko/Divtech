
<?php include "./_inc/header.php" ?>

<div class="content">
    <div class="page">
        <div class="page__content">
            <div class="business-trip-steps">
                <div class="business-trip-steps__title">
                    Данные направления
                </div>

                <div class="business-trip-steps__main-block">
                    <div class="business-trip-steps__data-left">
                        <div class="business-trip-steps__text">
                            Город выбытия:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full business-trip-steps__input-half">
                        </div>

                        <div class="business-trip-steps__title-text">
                            Город командировки:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full business-trip-steps__input-half business-trip-steps__input-half--bigger-blue">
                        </div>

                        <div class="business-trip-steps__text">
                            Город прибытия:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full business-trip-steps__input-half">
                        </div>
                        
                        <div class="business-trip-steps__text">
                            Диапазон времени прибытия в командировку:
                        </div>
                        <div class="business-trip-steps__range-slider">
                        </div>

                        <div class="business-trip-steps__text">
                            Диапазон времени выбытия с командировки:
                        </div>
                        <div class="business-trip-steps__range-slider">
                        </div>
                    </div>


                    <div class="business-trip-steps__data-right">
                        <div class="business-trip-steps__trip-type-block">
                            <label class="business-trip-steps__trip-type">
                                <span class="checkbox checkbox--blue">
                                    <input type="checkbox"  id="checkbox1" />
                                    <label for="checkbox1"></label>
                                </span>
                                <div class="business-trip-steps__service-block">
                                    <svg class="business-trip-steps__svg-service">
                                        <use xlink:href="/assets/images/icons.svg#icon-plane"></use>
                                    </svg>
                                    <div class="business-trip-steps__trip-type-text">
                                        Авиарейсы
                                    </div>
                                </div>
                            </label>
                            <div class="business-trip-steps__input">
                                <input type="text" class="input-full" placeholder="Сумма">
                            </div>

                            <div class="radio-buttons radio-buttons--blue business-trip-steps__radio">
                                <div class="radio-buttons__blocks">
                                    <input class="radio-buttons__input" type="radio" name="option" id="radio1" checked="">
                                    <label class="radio-buttons__label" for="radio1">Эконом</label>
                                </div>
                                <div class="radio-buttons__blocks">
                                    <input class="radio-buttons__input" type="radio" name="option" id="radio2">
                                    <label class="radio-buttons__label" for="radio2">Бизнес</label>
                                </div>
                            </div>
                        </div>  
                        
                        <div class="business-trip-steps__trip-type-block">
                            <label class="business-trip-steps__trip-type">
                                <span class="checkbox checkbox--blue">
                                    <input type="checkbox"  id="checkbox2" />
                                    <label for="checkbox2"></label>
                                </span>
                                <div class="business-trip-steps__service-block">
                                    <svg class="business-trip-steps__svg-service">
                                        <use xlink:href="/assets/images/icons.svg#icon-train"></use>
                                    </svg>
                                    <div class="business-trip-steps__trip-type-text">
                                        ЖД поезда
                                    </div>
                                </div>
                            </label>
                            <div class="business-trip-steps__input">
                                <input type="text" class="input-full" placeholder="Сумма">
                            </div>
                        </div>  
                        
                        <div class="business-trip-steps__trip-type-block">
                            <label class="business-trip-steps__trip-type">
                                <span class="checkbox checkbox--blue">
                                    <input type="checkbox"  id="checkbox3" />
                                    <label for="checkbox3"></label>
                                </span>
                                <div class="business-trip-steps__service-block">
                                    <svg class="business-trip-steps__svg-service">
                                        <use xlink:href="/assets/images/icons.svg#icon-hotel"></use>
                                    </svg>
                                    <div class="business-trip-steps__trip-type-text">
                                        Отели
                                    </div>
                                </div>
                            </label>
                            <div class="business-trip-steps__input">
                                <input type="text" class="input-full" placeholder="Сумма">
                            </div>
                        </div>

                        <button class="btn-blue business-trip-steps__btn-search">
                            Поиск вариантов
                        </button>
                    </div>
                </div><!-- business-trip__main-block -->
            </div><!-- /.business-trip-steps -->
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->

<?php include "./_inc/footer.php" ?>