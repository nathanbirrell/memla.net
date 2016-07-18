<?php snippet('header') ?>

<div class="clearfix spacer"></div>

<!-- Wrapper -->
	<section id="wrapper">
		<header>
			<div class="inner">
				<h2><?php echo html($page->title()) ?></h2>
				<p><?php echo '<b>Type:</b> ' . displayTag($page->tags()->first()) ?></p>
			</div>
		</header>

		<!-- Content -->
			<div class="wrapper">
				<div class="inner">

					<?php echo $page->text() ?>

					<section class="features">
						<article>
							<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
							<h3 class="major">Sed feugiat lorem</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
							<a href="#" class="special">Learn more</a>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
							<h3 class="major">Nisl placerat</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
							<a href="#" class="special">Learn more</a>
						</article>
					</section>

				</div>
			</div>

	</section>

<?php snippet('footer') ?>
