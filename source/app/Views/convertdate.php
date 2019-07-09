<html>
<body>
<?php include('header.php')?>
<?php include('menu.php') ?>
<div class="container" >
    <div class="row">
        <form method="get" action="convertdate.php">
            <table class="table">
                <thead>
                <tr>
                    <th>Date Earth Planet</th>
                    <th>Date Red Planet</th>
                    <th>Date Red Planet</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input class="form-control" type="text" name="dateForEarth" placeholder="type the date of earth planet" value="<?php echo $dateForEarth ?? "0001-01-01" ?>"></td>
                    <td><input class="form-control" type="text" name="dateForRed" placeholder="type the date of red planet" value="<?php echo $dateForRed ?? "0001-01-01" ?>"></td>
                    <td><input class="form-control" type="text" name="dateForBlue" placeholder="type the date of blue planet" value="<?php echo $dateForBlue ?? "0001-01-01" ?>"></td>
                    <input name="convert" value="1" type="hidden"/>
                </tr>
                </tbody>
            </table>
            <input type="submit" value="convert" class="btn btn-success" />
        </form>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>