<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
<?= $arResult["NAV_STRING"] ?><br />
<?endif;?>
<div class="col-lg-8">
	<div class="row">
		<div class="col-12">
			<!-- Nav Card -->
			<div class="tab-content" id="nav-tabContent">
				<!-- card one -->
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="whats-news-caption">
						<div class="row">
							<?foreach($arResult["ITEMS"] as $arItem):?>
							<?//var_dump($arItem)?>
							<?$res = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID'])?>
							<?if ($ar_res = $res->GetNext()):?>
							<?$sectionName = $ar_res['NAME']?>
							<?endif?>
							<div class="col-lg-6 col-md-6">
								<div class="single-what-news mb-100">
									<div class="what-img">
										<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="">
									</div>
									<div class="what-cap">
										<span class="color1"><?= $sectionName ?></span>
										<h4><a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a></h4>
									</div>
								</div>
							</div>
							<?endforeach?>
						</div>
					</div>
				</div>
			</div>
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
					<span>8,045</span>
					<p>Fans</p>
				</div>
			</div>
			<div class="follow-us d-flex align-items-center">
				<div class="follow-social">
					<a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
				</div>
				<div class="follow-count">
					<span>8,045</span>
					<p>Fans</p>
				</div>
			</div>
			<div class="follow-us d-flex align-items-center">
				<div class="follow-social">
					<a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
				</div>
				<div class="follow-count">
					<span>8,045</span>
					<p>Fans</p>
				</div>
			</div>
			<div class="follow-us d-flex align-items-center">
				<div class="follow-social">
					<a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
				</div>
				<div class="follow-count">
					<span>8,045</span>
					<p>Fans</p>
				</div>
			</div>
		</div>
	</div>
	<!-- New Poster -->
	<div class="news-poster d-none d-lg-block">
		<img src="assets/img/news/news_card.jpg" alt="">
	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<br /><?= $arResult["NAV_STRING"] ?>
<?endif;?>