<?php snippet('header') ?>

	<!-- Wrapper -->
		<section id="wrapper">
			<header>
				<div class="inner">
					<h2><?php echo html($page->title()) ?></h2>
					<p>Summary here mate.</p>
				</div>
			</header>

			<!-- Content -->
				<div class="wrapper">
					<div class="inner">

						<h3 class="major">Lorem ipsum dolor</h3>

						<?php echo kirbytext($page->text()) ?>

						<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

						<h3 class="major">Vitae phasellus</h3>
						<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>

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
