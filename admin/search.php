<?php include "includes/header.php"; ?>
<?php include "includes/connection.php"; ?>

<div class="container-fluid bg-success text-center text-success" style="height: 70px;">
    <label class="h3">Панель администратора</label>
</div>

<div class="container-fluid form-control-static">

    <div class="row">

        <div class="col-md-3 ">

        </div>

        <div class="col-md-6">
            <p><input type="text"></p>

            <?php $result = mysql_query("SELECT id, username, departament, phone, mail, status, opername, DATE_FORMAT(`regdate`, '%d.%m.%Y') AS regdate FROM archive ORDER BY id ASC");
            while ($row = mysql_fetch_array($result)) { ?>
                <form action="edit.php" method="post">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <td>
                                <h4>
                                <input type="submit" class="btn-link" value="<?php echo $row['username']; ?>">
                                </h4>
                                <h6>
                                    <ul class="list-inline text-danger">
                                        <li>подразделение: <?php echo $row['departament']; ?></li>
                                        <li>дата: <?php echo $row['regdate']; ?></li>
                                        <li>телефон: 719-<?php echo $row['phone']; ?></li>
                                        <li>статус: <?php echo $row['status']; ?></li>
                                        <li>исполнитель: <?php echo $row['opername']; ?></li>
                                    </ul>
                                </h6>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            </td>
                        </tr>
                    </table>
                </form>
            <?php }
            mysql_close(); ?>
        </div>



    </div>
</div>
<meta http-equiv="refresh" content="60">



