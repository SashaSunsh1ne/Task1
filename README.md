# Task1
PHP и HTML. Напишите код на PHP.

В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости. Нужно в переменную $b записать сокращенный текст новости по правилам:
1) обрезать до 180 символов
2) приписать многоточие
3) последние 2 слова и многоточие сделать ссылкой на полный текст новости.
Какие проблемы вы видите в решении этой задачи? Что может пойти не так?

Может пойти не так:
1) количество символов или слов в записи (оно может быть меньше 180 символов), 
2) пробел в конце строки,
3) так же может быть юникод в строке, что может повлиять на вывод.
