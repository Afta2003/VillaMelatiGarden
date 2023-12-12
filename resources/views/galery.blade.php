<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>galery</title>
    <link rel="stylesheet" href="style.css">
    <style>
        hr {
            color:aliceblue;
            width: 1249px
            left: 250px
        }
        img{
          max-width: 100%;
          height: auto;
        }

          div.a{
          text-align: center;
        }
        .container{
          max-width: 1100px;
          width:100%;
          padding:40px 15px;
          margin: 0 auto;
          box-sizing: border-box;
          text-align: center;
        }
        .header{
          margin:30px 0;
          overflow: hidden;
        }
        .header img{
          width: 150px;
          height: 150px;
          border-radius: 100%;
          object-fit: cover;
        }
        .galery{
          margin: 50px 0;
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          grid-gap: 25px;
        }
        .galery img{
          width: 150px;
          height: 250px;
          object-fit: cover;
          border: 1px solid #eee;
          box-shadow: 1px 2px 3px #ddd;
          border-radius: 10px;
          box-sizing: border-box;
        }
          img {
          display: block;
          margin-left: auto;
          margin-right: auto;
        }
        
        </style>
  </head>
  <body>
  <img src="img/LogoVilla.png" alt="Logo villa"  width="581" height="70" length="1000">
        <header class="header">
      <a href="#" class="VILLA"></a>

      <nav class="navbar">
        <a href="dashboard">Dashboard</a>
        <a href="facilities">Facilities</a>
        <a href="feedback">Feedback</a>
        <a href="galery">Galery</a>
        <a href="testimonies">Testimonies</a>
        <a href="about">About</a>
        <a href="login"> | Login</a>
      </nav>
    </header>
    <hr>
    <div class="container mt-5">
      <h1 style="color:white; text-align:center" >OUR VILLA<h1>
      </div> 
        <h1 style="color:white;"><h1>
        <div class="container mt-4">
          <div class='galery'>
            <img src='img/RuangTamu.jpg'/>
            <img src='img/kolamrenang.jpg'/>
            <img src='img/halaman.jpg'/>
            <img src='img/ruangtamuu.jpg'/>
            <img src='img/kamar.jpg'/>
            <img src='img/balcony.jpg'/>
            <img src='img/dapur.jpg'/>
            <img src='img/halamanbelakang.jpg'/>
            <img src='img/bakaran.jpg'/>
          </div>
    <h1></h1>
  </body>
</html>