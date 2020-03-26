<?php include "./_inc/header.php" ?>
<div class="content">
    
    <?php require '_orders.php' ?>

    <div class="modal-window-page">
        <div class="modal-frame">
            <div class="modal-frame__title">
                Документы
            </div>
            <div class="modal-frame__table">
                <div class="business-doc">
                    <button class="btn-main-with-icon btn-main-with-icon--s business-doc__btn">
                        <svg class="btn-main-with-icon__svg">
                            <use xlink:href='/assets/images/icons.svg#icon-approve'></use>
                        </svg>
                        Добавить счет от поставщика
                    </button>

                    <button class="btn-main-with-icon btn-main-with-icon--s business-doc__btn">
                        <svg class="btn-main-with-icon__svg">
                            <use xlink:href='/assets/images/icons.svg#icon-approve'></use>
                        </svg>
                        Добавить прочие документы
                    </button>

                    <div class="input-with-btn input-with-btn--blue business-doc__input">
                        <input class="input-full" type="text" placeholder="Email">
                        <button class="input-with-btn__btn">
                            <svg class="input-with-btn__svg">
                                <use xlink:href='assets/images/icons.svg#icon-mail'></use>
                            </svg>
                        </button>
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