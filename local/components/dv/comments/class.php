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
     * Функция для создания и добавления элемента в инфоблок
     * @param int $id инфоблока
     */
    public function createElement(int $id)
    {
        $el = new CIBlockElement;

        $NEWS = $this->getCharacterCodeProperties($id, "NEWS");
        $ID_PROPERTY = $this->getCharacterCodeProperties($id, "ID");

        $PROP = [];
        $PROP[$NEWS] = $this->arParams['ELEMENT_ID'];
        $PROP[$ID_PROPERTY] = CUser::GetID();

        $arLoadProductArray = [
            "IBLOCK_ID" => $id,
            "NAME" => CUser::GetLogin(),
            "PREVIEW_TEXT" => htmlspecialchars($_POST['subject']),
            "DETAIL_TEXT" => htmlspecialchars($_POST['message']),
            "PROPERTY_VALUES" => $PROP,
            "ACTIVE" => "Y",
        ];

        $el->Add($arLoadProductArray);
    }

    /**
     * Функция для получения всех элементов ИБ Comments
     * * @param int $id инфоблока
     */
    public function getElement(int $id)
    {
        $arSelect = ["ID", "IBLOCK_ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT"];
        $arFilter = [
            "IBLOCK_ID"=>$id,
            "PROPERTY_NEWS" => $this->arParams["ELEMENT_ID"],
            "ACTIVE_DATE"=>"Y",
            "ACTIVE"=>"Y"
        ];
        $res = CIBlockElement::GetList([], $arFilter, false, ["nPageSize"=>50], $arSelect);
            while($ob = $res->GetNextElement()){ 
            $arFields = $ob->GetFields(); 
            $this->arResult[] = $arFields;
        }
    }

    /**
     * Функция для поключения шаблона
     */
    public function executeComponent()
    {
        $IBLOCK_ID = $this->getCharacterCode("Comments");

        if(isset($_POST['send'])) {
            $this->createElement($IBLOCK_ID);
        }

        $this->getElement($IBLOCK_ID);
        $this->includeComponentTemplate();
    }
}
?>