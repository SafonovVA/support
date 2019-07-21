<?php include "includes/header.php"; ?>
<?php include "includes/connection.php"; ?>

<div class="container-fluid bg-success text-center text-success" style="padding-bottom: 10px;">
    <label class="h3">Панель администратора</label>
</div>
<div class="container-fluid form-control-static">
    <div class="col-md-6 col-md-offset-3">
        <?php $a = mysqli_query($con, "SELECT COUNT(1)FROM support");
        $b = mysqli_fetch_array($a);
        if ($b[0] == 0) {
            echo("<h5 class='bg-success text-center text-danger col-md-6 col-md-offset-3' style='padding: 4px;'>Новых заявок не поступало</h5>");
        } else {
            $result = mysqli_query( $con, "SELECT id, username, departament, phone, mail, status, opername, DATE_FORMAT(`regdate`, '%d.%m.%Y') AS regdate FROM support ORDER BY id ASC");
            while ($row = mysqli_fetch_array($result)) {
                ?>
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
            <?php
            }
            mysqli_close($con);
        }
        ?>
    </div>
</div>
<meta http-equiv="refresh" content="60">