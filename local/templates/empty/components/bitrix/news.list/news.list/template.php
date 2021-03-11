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
<div class="row">
	<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?= $arResult["NAV_STRING"] ?><br />
	<?endif;?>

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
									<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
								</div>
								<div class="what-cap">
									<span class="color1"><?= $sectionName ?></span>
									<h4><a href="#"><?=$arItem['NAME']?></a></h4>
								</div>
							</div>
						</div>
						<?endforeach?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?= $arResult["NAV_STRING"] ?>
	<?endif;?>
</div>
<?/*foreach($arResult["ITEMS"] as $arItem):?>
<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<p class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
	<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
	<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" /></a>
	<?else:?>
	<img class="preview_picture" border="0" src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"] ?>" height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>" style="float:left" />
	<?endif;?>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
	<span class="news-date-time">
		<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
	</span>
	<?endif?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
	<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
	<a href="<?echo $arItem[" DETAIL_PAGE_URL"]?>"><b>
			<?echo $arItem["NAME"]?>
		</b></a><br />
	<?else:?>
	<b>
		<?echo $arItem["NAME"]?>
	</b><br />
	<?endif;?>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
	<?echo $arItem["PREVIEW_TEXT"];?>
	<?endif;?>
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<div style="clear:both"></div>
<?endif?>
<?foreach($arItem["FIELDS"] as $code=>$value):?>
<small>
	<?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
</small><br />
<?endforeach;?>
<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<small>
	<?= $arProperty["NAME"] ?>:&nbsp;
	<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
	<?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
	<?else:?>
	<?= $arProperty["DISPLAY_VALUE"]; ?>
	<?endif?>
</small><br />
<?endforeach;?>
</p>
<?endforeach;*/?>