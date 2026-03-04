<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<?php require_once 'head/head.php';?>
<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content -->
  <div id="content">
		<?php if(isset($_SESSION['adding'])):?>
			<?php echo $_SESSION['adding']; ?>
			<?php unset($_SESSION['adding']); ?>
		<?php endif; ?>
  	<a href="<?=DOMEN?>addfilm">Добавить фильм</a>
  	<div class="clear-b"></div>
  	<a href="<?=DOMEN?>addstar">Добавить Звезду</a>
  </div>
  <!-- content -->
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php';?>

<footer>
</footer>
<?php require_once 'footer/footer.php';?>