<?php
return array(
	#Для Classes/UserAccount.php
	'wait_new_act'=>function($h){return'Вам было повторно выслано письмо с инструкциями по активации учетной записи. Напоминаем: Вам необходимо активировать Вашу учетную запись, либо по истечении '.$h.Russian::Plural($h,array(' часа',' часов',' часов')).', она будет удалена. Если у Вас возникли трудности - пожалуйста, свяжитесь с администрацией.';},
	'please_activate'=>function($h,$l){return 'Вы до сих пор не активировали Вашу учетную запись! Сделайте это, потому что через '.$h.($h!=11 && $h%10==1  ? ' часов' : ' часа').' часов Ваша учетная запись будет автоматически удалена. <a href="'.$l.'">Повторно выслать письмо активации.</a>';},
	'group'=>'Группа',
	'descr'=>'Описание',
	'who'=>'Кто',
	'activity'=>'Активность',
	'pl'=>'Где',
	'snf'=>'Сессии не найдены',
	'guest'=>'Гость',
	'main'=>'Главная',
	'settings'=>'Настройка профиля',
	'captcha'=>'Защитный код',
	'captcha_'=>'введите символы с картинки',
	'ENTER_CAPTCHA'=>'Пожалуйста, введите защитный код',
	'WRONG_CAPTCHA'=>'Защитный код введен с ошибкой',
	'WRONG_PASSWORD'=>'Неправильный пароль',
	'NOT_FOUND'=>'Пользователь не найден',
	'PASSWORD_MISMATCH'=>'Пароли не совпадают!',
	'EMAIL_EXISTS'=>'Введенный e-mail уже используется другим пользователем',
	'NAME_BLOCKED'=>'Данный ник заблокирован',
	'EMAIL_ERROR'=>'Введен недопустимый e-mail!',
	'EMAIL_BLOCKED'=>'Введенный e-mail заблокирован',
	'NAME_EXISTS'=>'Этот ник уже используется другим пользователем!',
	'EMPTY_NAME'=>'Введите имя пользователя',
	'EMPTY_EMAIL'=>'Введите e-mail',
	'reg_off'=>'Извините, регистрация пользователей отключена.',
	'external_reg'=>'%s, вам нужно пройти регистрацию на сайте. В дальнейшем Вы сможете входить на сайт сразу.',
	'name'=>'Логин',
	'enter_g_name'=>'Введите желаемый логин',
	'name_'=>'Должен состоять из символов A-z, 0-9, А-я начинаться с буквы, заканчиваться буквой или цифрой, содержать не менее 4 символов',
	'enter_g_email'=>'Введите адрес электронной почты',
	'email_'=>'Регистрацию можно осуществить лишь с настоящим e-mail адресом.',
	'check'=>'Проверить',
	'pass'=>'Пароль',
	'pass_'=>'Пароль можно не вводить - тогда система сгенерирует его автоматически. Но если решили вводить - не рекомендуем использовать простые пароли',
	'rpass'=>'Повторите пароль',
	'do_reg'=>'Зарегистрироваться',
	'success_reg'=>'Вы успешно зарегистрировались.',
	'wait_act_text'=>function($h){return'Вы успешно зарегистрировались. Однако для завершения регистрации, Вам необходимо активировать Вашу учетную запись. Ссылка для активации аккаунта была выслана на введённый Вами e-mail - Вам нужно просто перейти по ней. Ссылка действительна в течении '.$h.Russian::Plural($h,array(' часа',' часов',' часов')).' часов.';},
	'wait_act_admin'=>'Вы успешно зарегистрировались. Все новосозданные учетные записи проходят ручную активацию администратором.',
	'wait_pass1_text'=>'Информация для проложения выслана Вам на e-mail.',
	'EMPTY_FIELDS'=>'Вы ничего не заполнили!',
	'ACCOUNT_NOT_FOUND'=>'Учетная запись с такими данными не найдена',
	'notnoem'=>'Если Вы не помните ни логина ни e-mail, с чего Вы взяли, что вы тут зарегистрированы? - Зарегистрируйтесь еще раз.',
	'enterna'=>'Введите Ваш логин',
	'enterem'=>'Введите Ваш e-mail',
	'fogotname'=>'Забыли логин?',
	'fogotemail'=>'Вспомнили логин?',
	'ent_newp'=>'Введите новый пароль',
	'rep_newp'=>'Повторите новый пароль',
	'new_pass_sent'=>'Новый пароль выслан вам на e-mail.',
	'pass_changed'=>'Ваш пароль успешно изменен!',
	'ractletter'=>'Повторно выслать письмо активации',
	'activation_ok'=>'Ваша учетная запись успешно активирована!',
	'activation_err'=>'Учетная запись не активирована. Возможно, Вы перешли по недействительной ссылке.',
	'EMAIL_BROKEN_LINK'=>'E-mail не может быть изменен. Возможно, Вы перешли по недействительной ссылке',
	'EMAIL_YOURS'=>'Вы ввели свой текущий e-mail',
	'change_email'=>'Сменить e-mail',
	'curr_email'=>'Ваш текущий e-mail',
	'new_email'=>'Новый e-mail',
	'continue'=>'Продолжить',
	'email_changed'=>'Ваш е-mail успешно изменен!',
	'wait_change1'=>'Для активации нового e-mail, на старый e-mail вам отправлено подтверждение. Пожалуйста, проверьте почту.',
	'wait_change2'=>'Для окончательной активации нового e-mail, вам отправлено подтверждение и на него. Пожалуйста, проверьте почту.',
	'email_success'=>'Ваш e-mail успешно изменен!',
	'change_pass'=>'Сменить пароль',
	'WRONG_OLD_PASSWORD'=>'Старый пароль неверный!',
	'your_curr_pass'=>'Ваш текущий пароль',
	'en_ycp'=>'Введите Ваш текущий пароль',
	'new_pass_me'=>'Новый пароль',
	'optssaved'=>'Настройки успешно сохранены',
	'SITE_ERROR'=>'Адрес сайта введен некорректно!',
	'AVATAR_NOT_EXISTS'=>'Выбранного аватара не существует',
	'SHORT_ICQ'=>'Номер ICQ должен содержать как минимум 5 цифр',
	'avatar'=>'Аватар',
	'alocation'=>'Размещение',
	'apersonal'=>'Загрузить',
	'agallery'=>'Из галереи',
	'amanage'=>'Управление',
	'gallery_select'=>'Выбрать',
	'noavatar'=>'Нет аватара',
	'nickname'=>'Ник',
	'registered'=>'Зарегистрировался',
	'last_visit'=>'Последний визит',
	'maingroup'=>'Основная группа',
	'othgroups'=>'Вторичные группы',
	'no_avatars'=>'Доступных аватаров нет',
	'cancel_avatar'=>'Отменить',
	'togals'=>'К галереям',
	'aexternal'=>'Успешно добавлена связка с %s.',
	'add'=>'Добавить',
	'datee'=>'Дата истечения',
	'csnd'=>'Текущую сессию нельзя удалять',
	'sessions'=>'Открытые сессии',

	'twitter.com'=>'Twitter',
	'www.facebook.com'=>'Facebook',
	'openid.yandex.ru/server'=>'Яндекс',
	'vkontakte.ru'=>'VK',

	#Ajax
	'noavatars'=>'Доступных аватаров нет',
	'cancel'=>'Отменить',
	'togals'=>'К галереям',
);