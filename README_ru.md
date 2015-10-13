PackageConnector
============

Расширение для CMF Cotonti. 
Обеспечивает интеграцию Cotonti с пакетами установленными в проект через 
[Composer](https://getcomposer.org/) (менеджер зависимостей для PHP).

Описание
--------

В первую очередь Package Connector позволяет использовать автоматический
загрузчик для установленных через Composer компонент. Это позволяет сразу приступить
к использованию установленной PHP библиотеки, без головной боли с указанием
путей к ней и включением директив `require` или `include`.

Кроме автозагрузчика, имеется интерфейс доступа к информации об установленных
в проект пакетах. Можно получить информацию о версии, зависимостях (и другую
информацию предоставляемую в пакетом Composer).


Возможности
-----------

* Поддержка/использование автозагрузчика созданного Composer
* Получение данных об установленных пакетах (версии, зависимости и прочее)


Требования
----------

Текущая версия 0.2.1 работает в Cotonti Siena v0.9.18. 

Для корректной работы плагина требуется, как 
минимум, наличие в каталоге проекта (базовом каталоге Cotonti) файла настройки `composer.json`.

Для получения данных об установленных пакетах, необходим файл `composer.lock`, который создается при 
установке компонент через Composer:
```
composer install
```
или установке конкретного пакета:
```
composer require "vendor/package"
```


### Комментарии

Плагин начнет работу сразу после установки и не требует дополнительной настройки.


### Устройство

Несмотря на то, что файл класса-расширения может быть с легкостью интегрирован в ядро системы с 
минимальными доработками для целей текущего тестирования на рабочих проектах класс PackageConnector 
поставляется в составе Расширения (плагина) [«package_connector»](https://github.com/macik/cot-package_connector). 

Плагин берет на себя ту небольшую часть кода (см. файл
`package_connector.input.php`), которая отвечает за инициализацию класса,
вызов автозагрузчика и кэширование самого объекта.

В системе создается глобальная переменная `$cot_packages` — экземпляр класса `PackageConnector`:
```php
$cot_packages = new PackageConnector();
```
Она же кэшируется для ускорения инициализации:
```php
$cache && $cache->db->store('cot_packages', $cot_packages, 'system');
```


Для исключения излишних процедур инициализации (что требует загрузки
и обработки файлов, пусть и небольших), класс имеет метод проверки состояния
исходных файлов `stateChanged()`. Если файлы изменились, необходимо повторно
провести их обработку (setup):

```php
if ($cot_packages->stateChanged()) $cot_packages->setup();
```

Более подробное описание класса и его методов можно найти в репозитории библиотеки 
[«Package Connector»](https://github.com/macik/PackageConnector)


Установка
---------

* Распаковать, скопировать файлы в корень сайта.
* Установить через панель Администрирования → Расширения (`Управление сайтом → Расширения`)

**Обратите внимание:** файл (PackageConnector.php) с классами библиотеки `PackageConnector` должен быть размещен в системном каталоге `system\classes`.


Условия распространения (лицензия)
----------------------------------

Distributed under BSD license.


Авторство
---------

[Андрей Мацовкин](https://github.com/macik/)


Ссылки
------

* [Cotonti.com](http://Cotonti.com/) -- Home of Cotonti CMF
* [package_connector на GitHub](https://github.com/macik/cot-package_connector) -- Свежая версия на GitHub