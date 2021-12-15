<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
		<script src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <style>
        body {
            font-family: "Lato", sans-serif;
            background-color:rgb(175, 175, 248);
          }

          .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(136, 136, 245);
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
          }

          .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: black;
            display: block;
            transition: 0.3s;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          }

          .sidebar a:hover {
            color: #f1f1f1;
          }

          .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
          }

          .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
          }

          .openbtn:hover {
            background-color: #444;
          }

          #main {
            transition: margin-left .5s;
            padding: 16px;
          }

          /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
          @media screen and (max-height: 450px) {
            .sidebar {padding-top: 15px;}
            .sidebar a {font-size: 18px;}
          }
          .page-footer {
              font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          }
          .name {
              font-family:Verdana, Geneva, Tahoma, sans-serif;
          }
          </style>
</head>
<body class="container">

    <div class="page-header" ></div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <center><img src="/filegambar/foto.png" width="120" height="220"></center></p>
        <p align="center" class="name"> SEPTICA TIARA INDAH PERMATASARI <br>
            5026201031</p>

        <a href="http://127.0.0.1:8000/pegawai">Pegawai</a><hr>
        <a href="http://127.0.0.1:8000/absen">Absen</a><hr>
        <a href="http://127.0.0.1:8000/sepatu">Sepatu</a><hr>
        <a href="http://127.0.0.1:8000/karyawan1">Karyawan1</a><hr>
    </div>
    <div id="main" >
        <button class="openbtn" onclick="openNav()">☰ PWEB B</button>
        @section('isikonten')
        @show
      </div>

      <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
      }
      </script>
      <hr>
      <div class="page-footer">
        <p align=center> ©Hak Cipta Oleh <br>
            Septica Tiara Indah Permatasari-5026201031<br>
        </p>
    </div>
</body>
</html>
