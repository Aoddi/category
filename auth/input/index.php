<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	".default", 
	array(
		"FORGOT_PASSWORD_URL" => "/auth/forget/",
		"PROFILE_URL" => "/auth/personal/",
		"REGISTER_URL" => "/auth/registration/",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>