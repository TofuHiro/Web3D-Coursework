<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <h1>Model Info</h1>
    <table>
        <tr>
            <th>X3D Info</th>
            <th>X3D Model URL</th>
            <th>X3D Creation Method</th>
            <th>glTF Info</th>
            <th>glTF Model URL</th>
            <th>glTF Creation Method</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['x3d_info'] ?></td>
                <td><?php echo $data[$i]['x3d_model'] ?></td>
                <td><?php echo $data[$i]['x3d_creation_method'] ?></td>
                <td><?php echo $data[$i]['glTF_info'] ?></td>
                <td><?php echo $data[$i]['glTF_model'] ?></td>
                <td><?php echo $data[$i]['glTF_creation_method'] ?></td>
            </tr>
        <?php } ?> 
    </table>
    <hr>
</body>

</html>