<?php defined("APP") or die("Access denied"); ?>
<?php require_once 'head/head.php'; ?>
<div id="wrapper">
	<?php require_once 'head/header.php'; ?>
	<!-- content -->
	<section class="conntent main">
		<?php if (isset($_SESSION['result'])): ?>
			<?php echo $_SESSION['result']; ?>
			<?php unset($_SESSION['result']); ?>
			<?php echo "<div class=\"clear-b\"></div>"; ?>
		<?php endif; ?>

		<?php if (isset($TopMovies)): ?>

			<section class="top top_move">
				<p class="block-title">Самые популярные материалы</p>
				<?php foreach ($TopMovies as $item): ?>
					<?php echo "<article>"; ?>
					<?php if ($item['poster'] == ''): ?>
						<?php echo "<div class='poster'>" ?>
						<?php echo "<a class='no-image' href='" . DOMEN . $item['category_url'] . "/" . $item['url'] . "'>Нет Постера</a>" ?>
						<?php echo "</div>" ?>
					<?php else: ?>
						<?php echo "<div class='poster'>" ?>
						<?php echo "<a href='" . DOMEN . $item['category_url'] . "/" . $item['url'] . "'>" ?>
						<?php echo "<img src='" . DOMEN . "upload/movies/poster/mini/" . $item['poster'] . "'>" ?>
						<?php echo "</a>" ?>
						<?php echo "</div>" ?>
					<?php endif; ?>
					<?php echo "<div class='info'>" ?>
					<?php echo "<p class='title'>" ?>
					<?php echo "<a href='" . DOMEN . $item['category_url'] . "/" . $item['url'] . "'>{$item['name']}</a><br>"; ?>
					<?php echo "</p>"; ?>
					<?php echo "<p class='data'>" ?>
					<?php echo $item['year'] . " ● " . $item['country'] /*." ● ". $item['janre']*/ ; ?>
					<?php echo "</p>"; ?>
					<?php echo "</div>" ?>
					<?php echo "</article>" ?>
				<?php endforeach; ?>
			</section>

		<?php endif; ?>

		<section class="sort">
			<form id="form-sort" action="" method="POST">
				<div class="left">
					<?php if (isset($countrys)): ?>
					<select name="country" id="country" class="select_class" multiple>
						<?php foreach ($countrys as $country): ?>
							<?php if (in_array($country['id'], $_SESSION['country_array'])): ?>
								<option type="checkbox" selected value="<?= $country['id'] ?>">
									<?= $country['name'] ?>
								</option>
							<?php else: ?>
								<option type="checkbox" value="<?= $country['id'] ?>">
									<?= $country['name'] ?>
								</option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
					<?php endif; ?>
					<?php if (isset($janres)): ?>
					<select name="janre" id="janre" class="select_class" multiple>
						<?php foreach ($janres as $janre): ?>
							<?php if (in_array($janre['id'], $_SESSION['janre_array'])): ?>
								<option type="checkbox" selected value="<?= $janre['id'] ?>">
									<?= $janre['name'] ?>
								</option>
							<?php else: ?>
								<option type="checkbox" value="<?= $janre['id'] ?>">
									<?= $janre['name'] ?>
								</option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
					<?php endif; ?>
					<?php if (isset($years)): ?>
					<select name="hod" id="hod" class="select_class" multiple>
						<?php foreach ($years as $year): ?>
							<?php if (in_array($year['id'], $_SESSION['year_array'])): ?>
								<option type="checkbox" selected value="<?= $year['id'] ?>">
									<?= $year['name'] ?>
								</option>
							<?php else: ?>
								<option type="checkbox" value="<?= $year['id'] ?>">
									<?= $year['name'] ?>
								</option>
							<?php endif; ?>
						<?php endforeach; ?>
					</select>
					<?php endif; ?>
				</div>
				<div class="right">
					<select name="sort" id="sort" class="select_class">
						<?php if (isset($_SESSION['sort'])): ?>
							<option value="id">В тренде</option>

							<?php if ($_SESSION['sort'] == 'data'): ?>
								<option selected value="data">Дате добавления</option>
							<?php else: ?>
								<option value="data">Дате добавления</option>
							<?php endif; ?>

							<?php if ($_SESSION['sort'] == 'view'): ?>
								<option selected value="views">Просмотрам</option>
							<?php else: ?>
								<option value="views">Просмотрам</option>
							<?php endif; ?>

							<?php if ($_SESSION['sort'] == 'likes'): ?>
								<option selected value="likes">Рейтингу</option>
							<?php else: ?>
								<option value="likes">Рейтингу</option>
							<?php endif; ?>

						<?php else: ?>
							<option value="id">Сортировать по</option>
							<option value="views">Просмотрам</option>
							<option value="data">Дате добавления</option>
							<option value="likes">Рейтингу</option>
						<?php endif; ?>
					</select>
				</div>
				<!-- <button type="reset" id="reset">reset</button> -->
			</form>
		</section>
		<?php if (isset($all_Movies)): ?>
			<section class="articles">
				<?php foreach ($all_Movies as $item): ?>
					<?php echo "<article>"; ?>
					<?php if ($item['poster'] == ''): ?>
						<?php echo "<div class='poster'>" ?>
						<?php echo "<a class='no-image' href='" . DOMEN . $item['category_url'] . "/" . $item['url'] . "'>Нет Постера</a>" ?>
						<?php echo "</div>" ?>
					<?php else: ?>
						<?php echo "<div class='poster'>" ?>
						<?php echo "<a href='" . DOMEN . $item['category_url'] . "/" . $item['url'] . "'>" ?>
						<?php echo "<img src='" . DOMEN . "upload/movies/poster/mini/" . $item['poster'] . "'>" ?>
						<?php echo "</a>" ?>
						<?php echo "</div>" ?>
					<?php endif; ?>
					<?php echo "<div class='info'>" ?>
					<?php echo "<p class='title'>" ?>
					<?php echo "<a href='" . DOMEN . $item['category_url'] . "/" . $item['url'] . "'>{$item['name']}</a><br>"; ?>
					<?php echo "</p>"; ?>
					<?php echo "<p class='data'>" ?>
					<?php echo $item['year'] . " ● " . $item['country'] /*." ● ". $item['janre']*/ ; ?>
					<?php echo "</p>"; ?>
					<?php echo "</div>" ?>
					<?php echo "</article>" ?>

				<?php endforeach; ?>
			</section>
			<?php if ($count_pages > 1): ?>
				<div class="clear-b"></div>
				<div id="pagination" class="pagination"><?= $pagination ?></div>
			<?php endif; ?>
		<?php else: ?>
			<section class="articles">
				<p>Здесь товаров нет!</p>
			</section>
		<?php endif; ?>








	</section>
	<!-- content -->
