<?php defined("APP") or die ("Access denied");?>
<!-- login reg modal -->
<?php if(!isset($_SESSION['auth']['user'])): ?>
<div id="singin" class="modal-auth modal">
  <!-- singin -->
  <div class="modal-form">
    <div class="modal-header">
      <h3 class="title">Вход</h3>
      <p class="close" title="Закрить"></p>
    </div>
    <form class="form" id="form_login" action="<?=DOMEN?>singin" method="POST">
      <div class="tab">
        <input type="text" id="login_login" name="login" placeholder="Логин">
        <span class="login_login_error error"></span>
      </div>
      <div class="tab">
        <input type="password" id="login_password" name="password" placeholder="Пароль">
        <a href="#loss" class="losspass">Напомнить</a>
        <span class="password_login_error error"></span>
      </div>
      <?php if(isset($_SESSION['login']['error'])): ?>
        <?php echo "<div class='tab'>".$_SESSION['login']['error']."</div>"; ?>
      <?php endif; ?>
      <div class="tab">
        <input disabled type="checkbox" id="save" name="save">
        <label for="save" class="save">Запомнить меня ?</label>
      </div>

      <div class="tab">
        <input type="submit" id="singin" name="login_btn" value="Войти">
      </div>
    </form>
    <div class="tab">
      <p class="singup">
        <a href="#singup">Регистрация</a> нового аккаунта
      </p>
    </div>
  </div>
  <div class="modal-social">
    <div class="tab">
      <span class="title">Авторизация через социальные сети</span>
      <p class="links">
        <a href="#" class="facebook"><i class="icon-facebook"></i>Facebook</a>
        <a href="#" class="twitter"><i class="icon-twitter-bird"></i>Twitter</a>
        <a href="#" class="google"><i class="icon-gplus"></i>Google</a>
      </p>
    </div>
  </div>
  <!-- singin -->
</div>
<div id="singup" class="modal-auth modal">
  <!-- singup -->
  <div class="modal-form">
    <div class="modal-header">
      <h3 class="title">Регистрация</h3>
      <p class="close" title="Закрить"></p>
    </div>
    <form class="form" id="form_reg" action="<?=DOMEN?>singup" method="POST">
      <div class="tab">
        <input type="text" id="login_reg" name="login" placeholder="Логин">
        <span class="login_reg_error error"></span>
      </div>
      <div class="tab">
        <input type="text" id="email_reg" name="email" placeholder="email">
        <span class="email_reg_error error"></span>
      </div>
      <div class="tab">
        <input type="password" id="password_reg" name="password" placeholder="Пароль">
        <span class="password_reg_error error"></span>
      </div>
      <?php if(isset($_SESSION['reg']['error'])): ?>
        <?php echo "<div class='tab'>".$_SESSION['reg']['error']."</div>"; ?>
      <?php endif; ?>
      <div class="tab">
        <input type="submit" id="singup" name="singup" value="Зарегистрироватся">
      </div>      
    </form>
    <div class="tab">
      <p class="singup">
        <a href="#singin">Вход</a> в существующий аккаунт
      </p>
    </div>
  </div>
  <div class="modal-social">
    <div class="tab">
      <span class="title">Авторизация через социальные сети</span>
      <p class="links">
        <a href="#" class="facebook"><i class="icon-facebook"></i>Facebook</a>
        <a href="#" class="twitter"><i class="icon-twitter-bird"></i>Twitter</a>
        <a href="#" class="google"><i class="icon-gplus"></i>Google</a>
      </p>
    </div>
  </div>
  <!-- singup -->
</div>

<div id="loss" class="modal-auth modal">
  <!-- loss -->
  <div class="modal-form">
    <div class="modal-header">
      <h3 class="title">Восстановление</h3>
      <p class="close" title="Закрить"></p>
    </div>
    <form class="form" id="" action="<?=DOMEN?>loss" method="POST">
      <div class="tab">
        <input type="text" name="email" placeholder="email">
        <span class="error">Введите пароль!!!</span>
      </div>
      <div class="tab">
        <input type="submit" id="loss" name="loss_btn" value="Восстановить">
      </div>
    </form>
    <div class="tab">
      <p class="singup">
        Назад к <a href="#singin"> входу</a> в существующий аккаунт
      </p>
    </div>
  </div>
  <div class="modal-social">
    <div class="tab">
      <span class="title">Авторизация через социальные сети</span>
      <p class="links">
        <a href="#" class="facebook"><i class="icon-facebook"></i>Facebook</a>
        <a href="#" class="twitter"><i class="icon-twitter-bird"></i>Twitter</a>
        <a href="#" class="google"><i class="icon-gplus"></i>Google</a>
      </p>
    </div>
  </div>
  <!-- loss -->
</div>
<?php else: ?>
<div id="panel" class="panel modal">
   <!-- <a href=""><?=$_SESSION['auth']['group'];?></a> -->
  <?php if($_SESSION['auth']['group'] != 0): ?>
    <span>Група: Администратори</span>
    <div class="clear-b"></div>
    <a href="<?=DOMEN?>adding">добавить</a>
    <div class="clear-b"></div>
  <?php else: ?>
    <span>Група: Пользователи</span>
    <div class="clear-b"></div>
  <?php endif; ?>
    <a href="<?=DOMEN?>profil">Профиль</a>
    <div class="clear-b"></div>
    <a href="<?=DOMEN?>logout">вийти</a>
</div>
<?php endif; ?>