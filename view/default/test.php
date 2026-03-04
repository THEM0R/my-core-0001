<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<?php require_once 'head/head.php';?>
<!-- content -->

<!-- <iframe src="http://s8.staticnlcdn.com/video/0c865ebe05e14841/iframe" width="610" height="370" frameborder="0" allowfullscreen></iframe> -->

<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content -->
  <div id="add-forms">
    <form id="form_add" enctype="multipart/form-data" action="" method="POST">
      <!-- left block -->
      <div class="form-left-block">

      </div>
      <!-- dialog -->
      <!-- left block -->
      <!-- right block -->
      <div class="form-right-block">
        <!-- right block -->

        <div class="tabs">
          <p class="tabs-l">Описание: <span class="obiz">*</span></p>
          <p class="tabs-r"><textarea name="star" id="star"></textarea></p>
          <p class="tabs-errors star"></p>
        </div>
        <div class="clear-b"></div>

          <?php if(isset($_SESSION['test']['errors'])):?>
            <?php echo "<div class='tabs'>"; ?>
            <?php echo "<p class='tabs-errors'>"; ?>
            <?php echo $_SESSION['test']['errors'];?>
            <?php echo "</p>"; ?>
            <?php echo "</div>"; ?>
            <?php echo "<div class='clear-b'></div>"; ?>
            <?php unset($_SESSION['test']['errors']);?>
          <?php endif; ?>

        <input type="submit" class="btn" value="Добавить" id="submit_btn" name="add_test" ></td>

    </form>
  </div>
</div>
<?php require_once 'footer/script.php';?>
<script type="application/javascript">

</script>
<footer>
</footer>
<?php require_once 'footer/footer.php';?>