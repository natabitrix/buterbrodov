<form id="cookie_userconsent">
<?$APPLICATION->IncludeComponent("bitrix:main.userconsent.request", "", Array(
	"AUTO_SAVE" => "Y",	// Сохранять автоматически факт согласия
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"ID" => "2",	// Соглашение
		"IS_CHECKED" => "N",	// Галка согласия проставлена по умолчанию
		"IS_LOADED" => "Y",	// Загружать текст соглашения сразу
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</form>

<?if($ERROR_404!="Y"):?>


<?endif?>

</div>
<!--.wrapper-->


</body>

</html>