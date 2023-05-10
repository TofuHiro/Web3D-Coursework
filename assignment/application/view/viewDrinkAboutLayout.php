<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <h1>Drink About Layout</h1>
    <table>
        <tr>
            <th>Image Float</th>
            <th>Text Float</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['image_float'] ?></td>
                <td><?php echo $data[$i]['text_float'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
</body>

</html>