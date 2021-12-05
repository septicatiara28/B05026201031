
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> VALIDATION FORM </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .container {
                align-items: right;
                justify-content: right;
                width: 1000px ;
                background-color : lavender;
                padding: 20px;
                border-radius: 15px;
                margin: 50px auto;
            }

            form label{
            width: 100px;
            text-align: right;
            margin-right: 30px;
            font-family:Arial, Helvetica, sans-serif;
            font-size:17px;
            }

            body {
                background-image:url('filegambar/bg.jpg');
                background-repeat: no-repeat;
                background-size:cover;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <h1 class="text-center">REGISTRATION FORM</h1>
            <form action="https://my.its.ac.id/sso/dashboard">

                <!--USER ID-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="UserID" class="form label">User Id:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="userid" id="userid">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Password" class="form label">Password:</label>
                    </div>
                    <div class="col-8">
                        <input type="password" class="password" id="password">
                    </div>
                </div>

                <!--NAME-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Name" class="form label">Name :</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="name" id="name">
                    </div>
                </div>

                <!--ADDRESS-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Adress" class="form label">Address :</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="address" id="address">
                    </div>
                </div>

                <!--COUNTRY-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Country" class="form label">Country :</label>
                    </div>
                    <div class="col-8">
                      <select name="country" id="country">
                        <option value="">Please select your country!</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Korea">Korea</option>
                        <option value="Arab Saudi">Arab Saudi</option>
                        <option value="Honggkong">Hongkong</option>
                        <option value="Amerika">Amerika</option>
                      </select>
                    </div>
                </div>

                <!--ZIPCODE-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Zipcode" class="form label">Zipcode :</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="zipcode" id="zipcode">
                    </div>
                </div>

                <!--EMAIL-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Email" class="form label">Email :</label>
                    </div>
                    <div class="col-8">
                        <input type="email" class="email" id="email">
                    </div>
                </div>

                 <!--SEX-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Sex" class="form label">Sex :</label>
                    </div>
                    <div class="col-8">
                        <input type="radio" name="sex" >Male
                        <input type="radio" name="sex">Female
                    </div>
                </div>

                 <!--LANGUAGE-->
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="Language" class="form label">Language :</label>
                    </div>
                    <div class="col-8">
                        <input type="checkbox" class="eng">English
                        <input type="checkbox" class="non">Non English
                    </div>
                </div>

                 <!--ABOUT-->
                <div class="row mt-3">
                     <div class="col-3">
                        <label for="About" class="form label">About :</label>
                    </div>
                    <div class="col-8">
                        <textarea name="textarea" id="" cols="50" rows="10"></textarea>
                    </div>
                </div>
                    <div class="button text-center">
                    <button class="btn-primary submit" type="submit">Submit</button>
                    </div>
            </form>
        </div>
        <script>
            $(document).ready(function(){
                $(".submit").click(function(){
                    var user = $(".userid").val() ;
                    if (user.length < 5 || user.length > 12) {
                        alert ("User Id must be of length 5 to 12") ;
                        return false ;
                    }
                    var password = $(".password").val() ;
                    if (password.length < 7 || password.length > 12) {
                        alert ("Password must be length 7 to 12") ;
                        return false ;
                    }
                    var nameVal = $(".name").val() ;
                    var name = /^[a-zA-Z\s]+$/ ;
                    if (!nameVal.match(name)) {
                        alert ("Name must be alphabet only");
                        return false;
                    }
                    var Country = $("select option:selected").val();
                    if (Country == "") {
                        alert("Must select a country");
                        return false;
                    }
                    var ZIPcode = $(".zipcode").val();
                    if (isNaN(ZIPcode)) {
                        alert("ZIP Code must be numeric only");
                        return false;
                    }
                    var email = /^([a-zA-Z0-9_\.\.\+])+@(([a-zA-Z0-9\-])+.)+([a-zA-Z0-9]{2,4})+$/;
                    var emailVal = $(".email").val();
                    if(!(emailVal.match(email))){
                        alert("Must be a correct email");
                        return false ;
                    }
                    var radio = $("input[type='radio']:checked");
                    var check = $("input[type='checkbox']:checked");
                    if(radio.length == 0 || check.length == 0 ){
                        alert("Must be select Sex and Language")
                        return false ;
                    }
                })
            })
        </script>
    </body>
</html>
