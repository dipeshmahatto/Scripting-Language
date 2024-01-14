<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $salary = array("Dipesh" => "10000", "Sanjip" => "45000", "Surya" => "50000");
    echo $salary["Sanjip"];
    ?>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Salary</th>
        </tr>
        <?php foreach ($salary as $k => $v) { ?>
            <tr>
                <td>
                    <?php echo $k; ?>
                </td>
                <td>
                    <?php echo $v; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>