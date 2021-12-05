
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
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none ;
                margin :0 ;
            }
            body {
                margin: 80px;
                background-color: peru;
            }
            .container {
                background-color:lightsalmon;
                padding: 30px;
                width: 600px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <h1> FORM DERET FIBONACCI</h1>
        <form action="hasilfibonacci" method="post">
            @csrf
            <div class="mb-3">
              <label for="angkapertama" class="form-label">Masukkan Angka : </label>
              <input type="number" class="form-control" id="angkapertama" name="angkapertama" placeholder="Masukkan Angka">
            </div>
            <div class="mb-3">
                <label for="limit" class="form-label">Limit : </label>
                <input type="number" class="form-control" id="limit" name="limit" placeholder="Masukkan Limit">
            </div>
            <button type="submit" class="btn btn-primary mt-2 mr-5">Submit</button>
            <button type="reset" class="btn btn-danger mt-2">Reset</button>
          </form>
    </body>
</html>
