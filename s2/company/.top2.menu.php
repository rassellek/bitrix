<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>
<?
$aMenuLinks = array(
	array(
		"Руководство",
		"management.php",
		array(),
		array(),
		""
	),
	array(
		"Миссия и стратегия",
		"mission.php",
		array(),
		array(),
		"\$USER->IsAuthorized()"
	),
	array(
		"История",
		"history.php",
		array(),
		array(),
		""
	),
	array(
		"Вакансии",
		"vacancies.php",
		array(),
		array(),
		""
	)
);
?>