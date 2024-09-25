# Поиск домов

## Описание проекта

Данный проект представляет собой приложение для поиска домов по различным критериям, включая название, цену, количество спален, ванных комнат, этажей и гаражей. Приложение использует **Laravel** для серверной части, **jQuery** для AJAX-запросов и **MySQL** в качестве базы данных.

## Задача

Создать API с возможностью поиска домов с учетом следующих параметров:

- **Имя**: должно совпадать с частичными именами.
- **Спальни**: точное соответствие.
- **Ванные комнаты**: точное соответствие.
- **Этажи**: точное соответствие.
- **Гаражи**: точное соответствие.
- **Цена**: диапазон (от $X до $Y).

Все параметры поиска являются необязательными, что позволяет гибко находить дома с различными комбинациями критериев.

## Структура проекта

```plaintext
project-root/ 
├── app/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── docker/
│   ├── nginx/
│   │   └── default.conf
│   └── Dockerfile
├── docker-compose.yml
└── README.md
```


## Установка и запуск

### Требования

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

### Шаги для запуска

1. **Клонировать репозиторий**:
    ```bash
    git clone https://github.com/itech-programmer/laravel-home-finder.git
    cd laravel-home-finder
    ```

2. **Собрать контейнеры**:
    ```bash
    docker-compose up --build
    ```

3. **Заполнить базу данных** (при необходимости) через миграции:
    ```bash
    docker-compose exec home-finder-app php artisan migrate:fresh --seed
    ```

4. **Запустить приложение**:
   Откройте браузер и перейдите по адресу [http://localhost](http://localhost).

### Доступные маршруты

- **GET** `/api/houses/search`: Позволяет выполнять поиск домов.

## Интерфейс поиска

Для поиска домов используется базовая форма, которая отправляет AJAX-запросы к API и отображает результаты в таблице. В случае, если результаты не найдены, отображается соответствующее сообщение.

### Пример кода формы поиска

```html
<form id="search-form" class="mb-4">
    <div class="row">
        <div class="col-md-3">
            <input type="text" name="name" class="form-control" placeholder="Название">
        </div>
        <div class="col-md-3">
            <input type="number" name="price" class="form-control" placeholder="Цена">
        </div>
        <div class="col-md-3">
            <input type="number" name="bedrooms" class="form-control" placeholder="Спальни">
        </div>
        <div class="col-md-3">
            <input type="number" name="bathrooms" class="form-control" placeholder="Ванные комнаты">
        </div>
        <div class="col-md-3">
            <input type="number" name="storeys" class="form-control" placeholder="Этажи">
        </div>
        <div class="col-md-3">
            <input type="number" name="garages" class="form-control" placeholder="Гаражи">
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary btn-block">Поиск</button>
        </div>
    </div>
</form>
