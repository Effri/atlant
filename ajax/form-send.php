<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
$arMailFields = array(
    'EMAIL'=> $_POST['email'],
);
$ind = CEvent::Send('FORM_CALL', 's1', $arMailFields);

CModule::IncludeModule('iblock');
$el = new CIBlockElement;

$PROP = array();
$PROP[227] = $_POST["email"]; //электронная почта

$arLoadProductArray = Array(
    "IBLOCK_ID"      => 24,
    "PROPERTY_VALUES"=> $PROP,
    "NAME"           => "Подписка на рассылку",
    "ACTIVE"         => "Y"
);

$el->Add($arLoadProductArray);

//if($ind && $PRODUCT_ID)
//{
//    echo '1';
//
//}

?>
