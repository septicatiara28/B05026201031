<!DOCTYPE html>
<html>
    <head>
        <title> Perhitungan Fibonacci</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
            $("#flip").click(function(){
            $("#panel").slideToggle("milimeter");
         });
        });
        </script>
        <style>
            body {
                margin: 80px;
                background-color: peru;
            }
            .container {
                background-color:lightsalmon;
                padding: 30px;
                width: 800px;
            }
            #flip {
            padding: 2px;
            text-align: center;
            background-color:peachpuff;
            border: solid 3px burlywood;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 50px;
            }
            #panel {
            padding: 2px;
            text-align: justify;
            background-color:cornsilk;
            border: solid 1px burlywood;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
            }
            #panel {
            padding: 50px;
            display:none;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <div id="flip"><i>HASIL DERET FIBONACCI</i></div>
        <div id="panel">
        <table class="table table-success table-striped">
        <tr>
            <th>NO.</th>
            <th>Nilai</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>1.</th>
            <td>Angka Masukan</th>
            <td> <?php echo $_POST["angkapertama"] ; ?></th>
        </tr>
        <tr>
            <td>2.</th>
            <td>Limit</th>
            <td> <?php echo $_POST["limit"] ; ?></th>
        </tr>
        <tr>
            <td>3.</th>
            <td>Deret Fibonacci</th>
            <td>
            <?php
            // siapkan 2 angka awal
            $angka_default= 0;
            $angka_masukan=  $_POST["angkapertama"] ;
            $limit = $_POST["limit"] ;

            //tampilkan 2 angka awal
            echo "$angka_default $angka_masukan";

            for ($i=0; $i<$limit; $i++)
            {
            // hitung angka yang akan ditampilkan
            $output = $angka_masukan + $angka_default;
            echo " $output";

            //siapkan angka untuk perhitungan berikutnya
            $angka_default = $angka_masukan;
            $angka_masukan= $output;
            }
            ?>
            </th>
        </tr>
        </table>
        </div>
    </body>
</html>
