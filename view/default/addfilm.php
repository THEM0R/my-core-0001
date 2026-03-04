<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<?php require_once 'head/head.php';?>
<!-- content -->
<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content --> 
  <form id="form_add" enctype="multipart/form-data" action="" method="POST">
    <div id="add-forms">
      <!-- left block -->
      <div class="form-left-block">
        <div class="adds-poster">
          <input type="file" name="poster[]" id="poster">
        </div>
        <div class="clear-b"></div>
        <div class="adds-screens">
          <input type="file" name="screens" id="screens">
        </div>
      </div>
      <!-- left block -->
      <!-- right block -->
      <div class="form-right-block">
        <!-- right block -->
        <div class="tabs">
          <p class="tabs-l">Название: <span class="obiz">*</span></p>
          <p class="tabs-r"><input id="name" type="text" name="name" value="<?=$_SESSION['movie']['name'];?>"></p>
          <p class='tabs-errors name'></p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">На латинице:</p>
          <p class="tabs-r"><input id="alt_name" type="text" name="alt_name" value="<?=$_SESSION['movie']['alt_name'];?>"></p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Год: <span class="obiz">*</span></p>
          <p class="tabs-r"><input id="year" placeholder="2007" type="text" name="year" value="<?=$_SESSION['movie']['year'];?>"></p>
          <p class="tabs-errors year"></p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Жанр: <span class="obiz">*</span></p>

          <p class="tabs-r">
            <select id="select-janres" data-placeholder="Добавить жанр" class="add" size="8" name="jenre[]" multiple>
              <?php foreach($janres as $janre): ?>
                  <?php pr($arr_countr); ?>
                  <?php if( in_array($janre['id'], $_SESSION['movie']['jenre']) ): ?>
                    <option type="checkbox" selected value="<?=$janre['id']?>">
                      <?=$janre['name']?>
                    </option>
                  <?php else: ?>
                    <option type="checkbox" value="<?=$janre['id']?>">
                      <?=$janre['name']?>                   
                    </option>
                  <?php endif; ?>                  
                <?php endforeach; ?>
            </select>
          </p>
          <p class="tabs-errors janres"></p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Страна: <span class="obiz">*</span></p>
          <p class="tabs-r">
            <select  id="select-countrys" data-placeholder="Виберите страну" class="add" size="8" name="country[]" multiple>
              <?php foreach($countrys as $country): ?>
                  <?php pr($arr_countr); ?>
                  <?php if( in_array($country['id'], $_SESSION['movie']['country']) ): ?>
                    <option type="checkbox" selected value="<?=$country['id']?>">
                      <?=$country['name']?>
                    </option>
                  <?php else: ?>
                    <option type="checkbox" value="<?=$country['id']?>">
                      <?=$country['name']?>                   
                    </option>
                  <?php endif; ?>                  
                <?php endforeach; ?>
            </select>
          </p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">бюджет:</span></p>
          <p class="tabs-r">
          <input type="text" name="budget" placeholder="€9 500 000" value="<?=$_SESSION['movie']['budget'];?>">
          </p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Режисер: <span class="obiz">*</span></p>
          <p class="tabs-r">
          <input type="text" name="director" placeholder="Фрэнк Дарабонт" value="<?=$_SESSION['movie']['director'];?>">
          </p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">В ролях: <span class="obiz">*</span></p>
          <p class="tabs-r">
          <textarea name="actor" placeholder="Том Хэнкс, Дэвид Морс, Майкл Кларк Дункан..." id="actor"></textarea></p>
          <p class="tabs-errors actor"></p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Описание:</span></p>
          <p class="tabs-r"><textarea name="description" id="description" placeholder="Пострадав в результате несчастного случая, богатый..."><?=$_SESSION['movie']['description'];?></textarea></p>
          <p class="tabs-errors description"></p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Трейлер RU:</span></p>
          <p class="tabs-r">
          <input type="text" name="trailer_ru" placeholder="https://www.youtube.com/watch?v=CCwnqcdiAsY"
          value="<?=$_SESSION['movie']['trailer_ru'];?>">
          </p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Трейлер UA:</p>
          <p class="tabs-r">
          <input type="text" name="trailer_ua" placeholder="https://www.youtube.com/watch?v=CCwnqcdiAsY"
          value="<?=$_SESSION['movie']['trailer_ua'];?>">
          </p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Плеер RU:</p>
          <p class="tabs-r">
          <input type="text" name="player_ru" placeholder="http://s8.staticnlcdn.com/video/0c865ebe05e14841/iframe"
          value="<?=$_SESSION['movie']['player_ru'];?>">
          </p>
        </div>
        <div class="clear-b"></div>
        <div class="tabs">
          <p class="tabs-l">Плеер UA:</p>
          <p class="tabs-r">
          <input type="text" name="player_ua" placeholder="http://s8.staticnlcdn.com/video/0c865ebe05e14841/iframe"
          value="<?=$_SESSION['movie']['player_ua'];?>">
          </p>
        </div>
          <?php if(isset($_SESSION['addfilm']['errors'])):?>
            <?php echo "<div class='tabs'>"; ?>
            <?php echo "<p class='tabs-errors'>"; ?>
            <?php echo $_SESSION['addfilm']['errors'];?>
            <?php echo "</p>"; ?>
            <?php echo "</div>"; ?>
            <?php echo "<div class='clear-b'></div>"; ?>
            <?php unset($_SESSION['addfilm']['errors']);?>
          <?php endif; ?>
      </div>
    </div>
    <section class="submit_block">
      <input type="submit" class="btn" value="Добавить" id="submit_btn" name="add">
    </section> 
  </form>
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php';?>
<?php require_once 'footer/footer.php';?>