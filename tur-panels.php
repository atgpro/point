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
    <div class="row row-filters-panel">
      <div class="col-xs-6 col-sm-4 col-md-3">
        <div class="filter-value">
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
                  <div class="from"><span>2</span> ночи </div>
                  <div class="to"><span>16</span> ночей</div>
                </div>
                <div class="range-slider-wrapper">
                  <input type="text" id="nightsSlider">
                </div>
                <div class="bottom-labels">
                  <div class="min-label"><span>3</span> дня</div>
                  <div class="max-label"><span>17</span> дней</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-4 col-md-3">
        <div class="filter-value humans">
          <img src="img/adult-icon.png" alt=""> <span class="val"><span class="adults">2</span> взрослых</span> <br>
          <img src="img/chlidren-icon.png" alt=""> <span class="val"><span class="children">2</span> ребенка (5 и 10 лет) </span>
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

    <div class="results-banners">
      <div class="found-amount">
        Найдено <b>60</b> туров <br>
        Цена от <b>27 311 Р</b>  
      </div>
      <div class="chocolate">
        <div class="icon">
          <img src="img/search-icon-white.png" alt="" class="seatch-icon">
        </div>
        <div class="text">
          Система поиска туров "Шоколад"<br>
          нашла еще <b>893</b> тура для <b>51</b> отеля
        </div>
        <button class="show-btn">Показать</button>
        <button class="dismiss-btn">Спасибо, не надо</button>
      </div>
    </div>

    <div class="results-filters-wrapper">

      <div class="results-filters">
        <div class="row">
          <div class="col-md-9">
            Сортировать:
            <div class="filter-select-wrapper results-sort-filter">
              <div class="filter-select">
                <div class="selected">От дешевых к дорогим</div>
                
                <div class="select-items-wrapper">
                  <!-- <div class="select-items">
                    <div>Челябинск</div>
                    <div>Ульяновск</div>
                  </div> -->
                  <div class="scrollable-lists-wrapper">
                    <div class="scrollable-lists scroll scroll1">
                      <ul>
                        <li><label class="check-group">От дешевых к дорогим <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">От дорогих к дешевым <input class="icheck-input" type="checkbox"></label></li>
                        <li><label class="check-group">По рейтингу отеля  <input class="icheck-input" type="checkbox"></label></li>
                      </ul>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="result-views">
              <a href="tur-panels.php" class="active"><img src="img/res-view-1.png" alt=""></a>
              <a href="tur-cards.php" class=""><img src="img/res-view-2.png" alt=""></a>
              <a href="tur-short-panels.php"><img src="img/res-view-3.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="results-grid-wrapper">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours"  data-t-box="#toursBox1">Показать туры (3)</button>
            </div>

          </div>
          <!-- data-t-box="#toursBox1" -->
          <?php
            $id = 'toursBox1';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox2">Показать туры (3)</button>
            </div>

          </div>
          <!-- data-t-box="#toursBox2" -->
          <?php
            $id = 'toursBox2';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox3">Показать туры (3)</button>
            </div>

          </div>

          <!-- data-t-box="#toursBox3" -->
          <?php
            $id = 'toursBox3';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
      
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox4">Показать туры (3)</button>
            </div>

          </div>

          <!-- data-t-box="#toursBox4" -->
          <?php
            $id = 'toursBox4';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox5">Показать туры (3)</button>
            </div>

          </div>

          <!-- data-t-box="#toursBox5" -->
          <?php
            $id = 'toursBox5';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox6">Показать туры (3)</button>
            </div>

          </div>

          <!-- data-t-box="#toursBox6" -->
          <?php
            $id = 'toursBox6';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
      
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox7">Показать туры (3)</button>
            </div>

          </div>


          <!-- data-t-box="#toursBox7" -->
          <?php
            $id = 'toursBox7';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox8">Показать туры (3)</button>
            </div>

          </div>

          <!-- data-t-box="#toursBox8" -->
          <?php
            $id = 'toursBox8';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-12">
          <div class="result-item result-type-panel" data-type="panel">
            <div class="header">
              <div class="raiting low">
                Рейтинг<br>2,8
              </div>
              <ul class="stars">
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li></li>
              </ul>
              <div class="title">АЛЬПИНА 2*</div>
              <button class="toggle-hidden-menu">
              </button>
            </div>
            <div class="body">
              <div class="params">
                <div class="left">
                  Страна: <span>Греция</span>
                </div>
                <div class="right">
                  Курорт: <span>Афины</span>
                </div>
              </div>
              <div class="content">
                <div class="left">
                  <div class="slider">
                    <div class="main-preview"><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    <div class="gallery">
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                      <div><a href="img/result-item-1.png"><img src="img/result-item-1.png" alt=""></a></div>
                    </div>
                  </div>
                </div>
                <div class="right">
                  <p class="tour-description">
                    Приятный двухзвездочный отель рядом с поляной Азау. Простые, но уютно обставленные номера, хороший сервис, неплохой ресторан. Хороший вариант для семейного отдыха с небольшими затратами.
                  </p>
                </div>
              </div>
              <div class="hidden-menu">
                <a href="#">Об отеле</a>
                <a href="#">На карте</a>
                <a href="#">Отзывы</a>
              </div>
            </div>

            <div class="footer">
              <div class="price">
                <span>Цена от:</span> <strong>27 311</strong> <img src="img/result-price.png" alt="">
              </div>
              <div class="price-description">
                за номер для: <span class="param-1">2 взрослых</span>
                <span class="param-2">2 детей</span>
              </div>

              <div class="socials">
                <a href="#"><img src="img/vk.png" alt=""></a>
                <a href="#"><img src="img/ok.png" alt=""></a>
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/g+.png" alt=""></a>
                <a href="#"><img src="img/mailru.png" alt=""></a>
              </div>
              <button class="btn-show-tours" data-t-box="#toursBox9">Показать туры (3)</button>
            </div>

          </div>

          <!-- data-t-box="#toursBox9" -->
          <?php
            $id = 'toursBox9';
            $class = '';
            include('tours-box.php');
          ?>
        </div>
      </div>

      <a href="#" class="show-more-results">
        Показать еще
      </a>
    </div>

  </div>
</div>



<?php include('footer.php'); ?>
