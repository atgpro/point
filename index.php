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
    </div>

    
  </div>
</div>

<?php include('footer.php'); ?>
