
<!DOCTYPE html>
<html>
    <head>
        <title>Client Script Validation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            body {
                background-color: khaki;
            }
            .container {
                align-items: right;
                justify-content: right;
                width: 900px;
                background-color: lavender;
                padding: 20px;
                border-radius: 15px;
                margin : 50px auto ;
            }
            form label {
                width: 150px;
                text-align: right;
                margin-right: 100px;
                font-family: Arial, Helvetica, sans-serif;
                font-size: 50px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <p>Septica Tiara Indah Permatasari</p>
            <p>Septica</p>
            <p>5026201031</p>
            <h3 class="text-center">FORM PENDAFTARAN KUOTA INTERNET</h1><br>
            <form action="https://my.its.ac.id/sso/dashboard">

            <!--NAMA MAHASISWA-->
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="namemhs" class="form label">Nama Mahasiswa :</label>
                    </div>
                    <div class="col-8">
                        <input type="text" id="namemhs" name="namemhs" class="namemhs" size="50px">
                    </div>
                </div>

             <!--NRP MAHASISWA-->
             <div class="row mt-3">
                <div class="col-4">
                    <label for="nrpmhs" class="form label">NRP Mahasiswa :</label>
                </div>
                <div class="col-8">
                    <input type="text" id="nrpmhs" name="nrpmhs" class="nrpmhs" size="50px">
                </div>
            </div>

             <!--JURUSAN-->
             <div class="row mt-3">
                <div class="col-4">
                    <label for="jurusan" class="form label">Jurusan :</label>
                </div>
                <div class="col-8">
                    <select name="jurusan" id="jurusan">
                        <option value="">Pilih Jurusan</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Elektro">Elektro</option>
                        <option value="Informatika">Informatika</option>
                    </select>
                </div>
            </div>

            <!--NO HANDPHONE-->
            <div class="row mt-3">
                <div class="col-4">
                    <label for="nohp" class="form label">Nomor Handphone :</label>
                </div>
                <div class="col-8">
                    <input type="text" id="nohp" name="nohp" class="nohp" size="50px">
                </div>
            </div>
            <div class="button mt-3 text-center">
                <button class="btn-primary submit mr-3" type="submit">Submit</button>
                <button class="btn-danger reset" type="reset">Reset</button>
            </div>
        </form>
    </div>
        <script>
            $(document).ready(function(){
                $(".submit").click(function(){
                    var nameVal = $(".namemhs").val() ;
                    var name = /^[a-zA-Z\s]+$/ ;
                    if (!nameVal.match(name)|| nameVal.length == 1) {
                        alert ("Nama Mahasiswa harus alphabet dan tidak boleh hanya 1 huruf");
                        return false;
                    }
                    var nrp = $(".nrpmhs").val() ;
                    if (nrp.length < 10 || nrp.length > 10) {
                        alert ("NRP mahasiswa harus angka dan 10 digit") ;
                        return false ;
                    }
                    var jurusan = $("select option:selected").val();
                    if (jurusan == "") {
                        alert("Harus memilih salah satu jurusan!");
                        return false;
                    }
                    var handphone = $(".nohp").val() ;
                    if (handphone.length < 10) {
                        alert ("Nomor Handphone harus angka dan minim 10 digit") ;
                        return false ;
                    }
                })
            })
        </script>
    </body>
</html>
