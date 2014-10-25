Открываем Git Bash
git config --global user.name "zyabreva"
git config --global user.email "alice1024@yandex.ru"
это вводится один раз при первом запуске


cd "C:/OpenServer/domains/localhost/mysite.local"
git init
git pull php_specialist master
git add .
git status
git commit -m 'comment text here'
git push php_specialist master

Установка Git под Windows

Настройка SSH-ключей

Перед тем, как регистрироваться на GitHub, следует вначале сгенерировать SSH-ключ шифрования. Этот ключ необходим, чтобы быстро устанавливать соединение с GitHub, не вводя пароля. Без такого ключа GitHub просто не будет работать.

Настройка SSH-ключей в Windows

В операционной системе Windows генератор SSH-ключей включен в комплект поставки Git. Для генерации ключей необходимо запустить на выполнение файл C:\Program Files\Git\Git bash.vbs. Его можно запустить как обычный exe-шник. Откроется программа "Консоль git". В ней надо дать команду:

ssh-keygen -t rsa -C "myemail@mail.ru"

Будьте внимательны, в этой консоли подглючивает копи-паст, прощще ввести команду вручную. В качестве email указываем свой почтовый ящик.
На запрос "Enter file in which to save the key" просто нажимаем Enter. 
При запросе пароля "Enter passphrase" и "Enter same passphrase again" просто нажимаем Enter. 
В процессе генерации ключей в консоли будет выдаваться примерно следующая информация:

Generating public/private rsa key pair.
Enter file in which to save the key (/c/Documents and Settings/username/.ssh/id_rsa):
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /c/Documents and Settings/username/.ssh/id_rsa.
Your public key has been saved in /c/Documents and Settings/username/.ssh/id_rsa.pub.
The key fingerprint is:
51:db:73:e9:31:9f:51:a6:7a:c5:3d:da:9c:35:8f:95 myemail@mail.ru

После выполнения этой программы, в каталоге C:\Documents and Settings\username\.ssh будут лежать файлы id_rsa и id_rsa.pub, они нам пригодятся в дальнейшем.

Регистрация на GitHub.com
В верхнем меню находим пункт "Pricing and Signup" и нажимаем на него:
Откроется страница выбора тарифного плана. Выбираем бесплатный аккаунт "Create a free account":
Далее появится страница регистрации, на которой надо ввести имя пользователя, свой настоящий email и задать пароль. 
После регистрации сразу попадаем на личную страничку.
 

Установка SSH-ключа в GitHub
Сразу после регистрации необходимо прописать в системе GutHub свой публичный ключ шифрования (открытый SSH-ключ). 
Для добавления ключа, надо в правом верхнем углу нажать "Account Settings":

В открывшемся окне нужно кликнуть на пункт меню "SSH Public Keys", и нажать "Add Another Public Key". Появится два поля - название ключа (Title) 
и содержимое ключа (Key).

В поле Title можно написать название компьютера, на котором сгенерирован публичный ключ. Можно писать по-русски.

В поле Key надо вставить содержимое файла id_rsa.pub. Помните, в каком каталоге они находятся? 
Переходим в этот каталог, открываем любым текстовым редактором файл id_rsa.pub (именно с расширением .pub, не перепутайте). 
Выделяем весь текст, копируем, и вставляем на странице GitHub в поле Key.

После добавления ключа, компьютер может соединяться с GitHub через программу git, и никаких ошибок не должно возникать.

Создание репозитария на GitHub

Теперь пришло время создать свой первый репозитарий на GitHub. Репозитарий можно рассматривать просто как директорию, в которой будут лежать синхронизируемые файлы и поддиректории. 
Создавать репозитарий нужно в web-интерфейсе GitHub, а наполнять его файлами и работать с ним можно будет уже с помощью программы git на своем компьютере.

Рабочая ссылка на репозитарий в системе GitHub формируется так. Если вы зарегистрировались под именем username, и ваш репозитарий называется reponame, то для доступа к этому репозитарию можно использовать следующие ссылки:

В синтаксисе Git:
git@github.com:username/reponame.git

В синтаксисе Https:
https://username@github.com/username/reponame.git

Работа с репозитарием на GitHub через программу Git

Начиная с этого момента, пляски вокруг web-интерфейса GitHub можно считать законченными. Далее можно работать только используя программу git.
Вначале нужно сделать небольшую настройку программы git: указать локальной системе git имя пользователя и email. Это делается следующими командами, которые можно выполнить, находясь в любом каталоге:

git config --global user.name "YourFullName"
git config --global user.email myemail@mail.ru

вместо YourFullName нужно написать свое имя, а вместо myemail@mail.ru - свой email. Эти значения используются для логина на GitHub. Поэтому на месте YourFullName нужно указать ваш логин на GitHub-е, а на месте myemail@mail.ru нужно указать email, который вы вводили при генерации ключей шифрования.
После этих настроек, можно заливать свои файлы в репозитарий. Переходим в каталог со своим проектом, и даем команды:

git init
git add .
git commit -a -m 'first commit'
git remote add origin git@github.com:username/reponame.git
git push -u origin master

После этих команд на сервере GitHub образуется копии файлов того каталога, в котором были выполнены данные команды. Далее можно уже делать коммиты, заливки на сервер GitHub изменений, считывания изменений с сервера. Но это уже совсем другая история.
 
