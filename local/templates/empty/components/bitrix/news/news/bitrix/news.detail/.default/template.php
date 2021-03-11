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
<div class="col-lg-8">
	<div class="about-right mb-90">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<div class="about-img">
			<img class="" border="0" src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>" title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>" />
		</div>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<div class="section-title mb-30 pt-30">
			<h3><?= $arResult["NAME"] ?></h3>
		</div>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
			unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
		<?endif;?>
		<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?= $arResult["NAV_STRING"] ?><br />
		<?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?= $arResult["NAV_STRING"] ?>
		<?endif;?>
		<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<div class="about-prea">
			<p class="about-pera1 mb-25"><?= $arResult["DETAIL_TEXT"]; ?></p>
		</div>
		<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
		<?endif?>
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
<div style="clear:both"></div>
<br />
<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code){?>
<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;
<?if (!empty($value) && is_array($value)){?>
<img border="0" src="<?= $value["SRC"] ?>" width="<?= $value["WIDTH"] ?>" height="<?= $value["HEIGHT"] ?>">
<?}} else {?><?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
<?}?><br />
<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

<?= $arProperty["NAME"] ?>:&nbsp;
<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
<?else:?>
<?= $arProperty["DISPLAY_VALUE"]; ?>
<?endif?>
<br />
<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
<div class="news-detail-share">
	<noindex>
		<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
	</noindex>
</div>
<?
	}
	?>