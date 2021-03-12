<?php
$rs_Section = CIBlockSection::GetList(array('ID' => 'asc'), array('IBLOCK_ID' => $arResult['ID']));
while ($ar_Section = $rs_Section->Fetch())
{
	$arResult['ALL_SECTIONS'][] = [
		'ID' => $ar_Section['ID'],
        'NAME' => $ar_Section['NAME']
    ];
}

// echo '<pre>';
// var_dump($arResult);
// echo '</pre>';
// используя ciblocksection::getlist получить все разделы этого инфоблока. Результат нужно сохранить в $arRusult['ALL_SECTION']. 