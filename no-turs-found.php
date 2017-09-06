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

    <div class="no-turs-found-panel">
      <img src="img/no-turs-icon.png" alt="">
      <span>Туры не найдены</span>
    </div>
    <p class="another-variants-introduction">
      По вашему запросу туров не найдено. Но наша система поиска нашла для вас альтернативные варианты по следующим параметрам <span>(синим обозначены измененные):</span>
    </p>

    <table class="another-variants">
      <tr>
        <th>Город вылета</th>
        <td>Москва</td>
      </tr>
      <tr>
        <th>Страна прилета</th>
        <td>Греция</td>
      </tr>
      <tr>
        <th>Курорт</th>
        <td>Любой</td>
      </tr>
      <tr>
        <th>Туристы</th>
        <td>1 взрослых</td>
      </tr>
      <tr>
        <th>Даты вылета</th>
        <td>17.08.2017 - 29.08.2017</td>
      </tr>
      <tr>
        <th>Количество ночей</th>
        <td>3-11</td>
      </tr>
      <tr>
        <th>Питание</th>
        <td>Любое</td>
      </tr>
      <tr>
        <th>Класс отелей</th>
        <td>0т 1 <i class="star"></i></td>
      </tr>
      <tr>
        <th>Рейтинг</th>
        <td>Любой</td>
      </tr>
      <tr>
        <th>Туроператоры</th>
        <td>Любой</td>
      </tr>
    </table>
    
    <div class="no-turs-controls">
      <a href="#" class="primary-btn">Показать</a>
      <a href="#" class="default-btn">Не надо</a>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
