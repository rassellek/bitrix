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
	// Не выводим для просмотра свойства с сортировкой мнеьше 0 (они будут у нас служебными)
	if ($arProp["SORT"] < 0)
		continue;

	if (
		(is_array($arProp["VALUE"]) && count($arProp["VALUE"]) > 0) ||
		(!is_array($arProp["VALUE"]) && strlen($arProp["VALUE"]) > 0)
	) {
		$arResult["DISPLAY_PROPERTIES"][$pid] = CIBlockFormatProperties::GetDisplayValue($arResult['ITEMS'], $arProp, '');
	}
}
?>

<div class="site-section site-section-sm bg-light">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<div class="site-section-title">
					<h2>
						<?= GetMessage('TITLE') ?>
					</h2>
				</div>
			</div>
		</div>
		<div class="row mb-5">


			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div class="col-md-6 col-lg-4 mb-4" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="prop-entry d-block">
						<? if (is_array($arItem["DETAIL_PICTURE"])): ?>
							<figure> <img alt="Image" src="<?= $arItem["DETAIL_PICTURE"]["SRC"] ?>" class="img-fluid">
							</figure>
						<? endif; ?>

						<div class="prop-text">
							<div class="inner">
								<span class="price rounded">
									<? echo $arItem["PROPERTY_PRICE_VALUE"]; ?>
								</span>
								<h3 class="title">
									<? echo $arItem["NAME"] ?>
								</h3>
								<p class="location">
									<? echo $arItem["PREVIEW_TEXT"]; ?>
								</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										<?= GetMessage('AREA') ?>: <strong>
											<? echo $arItem["PROPERTY_SQUARE_VALUE"]; ?>
											<?= GetMessage('METR') ?><sup>2</sup>
										</strong>
									</div>
									<div class="col">
										<?= GetMessage('FLOORS') ?>: <strong>
											<? echo $arItem["PROPERTY_FLOORS_VALUE"]; ?>
										</strong>
									</div>
									<div class="col">
										<?= GetMessage('BATHS') ?>: <strong>
											<? echo $arItem["PROPERTY_BATHROOMS_VALUE"]; ?>
										</strong>
									</div>
									<div class="col">
										<?= GetMessage('GARAGES') ?>: <strong>
											<? if ($arItem["PROPERTY_GARAGEAVAILABILITY_VALUE"]): ?>
												<? echo 1 ?>
											<? else: ?>
												<? echo 0 ?>
											<? endif ?>
										</strong>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			<? endforeach; ?>
		</div>
	</div>
</div>