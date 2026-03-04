<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<div class="dds" style="display: none;">
<script src="<?=DOMEN . TEMPLATE?>script/js/jquery/jquery.1.11.0.min.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/jquery/jquery.cookie.js"></script>
<!-- fileuploader -->
<script src="<?=DOMEN . TEMPLATE?>script/fileuploader/jquery.fileuploader.min.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/easydropdown/jquery.easydropdown.min.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/chosen/chosen.jquery.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/chosen/chosen.proto.min.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/jquery.sumoselect.min.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/scrollfix.js"></script>
<!-- fileuploader -->
<!-- jquery.modal -->
<script src="<?=DOMEN . TEMPLATE?>script/jquery-modal/jquery.modal.js"></script>
<!-- jquery.modal -->
<script>

/* document ready */

// $('.modal').css('display','none');


</script>
<!-- скрипты -->
<script src="<?=DOMEN . TEMPLATE?>script/fileuploader/poster_load.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/script.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/sort.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/auth.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/auth.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/js/pagination.js"></script>
<script src="<?=DOMEN . TEMPLATE?>script/jquery-modal/modal.js"></script>

<?php if(isset($_SESSION['reg']['error'])): ?>
  <script>$(function() { $('#singup').modal({fadeDuration: 250,showClose: false}); });</script>
  <?php unset($_SESSION['reg']['error']); ?>
<?php endif; ?>

<?php if(isset($_SESSION['login']['error'])): ?>
  <script>$(function() { $('#singin').modal({fadeDuration: 250,showClose: false}); });</script>
  <?php unset($_SESSION['login']['error']); ?>
<?php endif; ?>
</div>