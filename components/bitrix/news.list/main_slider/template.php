<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<div>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


	//$date = $arItem['PROPERTIES']['DATE']['VALUE'] ? $arItem['PROPERTIES']['DATE']['VALUE'] : false;
	$date = $arItem['ACTIVE_FROM'] ? $arItem['ACTIVE_FROM'] : false;
	
	//$link = $arItem['DETAIL_PAGE_URL'];
	$link = $arItem["PROPERTIES"]["LINK"]["VALUE"];

	//$img = $arItem['PREVIEW_PICTURE'] ? CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'],array("width" => 1440, "height" => 750),BX_RESIZE_IMAGE_EXACT) : false;
	
	$img_source = $arItem["PROPERTIES"]["IMAGE"]["VALUE"];
	$img_width = 1440;
	$img_height = 750;
	$tablet_img_width = 800;
	$mobile_img_width = 600;
	$alt = $arItem['NAME'];
	$class = 'w-100';
	$params = ' loading="lazy"';
	$picture = false;
	
	if($img_source)
	{
		$picture = Picture2($img_source, $img_width, $img_height, $tablet_img_width, $mobile_img_width, $alt, $class, $params);
	}


	//printArr($arItem);
	?>



<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">

	<?=FormatDate('j F, D', strtotime($date))?>
	<br>
	<a href="<?=$link?>"><?=$arItem['NAME']?></a>
	<br>
	<?if($picture):?>
	<?=$picture?>
	<br>
	<?endif?>
	<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/arrow-right.svg" alt="&rarr;" class="icon icon-r">

</div>
<?endforeach;?>


</div>

