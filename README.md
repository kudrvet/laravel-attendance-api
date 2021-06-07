# Задание
Разработать простую систему учета посещений на предприятии. Есть минимальная информация о рабочем (ФИО, табельный номер, телефон) и данные о посещении (дата и время прихода, дата и время ухода). Аутентификацией можно пренебречь.
Необходимо реализовать Rest API
- CRUD операции над справочником рабочих
- Фиксацию времени посещения одного рабочего
- Простой интерфейс для отображения табелей посещения рабочих с фильтрацией по (дате, рабочему)  

В качестве backend использовать Laravel (версия не важна).  
Проект должен быть рабочий и иметь какой-нибудь способ наполнения тестовыми данными. Наличие документации будет плюсом.   Проект нужно разместить на github или других сервисах.  


# Установка

- клонируйте репозиторий
- затяните зависимости
```bash 
composer install
```
- настройте подключение к БД в config/database.php
- запустите локальный сервер
```bash
php artisan serve
```
- при необходимости заполните базу тестовыми данными  
```bash
php artisan db:seed
```
> По-умолчанию интерфейс доступен корне (например http://127.0.0.1:8000/)

## Структура API

### 1. Worker API  
CRUD operations by worker. *All response sends in JSON format*
_________
**DESCRIPTION** : get all workers  
**HTTP VERB** : GET  
**URL**: {url}/api/workers  
**BODY**: NONE
____________________

**DESCRIPTION** : create new worker  
**HTTP VERB** : POST  
**URL**: {url}/api/workers  
**BODY**: 
```json
{
	"name": "Петя",
	"surname": "Пупкин",
	"middle_name": "Иванович",
	"phone": "89522323223",
	"id": 123
}

```
Arguments for create:  
**name**: *String* Worker name .Field is required.
**surname**: *String* Worker surname .Field is required.  
**middle_name**: *?String* Worker middlename .Field is optional.  
**phone**: *?String* Phone number in (+7|7|8)XXXXXXX format.Field is optional.  
**id**: *?int(min value = 1)* Worker tabel number.If worker with 'id' is already exist error will be returned. If is empty, will be generated automatically. Field is optional.  
_____________
**DESCRIPTION** : update existing worker  
**HTTP VERB** : PUT/PATCH  
**URL**: {url}/api/workers/{workerID}  
**BODY**: 
```json
{
	"name": "Петя",
	"surname": "Пупкин",
	"middle_name": "Иванович",
	"phone": "89522323223",
	"id": 123
}

```
Arguments for create:  
**name**: *?String* Worker name .Field is optional.
**surname**: *?String* Worker surname .Field is optional.  
**middle_name**: *?String* Worker middlename .Field is optional.  
**phone**: *?String* Phone number in (+7|7|8)XXXXXXX format.Field is optional.  
**id**: *?int(min value = 1)* Worker tabel number.If worker with 'id' is already exist error will be returned. If is empty, will be generated automatically. Field is optional.  

_____________________
**DESCRIPTION** :show existing worker information by id  
**HTTP VERB** : GET  
**URL**: {url}/api/workers/{workerID}  
**BODY**: NONE
_____________________
**DESCRIPTION** :remove worker with his timesheets by id.  
**HTTP VERB** : DELETE  
**URL**: {url}/api/workers/{workerID}  
**BODY**: NONE

***

### 2. Worker Timesheet API   
Contain feature to add worker timesheet. *All response sends in JSON format*  
_____
**DESCRIPTION** : create new worker timesheet.   
**HTTP VERB** : POST    
**URL**: {url}/api/timesheets  
**BODY**: 
```json
{
	"worker_id": 24,
	"datetime_in": "2021-07-25 12:43:23",
	"datetime_out":"2021-07-25 13:23:22"
}

```
Arguments for create:  
**worker_id**: *integer(min=1)* Worker tabel number.If worker does not exist, error will be returned. Field is required. **datetime_in**: *string in Y-M-D H:Y:s format* Worker datetime in. Filed is required.  
**datetime_out**: *string in Y-M-D H:Y:s format* Worker datetime out. Filed is required.

_____





