<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<?php require_once 'head/head.php';?>
<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content -->
  <form id="form_add" enctype="multipart/form-data" action="" method="POST">
    <!-- add-forms -->
    <div id="add-forms">
      <?php foreach($Movie as $item): ?>
        <!-- left block -->
        <div class="form-left-block">
          <div class="adds-poster">
            <?php
            $arrayPoster = array();
            array_walk_recursive($PosterArray, function($value, $key) use (&$arrayPoster){
                $arrayPoster[] = $value; // тут возвращаете как вам хочется
            });
            $poster = array();         
              foreach($arrayPoster as $file) {
                if(is_dir($file))
                  continue;
                $poster[] = array(
                  "name" => $file,
                  "type" => FileUploader::mime_content_type('upload/movies/poster/norm/' . $file),
                  // "size" => filesize('upload/' . $file),
                  "file" => DOMEN . 'upload/movies/poster/norm/' . $file,
                  // "data" => array(
                  //   "url" => 'upload/' . $file
                  // )
                );
              }
            $poster = json_encode($poster);
            ?>
            <input data-fileuploader-files='<?php echo $poster;?>' type="file" name="poster[]" id="poster">
          </div>
          <div class="clear-b"></div>
          <div class="adds-screens">
            <?php
            $arrayScreens = array();
            array_walk_recursive($ScreensArray, function($value, $key) use (&$arrayScreens){
                $arrayScreens[] = $value; // тут возвращаете как вам хочется
            });
            $screens = array();         
              foreach($arrayScreens as $file) {
                if(is_dir($file))
                  continue;
                $screens[] = array(
                  "name" => $file,
                  "type" => FileUploader::mime_content_type('upload/movies/screens/norm/' . $file),
                  // "size" => filesize('upload/' . $file),
                  "file" => DOMEN . 'upload/movies/screens/norm/' . $file,
                  // "data" => array(
                  //   "url" => 'upload/' . $file
                  // )
                );
              }
            $screens = json_encode($screens);
            ?>
            <input data-fileuploader-files='<?php echo $screens;?>' type="file" name="screens" id="screens">
          </div>
        </div>
        <!-- left block -->
        <!-- right block -->
        <div class="form-right-block">
          <div class="tabs">
            <p class="tabs-l">Название: <span class="obiz">*</span></p>
            <p class="tabs-r">
              <input id="name" type="text" name="name" value="<?=$item['name']?>">
            </p>
            <p class='tabs-errors name'></p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">На латинице:</p>
            <p class="tabs-r">
              <input id="alt_name" type="text" name="alt_name" value="<?=$item['alt_name']?>">
            </p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">Год: <span class="obiz">*</span></p>
            <p class="tabs-r">
              <input id="year" placeholder="2007" type="text" name="year" value="<?=$item['year']?>">
            </p>
            <p class="tabs-errors year"></p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">Жанр: <span class="obiz">*</span></p>
            <p class="tabs-r">
              <select id="select-janres" data-placeholder="Добавить жанр" class="add" size="8" name="jenre[]" multiple>
                <?php foreach($janres as $janre): ?>
                  <?php pr($arr_countr); ?>
                  <?php if( in_array($janre['name'], $arr_janre) ): ?>
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
                  <?php if( in_array($country['name'], $arr_countr) ): ?>
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
            <p class="tabs-l">Режисер: <span class="obiz">*</span></p>
            <p class="tabs-r">
            <input type="text" id="director" name="director" placeholder="Фрэнк Дарабонт" 
            value="<?php echo $Directors;?>">
            </p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">В ролях: <span class="obiz">*</span></p>
            <p class="tabs-r">
            <textarea name="actor" placeholder="Том Хэнкс, Дэвид Морс, Майкл Кларк Дункан..." 
            id="actor"><?php echo $stars;?></textarea>
            </p>
            <p class="tabs-errors actor"></p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">Описание:</p>
            <p class="tabs-r"><textarea name="description" id="description"><?=$item['description']?></textarea></p>
            <p class="tabs-errors description"></p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">Трейлер:</p>
            <p class="tabs-r">
            <input type="text" name="trailer"  placeholder="https://www.youtube.com/watch?v=CCwnqcdiAsY" value="<?=$item['trailer']?>">
            </p>
          </div>
          <div class="clear-b"></div>
          <div class="tabs">
            <p class="tabs-l">Плеер:</p>
            <p class="tabs-r">
            <input type="text" name="player" placeholder="http://s8.staticnlcdn.com/video/0c865ebe05e14841/iframe" value="<?=$item['player']?>">
            </p>
          </div> 

            <?php if(isset($_SESSION['edit']['errors'])):?>
              <?php echo "<div class='tabs'>"; ?>
              <?php echo "<p class='tabs-errors'>"; ?>
              <?php echo $_SESSION['edit']['errors'];?>
              <?php echo "</p>"; ?>
              <?php echo "</div>"; ?>
              <?php echo "<div class='clear-b'></div>"; ?>
              <?php unset($_SESSION['edit']['errors']);?>
            <?php endif; ?>
        </div>
        <!-- right block -->
      <?php endforeach; ?>   
    </div>
    <!-- add-forms -->
    <section class="submit_block">
      <input type="submit" class="btn" value="Сохранить" id="submit_btn" name="save">
    </section>  
  </form>
  <!-- wrapper // -->
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php';?>
<?php require_once 'footer/footer.php';?>