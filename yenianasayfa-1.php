<!DOCTYPE html>
<html>
  <head>
   <title>Jevo'nun Zulası</title>
    <meta charset="utf-8">
    <link href="style1.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
    <div class="menu">
      <ol>
        <li><a href="kayıtol.html">Kayıt Ol</a></li>
        <li><a href="iletişim.html">İletişim</a></li>
        <li><a href="ürünler.html">Ürünler</a></li>
        <li><a href="">Ana Sayfa</a></li>
      </ol>
    </div>

    <p style="float:left; margin-left:50px; margin-top:250px; ">Merhaba <?php echo $_SESSION['name'] ?>!</p>

    <div class="bilgi">
      <font face="Segoe Print">
        <p>
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Cevdet Zübeyr BAĞCI & by Jevo<br>
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Süleyman Demirel Üniversitesi Almaty/Kazakistan<br>
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +7 708 1001 678 <br>
          <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +90 5432 822 101<br>
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> cevdetbagci95@gmail.com<br>
          <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> cevdetzubeyr.bagci@gmail.com
        </p>
      </font><br/>
    </div>


  </body>
</html>
