<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<div class="site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				<? $APPLICATION->IncludeComponent(
					"bitrix:main.feedback",
					"feedback",
					array(
						"COMPONENT_TEMPLATE" => "feedback",
						"USE_CAPTCHA" => "Y",
						"OK_TEXT" => "Спасибо, ваше сообщение принято.",
						"EMAIL_TO" => "rassellek@list.ru",
						"REQUIRED_FIELDS" => array(
							0 => "NAME",
							1 => "EMAIL",
							2 => "MESSAGE",
							3 => "SUBJECT",
						),
						"EVENT_MESSAGE_ID" => array(
						)
					),
					false
				); ?>
			</div>

			<? $APPLICATION->IncludeComponent(
				"bitrix:main.include",
				"",
				array(
					"AREA_FILE_SHOW" => "page",
					"AREA_FILE_SUFFIX" => "inc",
					"EDIT_TEMPLATE" => ""
				)
			); ?>

		</div>
	</div>
</div>

&nbsp;
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>