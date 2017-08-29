<?php include('header.php'); ?>
<div class="container">
  <div class="header-bar"></div>
  <div class="row">
    <div class="col-xs-6">
      <h1>
        <span class="bold">Подберите тур</span>
        <span class="thin">по своим желаниям</span>
      </h1>
    </div>
    <div class="col-xs-6">
      <div class="from-city">
        <img src="img/point-a.png" class="point-a" alt="">
        <label class="filter-label">
          Город вылета ?
        </label>
        <div class="filter-select-wrapper">
          <div class="filter-select">
            <div class="selected">Москва</div>
            <div class="select-items-wrapper">
              <div class="select-items">
                <div>Челябинск</div>
                <div>Ульяновск</div>
              </div>
            </div>
          </div>
        </div>
        
        <label class="check-group">
          <input class="icheck-input" type="radio" name="iCheck">
          <span>Запомнить выбор по умолчанию</span>
        </label>

      </div>
    </div>
  </div>

</div>

<div class="destination-box">
  <div class="container">
    <h2 class="destination-country-header">В какую страну летим?</h2>
    <img src="img/point-b.png" class="point-b" alt="">

    <div class="filter-select-wrapper destination-country-select">
      <div class="filter-select">
        <div class="selected">Москва</div>
        <div class="select-items-wrapper">
          <div class="select-items">
            <div>Челябинск</div>
            <div>Ульяновск</div>
          </div>
        </div>
      </div>
    </div>

    <button class="hide-detailed-version">Свернуть расширенную версию</button>
    
    <div class="wrapper">
      <div class="states-panel">
        <div class="row">
          <div class="col-xs-6">
            <div class="weather">
              <span class="title">Погода:</span>
              <span class="day">сегодня</span>
              <span class="temp">+18...+25 С</span>
              <span class="mounth">сентябрь</span>
              <span class="mounth-temp">+15...+20 С</span>
            </div>
          </div>
          <div class="col-xs-6">
            <div class="chars">
              <span class="map-markers"><img src="img/markers-icon.png" alt="">1332 км</span>
              <span class="fly-time"><img src="img/fly-time.png" alt="">1 ч. 40 мин</span>
              <span class="clocks"><img src="img/clocks-icon.png" alt="">0 ч. 0 мин</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-4">
          <div class="choice-block">
            <div class="title">
              Курорты (регионы)
            </div>
            <a href="#" class="dashed-link show-choosen"><span>Показать выбранные курорты</span> <span class="indicator">3</span></a>
            
            <div class="scrollable-lists-wrapper">
              <div class="scrollable-lists scroll scroll1">
                <div class="list-header">Популярные курорты</div>
                <ul>
                  <li><label class="check-group">Афины <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group">Дельфы <input class="icheck-input" type="checkbox"></label></li>
                  <li><label class="check-group open-collapse-list">Закинф <span class="custom-caret"></span> <input class="icheck-input" type="checkbox"></label></li>
                  <li>
                    <ul class="collapse-list">
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
        <div class="col-xs-8">
          
          <div class="choice-block">
            <div class="title">
              Отели (3322)
            </div>
            <div class="row">
              <div class="col-xs-4">
                <div class="slider-header">
                  <span>Рейтинг отеля, от</span>
                  <i class="indicator">?</i>
                </div>
                <div class="slider-wrapper">
                  <input type="text" id="raitingSlider">
                </div>
              </div>
              <div class="col-xs-3 class-slider-wrapper">
                <div class="slider-header">
                  <span>Класс отеля, от</span>
                  <i class="indicator">?</i>
                </div>
                <div class="slider-wrapper">
                  <input type="text" id="classSlider">
                </div>
              </div>  
              <div class="col-xs-5">
                <div class="slider-header">
                  <span>Тип отеля</span>
                  <i class="indicator">?</i>
                </div>
                <div class="filter-select-wrapper">
                  <div class="filter-select">
                    <div class="selected">Выбрано 2 варианта</div>
                    <div class="select-items-wrapper">
                      <div class="select-items">
                        <div>Челябинск</div>
                        <div>Ульяновск</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <table class="table-header">
              <tr>
                <th>Название отеля</th>
                <th>Класс</th>
                <th>Курорт</th>
                <th>Рейтинг</th>
              </tr>
            </table>
            
            <div class="row">
              <div class="col-xs-7">
                <div class="table-wrapper">
                  <div class="search-box">
                    <input type="text" placeholder="Быстрый поиск по отелям">
                    <button><img src="img/search-icon.png" alt=""></button>
                  </div>
                </div>
              </div>
              <div class="col-xs-5">
               <a href="#" class="dashed-link show-choosen-vars"><span>Показать выбранные</span> <span class="indicator">7</span></a>
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

<?php include('footer.php'); ?>
