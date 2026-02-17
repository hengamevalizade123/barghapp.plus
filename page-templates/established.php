<?php
///* Template Name: Established Page */
get_header();
?>
	<section class="o-section c-section--main-page pt-0">
		<div class="o-section__wrapper">
			<div class="c-breadcrumbs">
				<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			</div>
			<h1 class="title title-left">
				<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M6.0901 13.28H9.1801V20.48C9.1801 22.16 10.0901 22.5 11.2001 21.24L18.7701 12.64C19.7001 11.59 19.3101 10.72 17.9001 10.72H14.8101V3.52C14.8101 1.84 13.9001 1.5 12.7901 2.76L5.2201 11.36C4.3001 12.42 4.6901 13.28 6.0901 13.28Z"
						stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
						stroke-linejoin="round"/>
				</svg>

				برق‌آپ پـــلاس پایـــه اس
			</h1>
			<div class="c-established u-flex gap-md u-flex--column">
				<img class="border-radius h-auto w-100"
					 src="<?php echo get_template_directory_uri(); ?>/assets/images/barghapp-paye.png"
					 alt="برق‌آپ">
				<div class="c-established__desc u-flex gap-md u-flex--column">
					<p class="m-0 txt-justify">
						ما در برق‌آپ مفتخریم اعلام کنیم که با توسعه زیرساخت‌های هوشمند تأمین انرژی، امکان جدیدی را برای
						تمامی مشترکین صنعتی و تجاری کشور فراهم کرده‌ایم؛ امکانی که حتی مشترکینی که هم‌اکنون دارای
						قرارداد
						فعال با خرده‌فروش‌ها، نیروگاه‌ها یا سایر تأمین‌کنندگان برق هستند نیز می‌توانند بدون ایجاد هیچ
						تغییری
						در قرارداد فعلی خود، از پوشش پشتیبان تأمین برق پایان ماه بهره‌مند شوند.

						در این خدمت، قرارداد اصلی مشترک کاملاً حفظ می‌شود؛ اما اگر به هر دلیل، تأمین‌کننده فعلی قادر به
						تأمین کامل برق مصرفی در پایان دوره نباشد، برق‌آپ تنها در بخش کسری وارد مدار شده و انرژی موردنیاز
						را
						بدون وقفه و بدون اعمال جریمه تأمین می‌کند. این خدمت به‌منزله یک لایه امنیتی و اطمینان‌بخش در
						کنار
						قرارداد موجود عمل می‌نماید.
						<br>
						ما در برق‌آپ مزایای اصلی این خدمت را چنین تعریف کرده‌ایم:
					</p>
					<ul class="numberic-list m-0">
						<li>عدم ایجاد هیچ‌گونه خلل یا تغییر در قرارداد فعلی مشترک؛</li>
						<li>پوشش کامل کسری پایان ماه، بدون مذاکره یا عقد قرارداد جایگزین؛</li>
						<li>قابلیت استفاده برای تمامی مشترکین، فارغ از نوع تأمین‌کننده فعلی؛</li>
						<li>کاهش ریسک‌های مالی، عملیاتی و جلوگیری از جریمه‌های ناترازی؛</li>
						<li>پشتیبانی توسط زیرساخت قدرتمند برق‌آپ با قابلیت پوشش بیش از ۶۰۰۰ مگاوات.</li>
					</ul>
					<video class="video-explain-personal" id="myVideo" controls
						   poster="<?php echo get_template_directory_uri(); ?>/assets/images/cover-video-paye.png">
						<source
							src="<?php echo get_template_directory_uri(); ?>/assets/videos/barghapp-paye.mp4"
							type="video/mp4">
						مرورگر شما از تگ ویدیو پشتیبانی نمی‌کند.
					</video>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
