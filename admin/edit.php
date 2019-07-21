<?php include "includes/header.php"; ?>
<?php include "includes/connection.php"; ?>

<div class="container-fluid  bg-success text-center text-success" style="height: 70px; margin-bottom: 6px">
    <label class="h3">Панель администратора</label>
</div>

<div class="center-block">

    <div class="col-md-3">

    </div>

    <div class="container bg-success center-block col-md-6 table-bordered" style="padding: 30px 0 30px 0">
        <?php $result = mysqli_query($con, "SELECT id, username, departament, phone, mail, problem, another, regtime, ip, opername, status, reason, DATE_FORMAT(`regdate`, '%d.%m.%Y') AS regdate FROM support WHERE id='$_POST[id]'");
        while ($row = mysqli_fetch_array($result)) { ?>

            <form action="set.php" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Пользователь:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo $row['username']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Подразделение:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo $row['departament']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Телефон:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static">719-<?php echo $row['phone']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">E-mail:</label>
                    <div class="col-sm-4">
                        <input type="text" name="mail" value="<?php echo $row['mail']; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">IP-адрес:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo $row['ip']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Неисправность:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo $row['problem']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Другое:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo $row['another']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Дата и время:</label>
                    <div class="col-sm-4">
                        <p class="form-control-static"><?php echo $row['regdate'] . "&nbsp;-&nbsp;" . $row['regtime']; ?></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Исполнитель:</label>
                    <div class="col-sm-4">
                        <select name="opername" class="form-control" required="">
                            <option value="<?php echo $row['opername']; ?>"><?php echo $row['opername']; ?></option>
                            <?php $result2 = mysqli_query($con, "SELECT * FROM persone ORDER BY fio"); while ($row2 = mysqli_fetch_array($result2)) { echo "<option value='" . $row2[fio] . "'>" . $row2[fio] . "</option>"; } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Статус:</label>
                    <div class="col-sm-4">
                        <select name="status" class="form-control">
                            <option value="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                            <option value="выполняется">выполняется</option>
                            <option value="обработана">обработана</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label text-danger">Причина:</label>
                    <div class="col-sm-4">
                        <input type="text" name="reason" value="<?php echo $row['reason']; ?>" placeholder="Введите причину неисправности" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label"></label>
                    <div class="col-sm-4">
                        <input type="submit" value="Изменить" class="form-control btn btn-success btn-block">
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">

            </form>
        <?php }
        mysqli_close($con); ?>
    </div>
</div>




