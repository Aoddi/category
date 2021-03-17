<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
<title>Запрос пароля</title>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.auth.forgotpasswd",
	"",
	Array(
		"AUTH_AUTH_URL" => "",
		"AUTH_REGISTER_URL" => ""
	)
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>