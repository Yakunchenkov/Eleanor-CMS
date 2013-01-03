<?php
return array(
	#Для user/index.php
	'n'=>'Новини',
	'my'=>'Мої новини',
	'deleted'=>'Успішно видалено',
	'delc'=>'Підтвердження видалення',
	'search_limit'=>function($s1,$s2){ return'Використовувати пошук можна раз у '.$s1.Ukrainian::Plural($s1,array(' секунду',' секунди',' секунд')).'! Почекайте ще '.$s2.Ukrainian::Plural($s2,array(' секунду',' секунди',' секунд')).'.'; },
	'sym_limit'=>function($ch){ return'Пошуковий запит повинен бути не менше '.$ch.Ukrainian::Plural($ch,array(' символу',' символи',' символів')).'!'; },
	'notofind'=>'Не вказані критерії пошуку',
	'categs'=>'Категорії',
	'tags'=>'Теги',
	'search'=>'Пошук',
	'from'=>'Новини з категорії &quot;%s&quot;',
	'for'=>'Новини за %s',
	'wt'=>'Новини з тегом &quot;%s&quot;',

	#Для user/addedit.php
	'adding'=>'Додавання новини',
	'editing'=>'Редагування новини',
	'FLOOD_LIMIT'=>'Додавати новини можна раз у %s секунд! Почекайте ще %s секунд.',
	'ERROR_END_DATE'=>'Поле &quot;Доступна до&quot; заповнено некоректно',
	'ERROR_END_DATE_IN_PAST'=>'Дата &quot;Доступна до&quot; повинна бути майбутня',
	'EMPTY_TITLE'=>function($l){return'Заголовок не може бути порожнім'.($l ? ' (для '.$l.')' : '');},
	'EMPTY_TEXT'=>function($l){return'Текст новини не може бути порожнім'.($l ? ' (для '.$l.')' : '');},
	'waitmod'=>'Очікування модерації',
	'nssadded'=>'Новина успішно додана',
	'nssedit'=>'Новина успішно відредагована',
	'FILL_AUTHOR'=>'Будь ласка, представтесь',
);