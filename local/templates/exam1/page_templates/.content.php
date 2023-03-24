<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>

<?
IncludeTemplateLangFile(__FILE__);

$TEMPLATE["standard.php"] = array("name" => GetMessage("standart"), "sort" => 1);

$TEMPLATE["inner.php"] = array("name" => GetMessage("inner"), "sort" => 1);
?>