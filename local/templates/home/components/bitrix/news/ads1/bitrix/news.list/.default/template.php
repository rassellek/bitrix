<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
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


<? $arResult["DISPLAY_PROPERTIES"] = array();
foreach ($arResult["PROPERTIES"] as $pid => &$arProp) {
	$arResult["DISPLAY_PROPERTIES"][$pid] = CIBlockFormatProperties::GetDisplayValue($arResult['ITEMS'], $arProp, '');
}
?>

<div class="site-section site-section-sm bg-light">
	<div class="container">

		<div class="row mb-5">

			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100"
					id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<? if (is_array($arItem["DETAIL_PICTURE"])): ?>
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><img alt="Image"
								src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" class="img-fluid"></a>
					<? endif; ?>

					<div class="p-4 bg-white">
						<span class="d-block text-secondary small text-uppercase">
							<? echo $arItem["DISPLAY_ACTIVE_FROM"] ?>
						</span>
						<h2 class="h5 text-black mb-3"><a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
								<? echo $arItem["NAME"] ?>
							</a></h2>
						<p>
							<? echo $arItem["PREVIEW_TEXT"]; ?>
						</p>
					</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>

	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<br />
		<?= $arResult["NAV_STRING"] ?>
	<? endif; ?>
</div>