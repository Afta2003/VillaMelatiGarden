<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        hr {
            color:aliceblue;
            width: 1249px
            left: 250px
        }

            div.a{
            text-align: center;
        
          }
          *{
          margin: 0;
          padding: 0;
        }
            .rate {
          float: left;
          height: 46px;
          padding: 0 10px;
          }
          .rate:not(:checked) > input {
              position:absolute;
              top:-9999px;
          }
          .rate:not(:checked) > label {
              float:right;
              width:1em;
              overflow:hidden;
              white-space:nowrap;
              cursor:pointer;
              font-size:30px;
              color:#ccc;
          }
          .rate:not(:checked) > label:before {
              content: '★ ';
          }
          .rate > input:checked ~ label {
              color: #ffc700;    
          }
          .rate:not(:checked) > label:hover,
          .rate:not(:checked) > label:hover ~ label {
              color: #deb217;  
          }
          .rate > input:checked + label:hover,
          .rate > input:checked + label:hover ~ label,
          .rate > input:checked ~ label:hover,
          .rate > input:checked ~ label:hover ~ label,
          .rate > label:hover ~ input:checked ~ label {
              color: #c59b08;
          }

          bgImage {
          position: relative;
          width: 1400px;
          height: 600px;
          background-image: url('img/LogoVilla.png');
          background-size: cover;
          background-repeat: no-repeat;
          background-position: center;
          }

          .bgImage::after {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.55);
          }

            .content {
            position: absolute;
            top: 50%;
            left: 50%;
            text-align: center;
            transform: translate(-50%, -50%);
    }
          </style>
    </head>
    <img src="img/LogoVilla.png" alt="Logo villa"  width="581" height="70" lenght="1000" class="left">
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
<body style="color:white;">
      <div class="container mt-4">
        <div class="a">
      <h1 style="color:white;">Fill the form to submit<h1> 
        <h1 style="color:white;"><h1> 
        <h2 style="color:white;">Feedback</h2>
<body>
      </body>   
<div style = "text-align:left"class="mb-4 small">
Please provide your feedback in the form below
</div>
<div style="text-align:left" class="row">
  <div  class="col">
    <label class="form-label" for="feedback_name">Your Name:</label>
    <input type="text" required name="name" class="form-control" id="feedback_name"/>
  </div>
  
  <div class="col mb-4">
    <label class="form-label" for="feedback_email">Email:</label>
    <input type="email" name="email" required class="form-control" id="feedback_email"/>
  </div>
</div>
<div style=text-align:left>
  <form name="feedback_form" id="feedback_form" method="post">
  <label style = "text-align:left">How do you rate your overall experience?</label>
  </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </div>
      <div class="rate">
        <input type="radio" id="star5" name="rate" value="5" />
        <label for="star5" title="text">5 stars</label>
        <input type="radio" id="star4" name="rate" value="4" />
        <label for="star4" title="text">4 stars</label>
        <input type="radio" id="star3" name="rate" value="3" />
        <label for="star3" title="text">3 stars</label>
        <input type="radio" id="star2" name="rate" value="2" />
        <label for="star2" title="text">2 stars</label>
        <input type="radio" id="star1" name="rate" value="1" />
        <label for="star1" title="text">1 star</label>
      </div>
<div style="text-align:left" class="mb-4">
<label class="form-label"  for="feedback_comments">Comments:</label>
  <textarea class="form-control" required rows="7" name="comments" id="feedback_comments" placeholder="Masukkan Feedback Disini!"></textarea>
</div>
<button type="submit" class="btn btn-success btn-lg" >Post</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>