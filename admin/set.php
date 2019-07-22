<?php
include("includes/connection.php");
if (($_POST['status'] == 'выполняется') || ($_POST['status'] == 'необработана')) {
    $sql = mysqli_query($con, "UPDATE support SET opername='$_POST[opername]', reason='$_POST[reason]', status='$_POST[status]', mail='$_POST[mail]' WHERE id='$_POST[id]'");
}
else {
    $sql2 = mysqli_query($con, "INSERT INTO archive (id, username, departament, mail, phone, problem, another, regtime, regdate, ip, status, opername, reason, pertime, perdate) SELECT * FROM support WHERE id='$_POST[id]'");


    $regtime = date ('H:i:s');
    $regdate = date ('Y.m.d');

    $sql3 = mysqli_query($con, "UPDATE archive SET pertime='$regtime', perdate='$regdate' WHERE id='$_POST[id]'");

    $delete = mysqli_query($con, "DELETE FROM support WHERE id='$_POST[id]'");
}
//header("refresh:0; url=http://10.16.48.22/support/admin");
header("refresh:0; url=http://support/admin");

