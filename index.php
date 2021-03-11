<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetPageProperty("TITLE", "category");
$APPLICATION->SetTitle("Главная");
?>
<section class="whats-news-area pt-50 pb-20">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="row d-flex justify-content-between">
					<div class="col-lg-3 col-md-3">
						<div class="section-tittle mb-30">
							<h3>Whats New</h3>
						</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="properties__button">
							<!--Nav Button  -->
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a> <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lifestyle</a> <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Travel</a> <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a> <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a> <a class="nav-item nav-link" id="nav-technology" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
								</div>
							</nav>
							<!--End Nav Button  -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- Nav Card -->
						<div class="tab-content" id="nav-tabContent">
							<br>
							<?$APPLICATION->IncludeComponent("bitrix:news.list", "news.list", Array(
							"COMPONENT_TEMPLATE" => ".default",
							"IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
							"IBLOCK_ID" => "2",	// Код информационного блока
							"NEWS_COUNT" => "20",	// Количество новостей на странице
							"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
							"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
							"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
							"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
							"FILTER_NAME" => "",	// Фильтр
							"FIELD_CODE" => array(	// Поля
								0 => "",
								1 => "",
							),
							"PROPERTY_CODE" => array(	// Свойства
								0 => "",
								1 => "",
							),
							"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
							"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
							"AJAX_MODE" => "N",	// Включить режим AJAX
							"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
							"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
							"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
							"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
							"CACHE_TYPE" => "A",	// Тип кеширования
							"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
							"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
							"CACHE_GROUPS" => "Y",	// Учитывать права доступа
							"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
							"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
							"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
							"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
							"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
							"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
							"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
							"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
							"PARENT_SECTION" => "",	// ID раздела
							"PARENT_SECTION_CODE" => "",	// Код раздела
							"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
							"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
							"DISPLAY_DATE" => "Y",	// Выводить дату элемента
							"DISPLAY_NAME" => "Y",	// Выводить название элемента
							"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
							"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
							"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
							"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
							"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
							"PAGER_TITLE" => "Новости",	// Название категорий
							"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
							"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
							"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
							"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
							"SET_STATUS_404" => "N",	// Устанавливать статус 404
							"SHOW_404" => "N",	// Показ специальной страницы
							"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
							),
							false
							);?>
							<br>
						</div>
					</div>
				</div>
			<div class="col-lg-4">
				<!-- Section Tittle -->
				<div class="section-tittle mb-40">
					<h3>Follow Us</h3>
				</div>
				<!-- Flow Socail -->
				<div class="single-follow mb-45">
					<div class="single-box">
						<div class="follow-us d-flex align-items-center">
							<div class="follow-social">
								<a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
							</div>
							<div class="follow-count">
								8,045
								<p>
									Fans
								</p>
							</div>
						</div>
						<div class="follow-us d-flex align-items-center">
							<div class="follow-social">
								<a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
							</div>
							<div class="follow-count">
								8,045
								<p>
									Fans
								</p>
							</div>
						</div>
						<div class="follow-us d-flex align-items-center">
							<div class="follow-social">
								<a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
							</div>
							<div class="follow-count">
								8,045
								<p>
									Fans
								</p>
							</div>
						</div>
						<div class="follow-us d-flex align-items-center">
							<div class="follow-social">
								<a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
							</div>
							<div class="follow-count">
								8,045
								<p>
									Fans
								</p>
							</div>
						</div>
					</div>
				</div>
				<!-- New Poster -->
				<div class="news-poster d-none d-lg-block">
					<img src="assets/img/news/news_card.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Whats New End -->
<!--Start pagination -->
<div class="pagination-area pb-45 text-center">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="single-wrap d-flex justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-start">
							<li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
							<li class="page-item active"><a class="page-link" href="#">01</a></li>
							<li class="page-item"><a class="page-link" href="#">02</a></li>
							<li class="page-item"><a class="page-link" href="#">03</a></li>
							<li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>