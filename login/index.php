<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>

<p>
	<? $APPLICATION->IncludeComponent(
		"bitrix:system.auth.form",
		"auth",
		array(
			"FORGOT_PASSWORD_URL" => "/user",
			"PROFILE_URL" => "/user",
			"REGISTER_URL" => "/user/registration.php",
			"SHOW_ERRORS" => "N",
			"COMPONENT_TEMPLATE" => "auth"
		),
		false
	); ?>
</p>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>