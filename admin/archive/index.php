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
			$result = mysql_query("SELECT id, username, DATE_FORMAT(`regdate`, '%d.%m.%Y') AS regdate, status, opername, departament FROM support ORDER BY id ASC");
			while ($row = mysql_fetch_array($result)) {
                echo "<div class='task'><form action=edit.php method=post>";
                echo "<h4><input type='submit' class='button' value='".$row['username']."&nbsp;(".$row['departament'].")'></h4><h5>дата заявки: ".$row['regdate']."&#8195;&#8195;статус: ".$row['status']."&#8195;&#8195; исполнитель: ".$row['opername']."</h5>";
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

