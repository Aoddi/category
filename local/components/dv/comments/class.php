<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\LoaderException;

Loader::includeModule("iblock");

class CComments extends CBitrixComponent 
{
    /**
     * Функция для поиска id инфоблока по символьному коду
     * @param string $code символьный код
     * @return int id инфоблока
     */
    public function getCharacterCode(string $code): int
    {
        $arFilter = ["CODE"=>$code, "ACTIVE"=>"Y"];
        $res = CIBlock::GetList([], $arFilter);
        $arRes = $res->Fetch();
        return $arRes["ID"];
    }

    /**
     * Функция для поиска id свойства инфоблока по символьному коду
     * @param int $id инфоблока
     * @param string $code символьный код свойства
     * @return int id свойства
     */
    public function getCharacterCodeProperties(int $id, string $code): int
    {
        $res = CIBlock::GetProperties($id, [], ["CODE" => $code]);
        $arRes = $res->Fetch();
        return $arRes["ID"];
    }

    /**
     * Функция для создания и добавления елемента в инфоблок
     */
    public function createElement()
    {
        $el = new CIBlockElement;

        $IBLOCK_ID = $this->getCharacterCode("Comments");
        $NEWS = $this->getCharacterCodeProperties($IBLOCK_ID, "NEWS");

        $PROP = [];
        $PROP[$NEWS] = $this->arParams['ELEMENT_ID'];

        $arLoadProductArray = [
            "IBLOCK_ID" => $IBLOCK_ID,
            "NAME" => CUser::GetID(),
            "PREVIEW_TEXT" => htmlspecialchars($_POST['subject']),
            "DETAIL_TEXT" => htmlspecialchars($_POST['message']),
            "PROPERTY_VALUES" => $PROP,
            "ACTIVE" => "Y",
        ];

        $el->Add($arLoadProductArray);
    }

    /**
     * Функция для поключения шаблона
     */
    public function executeComponent()
    {
        if(isset($_POST['send'])) {
            $this->createElement();
        }
        $this->includeComponentTemplate();
    }
}
?>