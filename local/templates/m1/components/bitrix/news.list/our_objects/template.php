<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!--<span class="btn-inline black mixitup-control-active" data-filter="all">Все проекты</span>-->
    <div class="sections head-block top controls clearfix">
        <div class="item-link shadow border active">
            <div class="title font_upper_md">

                <button class="btn-inline black" type="button" data-filter="all">Все
                    проекты
                </button>
            </div>
        </div>
        <div class="item-link shadow border">
            <div class="title font_upper_md btn-inline black">
                <button class="btn-inline black" type="button" data-filter=".business_automation">Автоматизация бизнеса</button>
            </div>
        </div>
        <div class="item-link shadow border">
            <div class="title font_upper_md btn-inline black">
                <button class="btn-inline black" type="button" data-filter=".business_management">Управление бизнесом</button>
            </div>
        </div>
        <div class="item-link shadow border">
            <div class="title font_upper_md btn-inline black">
                <button class="btn-inline black" data-filter=".business_3">Киберпреступления</button>
            </div>
        </div>
    </div>



<div class="mixitup-container mixitup-ready">
    <div class="item-views news-items projects type_4 linked container" data-ref="mixitup-container">
        <div class="items">
<?foreach($arResult["ITEMS"] as $arItem):?>
            <div class="item clearfix light col-md-4 col-sm-4 col-xs-6 <?=$arItem['PROPERTIES']['FILTER_NAME']['VALUE']?>" data-ref="mixitup-target">
                <div class="wrap" id="bx_3218110189_1662">
                    <div class="image">
                        <div class="wrap"
                             style="background:url('<?=CFile::GetPath($arItem['PROPERTIES']['IMG']['VALUE']);?>') top center / cover no-repeat;">
                        </div>
                    </div>
                    <div class="body-info">
                        <div class="section_name"><?=$arItem['PROPERTIES']['SECTION_NAME']['VALUE']?>
                        </div>
                        <div class="title"><?=$arItem['PROPERTIES']['SECTION_TITLE']['VALUE']?>
                        </div>
                    </div>
                    <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>"></a>
                </div>
            </div>
<?endforeach;?>
        </div>
        <div class="pagination_nav">
        </div>
    </div>
</div>
