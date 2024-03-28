### Задачи, которые выполняет Gulp:
1. Автоматическая перезагрузка страниц в браузере во время работы с файлами WP-темы.
2. Компиляция less-файлов в css
3. Автоматическое добавление вендорных css-префиксов для кроссбраузерности
4. Минификация js и css.
5. Проверка стиля кода.
6. Сжатие изображений

### Предварительная установка программ
**Для реализации выше перечисленных задач, на компьютере должны быть предварительно установлены следующие программы:**

1. node.js (платформа JavaScript). Ссылка на инсталятор - https://nodejs.org/
2. gulp (инструмент сборки веб-приложений). Открыть терминал и прописать команду:
`sudo npm install gulp -g`


http://localhost:8888/sfera


### Инструкция
**Инсталяция npm-модулей, которые выполняют все задачи, описанные в инструкции. Открыть в проекте терминал в папке с WP-темой и выполнить команду:**

`npm install`

*npm - это пакетный менеджер node.js, npm-модули - это js-скрипты для реализации различных задач.*


### Команды gulp
*Перед выполнением команд необходимо в файле "gulpfile.js" указать в переменной "localDomain" актуальный локальный домен проекта (без конечного слеша /) и путь к wp-теме "pathToTheme".*

* `gulp` - запускает сборку проекта, файлов js и less, и следит за их изменениями, перезапускает страницу в браузере при изменениях.
* `gulp watch` - отдельная команда для отслеживания изменений в файлах, браузер не перезапускает. 
* `gulp js` - запускает сборку js-файлов
* `gulp less` - запускает сборку и компиляцию less в css.
* `gulp js --production` и `gulp less --production` - собирают js и less файлы в прод режиме, без sourcemap. 
* `gulp critical` - запускает сборку стилей для первого экрана главной страницы
* `gulp img` - сжатие изображений
* `gulp --production` - обязательно выполнить эту команду перед выливкой сайта в мир! Она инициирует сборку js и css файлов без sourcemap, запускает задачу critical стилей, а также минификацию изображений.

***

#### Создание и подключение css и js файлов для отдельных страниц:
1. Создаем в папке /pages php-темплейт страницы с подобным именем page-example.php.
2. Создаем в папке /js/pages js-файл с таким же именем как и темплейт: page-example.js.
3. Создаем в папке /less/pages less-файл с таким же именем как и темплейт: page-example.less. (подключаем туда нужные модули и тд).
4. Запускаем gulp: он создает минифицированные файлы css и js.
5. functions.php сам для каждого темплейта из папки /pages подключает одноименные css и js файлы, если они существуют.