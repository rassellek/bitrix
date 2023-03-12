<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<? if (!empty($arResult)): ?>

	<div class="col-lg-4 mb-5 mb-lg-0">
		<div class="row mb-5">
			<div class="col-md-12">
				<h3 class="footer-heading mb-4">
					<?= GetMessage('NAV') ?>
				</h3>
			</div>
			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">
					<? for ($i = 0; $i <= 3; $i++): ?>
						<li><a href="<?= $arResult[$i]["LINK"] ?>"><?= $arResult[$i]["TEXT"] ?></a>
						<? endfor ?>
				</ul>
			</div>
			<div class="col-md-6 col-lg-6">
				<ul class="list-unstyled">
					<? for ($i = 4; $i <= sizeof($arResult); $i++): ?>
						<li><a href="<?= $arResult[$i]["LINK"] ?>"><?= $arResult[$i]["TEXT"] ?></a>
						<? endfor ?>
				</ul>
			</div>
			<div>
			</div>
		</div>
	</div>
	<div class="menu-clear-left"></div>
<? endif ?>