<?php
return array(
	#Для admin/index.php
	'list'=>'Список статичних сторінок',
	'fp'=>'Файлові сторінки',
	'parent'=>'Батько',
	'name'=>'Назва',
	'content'=>'Вміст',
	'pos'=>'Позиція',
	'pos_'=>'Залиште порожнім для додавання в кінець',
	'activate'=>'Активувати',
	'adding'=>'Додавання статичної сторінки',
	'editing'=>'Редагування статичної сторінки',
	'empty_title'=>function($l){return'Не задано назву'.($l ? ' (для '.$l.')' : '');},
	'empty_text'=>function($l){return'Не задано вміст'.($l ? ' (для '.$l.')' : '');},
	'delc'=>'Підтвердження видалення',
);