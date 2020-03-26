
<?php include "./_inc/header.php" ?>

<div class="content">
    <div class="page">
        <div class="page__content">
            <div class="business-trip-steps">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs__item">
                        <a href="" class="breadcrumbs__link">Бронирование </a>
                    </li>
                    <li class="breadcrumbs__item">
                        <span class="breadcrumbs__link breadcrumbs__link--active">Создать командировку</span>
                    </li>
                </ul>
                <div class="business-trip-steps__title">
                    Создать командировку
                </div>

                <div class="business-trip-steps__main-block">
                    <div class="business-trip-steps__data-left">
                        <div class="business-trip-steps__title-text ">
                            Город командировки:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full business-trip-steps__input-half business-trip-steps__input-half--bigger" placeholder="Введите название или код города">
                        </div>
                            

                        <label class="business-trip-steps__one-way-block">
                            <span class="checkbox checkbox--blue">
                                <input type="checkbox"  id="checkbox2" />
                                <label for="checkbox2"></label>
                            </span>
                            <div class="business-trip-steps__one-way-text">
                                В одну сторону
                            </div>
                        </label>

                        <div class="business-trip-steps__text">
                            Даты командировки:
                        </div>

                        <div class="business-trip-steps__calendar">

                        </div>

                        <div class="business-trip-steps__text">
                            Клиент:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full input-full--filled business-trip-steps__input-half" placeholder="Введите название или код клиента">
                        </div>

                        <div class="business-trip-steps__text">
                            Список сотрудников:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full input-full--filled business-trip-steps__input-half">
                        </div>

                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full input-full--filled business-trip-steps__input-half">
                            <button class="btns-icon btns-icon--delete business-trip-steps__btn-delete">
                                <svg class="btns-icon__svg-delete">
                                    <use xlink:href="/assets/images/icons.svg#icon-remove"></use>
                                </svg>
                            </button>
                        </div>

                        <button class="btn-outlined-with-icon business-trip-steps__add-btn">
                            <svg class="btn-outlined-with-icon__svg">
                                <use xlink:href='/assets/images/icons.svg#icon-add-user'></use>
                            </svg>
                            Добавить сотрудника
                        </button>
                    </div>



                    <div class="business-trip-steps__data-right">
                        <div class="business-trip-steps__title-text ">
                            Дополнительная информация:
                        </div>
                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full" placeholder="Сумма командировки">
                        </div>

                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full" placeholder="Номер приказа">
                        </div>

                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full" placeholder="Цель">
                        </div>

                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full" placeholder="РО">
                        </div>

                        <div class="business-trip-steps__input-block">
                            <input type="text" class="input-full" placeholder="Кост центр">
                        </div>

                        <button class="btn-blue business-trip-steps__btn-next">
                            Следующий шаг
                        </button>
                    </div>
                </div><!-- business-trip__main-block -->
            </div><!-- /.business-trip-steps -->
        </div><!-- /.page__content -->
    </div><!-- /.page -->
</div><!-- /.content -->

<?php include "./_inc/footer.php" ?>