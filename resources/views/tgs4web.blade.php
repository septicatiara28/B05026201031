
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#flip1").click(function(){
    $("#panel1").slideUp("fast");
  });
});

$(document).ready(function(){
  $("#flip2").click(function(){
    $("#panel2").slideDown("slow");
  });
});

$(document).ready(function(){
  $("#flip3").click(function(){
    $("#panel3").slideToggle("milimeter");
  });
});
</script>
<style>

body {
    background-color:khaki;
}
h1 , h2 , h3 {
    font-family: Arial, Helvetica, sans-serif;
    }
#flip1 {
  padding: 2px;
  text-align: center;
  background-color:peachpuff;
  border: solid 3px burlywood;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 50px;
}
#panel1 {
  padding: 2px;
  text-align: justify;
  background-color:cornsilk;
  border: solid 1px burlywood;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 20px;
}
#panel1 {
  padding: 50px;
}
#flip2 {
  padding: 2px;
  text-align: center;
  background-color:peachpuff;
  border: solid 3px burlywood;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 50px;
}
#panel2 {
  padding: 2px;
  text-align: justify;
  background-color:cornsilk;
  border: solid 1px burlywood;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 20px;
}
#panel2 {
  padding: 50px;
  display:none;
}
#flip3 {
  padding: 2px;
  text-align: center;
  background-color:peachpuff;
  border: solid 3px burlywood;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 50px;
}
#panel3 {
  padding: 2px;
  text-align: justify;
  background-color:cornsilk;
  border: solid 1px burlywood;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size: 20px;
}
#panel3 {
  padding: 50px;
  display:none;
}
</style>
</head>
<body>
<h2>JQuerySlideDown</h2>
<div id="flip1"><i>Apa itu W3Schools?</i></div>
<div id="panel1">W3Schools adalah situs web developer informasi, dengan tutorial dan referensi yang berkaitan dengan topik pengembangan web seperti HTML, CSS, JavaScript, PHP, SQL, dan JQuery.
               Situs ini mendapatkan namanya dari singkatan untuk World Wide Web; W3 adalah numeronym dari WWW. W3Schools tidak berafiliasi dengan W3C.
               Hal ini dibuat dan dimiliki oleh Refsnes data, pengembangan perangkat lunak milik keluarga Norwegia dan perusahaan konsultan.
               Situs ini menyediakan panduan referensi yang mencakup banyak aspek pemrograman web, termasuk teknologi seperti HTML, XHTML, CSS, XML, JavaScript, PHP, ASP, SQL dll
               W3Schools menyediakan ribuan contoh kode. Dengan menggunakan editor online yang disediakan, pembaca dapat mengedit contoh dan mengeksekusi kode eksperimental.</div>
<h2>JQuerySlideUp</h2>
<div id="flip2"><i>Apa itu W3Schools?</i></div>
<div id="panel2">W3Schools adalah situs web developer informasi, dengan tutorial dan referensi yang berkaitan dengan topik pengembangan web seperti HTML, CSS, JavaScript, PHP, SQL, dan JQuery.
                Situs ini mendapatkan namanya dari singkatan untuk World Wide Web; W3 adalah numeronym dari WWW. W3Schools tidak berafiliasi dengan W3C.
                Hal ini dibuat dan dimiliki oleh Refsnes data, pengembangan perangkat lunak milik keluarga Norwegia dan perusahaan konsultan.
                Situs ini menyediakan panduan referensi yang mencakup banyak aspek pemrograman web, termasuk teknologi seperti HTML, XHTML, CSS, XML, JavaScript, PHP, ASP, SQL dll
                W3Schools menyediakan ribuan contoh kode. Dengan menggunakan editor online yang disediakan, pembaca dapat mengedit contoh dan mengeksekusi kode eksperimental.</div>
<h2>JQuerySlideToggle</h2>
<div id="flip3"><i>Apa itu W3Schools?</i></div>
<div id="panel3">W3Schools adalah situs web developer informasi, dengan tutorial dan referensi yang berkaitan dengan topik pengembangan web seperti HTML, CSS, JavaScript, PHP, SQL, dan JQuery.
                Situs ini mendapatkan namanya dari singkatan untuk World Wide Web; W3 adalah numeronym dari WWW. W3Schools tidak berafiliasi dengan W3C.
                Hal ini dibuat dan dimiliki oleh Refsnes data, pengembangan perangkat lunak milik keluarga Norwegia dan perusahaan konsultan.
                Situs ini menyediakan panduan referensi yang mencakup banyak aspek pemrograman web, termasuk teknologi seperti HTML, XHTML, CSS, XML, JavaScript, PHP, ASP, SQL dll
                W3Schools menyediakan ribuan contoh kode. Dengan menggunakan editor online yang disediakan, pembaca dapat mengedit contoh dan mengeksekusi kode eksperimental.</div>

</body>
</html>
