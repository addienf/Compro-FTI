<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Penjamin Mutu </title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS untuk warna ungu pada tombol -->


    <style>
        .container {
            margin-top: 200px;
        }

        .btn-purple {
            background-color: #261446;
            color: #fff;
            width: 500px;
            height: 50px;
        }

        .btn-purple:hover {
            background-color: #3e1f6d;
            /* Warna ungu lebih terang saat hover */
            color: #fff;
            /* Warna teks tetap putih */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            text-align: center;
            font-family: "Source Sans", Arial, sans-serif;
            padding: 10px;
            font-size: 40px;
            font-weight: bold;

        }

        tr:nth-child(even) {
            background-color: ;
        }

        .h4 {
            font-family: "Source Sans", Arial, sans-serif;
            font-weight: bold;
        }

        .judulatas {
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            font-weight: bold;
        }
    </style>


</head>

<body>

    <div class="container">
        <table>

            <tr class="judulatas">
                <th>
                    <h3> Nama </h3>
                </th>
                <th>
                    <h3> Link </h3>
                </th>
            </tr>

            <tr>
                <td>
                    <h4> Standar </h4>
                </td>
                <td> <button type="button" class="btn btn-purple">www.cnn.com</button> </td>
            </tr>
            <tr>
                <td>
                    <h4> Audit Mutu Internal </h4>
                </td>
                <td> <button type="button" class="btn btn-purple">www.edx.org</button> </td>
            </tr>
        </table>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
