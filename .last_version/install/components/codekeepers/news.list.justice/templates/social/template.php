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

<ul class="icon-follow">
	<?if($GLOBALS["global_info"]["social1_link"]):?>
		<?$path = CFile::GetPath($GLOBALS["global_info"]["social1_icon"]);?>

		<li>
			<a class="icon" href="<?=$GLOBALS["global_info"]["social1_link"];?>">
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?=$path?>>
				<?endif;?>
			</a>
		</li>
	<?endif;?>

	<?if($GLOBALS["global_info"]["social2_link"]):?>
		<?$path = CFile::GetPath($GLOBALS["global_info"]["social2_icon"]);?>

		<li>
			<a class="icon" href="<?=$GLOBALS["global_info"]["social2_link"];?>">
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?=$path?>>
				<?endif;?>
			</a>
		</li>
	<?endif;?>

	<?if($GLOBALS["global_info"]["social3_link"]):?>
		<?$path = CFile::GetPath($GLOBALS["global_info"]["social3_icon"]);?>

		<li>
			<a class="icon" href="<?=$GLOBALS["global_info"]["social3_link"];?>">
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?=$path?>>
				<?endif;?>
			</a>
		</li>
	<?endif;?>

	<?if($GLOBALS["global_info"]["social4_link"]):?>
		<?$path = CFile::GetPath($GLOBALS["global_info"]["social4_icon"]);?>

		<li>
			<a class="icon" href="<?=$GLOBALS["global_info"]["social4_link"];?>">
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?=$path?>>
				<?endif;?>
			</a>
		</li>
	<?endif;?>

	<?if($GLOBALS["global_info"]["social5_link"]):?>
		<?$path = CFile::GetPath($GLOBALS["global_info"]["social5_icon"]);?>

		<li>
			<a class="icon" href="<?=$GLOBALS["global_info"]["social5_link"];?>">
				<?if (stristr($path, '.svg')):?>
					<?$svg_file = file_get_contents( $_SERVER["DOCUMENT_ROOT"].$path);?>
					<?print_r($svg_file);?>
				<?else:?>
					<img src=<?=$path?>>
				<?endif;?>
			</a>
		</li>
	<?endif;?>
</ul>

