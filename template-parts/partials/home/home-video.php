<section class="o-section c-section--home-video">
	<div class="o-section__wrapper">
		<div class="c-home-video border-radius">
			<div class="c-home-video__content relative w-100 u-flex--column u-flex items-center">
				<div class="video-wrapper w-100">
					<?php if (have_rows('video-box')): ?>
					<?php while (have_rows('video-box')): the_row();
					?>
					<video id="myVideo"
						   poster="<?php echo get_sub_field('video-cover') ?>">
						<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/video-plus.mp4" type="video/mp4">
						مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
					</video>
						<?php endwhile; ?><?php endif; ?>
					<!-- دکمه پلی قرمز -->
					<div class="play-btn" id="playBtn">
						<svg width="121" height="120" viewBox="0 0 121 120" fill="none"
							 xmlns="http://www.w3.org/2000/svg">
							<path
								d="M60.208 1.85254C92.4505 1.85254 118.564 27.7854 118.564 59.7451C118.564 91.7049 92.4506 117.638 60.208 117.638C27.9656 117.637 1.85254 91.7048 1.85254 59.7451C1.85265 27.7855 27.9657 1.85278 60.208 1.85254Z"
								fill="white" fill-opacity="0.58" stroke="#2d4b74" stroke-width="3.70514"/>
							<ellipse cx="59.7452" cy="60.4681" rx="51.4088" ry="50.2789" fill="white"/>
							<path
								d="M81.9921 55.3663C85.4012 57.5532 85.4011 62.5352 81.992 64.7221L54.0758 82.6304C50.3769 85.0033 45.5173 82.3471 45.5173 77.9525V42.136C45.5173 37.7413 50.3769 35.0852 54.0758 37.458L81.9921 55.3663Z"
								fill="#2d4b74"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
