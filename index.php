<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Karyawan</title>
</head>
<body>
    <div id = form>
        <form action="action.php" method="POST" name="form-input-data">
            <table>
                <tr>
                    <td><h3>Form Input data Karyawan</h3></td>
                </tr>
                <tr>
                    <td> Nama </td>
                    <td><input type="text" name = "nama" size = 20/></td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td><input type="text" name = "email" size = 50/></td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td><input type="text" name = "alamat" size = 15/></td>
                </tr>
                <tr>
                    <td> Gender </td>
                    <td><input type="text" name = "gender" size=12></td>
                </tr>
                <tr>
                    <td> Posisi </td>
                    <td><input type="text" name = "posisi" size=12></td>
                </tr>
                <tr>
                    <td> Status </td>
                    <td><input type="text" name = "status" size=12></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Submit" value="Submit"><input type="reset" name="Reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>