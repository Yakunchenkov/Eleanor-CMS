<?php
return array(
	#Для /addons/admin/modules/blocks.php
	'lab'=>'Список всех блоков',
	'ipages'=>'Идентификация страниц',
	'bpos'=>'Группы блоков',
	'delc'=>'Подтверждение удаления',
	'bydef'=>'По умолчанию',
	'editing'=>'Редактирование блока',
	'adding'=>'Добавление блока',
	'empty_title'=>function($l){return'Не заполнено название блока'.($l ? ' (для '.$l.')' : '');},
	'editingi'=>'Редактирование идентификатора страницы',
	'addingi'=>'Добавление идентификатора страницы',
	'notitle'=>function($l){return'Вы не ввели название идентификатора страницы'.($l ? ' (для '.$l.')' : '');},
	'errcode'=>'В коде идентификации допущена ошибка: %s',
);