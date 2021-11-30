<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Наши объекты");
?><?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	".default",
	Array(
		"API_KEY" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(0=>"ZOOM",1=>"MINIMAP",2=>"TYPECONTROL",3=>"SCALELINE",),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:59.93500315476705;s:10:\"yandex_lon\";d:30.32373904220504;s:12:\"yandex_scale\";i:10;}",
		"MAP_HEIGHT" => "500",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(0=>"ENABLE_SCROLL_ZOOM",1=>"ENABLE_DBLCLICK_ZOOM",2=>"ENABLE_DRAGGING",)
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"our_objects",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "25",
		"IBLOCK_TYPE" => "content_m1",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
		        0 => "IMG",
                1 => "FILTER_NAME",
            2 => "SECTION_NAME",
    3 => "SECTION_TITLE",
    4 => "LINK",
            "",
            ),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>&nbsp;
    <script>
        var containerEl = document.querySelector('[data-ref~="mixitup-container"]');

        var mixer = mixitup(containerEl, {
            selectors: {
                target: '[data-ref~="mixitup-target"]'
            }
        });
    </script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>