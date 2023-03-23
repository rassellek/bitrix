<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>
<? if (!empty($arResult)): ?>


	<div class="menu-block popup-wrap">
		<a href="" class="btn-menu btn-toggle"></a>
		<div class="menu popup-block">
			<ul id="horizontal-multilevel-menu">
				<li class="main-page"><a href="/s2/">
						<?= GetMessage("MAIN") ?>
					</a></li>
				<?
				$previousLevel = 0;
				foreach ($arResult as $arItem):
					?>

					<? $menu_top_class = trim($APPLICATION->GetDirProperty('menu_top_class', $arItem["LINK"])); ?>

					<? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
						<?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
					<? endif ?>

					<? if ($arItem["IS_PARENT"]): ?>

						<? if ($arItem["DEPTH_LEVEL"] == 1): ?>
							<li>
								<a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?> 
									<? if ($menu_top_class): ?><?= $menu_top_class ?><? endif ?>">
									<?= $arItem["TEXT"] ?>
								</a>
								<ul>
								<? else: ?>
									<li <? if ($arItem["SELECTED"]): ?> class="item-selected" <? endif ?>>

										<a href="<?= $arItem["LINK"] ?>" class="parent">
											<?= $arItem["TEXT"] ?>
										</a>

										<ul>
										<? endif ?>

										<? if (isset($arItem["PARAMS"]["DESCRIPTION"])): ?>
											<div class="menu-text">
												<?= $arItem["PARAMS"]["DESCRIPTION"]; ?>
											</div>
										<? endif; ?>

									<? else: ?>

										<? if ($arItem["PERMISSION"] > "D"): ?>

											<? if (isset($arItem["PARAMS"]["DESCRIPTION"])): ?>
												<div class="menu-text">
													<?= $arItem["PARAMS"]["DESCRIPTION"]; ?>
												</div>
											<? endif; ?>

											<? if ($arItem["DEPTH_LEVEL"] == 1): ?>
												<li><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?> 
															<? if ($menu_top_class): ?><?= $menu_top_class ?><? endif ?>"><?= $arItem["TEXT"] ?></a>
												</li>
											<? else: ?>
												<li <? if ($arItem["SELECTED"]): ?> class="item-selected" <? endif ?>><a
														href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
												</li>
											<? endif ?>

										<? else: ?>

											<? if ($arItem["DEPTH_LEVEL"] == 1): ?>
												<li><a href=""
														class="<? if ($arItem["SELECTED"]): ?>root-item-selected<? else: ?>root-item<? endif ?>"
														title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
											<? else: ?>
												<li><a href="" class="denied" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
											<? endif ?>

										<? endif ?>

									<? endif ?>

									<? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

								<? endforeach ?>

								<? if ($previousLevel > 1): //close last item tags?>
									<?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
								<? endif ?>

							</ul>
						<? endif ?>
						<a href="" class="btn-close"></a>
	</div>

	<div class="menu-overlay"></div>
</div>