</div>
<?php require_once 'modal.php'; ?>
<?php require_once 'footer/script.php'; ?>
<script>
	$(function () {
		/**/
		$('#hod').SumoSelect({ placeholder: 'Год' });
		$('#janre').SumoSelect({ placeholder: 'Жанр' });

		// $('#country').SumoSelect({
		// 	search: true, 
		// 	searchText: 'Искать..',
		// 	placeholder: 'Страна',
		// 	// selectAll: true,
		// 	// okCancelInMulti: true,
		// 	triggerChangeCombined: true,
		// 	forceCustomRendering: true
		// });

		$('#sort').SumoSelect();

		$('#reset').on('click', function () {

			// var num = $('option').length;
			// for(var i=0; i<num; i++){
			//   $("#hod")[0].sumo.unSelectItem(i);
			// }

			// var num2 = $('option').length;
			// for(var i=0; i<num2; i++){
			//   $("#janre")[0].sumo.unSelectItem(i);
			// }

			var num3 = $('option').length;
			for (var i = 0; i < num3; i++) {
				$("#country")[0].sumo.unSelectItem(i);
			}

		});




		var form = $('#form-sort');

		var sort = $('#sort');
		var country = $('#country');
		var janre = $('#janre');
		var year = $('#hod');


		form.change(function () {

			var sorting = sort.val();
			var countrys = country.val();
			var janres = janre.val();
			var years = year.val();

			$.ajax({
				type: "POST",
				url: "<?= DOMEN ?>sorting?sort",
				data: {
					sort: sorting,
					country: countrys,
					janres: janres,
					years: years,
					page: "<?= $page ?>"
				},
				dataType: 'json',
				// beforeSend: function(){
				//  $("#ers").text("загрузка...");
				// },
				success: function (response) {

					if (response.pagination != '') {
						$('.pagination').show().html(response.pagination);
					} else {
						$('.pagination').hide();
					}

					if (response.movie != '') {
						// alert(response.movie);
						$('.articles').html('');
						for (value in response.movie) {
							$('.articles').append('<article>' +
								'<div class="poster">' +
								'<a href="http://ajax.load/' + response.movie[value]['category_url'] + '/' + response.movie[value]['url'] + '">' +
								'<img src="upload/movies/poster/mini/' + response.movie[value]['poster'] + '">' +
								'</a></div><div class="info">' +
								'<p class="title">' +
								'<a href="http://ajax.load/' + response.movie[value]['category_url'] + '/' + response.movie[value]['url'] + '">' + response.movie[value]['name'] + '</a>' +
								'<br></p>' +
								'<p class="data">' + response.movie[value]['year'] + ' ● ' + response.movie[value]['country'] +
								'</div>' +
								'</article>');
						}
					} else {
						$('.articles').html('Матерялов нет!!!');
					}
				}
			});

		});

		/**/
	});
</script>
<footer>
</footer>
<?php require_once 'footer/footer.php'; ?>