<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data</title>
</head>

<body>
    <h1>Drink Info</h1>
    <table>
        <tr>
            <th>Image URL</th>
            <th>Image Alt</th>
            <th>Title</th>
            <th>Nutrition</th>
            <th>Info</th>
        </tr>
        <?php for ($i = 0; $i < count($data); $i++) { ?>
            <tr>
                <td><?php echo $data[$i]['image_url'] ?></td>
                <td><?php echo $data[$i]['image_alt'] ?></td>
                <td><?php echo $data[$i]['title'] ?></td>
                <td><?php echo $data[$i]['nutrition'] ?></td>
                <td><?php echo $data[$i]['info'] ?></td>
            </tr>
        <?php } ?> 
    </table>
    <hr>
</body>

</html>