<?php defined("APP") or die ("Access denied");?>
<?php require_once 'head/head.php';?>
<div id="wrapper">
  <?php require_once 'head/header.php';?>
  <!-- content -->
  <section class="conntent view">
		<?php pr($Movie); ?>
	  <div class="articles">
			<?php foreach($Movie as $item): ?>
				<section class="left">
					<div class="poster">
					<?php if($item['poster']): ?>
						<img src="<?=DOMEN . 'upload/movies/poster/mini/'."{$item['poster']}"?>" alt="">
					<?php else: ?>
						<nav class="no-image">НЕТ ИЗОБРАЖЕНИЯ</nav>
					<?php endif; ?>
					</div>
					<div class="clear-b"></div>	
					
					<?php require_once 'rating.php'; ?>


				</section>

				<section class="right">
					<div class="tab">
						<h2><?=$item['name']?></h2>
						<h4><?=$item['alt_name']?></h4>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="left">Год:</p>
						<!-- href='<?=DOMEN?>film' -->
						<p class="right"><a id="year" value="<?=$item['years_id']?>" href='<?=DOMEN?>film' ><?=$item['year']?></a></p>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="left">Жанр:</p>
						<p class="right">
						<?php foreach ($janr as $janr ): ?>
							<a href="#"><?=$janr['name']?></a>
						<?php endforeach; ?>
						</p>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="left">Страна:</p>
						<p class="right">
						<?php foreach ($strana as $strana ): ?>
							<a href="#"><?=$strana['name']?></a>
						<?php endforeach; ?>
						</p>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="left">Бюджет:</p>
						<p class="right">
							<?=$item['budget']?>
						</p>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="left">Режиссер:</p>
						<p class="right">
							<?php foreach ($director as $dir ): ?>
								<a href="#"><?=$dir['name']?></a> 
							<?php endforeach; ?>
						</p>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="left">В ролях:</p>
						<p class="right">
							<?php foreach ($actor as $star ): ?>
								<a href="#"><?=$star['name']?></a> 
							<?php endforeach; ?>
						</p>
					</div>
					<div class="clear-b"></div>
					<div class="tab">
						<p class="screens">
							<?php foreach ($_Screens as $scren ): ?>
								<img src="<?=DOMEN.'upload/movies/screens/mini/'.$scren['name']?>">
							<?php endforeach; ?>
						</p>
					</div>
					<div class="clear-b"></div>
				</section>
				<div class="clear-b"></div>
				<br>
				<hr>
				<br>
				<?=nl2br(htmlspecialchars($item['description']));?>
			<?php endforeach; ?>
	  </div>


  </section>
  <!-- content -->
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php';?>
<script>
$(document).ready(function(){


$('#year').click(function(e) {
	
	var years = $('#year').attr('value');

  $.ajax({
    type: "POST",
    url: "<?=DOMEN?>sorting?year",
    data: {
    	years:years
    },
    dataType: 'json',
    // beforeSend: function(){
    //  $("#ers").text("загрузка...");
    // },
    success: function(response){
    	alert(response);
    }
  });


});

    // like and unlike click
    $(".like, .unlike").click(function(){
        var id = this.id;   // Getting Button id
        var split_id = id.split("_");

        var text = split_id[0];
        var postid = split_id[1];  // postid

        // Finding click type
        var type = 0;
        if(text == "like"){
            type = 1;
        }else{
            type = 0;
        }

        // AJAX Request
        $.ajax({
            url: '<?=DOMEN?>rating',
            type: 'post',
            data: {postid:postid,type:type},
            dataType: 'json',
            success: function(data){
                var likes = data['likes'];
                var unlikes = data['unlikes'];

                $("#likes_"+postid).text(likes);        // setting likes
                $("#unlikes_"+postid).text(unlikes);    // setting unlikes

                if(type == 1){
                    $("#like_"+postid).css("color","#ffa449");
                    $("#unlike_"+postid).css("color","lightseagreen");
                }

                if(type == 0){
                    $("#unlike_"+postid).css("color","#ffa449");
                    $("#like_"+postid).css("color","lightseagreen");
                }


            },
            error: function(data){
                alert("error : " + JSON.stringify(data));
            }
        });

    });


});
</script>
<footer>
</footer>
<?php require_once 'footer/footer.php';?>