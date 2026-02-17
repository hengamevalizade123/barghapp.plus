<section class="o-section c-section--main-page p-0">
	<div class="o-section__wrapper p-0">
		<div class="c-price-list border-radius">
			<div class="tabs gap-md items-center space-between">
				<div class="c-price__info u-flex gap-md">
				<span class="color-text u-flex items-center gap-sm">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
						<path
							d="M21 11H17.06C16.9903 10.9905 16.9197 10.9905 16.85 11H16.68C16.6277 11.0298 16.5776 11.0632 16.53 11.1C16.4743 11.1368 16.4209 11.1768 16.37 11.22C16.3366 11.2609 16.3065 11.3044 16.28 11.35C16.2342 11.413 16.194 11.4799 16.16 11.55L14.56 15.96L10.39 4.66C10.3199 4.46695 10.1921 4.30015 10.0239 4.18228C9.85577 4.06441 9.65537 4.00117 9.45 4.00117C9.24463 4.00117 9.04423 4.06441 8.87605 4.18228C8.70788 4.30015 8.58007 4.46695 8.51 4.66L6.2 11H3C2.73478 11 2.48043 11.1054 2.29289 11.2929C2.10536 11.4804 2 11.7348 2 12C2 12.2652 2.10536 12.5196 2.29289 12.7071C2.48043 12.8946 2.73478 13 3 13H6.92H7.15H7.3C7.35684 12.9726 7.4105 12.9391 7.46 12.9C7.51568 12.8632 7.56911 12.8232 7.62 12.78L7.71 12.65C7.75766 12.5882 7.79794 12.5211 7.83 12.45L9.45 7.92L13.61 19.34C13.6799 19.5333 13.8076 19.7003 13.9758 19.8184C14.144 19.9365 14.3445 19.9999 14.55 20C14.7555 19.9999 14.956 19.9365 15.1242 19.8184C15.2924 19.7003 15.4201 19.5333 15.49 19.34L17.79 13H21C21.2652 13 21.5196 12.8946 21.7071 12.7071C21.8946 12.5196 22 12.2652 22 12C22 11.7348 21.8946 11.4804 21.7071 11.2929C21.5196 11.1054 21.2652 11 21 11Z"
							fill="#77b042"></path>
					</svg>
						تعرفه برق مشترکین
					</span>
					<div class="tab-nav">
						<div class="filter-bar u-flex gap-md u-flex--row">
							<?php
							$years = [
								'1404' => 'price_tabs_1404',
								'1403' => 'price_tabs_1403',
								'1402' => 'price_tabs_1402',
							];
							?>

							<select id="year-filter">
								<option value="">سال را انتخاب کنید</option>
								<?php foreach (array_keys($years) as $year): ?>
									<option value="<?php echo esc_attr($year); ?>">
										<?php echo esc_html($year); ?>
									</option>
								<?php endforeach; ?>
							</select>
							<select id="month-filter">
								<option value="">ماه را انتخاب کنید</option>
								<option value="01">فروردین</option>
								<option value="02">اردیبهشت</option>
								<option value="03">خرداد</option>
								<option value="04">تیر</option>
								<option value="05">مرداد</option>
								<option value="06">شهریور</option>
								<option value="07">مهر</option>
								<option value="08">آبان</option>
								<option value="09">آذر</option>
								<option value="10">دی</option>
								<option value="11">بهمن</option>
								<option value="12">اسفند</option>
							</select>
						</div>
					</div>
				</div>
				<div class="c-price__live u-flex gap-md items-center">
					<div class="c-price__live-bolb"></div>
					<div class="c-price__live-time u-flex u-flex--column gap-sm">
						<span>تاریخ بروزرسانی:</span>
						<strong>
							<?php echo do_shortcode('[update_date]') ?>
						</strong>
					</div>
				</div>
			</div>
			<div class="tab-content-sec">

				<?php foreach ($years as $year => $repeater_name): ?>

					<?php if (have_rows($repeater_name)): ?>
						<?php while (have_rows($repeater_name)): the_row(); ?>

							<?php
							$month = get_sub_field('tab_month'); // 01..12
							$table = get_sub_field('price-table');
							?>

							<div class="tab-content"
								 data-year="<?php echo esc_attr($year); ?>"
								 data-month="<?php echo esc_attr((int)$month); ?>">

								<?php if (!empty($table['body'])): ?>
									<div class="c-page__table js-tabs">
										<table>
											<tr>
												<th class="color-text"></th>
												<th class="color-text">کم بار</th>
												<th class="color-text">میان بار</th>
												<th class="color-text">اوج بار</th>
											</tr>
											<?php foreach ($table['body'] as $row_index => $row): ?>
												<tr>
													<?php foreach ($row as $cell): ?>

														<td>
															<?php echo esc_html($cell['c']); ?>
														</td>

													<?php endforeach; ?>
												</tr>
											<?php endforeach; ?>
										</table>
									</div>
								<?php else: ?>
									<p>جدولی برای این ماه ثبت نشده است.</p>
								<?php endif; ?>

							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
