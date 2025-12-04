<?php
///* Template Name: About Us Page */
get_header();
?>
	<section class="o-section c-section--main-page pt-0">
		<div class="o-section__wrapper">
			<div class="c-breadcrumbs">
				<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			</div>
			<h1 class="title title-left">
				<svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M9 22H15C20 22 22 20 22 15V9C22 4 20 2 15 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22Z"
						  stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path
						d="M18.3801 15.2702V7.58023C18.3801 6.81023 17.7601 6.25024 17.0001 6.31024H16.9601C15.6201 6.42024 13.5901 7.11025 12.4501 7.82025L12.3401 7.89026C12.1601 8.00026 11.8501 8.00026 11.6601 7.89026L11.5001 7.79025C10.3701 7.08025 8.34012 6.41023 7.00012 6.30023C6.24012 6.24023 5.62012 6.81025 5.62012 7.57025V15.2702C5.62012 15.8802 6.1201 16.4602 6.7301 16.5302L6.9101 16.5602C8.2901 16.7402 10.4301 17.4502 11.6501 18.1202L11.6801 18.1302C11.8501 18.2302 12.1301 18.2302 12.2901 18.1302C13.5101 17.4502 15.6601 16.7502 17.0501 16.5602L17.2601 16.5302C17.8801 16.4602 18.3801 15.8902 18.3801 15.2702Z"
						stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M12 8.1001V17.6601" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
						  stroke-linejoin="round"/>
				</svg>

				دربــاره ی بــرق آپ
			</h1>
			<div class="c-about u-flex u-flex--column">
				<div class="c-about__desc">
					<h2 class="m-0 sub-title">
						سامانه برقآپ، اولین سامانه جامع آنلاین خرید برق در کشور
					</h2>
					<p class="txt-justify m-0">
						سامانه برق‌آپاولین سامانه جامع خرید برق در کشور است که در تاریخ ۰۱/۰۸/۱۴۰۲ متولد گردید این
						سامانه جامع خرید به منظور تسهیل در خرید برق مشترکین بالای یک مگاوات طراحی و اجرا گردید و مشترکین
						برق شرکتهای توزیع و برق منطقه ای که مشمول مصوبه ‍‍۱۰۰/۲۰/۶۹۳۸۴/۱۴۰۱ مورخ ۲۷/۱۲/۱۴۰۱ وزارت نیرو
						می باشند می توانند برق مورد نیاز خود را از جمله برق سبز از سامانه جامع انلاین خرید برق خریداری
						نمایند
						متقاضیان خرید برق می توانند با ورود و ثبت نام در این سامانه جامع خرید اطلاعات کابری و انشعاب و
						مالک شبکه را وارد نموده و در هر دوره اقدام به خرید برق نمایند در این اپ شما می توانید کلیه
						اطلاعات مربوط به خریدها ، پرداختها و رژیم مصرف برق و… را دریافت نموده و صورتحساب آنلاین دریافت
						کنید و در پایان برق مورد نیاز شما توسط شرکتهای تامین کننده برق به شما تخصیص داده می شود.
					</p>
				</div>
				<div class="c-about__slider"
					 data-flickity='{"wrapAround": true, "autoPlay": 5500,"pageDots":false,"prevNextButtons": false,"rightToLeft": true,"cellAlign": "right"}'>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-1.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-2.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-3.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-4.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-5.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-6.webp"
							 alt="برقآپ">
					</div>
					<div class="c-about__slide">
						<img class="border-radius h-100"
							 src="<?php echo get_template_directory_uri(); ?>/assets/images/namayeshgah-1.webp"
							 alt="برقآپ">
					</div>
				</div>
				<div class="c-catalogue border-radius u-flex items-center space-between">
					<p class="u-flex gap-md items-center m-0">
				<span class="u-flex items-center">
					بـــــــرق آپـــــــــــــــــــــــ
					<img data-lazyloaded="1"
						 src="https://plus.barghapp.com/wp-content/themes/barghapp-plus/assets/images/txt-before.png"
						 width="98" height="98" class="border-radius w-100 h-auto contain entered litespeed-loaded"
						 data-src="https://plus.barghapp.com/wp-content/themes/barghapp-plus/assets/images/txt-before.png"
						 alt="برقآپ" data-ll-status="loaded">
				</span>
						اولین سامانه تامین و مدیریت انرژی
					</p>
					<a class="u-flex items-center" href="https://core.barghapp.ir/auth">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M8.97021 22H14.9702C19.9702 22 21.9702 20 21.9702 15V9C21.9702 4 19.9702 2 14.9702 2H8.97021C3.97021 2 1.97021 4 1.97021 9V15C1.97021 20 3.97021 22 8.97021 22Z"
								stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path
								d="M1.97021 12.7001L7.97021 12.6801C8.72021 12.6801 9.56021 13.2501 9.84021 13.9501L10.9802 16.8301C11.2402 17.4801 11.6502 17.4801 11.9102 16.8301L14.2002 11.0201C14.4202 10.4601 14.8302 10.4401 15.1102 10.9701L16.1502 12.9401C16.4602 13.5301 17.2602 14.0101 17.9202 14.0101H21.9802"
								stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

						ورود به سامانه خرید برق
					</a>
				</div>
				<div class="c-about__desc">
					<h2 class="m-0 sub-title">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M19 9C19 10.45 18.57 11.78 17.83 12.89C16.75 14.49 15.04 15.62 13.05 15.91C12.71 15.97 12.36 16 12 16C11.64 16 11.29 15.97 10.95 15.91C8.96 15.62 7.25 14.49 6.17 12.89C5.43 11.78 5 10.45 5 9C5 5.13 8.13 2 12 2C15.87 2 19 5.13 19 9Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M21.25 18.4699L19.6 18.8599C19.23 18.9499 18.94 19.2299 18.86 19.5999L18.51 21.0699C18.32 21.8699 17.3 22.1099 16.77 21.4799L12 15.9999L7.22996 21.4899C6.69996 22.1199 5.67996 21.8799 5.48996 21.0799L5.13996 19.6099C5.04996 19.2399 4.75996 18.9499 4.39996 18.8699L2.74996 18.4799C1.98996 18.2999 1.71996 17.3499 2.26996 16.7999L6.16996 12.8999C7.24996 14.4999 8.95996 15.6299 10.95 15.9199C11.29 15.9799 11.64 16.0099 12 16.0099C12.36 16.0099 12.71 15.9799 13.05 15.9199C15.04 15.6299 16.75 14.4999 17.83 12.8999L21.73 16.7999C22.28 17.3399 22.01 18.2899 21.25 18.4699Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12.58 5.98L13.17 7.15999C13.25 7.31999 13.46 7.48 13.65 7.51L14.72 7.68999C15.4 7.79999 15.56 8.3 15.07 8.79L14.24 9.61998C14.1 9.75998 14.02 10.03 14.07 10.23L14.31 11.26C14.5 12.07 14.07 12.39 13.35 11.96L12.35 11.37C12.17 11.26 11.87 11.26 11.69 11.37L10.69 11.96C9.96997 12.38 9.53997 12.07 9.72997 11.26L9.96997 10.23C10.01 10.04 9.93997 9.75998 9.79997 9.61998L8.96997 8.79C8.47997 8.3 8.63997 7.80999 9.31997 7.68999L10.39 7.51C10.57 7.48 10.78 7.31999 10.86 7.15999L11.45 5.98C11.74 5.34 12.26 5.34 12.58 5.98Z" stroke="#696969" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

						دســـتـاوردهـــای برق‌آپ
					</h2>
					<p class="txt-justify m-0">
						سامانه برق‌آپ، به‌عنوان اولین سامانه جامع آنلاین خرید برق در کشور، با داشتن مجوز دانش‌بنیان و
						همکاری با معتبرترین شرکت‌های خرده‌فروش برق در ایران، جایگاه ویژه‌ای در بازار برق دارد. این
						سامانه از طریق همکاری با بزرگ‌ترین نیروگاه‌های برق کشور و تأمین‌کننده‌های برق معتبر، سهم
						گسترده‌ای از بازار را در اختیار دارد و تنوع بالای مشترکین آن، آن را به یکی از معتبرترین بازیگران
						صنعت برق تبدیل کرده است. همچنین عضویت در انجمن ساتکا اعتبار آن را بیش از پیش افزایش داده است.
					</p>
					<ul>
						<li>
							اولین سامانه جامع آنلاین خرید برق در کشو
						</li>
						<li>دارای مجوز دانش‌بنیان</li>
						<li>همکاری با اولین شرکت خرده‌فروش برق در ایران</li>
						<li>همکاری با بزرگ‌ترین شرکت خرده‌فروش برق در ایران</li>
						<li>همکاری با بزرگ‌ترین نیروگاه‌های برق کشور از طریق تأمین‌کننده‌های معتبر:</li>
						نیروگاه مپنا،
						سرمایه‌گذاری برق و انرژی غدیر،
						گروه برق و انرژی صباريا،
						شرکت برق و انرژی سپهر
						<li>دارنده بیشترین سهم بازار از نظر ظرفیت و تعداد مشترکین</li>
						<li>
							دارای طیف گسترده و متنوع مشترکین برق
						</li>
						<li>
							عضو انجمن ساتکا
						</li>
					</ul>
				</div>
				<div class="logo-section">
					<div class="content-04__slider"
						 style="--width:90px; --height:90px; --quantity:13;">
						<div class="content-04__slider-list">
							<div class="content-04__slider-item" style="--position:1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iran-khodro.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:2">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/yazd.png" alt="برقآپ">
							</div>

							<div class="content-04__slider-item" style="--position:3">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/foolad.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:4">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sanaye.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:5">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/enteghal-ab.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:6">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/apadana.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:7">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sahami.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:8">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shahroud.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:9">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/saipa.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:10">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/kaleh.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:11">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/shimiayi.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:12">
								<img class="white-filter" src="<?php echo get_template_directory_uri(); ?>/assets/images/siman.png" alt="برقآپ">
							</div>
							<div class="content-04__slider-item" style="--position:13">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/azam.png" alt="برقآپ">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
