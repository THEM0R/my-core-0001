<?php defined("APP") or die ("доступ не разрешён(Access denied)");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<meta name="title" content="<?=$title?>">
	<meta name="keywords" content="<?=$keywords?>">
	<meta name="description" content="<?=$description?>">
	<!-- favicon -->
	<link rel="icon" type="image/png" href="<?=DOMEN . TEMPLATE?>script/img/favicon.png">
	<!-- стили -->
	<style>
		body > .modal{display: none;}
		/*select#country{display: none;}*/
	</style>
	<!-- fontello -->
  <link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/fontello/css/fontello.css">
  <!-- fontello -->
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/auth.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/top.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/message.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/sumoselect.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/style.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/article.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/view.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/add-form.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/fl-l.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/sort.css">
	<!-- jquery-ui -->
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/jquery-ui/jquery-ui.structure.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/jquery-ui/jquery-ui.theme.css">
	<!-- jquery-ui -->

	<!-- jquery.modal -->
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/jquery-modal/jquery.modal.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/jquery-modal/jquery.modal.style.css">
	<!-- jquery.modal -->

	<!-- ajax -->
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/jquery.jgrowl.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/normalize.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/fileuploader/jquery.fileuploader.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/chosen/chosen.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/login-reg-form.css">
	
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/easydropdown/themes/easydropdown.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/fileuploader/jquery.fileuploader-theme-thumbnails.css">
	<link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/fileuploader/jquery.fileuploader-theme-thumbnails-2.css">
	<!-- <link rel="stylesheet" href="<?=DOMEN . TEMPLATE?>script/css/main.css"> -->
	<!-- ajax -->
	<!-- стили -->
	<!--  -->
</head>
<body>