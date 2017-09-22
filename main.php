<?php include('header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h1>
        <span class="bold">Подберите тур</span>
        <span class="thin">по своим желаниям</span>
      </h1>
    </div>
    <div class="col-sm-6">
      <div class="from-city">
        <!-- <img src="img/point-a.png" class="point-a" alt=""> -->
        <div class="marker-point point-a">
          <div class='pin'><span>A</span></div>
        </div>
        <label class="filter-label">
          Город вылета ?
        </label>
        <div class="filter-select-wrapper">
          <div class="filter-select">
            <div class="selected">Москва</div>
            <div class="select-items-wrapper">
              <!-- <div class="select-items">
                <div>Челябинск</div>
                <div>Ульяновск</div>
              </div> -->
              <div class="scrollable-lists-wrapper">
              <div class="scrollable-lists scroll scroll1">
                <div class="list-header">Популярные направления</div>
                <ul>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                </ul>
                <div class="list-header">Все направления</div>
                <ul>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                </ul>
              </div>
            </div>

            </div>
          </div>
        </div>
        
        <label class="check-group">
          <input class="icheck-input" type="checkbox" name="iCheck">
          <span>Запомнить выбор по умолчанию</span>
        </label>

      </div>
    </div>
  </div>

</div>

<div class="destination-box">
  <div class="container">
    <h2 class="destination-country-header">
      <div class="marker-point">
        <div class='pin'><span>B</span></div>
      </div>
      <span>В какую страну летим?</span>
    </h2>
    <!-- <img src="img/point-b.png" class="point-b" alt=""> -->

    <div class="filter-select-wrapper destination-country-select radio-select-wrapper">
      <div class="filter-select">
        <div class="selected">Россия</div>
        <div class="select-items-wrapper">
          <!-- <div class="select-items">
            <div>Челябинск</div>
            <div>Ульяновск</div>
          </div> -->
          <div class="scrollable-lists-wrapper">
            <div class="scrollable-lists scroll scroll1">
              <div class="list-header">Популярные направления</div>
              <ul>
                <li><label class="check-group">Россия <input value="Россия" class="icheck-input" checked="" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Тунис <input value="Тунис" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Греция <input value="Греция" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Кипр <input value="Кипр" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Кипр <input value="Кипр" class="icheck-input" name="destination-country" type="radio"></label></li>
              </ul>
              <div class="list-header">Все направления</div>
              <ul>
                <li><label class="check-group">Россия <input value="Россия" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Тунис <input value="Тунис" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Греция <input value="Греция" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Кипр <input value="Кипр" class="icheck-input" name="destination-country" type="radio"></label></li>
                <li><label class="check-group">Кипр <input value="Кипр" class="icheck-input" name="destination-country" type="radio"></label></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button class="hide-detailed-version open-btn">Свернуть расширенную версию</button>
    
    <div class="wrapper">
      <div class="states-panel">
        <div class="row">
          <div class="col-sm-6">
            <div class="weather">
              <span class="title">Погода:</span>
              <span class="day">сегодня</span>
              <span class="temp">+18...+25 С</span>
              <div class="weather-metrix">
                <span class="mounth">сентябрь</span>
                <span class="mounth-temp">+15...+20 С</span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="chars">
              <span class="map-markers"><img src="img/markers-icon.png" alt="">1332 км</span>
              <span class="fly-time"><img src="img/fly-time.png" alt="">1 ч. 40 мин</span>
              <span class="clocks"><img src="img/clocks-icon.png" alt="">0 ч. 0 мин</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row first-choise-row">
        <div class="col-md-4">
          <div class="choice-block resort-block">
            <div class="title">
              Курорты (регионы)
            </div>
            <a href="#" class="dashed-link show-choosen"><span>Показать выбранные курорты</span> <span class="indicator">0</span></a>
            
            <div class="scrollable-lists-wrapper">
              <div class="scrollable-lists scroll scroll1">
                <div class="list-header">Популярные курорты</div>
                <ul>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group open-collapse-list" data-list="#list1">Закинф <span class="custom-caret"></span> 
                  <!-- <input class="icheck-input" type="checkbox"> -->
                  <span class="border"></span></label></li>
                  <li>
                    <ul class="collapse-list" id="list1">
                      <li><label class="check-group">Аргасси <input class="icheck-input" type="checkbox"></label></li>
                      <li><label class="check-group">Василикос <input class="icheck-input" type="checkbox"></label></li>
                      <li><label class="check-group">Лаганас <input class="icheck-input" type="checkbox"></label></li>
                      <li><label class="check-group">Цивили <input class="icheck-input" type="checkbox"></label></li>
                    </ul>
                  </li>
                </ul>

                <div class="list-header">Остальные курорты</div>
                <ul>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Закинф <input class="icheck-input" type="checkbox"></label></li>
                  <li>
                    <ul class="collapse-list">
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
        <div class="col-md-8">
          
          <div class="choice-block hotels-block">
            <div class="title">
              Отели (3322)
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="slider-header">
                  <span>Рейтинг отеля, от</span>
                  <i class="indicator" title="Подсказка для поля - Рейтинг отеля" data-toggle="tooltip" data-placement="bottom" data-trigger="click">?</i>
                </div>
                <div class="slider-wrapper">
                  <input type="text" id="raitingSlider">
                </div>
              </div>
              <div class="col-sm-3 class-slider-wrapper">
                <div class="slider-header">
                  <span>Класс отеля, от</span>
                  <i class="indicator" title="Подсказка для поля - Касса отеля" data-toggle="tooltip" data-placement="bottom" data-trigger="click">?</i>
                </div>
                <div class="slider-wrapper">
                  <input type="text" id="classSlider">
                </div>
              </div>  
              <div class="col-sm-5">
                <div class="slider-header">
                  <span>Тип отеля</span>
                  <i class="indicator" title="Подсказка для поля - Тип отеля" data-toggle="tooltip" data-placement="bottom" data-trigger="click">?</i>
                </div>
                <div class="filter-select-wrapper hotel-type-wrapper choosen-filter">
                  <div class="filter-select">
                    <div class="selected">Выбрано 2 варианта</div>

                    <div class="select-items-wrapper">
                      <div class="scrollable-lists-wrapper">
                        <div class="scrollable-lists scroll scroll1">
                          <div class="list-header">Популярные курорты</div>
                          <ul>
                            <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Аргасси <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Василикос <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Лаганас <input class="icheck-input" type="checkbox"></label></li>
                            <li><label class="check-group">Цивили <input class="icheck-input" type="checkbox"></label></li>
                          </ul>
                        </div>
                      </div>
                    </div>


                  </div>
                  <i class="block-select"></i>
                </div>
              </div>
            </div>
            
            <div class="hotel-horisontal-table">

            <div class="hotel-horisontal-table-content">

            <table class="table-header">
              <tr>
                <th>Название отеля</th>
                <th>Класс</th>
                <th>Курорт</th>
                <th>Рейтинг</th>
              </tr>
            </table>
            
            <div class="row search-box-wrapper">
              <div class="col-md-7">
                <div class="table-wrapper">
                  <div class="search-box">
                    <input type="text" placeholder="Быстрый поиск по отелям">
                    <button><img src="img/search-icon.png" alt=""></button>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
               <a href="#" class="dashed-link show-choosen-vars"><span>Показать выбранные</span> <span class="indicator">0</span></a>
              </div>
            </div>
            
            <div class="scrollable-table-box">
              <div class="scrollable-table-wrapper scroll1">
                <table class="scrollable-table">
                  <tr>
                    <td>
                      <label class="check-group">
                        <input class="icheck-input" type="checkbox" name="iCheck">
                        <span>ABSOLUTE BLISS IMEROVIGLI SUITES 4*</span>
                      </label>
                    </td>
                    <td>5</td>
                    <td>Афины</td>
                    <td>4.3</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="check-group">
                        <input class="icheck-input" type="checkbox" name="iCheck">
                        <span>12 MONTHS LUXURY RESORT 5*</span>
                      </label>
                    </td>
                    <td>5</td>
                    <td>Афины</td>
                    <td>4.3</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="check-group">
                        <input class="icheck-input" type="checkbox" name="iCheck">
                        <span>12 MONTHS LUXURY RESORT 5*</span>
                      </label>
                    </td>
                    <td>5</td>
                    <td>Афины</td>
                    <td>4.3</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="check-group">
                        <input class="icheck-input" type="checkbox" name="iCheck">
                        <span>12 MONTHS LUXURY RESORT 5*</span>
                      </label>
                    </td>
                    <td>5</td>
                    <td>Афины</td>
                    <td>4.3</td>
                  </tr>
                  <tr>
                    <td>
                      <label class="check-group">
                        <input class="icheck-input" type="checkbox" name="iCheck">
                        <span>12 MONTHS LUXURY RESORT 5*</span>
                      </label>
                    </td>
                    <td>5</td>
                    <td>Афины</td>
                    <td>4.3</td>
                  </tr>
                </table>
              </div>
              <button class="button-open-table">Развернуть таблицу</button>
            </div>
            
            </div>
            </div>


          </div>
        </div>
      </div>
    </div>

      <div class="row second-choice-row">
        <div class="col-sm-4 col-md-3">
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
          <div class="choice-block nights-block for-detailed-version">
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
        <div class="col-sm-4 col-md-3">
          <div class="choice-block nights-block for-short-version">
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
                <input type="text" id="nightsShortSlider">
              </div>
              <div class="bottom-labels">
                <div class="min-label"><span>3 дня</span></div>
                <div class="max-label"><span>17 дней</span></div>
              </div>
            </div>
          </div>

          <div class="choice-block tourists-block for-detailed-version">
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
                      <div class="input"><span>1й ребенок</span><span class="num-step"><input type="text" class="numeric"><span class="num-up"></span><span class="num-down"></span></span></div>
                      <div class="input"><span>2й ребенок</span><span class="num-step"><input type="text" class="numeric"><span class="num-up"></span><span class="num-down"></span></span></div>
                      <div class="input"><span>3й ребенок</span><span class="num-step"><input type="text" class="numeric"><span class="num-up"></span><span class="num-down"></span></span></div>
                      <button class="save">Сохранить</button>
                    </div>
                </div>
              </div>
            </div>

            <div class="title">
              <img src="img/food-icon.png" class="title-icon">
              <span>Тип питания</span>
            </div>
            
            <div class="filter-select-wrapper food-type-filter">
              <div class="filter-select">
                <div class="selected">Выбрано 2 варианта</div>
                <div class="select-items-wrapper">
                  <!-- <div class="select-items">
                    <div>Челябинск</div>
                    <div>Ульяновск</div>
                  </div> -->
                  <div class="scrollable-lists-wrapper">
                    <div class="scrollable-lists scroll scroll1">
                      <ul>
                        <li><label class="check-group">Любой <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Без питания <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Только завтрак <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Завтрак и ужин<input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Завтрак, <br>обед и ужин <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Все включено <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">Все включено <br>ультра <input class="icheck-input" type="checkbox"></label></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
        <div class="col-sm-4 col-md-3">
          <div class="choice-block tourists-block for-short-version">
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
                  <input type="text" id="adultShortSlider">
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
                  <input type="text" id="childrenShortSlider">
                  <div class="age-change-panel">
                      <div class="title">Выберите возраст</div>
                      <div class="input"><span>1й ребенок</span><span class="num-step"><input type="text" class="numeric"><span class="num-up"></span><span class="num-down"></span></span></div>
                      <div class="input"><span>2й ребенок</span><span class="num-step"><input type="text" class="numeric"><span class="num-up"></span><span class="num-down"></span></span></div>
                      <div class="input"><span>3й ребенок</span><span class="num-step"><input type="text" class="numeric"><span class="num-up"></span><span class="num-down"></span></span></div>
                      <button class="save">Сохранить</button>
                    </div>
                </div>
              </div>
            </div>

          </div>


          <div class="choice-block cost-block for-detailed-version">
            <div class="title">
              <img src="img/money-icon.png" class="title-icon">
              <span>Стоимость тура</span>
            </div>
            <div class="currencies-wrapper">
              <span class="main-label">Валюта</span>
              <label class="check-group">
                <input class="icheck-input" type="radio" name="iCheck">
                <span class="rub-currency"></span>
              </label>
              <label class="check-group">
                <input class="icheck-input" type="radio" name="iCheck">
                <span class="dollar-currency"></span>
              </label>
              <label class="check-group">
                <input class="icheck-input" type="radio" name="iCheck">
                <span class="euro-currency"></span>
              </label>
            </div>

            <div class="range-slider-wrapper">
              <div class="top-labels">
                <div class="from">От</div>
                <div class="to">До</div>
              </div>

              <!-- <div class="left-label">30 000</div> -->
              <input type="text" class="left-label numeric" value="30000">
              <!-- <div class="right-label">40 0000</div> -->
              <input type="text" class="right-label numeric" value="40000">
              <input type="text" id="pricesSlider">

              <div class="bottom-labels">
                <div class="min-label">0</div>
                <div class="max-label">50 0000</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-3">
          <button class="pick-up-btn for-short-version">
            Подобрать
          </button>
          <div class="choice-block operators-block for-detailed-version">
            <div class="title">
              <img src="img/ship-icon.png" class="title-icon">
              <span>Туроператоры</span>
            </div>
            <a href="#" class="dashed-link show-choosen"><span>Показать выбранные</span> <span class="indicator">0</span></a>
            
            <div class="scrollable-lists-wrapper tur-operators">
              <div class="scrollable-lists scroll scroll1">
                <ul>
                  <li><label class="check-group">Acti Tour <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Adonis <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Ambotis Holidays <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Anex Tour <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Art Tour <input class="icheck-input" type="checkbox"></label></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="pick-up-btn for-detailed-version">
        Подобрать
      </button>
    
  </div>
</div>


<?php include('footer.php'); ?>
