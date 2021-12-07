<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="utama.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <p>Haloo <?php echo $_POST["nama"]; ?>!</p>
    <p>Berikut adalah data diri kamu: </p>
    <table style="width:100%">
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST["nama"]; ?></td>
        </tr>
        <tr>
            <td>Nim</td>
            <td><?php echo $_POST["nim"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir </td>
            <td><?php echo $_POST["tanggallahir"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $_POST["radio"]; ?></td>
        </tr>
        <tr>
            <td>Cerita Hidup</td>
            <td><?php echo $_POST["cerita"]; ?></td>
        </tr>
    </table>

</body>
</html>