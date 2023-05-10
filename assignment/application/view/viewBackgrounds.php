<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <table>
        <h1>Backgrounds</h1>
        <tr>
            <th>URL</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['bg_url'] ?></td>
            </tr>
        <?php } ?>
    </table>
    <hr>
</body>

</html>