<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Список сравниваемых товаров");
?>



<? $APPLICATION->IncludeComponent("bitrix:catalog.compare.result", "compare", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BASKET_URL" => "/personal/cart/",	// URL, ведущий на страницу с корзиной покупателя
		"CONVERT_CURRENCY" => "N",	// Показывать цены в одной валюте
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_CODE#.php",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",	// Выводить список элементов инфоблока
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD_BOX" => "name",	// По какому полю сортируем список элементов
		"ELEMENT_SORT_FIELD_BOX2" => "id",	// Поле для второй сортировки списка элементов
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER_BOX" => "asc",	// Порядок сортировки списка элементов
		"ELEMENT_SORT_ORDER_BOX2" => "desc",	// Порядок второй сортировки списка элементов
		"FIELD_CODE" => array(	// Поля
			0 => "DETAIL_PICTURE",
		),
		"HIDE_NOT_AVAILABLE" => "N",	// Не отображать в списке товары, которых нет на складах
		"IBLOCK_ID" => "4",	// Инфоблок
		"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
		"NAME" => "CATALOG_COMPARE_LIST",	// Уникальное имя для списка сравнения
		"OFFERS_FIELD_CODE" => array(	// Поля предложений
			0 => "",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(	// Свойства предложений
			0 => "",
			1 => "",
		),
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "SOSTAV",
			2 => "PREDNAZNACHENIE",
			3 => "VYSOTA_M",
			4 => "DOPOLNITELNYY_DEKOR",
			5 => "KONSTRUKTSIYA",
			6 => "MATERIAL",
			7 => "KOLICHESTVO_VETOK_SHT",
			8 => "DIAMETR_M",
			9 => "ZASNEZHENNAYA",
			10 => "",
		),
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"TEMPLATE_THEME" => "yellow",	// Цветовая тема
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
); ?>

<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>