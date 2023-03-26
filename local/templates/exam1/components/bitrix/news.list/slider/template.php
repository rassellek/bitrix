<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

$this->setFrameMode(true);
?>
<div class="item-wrap">
    <div class="rew-footer-carousel">

        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br />
        <? endif; ?>

        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction(
                $arItem['ID'], $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
            );
            $this->AddDeleteAction(
                $arItem['ID'], $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
            );
            ?>

            <div class="item">
                <div class="side-block side-opin" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <div class="inner-block">
                        <div class="title">
                            <div class="photo-block">
                                <? if ($arItem["PREVIEW_PICTURE"]): ?>
                                    <?
                                    $arImageFile = CFile::ResizeImageGet(
                                        $arItem["PREVIEW_PICTURE"]["ID"],
                                        ['width' => 39, 'height' => 39],
                                        BX_RESIZE_IMAGE_PROPORTIONAL,
                                        true
                                    );
                                    $src = $arImageFile['src'];
                                    ?>
                                <? else: ?>
                                    <?
                                    $src = SITE_TEMPLATE_PATH . '/img/no_photo_left_block.jpg';
                                    ?>
                                <? endif; ?>
                                <img src="<?= $src ?>" alt="">
                            </div>

                            <div class="name-block">
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                                        <?= $arItem["NAME"] ?>
                                    <? endif; ?>
                                </a>
                            </div>

                            <div class="pos-block">
                                <? //<Должность> ?>
                                <? if ($arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]): ?>
                                    <?= ucfirst($arItem["DISPLAY_PROPERTIES"]["POSITION"]["DISPLAY_VALUE"]); ?>,
                                <? endif ?>
                                <? //<Название компании> ?>
                                <? if ($arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]): ?>
                                    <?= $arItem["DISPLAY_PROPERTIES"]["COMPANY"]["DISPLAY_VALUE"]; ?>
                                <? endif ?>
                            </div>
                        </div>

                        <? //<Показывать первые 150 символов текста отзыва из анонса> ?>
                        <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                            <div class="text-block">
                                <?= $arItem["PREVIEW_TEXT"] ?>
                            </div>
                        <? endif; ?>
                    </div>
                </div>
            </div>
        <? endforeach; ?>

        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br />
            <?= $arResult["NAV_STRING"] ?>
        <? endif; ?>
    </div>
</div>