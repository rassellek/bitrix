<?
AddEventHandler("main", "OnBeforeUserRegister", array("MyClass", "OnBeforeUserRegisterHandler"));
class MyClass
{
    function OnBeforeUserRegisterHandler(&$arFields)
    {
        if ($arFields["UF_BAZA"] > 0) //Если поле UF_BAZA заполнено 
        {
            $arFields["GROUP_ID"][] = 7;
        } else {
            $arFields["GROUP_ID"][] = 6;
        }
    }
}
?>