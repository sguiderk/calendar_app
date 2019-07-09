<html>
<body>
<?php include('header.php')?>
<?php include('menu.php') ?>
<div class="container" >
    <div class="row">
        <form method="get" action="calculdate.php">
            <table class="table">
                <thead>
                <tr>
                    <th>  Date 1</th>
                    <th>+ Date 2</th>
                    <th>= Date 3</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input class="form-control" type="text" name="date1" value="<?php echo $date1 ?? "0001-01-01" ?>"></td>
                    <td><input class="form-control" type="text" name="date2" value="<?php echo $date2 ?? "0001-01-01" ?>"></td>
                    <td><input class="form-control"  type="text" name="date3" value="<?php echo $date3 ?? "0001-01-01" ?>" readonly/></td>
                    <input name="calcul" value="1" type="hidden"/>
                </tr>
                </tbody>
            </table>
            <select name="typeOfDate">
                <opption >Select wich planet</opption>
                <option value="earth">Earth</option>
                <option value="red">Red</option>
                <option value="blue">Blue</option>
            </select>
            <input type="submit" value="calcul" class="btn btn-success"/>
        </form>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>