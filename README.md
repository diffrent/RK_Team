# RK_Team
﻿Пичкове знам че сте ангажирани покраи MVC-то, реших да се включа и аз.

Това е сайта с вграден symfony от последното домашно по php, надявам се да ви хареса...
запазил съм стария, в одтелен архив(ChatolicChurch.rar), за всеки случеи и ако нещо не ви харесва този или
мислите за друг начин по удачен.

регистрацията, логина  и ролите на потребителире се пазят в база данни,работещи са, 
първата страница и галерията също са работещи
при логнат администратор излиза ново копче създай статия
при логнат усер излиза ново копче изход

оставът да бъдат направени 3 страници:
родословно дърво
за нас
контакти

има малък бъг в регистрационното и логин полета:
страница user/register.html.twig  на 14 ред трябва type="" да е "email" a не както е сега "text"
страница security/login.html.twig на 14 ред трябва type="" да е "email" а не както сега "text"
трябва да се погледне css-a защото къто е type="email" разваля цялата форма....
ако някой има желание може да уедини всички css фаилове в един.
трябва да се направят различни виута на всички страници, освен галерията, за да може
админа да ги редактирва при нужда. трябва да се направят полета за коментари от user-i под
статиите на първа страница.
Не знам за триенето на ненужните неща и промяната на имената на папките
дали му е времето, може да дотрябват към края..

има малък бъг в регистрационното и логин полета:
страница user/register.html.twig  на 14 ред трябва type="" да е "email" a не както е сега "text"
страница security/login.html.twig на 14 ред трябва type="" да е "email" а не както сега "text"
трябва да се погледне css-a защото къто е type="email" разваля цялата форма....

ОПЪТВАНИЯ!!
стартира се първо Mysql_start, след това се стартирва HeidySQL;
остава да се качи проекта на виртуалния server въвеждайки в конзолата
пътя на проекта пример"C:\Project\Blog>php bin/console server:run"
за влизане с админски профил akimanov@abv.bg парола 123
за влизане с потребителски профил pesho@abv.bg парола 123
при нужда от триене на базата данни, зануляваики всички стойности,
е нужно в полето Roles  да се задъдът ролите на админ и потребител:
ROLE_ADMIN  
ROLE_USER

