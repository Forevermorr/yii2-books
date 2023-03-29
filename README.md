
# Библиотека



## База данных
Изменить базу данных в файле `config/db.php`

## Установка
```
  cd domains/yii2-books
  composer update
  yii migrate
```

## Авторизация
demo/demo - пользователь  
admin/admin - администратор

## Задание
Используя фреймворк Yii2 (basic):

1. Реализовать сущности авторы и книги

2. Реализовать административную часть  
a. CRUD операции для авторов и книг  
b. вывести список книг с обязательным указанием имени автора в списке  
c. вывести список авторов с указанием кол-ва книг  

3. Реализовать публичную часть сайта с отображение авторов и их книг (простой вывод списка на странице)

4. Реализовать выдачу данных в формате json по RESTful протоколу отдельным контроллером  
a. GET /api/v1/books/list получение списка книг с именем автора  
b. GET /api/v1/books/by-id получение данных книги по id  
c. POST /api/v1/books/update обновление данных книги  
d. DELETE /api/v1/books/id удаление записи книги из бд  

Результат представить ссылкой на репозиторий.
Желательно, в репозиторий залить пустой каркас приложения, а затем с внесёнными изменениями, чтобы можно было проследить diff.

    
## Скриншоты

![App Screenshot](https://sun9-18.userapi.com/impg/C4bViQKMbSC-QK1TJVBIQXo5r4GjNJrF4Rw7Ww/bPVIW4Ri5o4.jpg?size=1876x958&quality=95&sign=568d8a8ca864efd639cd3b8848801033&type=album)  

![App screenshot](https://sun9-17.userapi.com/impg/OcZt_oLR1FOIdDckEU1bKy_Tpupr_w5fnzGCMA/fcEZs5Q63kk.jpg?size=1878x958&quality=95&sign=a27b9d467698b3a477f856c174e09360&type=album)  

![App screenshot](https://sun9-62.userapi.com/impg/P059QIiMsMEUw8Cdbk8MxyfunOqemeJ6phNDRw/xpWrmHHC02E.jpg?size=1877x959&quality=95&sign=677d2e8f5d0b0b7e774689feb719b1e5&type=album)  

