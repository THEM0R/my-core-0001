<?php defined("APP") or die ("Access denied");?>
<?php require_once 'head/head.php';?>
<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content -->
  <section class="conntent main">
  	<?php if(isset($_SESSION['result'])): ?>
  		<?php echo $_SESSION['result']; ?>
  		<?php unset($_SESSION['result']); ?>
  		<?php echo "<div class=\"clear-b\"></div>"; ?>
  	<?php endif; ?>
  	<!--  -->
  	Профиль
  	<?php pr($user); ?>
  	<!-- <?php foreach($user as $item): ?>

  	<?php endforeach; ?> -->
  </section>
  <!-- content -->
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php';?>
<script>
$(function(){
/**/
/**/
});
</script>
<footer>
</footer>
<?php require_once 'footer/footer.php';?>