<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'Файл \'config.php\' отсутствует или поврежден. Возможно, форум FluxBB до сих пор не установлен.',
'Choose install language'		=>	'Выбор языка установочного скрипта',
'Choose install language info'	=>	'Выбранный языковой пакет будет использоваться установочным скриптом в процессе установки форума. Язык по умолчанию для всего форума задается ниже.',
'Install language'				=>	'Язык установочного скрипта',
'Change language'				=>	'Сменить язык',
'Next'							=>	'Далее',
'Already installed'				=>	'Кажется, форум FluxBB уже установлен. Перейдите на <a href="index.php">главную страницу</a>.',
'You are running error'			=>	'Вы используете %1$s версии %2$s. FluxBB %3$s для корректной работы необходим %1$s %4$s. Для продолжения необходимо обновить сборку %1$s.',
'My FluxBB Forum'				=>	'My FluxBB Forum',
'Description'					=>	'Unfortunately no one can be told what FluxBB is - you have to see it for yourself.',
'Username 1'					=>	'Имена должны быть длиною от 2 и более символов.',
'Username 2'					=>	'Имена не могут превышать 25 символов.',
'Username 3'					=>	'Имя &laquo;guest&raquo; зарезервировано системой.',
'Username 4'					=>	'Имя не должно быть похоже на IP адрес.',
'Username 5'					=>	'Имя не может содержать одновременно символов \', ", а также [ или ].',
'Username 6'					=>	'Имя не может содержать BB-коды, используемые форумом.',
'Short password'				=>	'Пароль должен быть не короче 4 символов.',
'Passwords not match'			=>	'Пароли не совпадают.',
'Wrong email'					=>	'Почтовый адрес администратора неверен.',
'No board title'				=>	'Вы должны выбрать и указать название форума.',
'Error default language'		=>	'Выбранный язык по умолчанию не найден.',
'Error default style'			=>	'Выбранный стиль по умолчанию не найден.',
'No DB extensions'				=>	'Нынешнее окружение PHP не имеют доступа ни к одной из поддерживаемых FluxBB баз данных. Необходимо обеспечить доступ к MySQL, PostgreSQL или SQLite.',
'Administrator username'		=>	'Имя администратора',
'Administrator password 1'		=>	'Пароль Администратора 1',
'Administrator password 2'		=>	'Пароль Администратора 2',
'Administrator email'			=>	'Почтовый адрес администратора',
'Board title'					=>	'Название форума',
'Base URL'						=>	'Основной URL',
'Required field'				=>	'обязательное поле формы.',
'FluxBB Installation'			=>	'Установка FluxBB',
'Welcome'						=>	'Вы запустили установочный скрипт форума FluxBB. Для установки FluxBB вы должны заполнить все поля формы расположенные ниже. Если какие-то моменты в процессе установки вызовут затруднения, ознакомьтесь с документацией.',
'Install'						=>	'Установка FluxBB 1.4',
'Errors'						=>	'Необходимо исправить следующие ошибки:',
'Database setup'				=>	'Настройка базы данных',
'Info 1'						=>	'Пожалуйста, введите данные для создания таблиц в базе данных для форума FluxBB. Для успешного завершения процесса установки должны быть заполнены все поля.',
'Select database'				=>	'Выбор типа базы данных',
'Info 2'						=>	'FluxBB в настоящее время поддерживает MySQL, PostgreSQL и SQLite. Если база данных отсутствует в выпадающем списке ниже, значит, окружение PHP не имеет поддержки перечисленных баз данных. Дополнительную информацию о поддерживаемых версиях БД можно найти в файле README, установочного пакета.',
'Dual MySQL'					=>	'FluxBB обнаружил, что окружение PHP позволяет использовать два метода соединения с базой данных MySQL: стандартный (standard) и улучшенный (improved). Если вы сомневаетесь в выборе, укажите улучшенный метод, в случае сбоя и появления ошибок &mdash; стандартный.',
'InnoDB'						=>	'FluxBB также обнаружил, что сервер MySQL поддерживает <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Это оптимальный выбор для крупных форумов. Если вы сомневаетесь или не рассчитываете на быстрое увеличение объемов данных, тогда нет нужды использовать InnoDB.',
'Database type'					=>	'Тип Базы Данных',
'Required'						=>	'(Required)',
'Database hostname'				=>	'Ввод имени сервера базы данных',
'Info 3'						=>	'Адрес сервера базы данных (например: localhost, db.myhost.com или 192.168.0.15). Также можно задать нестандартный номер порта, если администратором изменены настройки подключения по умолчанию (например: localhost:3580). Для SQLite не требуется указывать данные, оставьте значение поля пустым, либо  \'localhost\'.',
'Database server hostname'		=>'Имя хоста сервера базы данных',
'Database enter name'			=>	'Ввод имени базы данных',
'Info 4'						=>	'Имя базы данных для установки FluxBB. Перед установкой форума на сервере должна быть предварительно создана база данных. Для SQLite указывается относительный путь к файлу базы данных. В качестве мер безопасности рекомендуется хранить БД SQLite в закрытом от общего доступа месте. Если БД для SQLite не существует, FluxBB попытается создать ее.',
'Database name'					=>	'Имя базы данных',
'Database enter informations'	=>	'Ввод имени пользователя и пароля',
'Database username'				=>	'Имя пользователя базы данных',
'Info 5'						=>	'Введите имя пользователя и пароль для соединения с базой данных. Для SQLite ничего указывать не нужно.',
'Database password'				=>	'Пароль базы данных',
'Database enter prefix'			=>	'Ввод префикса таблиц базы данных',
'Info 6'						=>	'По желанию можно указать префикс для таблиц базы данных. Это позволит создать несколько копий форума FluxBB, использовав при этом лишь одну БД (например: foo_).',
'Table prefix'					=>	'Префикс таблиц',
'Administration setup'			=>	'Создание администратора',
'Info 7'						=>	'Пожалуйста, введите данные для создания администраторской учетной записи на форуме FluxBB.',
'Admin enter username'			=>	'Ввод имени администратора',
'Info 8'						=>	'Имя администратора форума. В дальнейшем можно будет создать дополнительных администраторов и модераторов. Имена должны быть длиною от 2 до 25 символов.',
'Admin enter password'			=>	'Ввод и подтверждение пароля администратора',
'Info 9'						=>	'Пароль должен быть не короче 4 символов. Пароль чувствителен к регистру букв.',
'Password'						=>	'Пароль',
'Confirm password'				=>	'Подтверждение пароля',
'Admin enter email'				=>	'Ввод почтового адреса администратора',
'Info 10'						=>	'Почтовый адрес (email) администратора форума.',
'Board setup'					=>	'Настройки форума',
'Info 11'						=>	'Пожалуйста, введите данные для завершения установки форума FluxBB.',
'Enter board title'				=>	'Ввод названия форума',
'Info 12'						=>	'Название форума (выводится в самом верху каждой страницы).',
'Enter board description'		=>	'Ввод описания форума',
'Info 13'						=>	'Короткое описание форума (выводится в самом верху каждой страницы, под названием). Разрешено использовать HTML.',
'Board description'				=>	'Описание форума',
'Enter base URL'				=>	'Ввод основного URL форума',
'Info 14'						=>	'URL (без завершающей обратной косой черты) форума FluxBB (например: http://forum.myhost.com или http://myhost.com/~myuser). Данные <strong>должны</strong> быть верны, иначе администраторы и модераторы не смогут отправлять и использовать формы. Имейте в виду, что значение по умолчанию &mdash; это всего лишь предположение, сделанное установочным скриптом форума; чаще всего путь определяется верно.',
'Choose the default language'	=>	'Выбор языка по умолчанию',
'Info 15'						=>	'Языковой пакет по умолчанию используется всеми гостями и пользователями, которые отказались менять его в своем профиле.',
'Default language'				=>	'Язык по умолчанию',
'Choose the default style'		=>	'Выбор стиля оформления (скина) по умолчанию',
'Info 16'						=>	'Стиль оформления по умолчанию используется всеми гостями и пользователями, которые отказались менять его в своем профиле.',
'Default style'					=>	'Стиль по умолчанию',
'Start install'					=>	'Начать установку',
'DB type not valid'				=>	'\'%s\' &mdash; неверный тип базы данных',
'Table prefix error'			=>	'Префикс таблицы \'%s\' содержит запрещенные символы, либо слишком велик. Префикс может состоять из букв от a до z, любых чисел и символа подчеркивания. Однако не должен начинаться с чисел. Максимально допустимая длина &mdash; 40 символов. Пожалуйста, выберите другой префикс',
'Prefix reserved'				=>	'Префикс таблицы \'sqlite_\' &mdash; зарезервированно для использования SQLite. Пожалуйста, выберите другой префикс',
'Existing table error'			=>	'Таблица с именем \'%susers\' уже существует в базе \'%s\'. Возможно, форум FluxBB уже установлен или же иное программное обеспечение уже использует необходимое для FluxBB имя. Если вы устанавливаете несколько копий FluxBB в одну базу, то используйте разные префиксы',
'InnoDB off'					=>	'InnoDB не поддерживается. Пожалуйста, выберите другой вариант или настройте сервер MySQL на поддержку InnoDB',
'Administrators'				=>	'Администраторы',
'Administrator'					=>	'Администратор',
'Moderators'					=>	'Модераторы',
'Moderator'						=>	'Модератор',
'Guests'						=>	'Гости',
'Guest'							=>	'Гость',
'New member'					=>	'Новый пользователь',
'Members'						=>	'Пользователи',
'Member'						=>	'Пользователь',
'Announcement'					=>	'Введите текст объявления.',
'Rules'							=>	'Введите текст правил',
'Maintenance message'			=>	'Форумы временно закрыты на техническое обслуживание. Зайдите через несколько минут.',
'Test post'						=>	'Тестовая тема',
'Message'						=>	'Если вы видите это сообщение, &mdash; а вы его видите, &mdash; значит, установка FluxBB прошла успешно! Сейчас необходимо войти в панель управления под администраторской учетной записью и настроить форум.',
'Test category'					=>	'Тестовая категория',
'Test forum'					=>	'Тестовый форум',
'This is just a test forum'		=>	'Это всего лишь тестовый форум',
'Alert cache'					=>	'<strong>Папка для кеша недоступна для записи данных!</strong> Для правильного функционирования форума FluxBB необходимо разрешить PHP запись в папку <em>%s</em>. Используйте chmod для назначения должных прав. Если сомневаетесь, выставьте права (chmod) 0777. Права, обычно, выставляются через FTP.',
'Alert avatar'					=>	'<strong>Папка для аватаров недоступна для записи данных!</strong> Если вы хотите разрешить пользователям загрузку аватар, то необходимо разрешить PHP запись в папку <em>%s</em>. Позже можно будет изменить путь до папки для сохранения аватар (смотрите Администрирование/Опции/Аватары). Используйте chmod для назначения должных прав. Если сомневаетесь, выставьте права (chmod) 0777. Права, обычно, выставляются через FTP.',
'Alert upload'					=>	'<strong>Загрузка файлов на сервере запрещена!</strong> Если вы хотите разрешить пользователям загрузку аватар, то необходимо включить параметр file_uploads в настройках PHP. Когда опция будет активирована, загрузку аватар можно будет включить на странице Администрирование/Опции/Аватары.',
'FluxBB has been installed'		=>	'FluxBB практически установлен. Для завершения установки, пожалуйста, следуйте инструкциям указанным ниже.',
'Final instructions'			=>	'Завершающие настройки',
'Info 17'						=>	'Для завершения процесса установки вы должны нажать на кнопку ниже и скачать файл под названием config.php. Затем загрузить скачанный файл в корневую директорию установленного форума FluxBB (туда, где лежат все основные файлы).',
'Info 18'						=>	'Как только вы загрузите файл config.php на сервер, FluxBB будет полностью установлен! С этого момента вы сможете <a href="index.php">перейти на главную страницу форума</a>.',
'Download config.php file'		=>	'Скачать файл config.php',
'FluxBB fully installed'		=>	'FluxBB полностью установлен! Отправляйтесь на <a href="index.php">главную страницу форума</a>. Спасибо!',

);
