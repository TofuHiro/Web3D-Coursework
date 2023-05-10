<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <table>
        <h1>Drink Button</h1>
        <tr>
            <th>Button</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['button_type'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
</body>

</html>