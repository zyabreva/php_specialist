<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
define('COPYRIGHT', '����� ���� ���-������');
//��������� ������ � ����� �������� ����
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
$hour = (int)strftime('%H');
$welcome='';
if ($hour >= 0 and $hour <6)$welcome='������ ����';
elseif ($hour >= 6 and $hour <12)$welcome='������ ����';
elseif ($hour >= 12 and $hour <18)$welcome='������ ����';
elseif ($hour >= 18 and $hour <=23)$welcome='������ �����';
else $welcome='������ ����';
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title>���� ����� �����</title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- ������� ����� �������� -->
			<img src="logo.gif" width="187" height="29" alt="��� �������" class="logo" />
			<span class="slogan">��������� � ��� �������</span>
			<!-- ������� ����� �������� -->
		</div>

		<div id="content">
			<!-- ��������� -->
			<h1><?php echo $welcome, ', �����!'?></h1>
			<!-- ��������� -->
			<!-- ������� ��������� �������� -->
			<blockquote>
			<?php
					echo "������� $day �����, $mon �����, $year ���.";
			?>
			</blockquote>
			<h3>����� �� ����� � �����?</h3>
			<p>
			� ��� ������ ������ ���-�� ���������� � ����� �����. �������� ����� � ����� ��������, ���-�� �������� � �����, ���-�� �������� ������ ����� ����������� ���������� ��������, ����-�� ������ �������� �� ���������, ����-�� ������ �� ������������� �����, �� �������� ���������� �������� ������ ������ � ������, � ������� � � ��������, ��������� ��������� � �������������, ������ ��������� � ���������� ����������
			</p>
			<h3>��� ����� ���?</h3>
			<p>
			������������ ��� ���������������� ��� "������ ��������������� �������".
			������ "������"? ��� ������������ �������� � ������������� ��������� � ��� � �������� ������� ������� ���������� �����. � ���� �� �� ���� ���������� ������ ������������ ���������� ������� � ������ ������� ������.
			</p>
			<p>
			���������� ��� ����������� �� 100-�������� � ������������ �������� � ��������� � ������������� � ����������� ������� ���������������� ��������. ���� �������� ������� ��������� �������� 31 ������� ����, ���������� �� ����� ��� ������, ������� � ������������ ���� ����������� ��������� � ���� �� �������������� ��� � ������� ���� ���.
			</p>	
			<!-- ������� ��������� �������� -->
		</div>
		<div id="nav">
			<!-- ��������� -->
			<h2>��������� �� �����</h2>
			<!-- ���� -->
			<?php
			$left_menu=array(
			array('link'=> '�����','href' => 'index.php'),
			array('link'=> '� ���','href' => 'about.php'),
			array('link'=> '��������','href' => 'contact.php'),
			array('link'=> '������� ���������','href' => 'table.php'),
			array('link'=> '�����������','href' => 'calc.php')
			);
			?>
			<ul>
				<li><a href='<?=$left_menu[0]['href']?>'><?=$left_menu[0]['link']?></a></li>
				<li><a href='<?=$left_menu[1]['href']?>'><?=$left_menu[1]['link']?></a></li>
				<li><a href='<?=$left_menu[2]['href']?>'><?=$left_menu[2]['link']?></a></li>
				<li><a href='<?=$left_menu[3]['href']?>'><?=$left_menu[3]['link']?></a></li>
				<li><a href='<?=$left_menu[4]['href']?>'><?=$left_menu[4]['link']?></a></li>
			</ul>
			<!-- ���� -->
			<!-- ��������� -->
		</div>
		<div id="footer">
			<!-- ������ ����� �������� -->
			&copy; <?php echo COPYRIGHT?>, 2000 - <?= $year?>
			<!-- ������ ����� �������� -->
		</div>
	</body>
</html>