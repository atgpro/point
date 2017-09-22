<?php include('header.php'); ?>
<div class="container">
  <div class="header-bar"></div>
  <div class="row">
    <div class="col-md-6">
      <h1>
        <span class="bold">Подберите тур</span>
        <span class="thin">по своим желаниям</span>
      </h1>
    </div>
  </div>
  <div class="inner-page-wrapper">
    <a href="index.php" class="btn-back-to-prev-step">Вернуться к странице подбора</a>
    <div class="filters-panel-wrapper">
      <div class="row row-filters-panel">
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="filter-value filter-value-date">
            <img src="img/calendar-icon.png" alt=""> <span class="val">С <span class="from">25.08.2017</span>&nbsp;&nbsp;<span class="to">По 18.08.2017</span>
            <div class="hidden-change">
              <div class="choice-block date-block">
                <div class="title">
                  <img src="img/calendar-icon.png" class="title-icon">
                  <span>Дата вылета?</span>
                </div>

                <div class="calendar-buttons">
                  <div class="labels">
                    <label>C</label>
                    <label>По</label>
                  </div>
                  <div class="buttons">
                    <button class="from">25.08.2017</button>
                    <button class="to">18.08.2017</button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="filter-value">
            <img src="img/moon-icon.png" alt=""> <span class="val">На <span class="from">6</span> - <span class="to">16</span>  ночей</span>
            <div class="hidden-change">
              <div class="choice-block nights-block">
                <div class="title">
                  <img src="img/moon-icon.png" class="title-icon">
                  <span>На сколько ночей?</span>
                </div>
                <div class="nights-wrapper">
                  <div class="top-labels">
                    <div class="from"><span>2 ночи</span></div>
                    <div class="to"><span>16 ночей</span></div>
                  </div>
                  <div class="range-slider-wrapper">
                    <input type="text" id="nightsSlider">
                  </div>
                  <div class="bottom-labels">
                    <div class="min-label"><span>3 дня</span></div>
                    <div class="max-label"><span>17 дней</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="filter-value humans">
            <img src="img/adult-icon.png" alt=""> <span class="val"><span class="adults">2</span> взрослых</span> <br>
            <img src="img/chlidren-icon.png" class="hide-on-mobile-icon" alt=""> <span class="val"><span class="children">2</span> ребенка (5 и 10 лет) </span>
            <div class="hidden-change">
              <div class="choice-block tourists-block">
                <div class="title">
                  <img src="img/fly-icon.png" class="title-icon">
                  <span>Туристы</span>
                </div>

                <div class="adult-childrens-sliders-wrapper">
                  <div class="adult-slider-wrapper">
                    <div class="icon-wrapper">
                      <img src="img/adult-icon.png" class="icon" alt="">
                      <div>
                        <label for="">Взрослые</label>
                        (от 12 лет)
                      </div>
                    </div>
                    <div class="slider-wrapper">
                      <input type="text" id="adultSlider">
                    </div>
                  </div>

                  <div class="children-slider-wrapper">
                    <div class="icon-wrapper">
                      <img src="img/chlidren-icon.png" class="icon" alt="">
                      <div>
                        <label for="">Дети</label>
                        (0 - 11 лет)
                      </div>
                    </div>
                    <div class="slider-wrapper">
                      <input type="text" id="childrenSlider">
                      <div class="age-change-panel">
                        <div class="title">Выберите возраст</div>
                        <div class="input"><span>1й ребенок</span><input type="text" class="numeric"></div>
                        <div class="input"><span>2й ребенок</span><input type="text" class="numeric"></div>
                        <div class="input"><span>3й ребенок</span><input type="text" class="numeric"></div>
                        <button class="save">Сохранить</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="filter-additional-params">
            <img src="img/add-filter-params.png" alt=""> <span>Дополнительные фильтры</span>
            <button class="open-additional-params">Развернуть</button>
            <div class="hidden-menu">
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Курорт:</div>
                Афины, Василикос, и <a href="#">еще 6</a>
                <div class="select-items-wrapper">
                  <div class="scrollable-lists-wrapper">
                    <div class="scrollable-lists scroll scroll1">
                      <div class="list-header">Популярные курорты</div>
                      <ul>
                        <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group open-collapse-list" data-list="#list1">Закинф <span class="custom-caret"></span> <input class="icheck-input" type="checkbox"> <span class="border"></span></label></li>
                        <li>
                          <ul class="collapse-list" id="list1">
                            <li><label class="check-group">Аргасси <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Василикос <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Лаганас <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Цивили <input class="icheck-input" type="checkbox"></label></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Тип отеля:</div>
                SPA-услуги <br>
                (оздоровительный отдых)
              </div>

              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Рейтинг отеля:</div>
                Не важен
              </div>
              
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Класс отеля:</div>
                1 <span class="star">★</span>, 2 <span class="star">★</span>
              </div>
              
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Тип питанияля:</div>
                BB (только завтраки) 
              </div>
              
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Отель:</div>
                Любой 
              </div>
              
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Стоимость:</div>
                30 000 - 70 000 р.
              </div>
              
              <div class="item">
                <button class="edit-btn"></button>
                <div class="title">Туроператор:</div>
                Анекс Тур<br>
                Пегас Туристик и <a href="#">еще 5</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="results-block">
  <div class="container">
    <h2 class="results-title">Результаты подбора:</h2>
    <div class="results-content-wrapper">
        <div class="results-content">
          <div class="white-info">
            <div class="points">
                
              <div class="marker-point point-a">
                <div class='pin'><span>A</span></div> <span class="country">Москва</span>
              </div>
              <div class="marker-point">
                <div class='pin'><span>B</span></div> <span class="country">Греция</span>
              </div>
            </div>
            <div class="weather">
              <span class="title">Погода:</span>
              <span class="values">
                <span class="period">сегодня</span> +18...+25 С 
                <span class="second-value">
                  <span class="period">сентябрь</span> +15...+20 С
                </span>
              </span>
            </div>
            <div class="chars">
              <div class="item">
                <div class="img-wrapper">
                  <img src="img/markers-colored-icon.png" class="main-color-icon" alt="">
                </div>
                <span>1332 км</span>
              </div>
              <div class="item">
                <div class="img-wrapper">
                  <img src="img/fly-time-colored-icon.png" class="main-color-icon" alt="">
                </div>
                <span>1 ч. 40 мин</span>
              </div>
              <div class="item">
                <div class="img-wrapper">
                  <img src="img/clocks-colored-icon.png" class="main-color-icon" alt="">
                </div>
                <span>0 ч. 0 мин</span>
              </div>
            </div>
          </div>
          <div class="progress-wrapper">
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar"
              aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                100% Выполнено
              </div>
            </div>
          </div>
        </div>
      </div>

    <div class="no-turs-found-panel">
      <img src="img/no-turs-icon.png" alt="">
      <span>Туры не найдены</span>
    </div>
    <p class="another-variants-introduction">
      По вашему запросу туров не найдено. Но наша система поиска нашла для вас альтернативные варианты по следующим параметрам <span>(синим обозначены измененные):</span>
    </p>

    <div class="another-variants">
      <div class="left">
        <div class="th">Город вылета</div>
        <div class="th">Страна прилета</div>
        <div class="th">Курорт</div>
        <div class="th">Туристы</div>
        <div class="th">Даты вылета</div>
        <div class="th">Количество ночей</div>
        <div class="th">Питание</div>
        <div class="th">Класс отелей</div>
        <div class="th">Рейтинг</div>
        <div class="th">Туроператоры</div>
      </div>
      <div class="right">
        <div class="td">Москва</div>
        <div class="td">Греция</div>
        <div class="td"><span>Любой</span></div>
        <div class="td"><span>1 взрослых</span></div>
        <div class="td"><span>17.08.2017 - 29.08.2017</span></div>
        <div class="td">3-11</div>
        <div class="td"><span>Любое</span></div>
        <div class="td"><span>0т 1 ★</span></div>
        <div class="td">Любой</div>
        <div class="td"><span>Любой</span></div>
      </div>
    </div>
    
    <div class="no-turs-controls">
      <a href="#" class="primary-btn">Показать</a>
      <a href="#" class="default-btn">Спасибо, не надо</a>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
