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
      <div class="col-sm-3">
        <div class="filter-value">
          <img src="img/calendar-icon.png" alt=""> <span>С 18.08.2017 &nbsp;&nbsp;По 25.08.2017</span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="filter-value">
          <img src="img/moon-icon.png" alt=""> <span>На 3 - 11  ночей</span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="filter-value humans">
          <img src="img/adult-icon.png" alt=""> <span>2 взрослых</span> <br>
          <img src="img/chlidren-icon.png" alt=""> <span>2 ребенка (5 и 10 лет) </span>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="filter-additional-params">
          <img src="img/add-filter-params.png" alt=""> <span>Дополнительные фильтры</span>
          <button class="open-additional-params">Развернуть</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="results-block">
  <div class="container">
    <h2 class="results-title">Результаты подбора:</h2>
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
                <img src="img/markers-colored-icon.png" alt="">
              </div>
              <span>1332 км</span>
            </div>
            <div class="item">
              <div class="img-wrapper">
                <img src="img/fly-time-colored-icon.png" alt="">
              </div>
              <span>1 ч. 40 мин</span>
            </div>
            <div class="item">
              <div class="img-wrapper">
                <img src="img/clocks-colored-icon.png" alt="">
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
            <div class="filter-select-wrapper">
              <div class="filter-select">
                <div class="selected">От дешевых к дорогим</div>
                <div class="select-items-wrapper">
                  <div class="select-items">
                    <div>Челябинск</div>
                    <div>Ульяновск</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="result-views">
              <a href="tur-panels.php" class=""><img src="img/res-view-1.png" alt=""></a>
              <a href="tur-cards.php" class=""><img src="img/res-view-2.png" alt=""></a>
              <a href="tur-short-panels.php" class="active"><img src="img/res-view-3.png" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="results-grid-wrapper">
      <div class="row">
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
        <div class="col-sm-12">
          <div class="result-item result-type-panel short-panel">
            <div class="header">
              <div class="raiting">
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
              <button class="btn-show-tours">Показать туры (3)</button>
            </div>

          </div>
        </div>
      </div>

      <a href="#" class="show-more-results">
        Показать еще
      </a>
    </div>

  </div>
</div>



<?php include('footer.php'); ?>
