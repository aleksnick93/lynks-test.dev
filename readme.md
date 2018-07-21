<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

Цель:
- Разработать REST API (CRUD) сервис +
    - Создание элементов +
    - Обновление элементов +
    - Удаление элементов +
    - Получение информации о элементе +
    - Валидацию полей сущности +
- Создать автоматические тесты созданного функционала
    - Покрытие тестами должно составлять до 90% кода
    - Тестами покрывается и функционал и БД
- Возможное дополнение: (будет плюсом, но не обязательно)
    - Интерфейс для работы с сущностью +
    - Использование token для доступа к данным
    - История изменений сущности
 
Вводные данные:
Сущность: Item
Поля сущности:
id - int автоинкремент
name - char(255)
key - char(25) not null
created_at - datetime - дата создания элемента
updated_at - datetime - дата обновления элемента
 
Стек технологий: PHP7, Laravel, PHPUnut,  UI Kit (Bootstrap, Semantic-UI)
 
Тестовое задание необходимо выложить на репозитории, GitHub, Bitbucket дать доступ, если приватный репозиторий.


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).