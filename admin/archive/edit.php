<?php include "includes/header.php"; ?>
<?php include "includes/connection.php"; ?>

<div id="header">
Группа технического обеспечения и регламента работ АСУ в Пограничной службе в/ч 2026
</div>

<div id="content">
    <div id="marquee">
        <marquee direction="left" scrolldelay="0" scrollamount="4" behavior="scroll" loop="0">
            <label>Группа технического обеспечения и регламента работ АСУ в Пограничной службе войсковая часть 2026</label>
        </marquee>
    </div>
    <div id="left">
        1
    </div>
    <div id="center">
        <?php
			$result = mysql_query("SELECT id, username, DATE_FORMAT(`regdate`, '%d.%m.%Y') AS regdate, status, opername, regtime, departament, mail, phone, problem, another, ip, reason FROM support WHERE id='$_POST[id]'");
			while ($row = mysql_fetch_array($result)) {
                echo "<div class='task2'><form action='update.php' method='post'>";
                echo "<h4>".$row['username']."&nbsp;(".$row['departament'].")</h4>";
                echo "<h3>Неисправность: ".$row['problem']."</h3>";
                echo "<h3>Другое: ".$row['another']."</h3>";
                echo "<h3>Дата и время заявки: ".$row['regdate']."-".$row['regtime']."</h3>";
                echo "<h3>Подразделение: ".$row['departament']."</h3>";
                echo "<h3>E-mail: <input type='text' name='mail' value='".$row['mail']."' class='input1'></h3>";
                echo "<h3>Телефон: 719-".$row['phone']."</h3>";
                echo "<h3>IP-адрес: ".$row['ip']."</h3>";
                echo "<h3>Статус: <select name='status' class='input1'><option value='".$row['status']."'>".$row['status']."</option></select></h3>";
                echo "<h3>Исполнитель: <select name='opername' class='input1'><option value='".$row['opername']."'>".$row['opername']."</option><option value='Аукеев А.С.'>Аукеев А.С.</option><option value='Каримов А.Ж.'>Каримов А.Ж.</option><option value='Прназаров А.М.'>Прназаров А.М.</option><option value='Жорабай Б.Д.'>Жорабай Б.Д.</option></select></h3>";
                echo "<h3>Причина: <input type='text' name='reason' value='".$row['reason']."' class='input1'></h3>";
                echo "<h3><input type='button' value='Назад' class='button2' onclick=location.href='/support/admin/'></h3>";
                echo "<h3><input type='submit' value='Изменить' class='button2'></h3>";
                echo "<input type=hidden name=id value='".$row['id']."'>";
                echo "</form></div>";
                }
            mysql_close();
		?>
    </div>

    <div id="right">
        3
    </div>

</div>