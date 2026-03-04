<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<?php require_once 'head/head.php';?>
<!-- content -->

<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content -->
  <div id="add-forms">
    <form id="form_add" enctype="multipart/form-data" action="" method="POST">
      <!-- left block -->
      <div class="form-left-block">

      </div>
      <!-- left block -->
      <!-- right block -->
      <div class="form-right-block">
        <!-- right block -->
        <div class="tabs">
          <p class="tabs-l">Название: <span class="obiz">*</span></p>
          <p class="tabs-r"><input id="name" type="text" name="name"></p>
          <p class='tabs-errors name'></p>
        </div>
        <div class="clear-b"></div>
        <?php if(isset($_SESSION['addstar']['errors'])):?>
          <?php echo "<div class='tabs'>"; ?>
          <?php echo "<p class='tabs-errors'>"; ?>
          <?php echo $_SESSION['addstar']['errors'];?>
          <?php echo "</p>"; ?>
          <?php echo "</div>"; ?>
          <?php echo "<div class='clear-b'></div>"; ?>
          <?php unset($_SESSION['addstar']['errors']);?>
        <?php endif; ?>
        <input type="submit" class="btn" value="Добавить" id="submit_btn" name="add_star" ></td>

    </form>
  </div>
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php';?>
<script type="application/javascript">

</script>
<footer>
</footer>
<?php require_once 'footer/footer.php';?>