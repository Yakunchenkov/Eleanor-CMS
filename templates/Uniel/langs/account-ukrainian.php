<?php
return array(
	#Для Classes/UserAccount.php
	'wait_new_act'=>function($h){return'Вам було повторно надіслано листа з інструкціями по активації облікового запису. Нагадуємо: Вам необхідно активувати Ваш обліковий запис, або після закінчення '.$h.($h!=11 && $h%10==1 ? ' годин' : ' години').' годин, вона буде видалена. Якщо у Вас виникли труднощі - будь ласка, зв\'яжіться з адміністрацією.';},
	'please_activate'=>function($h,$l){return 'Ви до цих пір не активували ваш профіль! Зробіть це, тому що через '.$h.($h!=11 && $h%10==1 ? ' годин' : ' години').' Ваш обліковий запис буде автоматично видалена. <a href="'.$l.'">Повторно вислати лист активації.</a>';},
	'group'=>'Група',
	'descr'=>'Опис',
	'who'=>'Хто',
	'activity'=>'Активність',
	'pl'=>'Де',
	'snf'=>'Сессії не знайдено',
	'guest'=>'Гість',
	'main'=>'Головна',
	'settings'=>'Налаштування профілю',
	'captcha'=>'Захисний код',
	'captcha_'=>'введіть символи з картинки',
	'ENTER_CAPTCHA'=>'Будь ласка, введіть захисний код',
	'WRONG_CAPTCHA'=>'Захисний код введений з помилкою',
	'WRONG_PASSWORD'=>'Неправильний пароль',
	'NOT_FOUND'=>'Користувач не знайдений',
	'PASSWORD_MISMATCH'=>'Паролі не співпадають!',
	'EMAIL_EXISTS'=>'Введений e-mail вже використовується іншим користувачем.',
	'NAME_BLOCKED'=>'Даний нік заблоковано',
	'EMAIL_ERROR'=>'Введено неприпустимий e-mail!',
	'EMAIL_BLOCKED'=>'Введений e-mail заблокований.',
	'NAME_EXISTS'=>'Цей нік вже використовується іншим користувачем!',
	'EMPTY_NAME'=>'Введіть ім\'я користувача',
	'EMPTY_EMAIL'=>'Введіть e-mail',
	'reg_off'=>'Вибачте, реєстрація користувачів відключена.',
	'external_reg'=>'%s, вам потрібно пройти реєстрацію на сайті. Надалі Ви зможете входити на сайт відразу.',
	'name'=>'Логін',
	'enter_g_name'=>'Перевірити доступність',
	'name_'=>'Повинен складатися із символів Az, 0-9, А-я починатися з літери, закінчуватися літерою або цифрою, містити не менше 4 символів.',
	'enter_g_email'=>'Введіть e-mail',
	'email_'=>'Реєстрацію можна здійснити лише за цим e-mail адресою.',
	'check'=>'Перевірити',
	'pass'=>'Пароль',
	'pass_'=>'Пароль можна не вводити - тоді система згенерує його автоматично. Але якщо вирішили вводити - не рекомендуємо використовувати прості паролі.',
	'rpass'=>'Повторіть пароль',
	'do_reg'=>'Зареєструватися',
	'success_reg'=>'Ви успішно зареєструвалися! Зараз Вас перенаправить в особистий кабінет для налаштування персональних даних.',
	'wait_act_text'=>function($h){return'Ви успішно зареєструвалися. Однак для завершення реєстрації, Вам необхідно активувати Ваш обліковий запис. Посилання для активації облікового запису була вислана на введений Вами e-mail - Вам потрібно просто перейти по ній. Посилання дійсна протягом% s годин. Зараз Вас перенаправить в особистий кабінет для налаштування персональних даних.';},
	'wait_act_admin'=>'Ви успішно зареєструвалися. Всі новостворені облікові записи проходять ручну активацію адміністратором. Чекайте ... Зараз Вас перенаправить в особистий кабінет для налаштування персональних даних.',
	'wait_pass1_text'=>'Інформація для прокладання вислана Вам на e-mail.',
	'EMPTY_FIELDS'=>'Ви нічого не заповнили!',
	'ACCOUNT_NOT_FOUND'=>'Обліковий запис з такими даними не знайдена',
	'notnoem'=>'Якщо Ви не пам\'ятаєте ні логіна ні e-mail, з чого Ви взяли, що ви тут зареєстровані? - Зареєструйтеся ще раз.',
	'enterna'=>'Введіть Ваш логін',
	'enterem'=>'Введіть Ваш e-mail',
	'fogotname'=>'Забули логін?',
	'fogotemail'=>'Згадали логін?',
	'ent_newp'=>'Введіть новий пароль',
	'rep_newp'=>'Повторіть новий пароль',
	'new_pass_sent'=>'Новий пароль висланий вам на e-mail.',
	'pass_changed'=>'Ваш пароль успішно змінено!',
	'ractletter'=>'Повторно вислати лист активації',
	'activation_ok'=>'Ваш обліковий запис успішно активовано!',
	'activation_err'=>'Обліковий запис не активовано. Можливо, Ви перейшли недійсною посиланням.',
	'EMAIL_BROKEN_LINK'=>'E-mail не може бути змінений. Можливо, Ви перейшли недійсною посиланням.',
	'EMAIL_YOURS'=>'Ви ввели свій поточний e-mail',
	'change_email'=>'Змінити e-mail',
	'curr_email'=>'Ваш поточний e-mail',
	'new_email'=>'Новий e-mail',
	'continue'=>'Продовжити',
	'email_changed'=>'Ваш е-mail успішно змінений!',
	'wait_change1'=>'Для активації нового e-mail, на старий e-mail вам надіслано підтвердження. Будь ласка, перевірте пошту.',
	'wait_change2'=>'Для остаточної активації нового e-mail, вам надіслано підтвердження і на нього. Будь ласка, перевірте пошту.',
	'email_success'=>'Ваш e-mail успішно змінений!',
	'change_pass'=>'Змінити пароль',
	'WRONG_OLD_PASSWORD'=>'Старий пароль невірний!',
	'your_curr_pass'=>'Ваш поточний пароль',
	'en_ycp'=>'Введіть Ваш поточний пароль',
	'new_pass_me'=>'Новий пароль',
	'optssaved'=>'Налаштування успішно збережені',
	'SITE_ERROR'=>'Адреса сайту введена некоректно!',
	'AVATAR_NOT_EXISTS'=>'Вибраного аватара не існує',
	'SHORT_ICQ'=>'Номер ICQ повинен містити як мінімум 5 цифр',
	'avatar'=>'Аватар',
	'alocation'=>'Розміщення',
	'apersonal'=>'Завантажити',
	'agallery'=>'З галереї',
	'amanage'=>'Управління',
	'gallery_select'=>'Вибрати',
	'noavatar'=>'Немає аватара',
	'nickname'=>'Нік',
	'registered'=>'Зареєструвався',
	'last_visit'=>'Останній візит',
	'maingroup'=>'Основна група',
	'othgroups'=>'Вторинні групи',
	'no_avatars'=>'Доступних аватарів немає',
	'cancel_avatar'=>'Скасувати',
	'togals'=>'До галерей',
	'aexternal'=>'Успішно додана зв\'язка з %s',
	'add'=>'Додати',
	'datee'=>'Дата закінчення',
	'csnd'=>'Поточну сесію не можна видаляти',
	'sessions'=>'Відкриті сессії',

	'twitter.com'=>'Twitter',
	'www.facebook.com'=>'Facebook',
	'openid.yandex.ru/server'=>'Яндекс',
	'vkontakte.ru'=>'VK',
	#Ajax
	'noavatars'=>'Доступних аватарів немає',
	'cancel'=>'Скасувати',
	'togals'=>'До галерей',
);