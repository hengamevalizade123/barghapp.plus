<?php
$home_intro = get_field('home-introduction');
$short_desc = !empty($home_intro['short-desc']) ? $home_intro['short-desc'] : '';
$more_desc = !empty($home_intro['more-desc']) ? $home_intro['more-desc'] : '';
?>
<section class="o-section c-section--home-desc pb-0">
	<div class="o-section__wrapper">
		<div class="c-home-desc">
			<div class="c-sec-title txt-center">
				<h2 class="title">
					مــعــرفــــی برق‌آپ پــــلاس
				</h2>
				<h3 class="sub-title mb-0">
					برق‌آپ پلاس، اولین سامانه هوشمند خرید برق در ایران
				</h3>
			</div>
			<div class="c-home-desc__content relative w-100">
				<div class="c-home-desc__txt">
					<div class="txt-justify">
						<?php echo $short_desc ?>
					</div>
					<div class="more-desc txt-justify">
						<?php echo $more_desc ?>
					</div>
				</div>
				<button type="button" class="more-toggle u-flex gap-sm items-center">مشاهده بیشتر</button>
			</div>
		</div>
		<!--		<ul class="c-home-reason u-flex gap-md p-0 wrap w-100 space-between mb-0">-->
		<!--			<li class="u-flex gap-sm u-flex--column justify-center">-->
		<!--				<div class="c-home-desc__title u-flex items-center space-between">-->
		<!--					<h3>-->
		<!--						سامانه هوشمند و به‌روز-->
		<!--					</h3>-->
		<!--					<img class="border-radius h-100"-->
		<!--						 src="-->
		<?php //echo get_template_directory_uri(); ?><!--/assets/images/reason-1.png"-->
		<!--						 alt="برق‌آپ">-->
		<!--				</div>-->
		<!--				<p class="m-0 txt-justify">-->
		<!--					برق‌آپ پلاس یک سامانه آنلاین و هوشمند است که با بهره‌گیری از الگوریتم‌های پیشرفته و طراحی نوآورانه،-->
		<!--					منطبق بر آخرین مقررات و سازوکارهای بازار برق کشور، خدمات خرید و مدیریت برق را به‌صورت دیجیتال و-->
		<!--					یکپارچه به مشترکین ارائه می‌دهد.-->
		<!--				</p>-->
		<!--			</li>-->
		<!--			<li class="u-flex gap-sm u-flex--column justify-center">-->
		<!--				<div class="c-home-desc__title u-flex items-center space-between">-->
		<!--					<h3>-->
		<!--						پشتوانه تجربه و تخصص-->
		<!--					</h3>-->
		<!--					<img class="border-radius h-100"-->
		<!--						 src="-->
		<?php //echo get_template_directory_uri(); ?><!--/assets/images/reason-3.png"-->
		<!--						 alt="برق‌آپ">-->
		<!--				</div>-->
		<!--				<p class="m-0 txt-justify">-->
		<!--					برق‌آپ پلاس با مجوز تامین برق 6000 مگاوات و سابقه تأمین بیش از ۴۰۰۰ مگاوات ظرفیت برق و ایجاد-->
		<!--					صرفه‌جویی اقتصادی برای بیش از ۲۰۰۰ مشترک صنعتی و تجاری، بر پایه دانش فنی، تجربه عملیاتی و شناخت عمیق-->
		<!--					از بازار برق شکل گرفته است.-->
		<!--				</p>-->
		<!--			</li>-->
		<!--			<li class="u-flex gap-sm u-flex--column justify-center">-->
		<!--				<div class="c-home-desc__title u-flex items-center space-between">-->
		<!--					<h3>-->
		<!--						پایش و قرائت آنلاین مصرف-->
		<!--					</h3>-->
		<!--					<img class="border-radius h-100"-->
		<!--						 src="-->
		<?php //echo get_template_directory_uri(); ?><!--/assets/images/reason-2.png"-->
		<!--						 alt="برق‌آپ">-->
		<!---->
		<!--				</div>-->
		<!--				<p class="m-0 txt-justify">-->
		<!--					مشترکین در سامانه برق‌آپ پلاس می‌توانند مصرف برق خود را به‌صورت آنلاین مشاهده، تحلیل و پایش کنند و بر-->
		<!--					اساس داده‌های واقعی، تصمیمات دقیق‌تری برای خرید و مدیریت هوشمند انرژی اتخاذ نمایند.-->
		<!--				</p>-->
		<!--			</li>-->
		<!--			<li class="u-flex gap-sm u-flex--column justify-center">-->
		<!--				<div class="c-home-desc__title u-flex items-center space-between">-->
		<!--					<h3>-->
		<!--						فرآیند ساده و شفاف خرید برق-->
		<!--					</h3>-->
		<!--					<img class="border-radius h-100"-->
		<!--						 src="-->
		<?php //echo get_template_directory_uri(); ?><!--/assets/images/reason-4.png"-->
		<!--						 alt="برق‌آپ">-->
		<!--				</div>-->
		<!--				<p class="m-0 txt-justify">-->
		<!--					با رویکردی سیستماتیک و مبتنی بر نوآوری، تمامی فرآیندهای خرید برق در برق‌آپ پلاس به‌گونه‌ای طراحی-->
		<!--					شده‌اند که ضمن پوشش کامل نیازهای مشترک، تجربه‌ای ساده، سریع و شفاف از ثبت درخواست تا نهایی‌سازی خرید-->
		<!--					فراهم شود.-->
		<!--				</p>-->
		<!--			</li>-->
		<!--			<li class="u-flex gap-sm u-flex--column justify-center">-->
		<!--				<div class="c-home-desc__title u-flex items-center space-between">-->
		<!--					<h3>-->
		<!--						گزارش‌های مدیریتی و تحلیلی-->
		<!--					</h3>-->
		<!--					<img class="border-radius h-100"-->
		<!--						 src="-->
		<?php //echo get_template_directory_uri(); ?><!--/assets/images/reason-5.png"-->
		<!--						 alt="برق‌آپ">-->
		<!--				</div>-->
		<!--				<p class="m-0 txt-justify">-->
		<!--					سامانه برق‌آپ پلاس به‌صورت خودکار، گزارش‌های مدیریتی ماهانه شامل تحلیل سودآوری قرارداد، وضعیت خرید-->
		<!--					برق و شاخص‌های کلیدی مصرف را در اختیار مشترکین قرار می‌دهد تا تصمیم‌گیری‌های مدیریتی با دقت و شفافیت-->
		<!--					بیشتری انجام شود.-->
		<!--				</p>-->
		<!--			</li>-->
		<!--			<li class="u-flex gap-sm u-flex--column justify-center">-->
		<!--				<div class="c-home-desc__title u-flex items-center space-between">-->
		<!--					<h3>-->
		<!--						تأمین مطمئن و پایدار برق-->
		<!--					</h3>-->
		<!--					<img class="border-radius h-100"-->
		<!--						 src="-->
		<?php //echo get_template_directory_uri(); ?><!--/assets/images/reason-6.png"-->
		<!--						 alt="برق‌آپ">-->
		<!--				</div>-->
		<!--				<p class="m-0 txt-justify">-->
		<!--					برق‌آپ پلاس با اتکا به مجوزها و پروانه‌های رسمی صادره از وزارت نیرو، تأمین پایدار و بدون وقفه برق-->
		<!--					مشترکین را تضمین کرده و تعهد حرفه‌ای خود در انجام مسئولیت‌های فروش و پشتیبانی انرژی را به‌طور کامل-->
		<!--					اجرا می‌نماید.-->
		<!--				</p>-->
		<!--			</li>-->
		<!--		</ul>-->
	</div>
</section>

