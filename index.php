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
<!--   <input class="icheck-input" type="checkbox">
  <input class="icheck-input" type="checkbox" checked>
  <input class="icheck-input" type="radio" name="iCheck">
  <input class="icheck-input" type="radio" name="iCheck" checked>
 -->
</div>

<?php include('footer.php'); ?>
