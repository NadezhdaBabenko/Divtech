<?php include "./_inc/header.php" ?>
<div class="content">
    <div class="page">
        <div class="dashboard-page">
            <div class="dashboard-statistics">
                <div class="dashboard-statistics__title">
                     Общая статистика
                </div>
                <div class="dashboard-statistics__icon-block">
                    <svg class="dashboard-statistics__icon">
                        <use xlink:href='assets/images/icons.svg#icon-more'></use>
                    </svg>
                    <svg class="dashboard-statistics__icon">
                        <use xlink:href='assets/images/icons.svg#icon-reload'></use>
                    </svg>
                </div>
                <div class="dashboard-statistics__sort-row">
                    <div class="dashboard-statistics__sort">
                        <div class="radio-buttons dashboard-statistics__radio-buttons radio-buttons--blue">
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option-statistics1" id="radio-statistics1" checked />
                                <label class="radio-buttons__label" for="radio-statistics1">Сумма, тг</label>
                            </div>
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option-statistics1" id="radio-statistics2" />
                                <label class="radio-buttons__label" for="radio-statistics2">Кол-во, шт</label>
                            </div>
                        </div>
                        <label class="dashboard-statistics__check-block">
                            <span class="checkbox checkbox--blue">
                                <input type="checkbox"  id="checkbox3" />
                                <label for="checkbox3"></label>
                            </span>
                            <p class="dashboard-statistics__check">
                                показать в млн.
                            </p>
                        </label>
                    </div>
                    <div class="tabs-round">
                        <a class="tabs-round__item" href="#">2016</a>
                        <a class="tabs-round__item" href="#">2017</a>
                        <a class="tabs-round__item tabs-round__item--active" href="#">2018</a>
                    </div>
                </div>  

                <div class="dashboard-statistics__main-row">
                    <div class="statistics-info statistics-info--amount">
                        <div class="statistics-info__title">
                            Оборот,<br>  тек. мес./год
                        </div>
                        <div class="statistics-info__month">
                            0.58 <span class="statistics-info__month-unit">млн</span>
                        </div>
                        <div class="statistics-info__year">
                            6.06 млн
                        </div>
                    </div>

                    <div class="statistics-info statistics-info--percent">
                        <div class="statistics-info__title">
                            Доля возвратов авиа,<br> тек. мес./год
                        </div>
                        <div class="statistics-info__month-block">
                            <a href="#" class="statistics-info__month">
                                22.15 <span class="statistics-info__month-unit">%</span>
                            </a> 
                        </div>
                        <div class="statistics-info__year-block">
                            <a class="statistics-info__year">
                                18.42 %
                            </a>
                        </div>
                    </div>

                    <div class="statistics-info statistics-info--percent">
                        <div class="statistics-info__title">
                            Доля возвратов ЖД,<br> тек. мес./год
                        </div>
                        <div class="statistics-info__month-block">
                            <a href="#" class="statistics-info__month">
                                0.53 <span class="statistics-info__month-unit">%</span>
                            </a> 
                        </div>
                        <div class="statistics-info__year-block">
                            <a class="statistics-info__year">
                                3.95 %
                            </a>
                        </div>
                    </div>

                    <div class="statistics-info statistics-info--percent">
                        <div class="statistics-info__title">
                            Доля exchange авиа,<br> тек. мес./год
                        </div>
                        <div class="statistics-info__month-block">
                            <a href="#" class="statistics-info__month">
                                22.15 <span class="statistics-info__month-unit">%</span>
                            </a> 
                        </div>
                        <div class="statistics-info__year-block">
                            <a class="statistics-info__year">
                                18.42 %
                            </a>
                        </div>
                    </div>

                    <div class="statistics-info statistics-info--percent-black">
                        <div class="statistics-info__title">
                            Доля exchange авиа,<br> тек. мес./год
                        </div>
                        <div class="statistics-info__month">
                            22.15 <span class="statistics-info__month-unit">%</span>
                        </div>
                        <div class="statistics-info__year">
                            18.42 %
                        </div>
                    </div>
                </div>

                <div class="dashboard-statistics__diagram-row">
                    <div class="dashboard-statistics__diagram-block">
                        <div class="tabs-round dashboard-statistics__diagram-tabs">
                            <a class="tabs-round__item tabs-round__item--active" href="#">Компактный</a>
                            <a class="tabs-round__item" href="#">Графиком</a>
                            <a class="tabs-round__item" href="#">Таблицей</a>
                        </div>

                        <div class="dashboard-statistics__diagram-data">
                            <div class="dashboard-statistics__round-diagram">

                            </div>

                            <div class="dashboard-grid dashboard-statistics__grid dashboard-statistics__grid--with-border">
                                <table class="dashboard-grid__table">
                                    <tr class="dashboard-grid__head-row">
                                        <th class="dashboard-grid__title">Направление</th>
                                        <th class="dashboard-grid__title">сумма, тг</th>
                                        <th class="dashboard-grid__title">%</th>
                                    </tr>
                                    <tr class="dashboard-grid__row">
                                        <td class="dashboard-grid__cell">
                                            <a href="#" class="dashboard-grid__link">Внутренние</a>
                                        </td>
                                        <td class="dashboard-grid__cell">4.89 м</td>
                                        <td class="dashboard-grid__cell">63%</td>  
                                    </tr>
                                    <tr class="dashboard-grid__row">
                                        <td class="dashboard-grid__cell">
                                            <a href="#" class="dashboard-grid__link">Международные</a>
                                        </td>
                                        <td class="dashboard-grid__cell">3.19 м</td>
                                        <td class="dashboard-grid__cell">37%</td>  
                                    </tr>
                                </table> 
                            </div>
                        </div>

                        <div class="dashboard-statistics__diagram-data ">
                            <div class="dashboard-statistics__round-diagram">

                            </div>

                            <div class="dashboard-grid dashboard-statistics__grid dashboard-statistics__grid--with-border">
                                <table class="dashboard-grid__table">
                                    <tr class="dashboard-grid__head-row">
                                        <th class="dashboard-grid__title">GDS, статистика</th>
                                        <th class="dashboard-grid__title">сумма, тг</th>
                                        <th class="dashboard-grid__title">%</th>
                                    </tr>
                                    <tr class="dashboard-grid__row">
                                        <td class="dashboard-grid__cell">
                                            <a href="#" class="dashboard-grid__link">GDS</a>
                                        </td>
                                        <td class="dashboard-grid__cell">4.89 м</td>
                                        <td class="dashboard-grid__cell">63%</td>  
                                    </tr>
                                    <tr class="dashboard-grid__row">
                                        <td class="dashboard-grid__cell">
                                            <a href="#" class="dashboard-grid__link">NON GDS</a>
                                        </td>
                                        <td class="dashboard-grid__cell">3.19 м</td>
                                        <td class="dashboard-grid__cell">37%</td>  
                                    </tr>
                                </table> 
                            </div>
                        </div>

                        <div class="dashboard-statistics__diagram-data">
                            <div class="dashboard-statistics__round-diagram">

                            </div>

                            <div class="dashboard-grid dashboard-statistics__grid">
                                <table class="dashboard-grid__table">
                                    <tr class="dashboard-grid__head-row">
                                        <th class="dashboard-grid__title">Координаторы</th>
                                        <th class="dashboard-grid__title">сумма, тг</th>
                                        <th class="dashboard-grid__title">%</th>
                                    </tr>
                                    <tr class="dashboard-grid__row">
                                        <td class="dashboard-grid__cell">
                                            <a href="#" class="dashboard-grid__link">С координатором</a>
                                        </td>
                                        <td class="dashboard-grid__cell">4.89 м</td>
                                        <td class="dashboard-grid__cell">63%</td>  
                                    </tr>
                                    <tr class="dashboard-grid__row">
                                        <td class="dashboard-grid__cell">
                                            <a href="#" class="dashboard-grid__link">Без координатора</a>
                                        </td>
                                        <td class="dashboard-grid__cell">3.19 м</td>
                                        <td class="dashboard-grid__cell">37%</td>  
                                    </tr>
                                </table> 
                            </div>
                        </div>

                    </div>

                    <div class="dashboard-statistics__graph-block">
                        
                    </div>
                </div>
            </div>





            <div class="dashboard-block">
                <div class="dashboard-card dashboard-block__card">
                    <div class="dashboard-card__icon-block">
                        <svg class="dashboard-card__icon">
                            <use xlink:href='assets/images/icons.svg#icon-more'></use>
                        </svg>
                        <svg class="dashboard-card__icon">
                            <use xlink:href='assets/images/icons.svg#icon-reload'></use>
                        </svg>
                    </div>    
                    <a href="#" class="dashboard-card__title">Авиалинии, активность</a>

                    <div class="dashboard-card__sort">
                        <div class="radio-buttons dashboard-card__radio-buttons radio-buttons--blue">
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option" id="radio1" checked />
                                <label class="radio-buttons__label" for="radio1">Сумма, тг</label>
                            </div>
                            <div class="radio-buttons__blocks">
                                <input class="radio-buttons__input" type="radio" name="option" id="radio2" />
                                <label class="radio-buttons__label" for="radio2">Кол-во, шт</label>
                            </div>
                        </div>
                        <label class="dashboard-card__check-block">
                           <span class="checkbox checkbox--blue">
                                <input type="checkbox"  id="checkbox2" />
                                <label for="checkbox2"></label>
                            </span>
                            <p class="dashboard-card__check">
                                показать в млн.
                            </p>
                        </label>
                    </div>

                    <div class="dashboard-card__grid dashboard-grid">
                        <table class="dashboard-grid__table">
                            <tr class="dashboard-grid__head-row">
                                <th class="dashboard-grid__title"></th>
                                <th class="dashboard-grid__title">Месяц</th>
                                <th class="dashboard-grid__title">Год</th>
                                <th class="dashboard-grid__title">%</th>
                            </tr>
                             <tr class="dashboard-grid__row">
                                <td class="dashboard-grid__cell">
                                    <a href="#" class="dashboard-grid__link">Bek Air</a>
                                </td>
                                <td class="dashboard-grid__cell">0.9 м</td>
                                <td class="dashboard-grid__cell">0.12 м</td>
                                <td class="dashboard-grid__cell">2.38%</td>  
                             </tr>
                            <tr class="dashboard-grid__row">
                                <td class="dashboard-grid__cell">
                                    <a href="#" class="dashboard-grid__link">Air Astana</a>
                                </td>
                                <td class="dashboard-grid__cell">0.9 м</td>
                                <td class="dashboard-grid__cell">0.14 м</td>
                                <td class="dashboard-grid__cell">21.68%</td>  
                             </tr>
                            <tr class="dashboard-grid__row">
                                <td class="dashboard-grid__cell">
                                    <a href="#" class="dashboard-grid__link">S7 Airlines</a>
                                </td>
                                <td class="dashboard-grid__cell">230.90 м</td>
                                <td class="dashboard-grid__cell">10 992 230.90 м</td>
                                <td class="dashboard-grid__cell">100%</td>  
                             </tr>
                            <tr class="dashboard-grid__row">
                                <td class="dashboard-grid__cell">
                                    <a href="#" class="dashboard-grid__link">KLM</a>
                                </td>
                                <td class="dashboard-grid__cell">0.08 м</td>
                                <td class="dashboard-grid__cell">0.10 м</td>
                                <td class="dashboard-grid__cell">2.05%</td>  
                             </tr>
                            <tr class="dashboard-grid__row">
                                <td class="dashboard-grid__cell">
                                    <a href="#" class="dashboard-grid__link">Etihad Airways</a>
                                </td>
                                <td class="dashboard-grid__cell">230.90 м</td>
                                <td class="dashboard-grid__cell">10 992 230.90 м</td>
                                <td class="dashboard-grid__cell">100%</td>  
                             </tr>
                            <tr class="dashboard-grid__row">
                                <td class="dashboard-grid__cell">
                                    <a href="#" class="dashboard-grid__link">Другие</a>
                                </td>
                                <td class="dashboard-grid__cell">0.045 м</td>
                                <td class="dashboard-grid__cell">0.10 м</td>
                                <td class="dashboard-grid__cell">2.05%</td>  
                             </tr>
                        </table>
                    </div>
                </div>



                <div class="dashboard-block__card">
                    <div class="dashboard-card">
                        <div class="dashboard-card__icon-block">
                            <svg class="dashboard-card__icon">
                                <use xlink:href='assets/images/icons.svg#icon-more'></use>
                            </svg>
                            <svg class="dashboard-card__icon">
                                <use xlink:href='assets/images/icons.svg#icon-reload'></use>
                            </svg>
                        </div>
                        <div class="dashboard-card__title-block">
                            <a href="#" class="dashboard-card__title">Выставленные счета</a>
                            <div class="dashboard-card__number_of_bills">
                                <span class="notifier">2</span>
                            </div>
                        </div>


                        <div class="dashboard-card__sort">
                            <div class="radio-buttons dashboard-card__radio-buttons radio-buttons--blue">
                                <div class="radio-buttons__blocks">
                                    <input class="radio-buttons__input" type="radio" name="option2" id="radio-bills1" checked />
                                    <label class="radio-buttons__label" for="radio-bills1">Список, текущ.</label>
                                </div>
                                <div class="radio-buttons__blocks">
                                    <input class="radio-buttons__input" type="radio" name="option2" id="radio-bills2" />
                                    <label class="radio-buttons__label" for="radio-bills2">График, год</label>
                                </div>
                            </div>
                        </div>

                        <div class="dashboard-card__grid dashboard-grid">
                            <table class="dashboard-grid__table">
                                <tr class="dashboard-grid__head-row">
                                    <th class="dashboard-grid__title">Дата</th>
                                    <th class="dashboard-grid__title">Сумма/Ост-к</th>
                                    <th class="dashboard-grid__title">№ док.</th>
                                    <th class="dashboard-grid__title">СФ</th>
                                    <th class="dashboard-grid__title">Статус</th>
                                </tr>
                                 <tr class="dashboard-grid__row">
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__date">02.02.18</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__sum">520 480 ₸</div>
                                        <div class="dashboard-grid__remainder">520 480 ₸</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№149</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№1557</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div href="#" class="dashboard-grid__status">
                                            выставлен
                                        </div>
                                    </td>
                                 </tr>
                                 <tr class="dashboard-grid__row">
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__date">02.02.18</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__sum">39 909 ₸</div>
                                        <div class="dashboard-grid__remainder">39 909 ₸</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№149</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№1557</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div href="#" class="dashboard-grid__status">
                                            выставлен
                                        </div>
                                    </td>
                                 </tr>
                                 <tr class="dashboard-grid__row">
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__date">02.02.18</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__sum">520 480 ₸</div>
                                        <div class="dashboard-grid__remainder">0 ₸</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№149</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№1557</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div href="#" class="dashboard-grid__status dashboard-grid__status--paid">
                                            ОПЛАЧЕН
                                        </div>
                                    </td>
                                 </tr>
                                 <tr class="dashboard-grid__row">
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__date">02.02.18</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__sum">520 480 ₸</div>
                                        <div class="dashboard-grid__remainder">520 480 ₸</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№149</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№1557</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div href="#" class="dashboard-grid__status">
                                            выставлен
                                        </div>
                                    </td>
                                 </tr>
                                 <tr class="dashboard-grid__row">
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__date">02.02.18</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div class="dashboard-grid__sum">520 480 ₸</div>
                                        <div class="dashboard-grid__remainder">520 480 ₸</div>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№149</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <a href="#" class="dashboard-grid__doc">№1557</a>
                                    </td>
                                    <td class="dashboard-grid__cell">
                                        <div href="#" class="dashboard-grid__status">
                                            выставлен
                                        </div>
                                    </td>
                                 </tr>
                            </table>
                        </div>
                    </div>
                </div>



                <dashboard-last-corp-invoices></dashboard-last-corp-invoices><!-- вызов компоненты -->



            </div>
        </div>
    </div>

</div>



<?php include "./_inc/footer.php" ?>