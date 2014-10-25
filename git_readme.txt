git config --global user.name "zyabreva"
git config --global user.email "alice1024@yandex.ru"

cd "C:/OpenServer/domains/localhost/mysite.local"
git init
git pull php_specialist master
git add .
git status
git commit -m 'comment text here'
git push php_specialist master