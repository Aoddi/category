<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
<title>Регистрация</title>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"",
	Array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME","PERSONAL_GENDER","PERSONAL_BIRTHDAY","PERSONAL_PHONE"),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array("EMAIL","NAME","SECOND_NAME","LAST_NAME","PERSONAL_GENDER","PERSONAL_BIRTHDAY","PERSONAL_PHONE"),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>