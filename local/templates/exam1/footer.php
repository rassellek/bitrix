<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
IncludeTemplateLangFile(__FILE__);
?>

</div>
</div>
<!-- /content -->
<!-- side -->
<div class="side">

	<? $APPLICATION->IncludeComponent(
		"bitrix:menu",
		"left",
		array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(""),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "left",
			"USE_EXT" => "Y"
		)
	); ?>

	<!-- side anonse -->

	<? $APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"anonse",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "inc",
			"EDIT_TEMPLATE" => "",
		)
	); ?>

	<!-- /side anonse -->

	<!-- side wrap -->
	<div class="side-wrap">
		<div class="item-wrap">
			<!-- side action -->
			<div class="side-block side-action">
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action-bg.jpg" alt="" class="bg">
				<div class="photo-block">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/side-action.jpg" alt="">
				</div>
				<div class="text-block">
					<div class="title">Акция!</div>
					<p>Мебельная полка всего за 560 <span class="r">a</span>
					</p>
				</div>
				<a href="" class="btn-more">подробнее</a>
			</div>
			<!-- /side action -->
		</div>

		<!-- footer rew slider box -->

		<? $APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"slider",
			array(
				"ACTIVE_DATE_FORMAT" => "j F Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "ID",
					1 => "CODE",
					2 => "XML_ID",
					3 => "NAME",
					4 => "TAGS",
					5 => "SORT",
					6 => "PREVIEW_TEXT",
					7 => "PREVIEW_PICTURE",
					8 => "DETAIL_TEXT",
					9 => "DETAIL_PICTURE",
					10 => "DATE_ACTIVE_FROM",
					11 => "ACTIVE_FROM",
					12 => "DATE_ACTIVE_TO",
					13 => "ACTIVE_TO",
					14 => "SHOW_COUNTER",
					15 => "SHOW_COUNTER_START",
					16 => "IBLOCK_TYPE_ID",
					17 => "IBLOCK_ID",
					18 => "IBLOCK_CODE",
					19 => "IBLOCK_NAME",
					20 => "IBLOCK_EXTERNAL_ID",
					21 => "DATE_CREATE",
					22 => "CREATED_BY",
					23 => "CREATED_USER_NAME",
					24 => "TIMESTAMP_X",
					25 => "MODIFIED_BY",
					26 => "USER_NAME",
					27 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "12",
				"IBLOCK_TYPE" => "rew",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "2",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Отзыв",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "POSITION",
					1 => "COMPANY",
					2 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "NAME",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "slider"
			),
			false
		); ?>

		<!-- / footer rew slider box -->
	</div>
	<!-- /side wrap -->
</div>
<!-- /side -->
</div>
<!-- /content box -->
</div>
<!-- /page -->
<div class="empty"></div>
</div>
<!-- /wrap -->
<!-- footer -->
<footer class="footer">
	<div class="inner-wrap">
		<nav class="main-menu">
			<div class="item">
				<div class="title-block">О магазине</div>
				<? $APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "bottom",
						"USE_EXT" => "N"
					)
				); ?>
			</div>
			<div class="item">
				<div class="title-block">Каталог товаров</div>
				<ul>
					<li><a href="">Кухни</a>
					</li>
					<li><a href="">Гарнитуры</a>
					</li>
					<li><a href="">Спальни и матрасы</a>
					</li>
					<li><a href="">Столы и стулья</a>
					</li>
					<li><a href="">Раскладные диваны</a>
					</li>
					<li><a href="">Кресла</a>
					</li>
					<li><a href="">Кровати и кушетки</a>
					</li>
					<li><a href="">Тумобчки и прихожие</a>
					</li>
					<li><a href="">Аксессуары</a>
					</li>
					<li><a href="">Каталоги мебели</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="contacts-block">
			<div class="title-block">
				<?= GetMessage('CONTACT_INFO') ?>
			</div>
			<div class="loc-block">
				<div class="address">ул. Летняя, стр.12, офис 512</div>
				<div class="phone">

					<? $APPLICATION->IncludeComponent(
						"bitrix:main.include",
						"",
						array(
							"AREA_FILE_SHOW" => "file",
							"AREA_FILE_SUFFIX" => "",
							"EDIT_TEMPLATE" => "",
							"PATH" => "/local/include/tel.php"
						)
					); ?>

				</div>
			</div>
			<div class="main-soc-block">
				<a href="" class="soc-item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc01.png" alt="">
				</a>
				<a href="" class="soc-item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc02.png" alt="">
				</a>
				<a href="" class="soc-item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc03.png" alt="">
				</a>
				<a href="" class="soc-item">
					<img src="<?= SITE_TEMPLATE_PATH ?>/img/icons/soc04.png" alt="">
				</a>
			</div>
			<div class="copy-block">© 2000 - 2012 "Мебельный магазин"</div>
		</div>
	</div>
</footer>
<!-- /footer -->
</body>

</html>