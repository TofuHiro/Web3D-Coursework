<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <h1>Drink Image Info</h1>
    <table>
        <tr>
            <th>Image Info</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['image_info'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
</body>

</html>