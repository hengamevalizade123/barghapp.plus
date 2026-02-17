<?php
$desc_img = get_field('desc_img_home');
$title = !empty($desc_img['title']) ? $desc_img['title'] : '';
$sub_title = !empty($desc_img['sub-title']) ? $desc_img['sub-title'] : '';
$desc = !empty($desc_img['description']) ? $desc_img['description'] : '';
$img= !empty($desc_img['reason-img']) ? $desc_img['reason-img'] : [];
?>
<section class="o-section c-section--reason pt-0">
	<div class="o-section__wrapper">
		<div class="c-reason u-flex items-center gap-lg">
			<div class="c-reason__info u-flex gap-md u-flex--column">
					<h2 class="title color-secondary">
					<?php echo $title?>
					</h2>
				<h3 class="color-primary m-0 color-secondary">
					<?php echo $sub_title?>
				</h3>
				<div class="txt-justify">
					<?php echo $desc?>
				</div>
				<div class="c-btn-read-more">
					<a class="u-flex items-center gap-sm justify-end" href="https://plus.barghapp.com/established/" target="_blank">مشاهده بیشتر
					</a>
				</div>
			</div>
			<div class="c-reason__img u-flex">
				<img class="border-radius h-100"
					 src="<?php echo $img['sizes']['large']; ?>"
					 srcset="<?php echo $img['sizes']['thumbnail']; ?> 150w,
             <?php echo $img['sizes']['medium']; ?> 300w,
             <?php echo $img['sizes']['large']; ?> 1024w,
             <?php echo $img['url']; ?> 2418w"
					 sizes="(max-width: 480px) 100vw,
            (max-width: 768px) 90vw,
            (max-width: 1200px) 80vw,
            1200px"
					 style="width: 100%; height: auto;"
					 alt="<?php echo get_field('reason-img')['alt']; ?>">
			</div>
		</div>
	</div>
</section>
