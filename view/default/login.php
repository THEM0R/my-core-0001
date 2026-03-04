<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<?php if(!isset($_SESSION['auth']['user'])): ?>
  <a href="#singin">Вход</a>
  <a href="#singup">Регистрация</a>
<?php else: ?>
  <a href="#panel">
    <?=$_SESSION['auth']['user'];?>
  </a>
<?php endif; ?>