<!DOCTYPE html>
<html>

<head>
    <title>Transaksi</title>
    <style>
    .tr {
        text-align: center;
    }
    </style>
</head>

<body>
    <h1 class="tr">TRANSAKSI</h1>

    <form>
        <table>
            <tr>
                <td><label for="fname">Akun Tujuan</label></td>
                <td><input type="text" id="fname" name="fname"><br></td>
            </tr>
            <tr>
                <td><label for="lname">Berat</label></td>
                <td><input type="text" id="lname" name="lname"><br></td>
            </tr>
            <tr>
                <td><label for="fname">Jumlah</label></td>
                <td><input type="text" id="fname" name="fname"><br></td>
            </tr>
        </table>
    </form>

    <p> Bukti : <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="fileToUpload">
        </form>
    </p>

</body>

</html>