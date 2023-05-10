<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <table>
        <h1>Drink About Info</h1>
        <tr>
            <th>About Info</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['about_info'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
</body>

</html>