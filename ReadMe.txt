_____________________________________DataBase access:
DB NAME: scaranomarine_db
DB PASS: 1111
DB LOGIN: root
DB_HOST: localhost
_____________________________________Admin-Panel access:
Username: aws
Password: littus_admin_3851
E-mail: athlonnus1@gmaili.com

________________________________Test account User access:
Username: 
Password: 
E-mail: 

Username: 
Password: 
E-mail: 
//_______________________________________________________


________________________________Platform:
WP CMS (4.2.2)

____________________________________Used:
PHP / CSS3 / HTML5 / JavaScript+jQuery /


- Cсылка на GitHub repository: https://github.com/velozalet/taskwp.flexi.loc





//===========================================================================================
Вариант, что на бесплатном хостинге отличается от этого локального варианта:
1) табл. `wp_options` - строки:
  'siteurl' и 'home' изменены на URL для того хостинга

2) файл /wp-content/themes/my_theme/controllers/send_email.prc.php - изменены
header('Location: http://'....'); после отправки письма и выглядит:
    if(
	........
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/taskwp.flexi.loc/contact-form/?email=send');
    }
    else {
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/taskwp.flexi.loc/contact-form/?validation=false');
    }

    
_____________________________________DataBase access:
DB NAME: littus_zzz_com_ua
DB PASS: taskwp_flexi1111
DB LOGIN: taskwp_flexi
DB_HOST: mysql.zzz.com.ua

_____________________________________Admin-Panel access:
Username: taskwp_flexi
Password: taskwp_flexi1111
E-mail: mail_littus@littus.zzz.com.ua

________________________________Test account User access:
Username: littus
Password: 123456
E-mail: littus@i.ua





/* **********************************************************************************
    ИНФО ПО РАБОТЕ С БЕСПЛАТНЫМ ХОСТИНГОМ (www.zzz.com.ua) на котором размещен ПРОЕКТ
********************************************************************************** */

Имя домена и имя аккаунта: littus.zzz.com.ua
Адрес сайта: http://littus.zzz.com.ua
Адрес панели управления: http://www.zzz.com.ua/panel/ru/summary/service/littus.zzz.com.ua


________________________________________Access to FTP:
Сервер(host): littus.zzz.com.ua
Имя пользователя: admin@littus.zzz.com.ua
Пароль: lutskyi_littus3851
Порт: 21 (но его можно не указывать)
  //После загрузки фалов с помощью FTP (напр., index.php или index.html для главной страницы), Ваш сайт будет доступен по следующим адресам:
    http://littus.zzz.com.ua и
    http://www.littus.zzz.com.ua



Адрес файлового менеджера: http://www.zzz.com.ua/ftp
________________________Доступ к панели файлового менеджера(http://www.zzz.com.ua/ftp):
login: admin@littus.zzz.com.ua
Password: lutskyi_littus3851


______________________________Данные для подсоединения базы данных MySQL:
Сервер: mysql.zzz.com.ua
Порт: 3306
Имя пользователя: указывается пользователем при создании базы данных
Пароль: указывается пользователем при создании базы данных
Название базы данных: генерируется системой при создании
Адрес менеджера баз данных: http://www.zzz.com.ua/mysql
  (!) Внимание! Прежде чем воспользоваться базой данных, ее нужно создать в панели управления(!)


______________________________Почтовый ящик (доступен по этой ссылке: https://www.zzz.com.ua/mail/ru):
ИМЯ АККАУНТА: mail_littus@littus.zzz.com.ua
ПАРОЛЬ: lutskyi_littus3851