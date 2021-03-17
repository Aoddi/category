<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;

Loader::includeModule("iblock");

class CComments extends CBitrixComponent 
{
    public function createElement()
    {
        $el = new CIBlockElement;

        $PROP = [];
        $PROP[7] = $this->arParams['ELEMENT_ID'];
        $PROP[9] = $_POST['user-email'];

        $arLoadProductArray = [
            "IBLOCK_ID" => 3,
            "NAME" => $_POST['user-login'],
            "PROPERTY_VALUES" => $PROP,
            "PREVIEW_TEXT" => $_POST['subject'],
            "DETAIL_TEXT" => $_POST['message'],
            "ACTIVE" => "Y",
        ];

        $el->Add($arLoadProductArray);
    }

    public function executeComponent()
    {
        $this->createElement();
        $this->includeComponentTemplate();
    }
}
?>