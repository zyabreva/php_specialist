��������� Git Bash
git config --global user.name "zyabreva"
git config --global user.email "alice1024@yandex.ru"
��� �������� ���� ��� ��� ������ �������


cd "C:/OpenServer/domains/localhost/mysite.local"
git init
git pull php_specialist master
git add .
git status
git commit -m 'comment text here'
git push php_specialist master

��������� Git ��� Windows

��������� SSH-������

����� ���, ��� ���������������� �� GitHub, ������� ������� ������������� SSH-���� ����������. ���� ���� ���������, ����� ������ ������������� ���������� � GitHub, �� ����� ������. ��� ������ ����� GitHub ������ �� ����� ��������.

��������� SSH-������ � Windows

� ������������ ������� Windows ��������� SSH-������ ������� � �������� �������� Git. ��� ��������� ������ ���������� ��������� �� ���������� ���� C:\Program Files\Git\Git bash.vbs. ��� ����� ��������� ��� ������� exe-����. ��������� ��������� "������� git". � ��� ���� ���� �������:

ssh-keygen -t rsa -C "myemail@mail.ru"

������ �����������, � ���� ������� ������������ ����-����, ������ ������ ������� �������. � �������� email ��������� ���� �������� ����.
�� ������ "Enter file in which to save the key" ������ �������� Enter. 
��� ������� ������ "Enter passphrase" � "Enter same passphrase again" ������ �������� Enter. 
� �������� ��������� ������ � ������� ����� ���������� �������� ��������� ����������:

Generating public/private rsa key pair.
Enter file in which to save the key (/c/Documents and Settings/username/.ssh/id_rsa):
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /c/Documents and Settings/username/.ssh/id_rsa.
Your public key has been saved in /c/Documents and Settings/username/.ssh/id_rsa.pub.
The key fingerprint is:
51:db:73:e9:31:9f:51:a6:7a:c5:3d:da:9c:35:8f:95 myemail@mail.ru

����� ���������� ���� ���������, � �������� C:\Documents and Settings\username\.ssh ����� ������ ����� id_rsa � id_rsa.pub, ��� ��� ���������� � ����������.

����������� �� GitHub.com
� ������� ���� ������� ����� "Pricing and Signup" � �������� �� ����:
��������� �������� ������ ��������� �����. �������� ���������� ������� "Create a free account":
����� �������� �������� �����������, �� ������� ���� ������ ��� ������������, ���� ��������� email � ������ ������. 
����� ����������� ����� �������� �� ������ ���������.
 

��������� SSH-����� � GitHub
����� ����� ����������� ���������� ��������� � ������� GutHub ���� ��������� ���� ���������� (�������� SSH-����). 
��� ���������� �����, ���� � ������ ������� ���� ������ "Account Settings":

� ����������� ���� ����� �������� �� ����� ���� "SSH Public Keys", � ������ "Add Another Public Key". �������� ��� ���� - �������� ����� (Title) 
� ���������� ����� (Key).

� ���� Title ����� �������� �������� ����������, �� ������� ������������ ��������� ����. ����� ������ ��-������.

� ���� Key ���� �������� ���������� ����� id_rsa.pub. �������, � ����� �������� ��� ���������? 
��������� � ���� �������, ��������� ����� ��������� ���������� ���� id_rsa.pub (������ � ����������� .pub, �� �����������). 
�������� ���� �����, ��������, � ��������� �� �������� GitHub � ���� Key.

����� ���������� �����, ��������� ����� ����������� � GitHub ����� ��������� git, � ������� ������ �� ������ ���������.

�������� ����������� �� GitHub

������ ������ ����� ������� ���� ������ ����������� �� GitHub. ����������� ����� ������������� ������ ��� ����������, � ������� ����� ������ ���������������� ����� � �������������. 
��������� ����������� ����� � web-���������� GitHub, � ��������� ��� ������� � �������� � ��� ����� ����� ��� � ������� ��������� git �� ����� ����������.

������� ������ �� ����������� � ������� GitHub ����������� ���. ���� �� ������������������ ��� ������ username, � ��� ����������� ���������� reponame, �� ��� ������� � ����� ����������� ����� ������������ ��������� ������:

� ���������� Git:
git@github.com:username/reponame.git

� ���������� Https:
https://username@github.com/username/reponame.git

������ � ������������ �� GitHub ����� ��������� Git

������� � ����� �������, ������ ������ web-���������� GitHub ����� ������� ������������. ����� ����� �������� ������ ��������� ��������� git.
������� ����� ������� ��������� ��������� ��������� git: ������� ��������� ������� git ��� ������������ � email. ��� �������� ���������� ���������, ������� ����� ���������, �������� � ����� ��������:

git config --global user.name "YourFullName"
git config --global user.email myemail@mail.ru

������ YourFullName ����� �������� ���� ���, � ������ myemail@mail.ru - ���� email. ��� �������� ������������ ��� ������ �� GitHub. ������� �� ����� YourFullName ����� ������� ��� ����� �� GitHub-�, � �� ����� myemail@mail.ru ����� ������� email, ������� �� ������� ��� ��������� ������ ����������.
����� ���� ��������, ����� �������� ���� ����� � �����������. ��������� � ������� �� ����� ��������, � ���� �������:

git init
git add .
git commit -a -m 'first commit'
git remote add origin git@github.com:username/reponame.git
git push -u origin master

����� ���� ������ �� ������� GitHub ���������� ����� ������ ���� ��������, � ������� ���� ��������� ������ �������. ����� ����� ��� ������ �������, ������� �� ������ GitHub ���������, ���������� ��������� � �������. �� ��� ��� ������ ������ �������.
 
