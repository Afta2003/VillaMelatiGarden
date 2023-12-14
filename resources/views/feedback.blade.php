<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    hr {
      color: aliceblue;
      width: 100%;
      left: 100%x;
    }

    div.a {
      text-align: center;
    }

    .star-rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: flex-end;
    }

    .radio-input {
      position: fixed;
      opacity: 0;
      pointer-events: none;
    }

    .radio-label {
      cursor: pointer;
      font-size: 0;
      color: rgba(0, 0, 0, 0.2);
      transition: color 0.1s ease-in-out;
    }

    .radio-label:before {
      content: "★";
      display: inline-block;
      font-size: 32px;
    }

    .radio-input:checked~.radio-label {
      color: #ffc700;
      color: gold;
    }

    .radio-label:hover,
    .radio-label:hover~.radio-label {
      color: goldenrod;
    }

    .radio-input:checked+.radio-label:hover,
    .radio-input:checked+.radio-label:hover~.radio-label,
    .radio-input:checked~.radio-label:hover,
    .radio-input:checked~.radio-label:hover~.radio-label,
    .radio-label:hover~.radio-input:checked~.radio-label {
      color: darkgoldenrod;
    }


    .average-rating {
      position: relative;
      appearance: none;
      color: transparent;
      width: auto;
      display: inline-block;
      vertical-align: baseline;
      font-size: 25px;
    }

    .average-rating::before {
      --percent: calc(4.3/5*100%);
      content: '★★★★★';
      position: absolute;
      top: 0;
      left: 0;
      color: rgba(0, 0, 0, 0.2);
      background: linear-gradient(90deg, gold var(--percent), rgba(0, 0, 0, 0.2) var(--percent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    body {
      margin: 10px;
      background-image: url('https://img.freepik.com/free-photo/luxury-pool-villa-spectacular-contemporary-design-digital-art-real-estate-home-house-property-ge_1258-150765.jpg?size=626&ext=jpg&ga=GA1.1.1222169770.1702425600&semt=sph')
    }

    form {
      margin: 0 0 50px;
    }

    .nama {
      text-align: center;
      width: 750px;
      height: 150px;
      margin: 0 667px 0;
    }

    .email {
      text-align: center;
      width: 750px;
      height: 150px;
      margin: 0 667px 0;

    }

    .deskripsi {
      text-align: center;
      width: 750px;
      height: 150px;
      margin: 0 667px 0;
    }

    .textcenter {
      text-align: center;
    }
  </style>
</head>

<body>
  <img src="img/LogoVilla.png" alt="Logo villa" width="581" height="70" length="1000" class="left">
  <div>
    <header class="header">
      <a href="#" class="VILLA"></a>

      <nav class="navbar">
        <a href="dashboard">Dashboard</a>
        <a href="facilities">Facilities</a>
        <a href="feedback">Feedback</a>
        <a href="galery">Gallery</a>
        <a href="testimonies">Testimonies</a>
        <a href="about">About</a>
        <a href="login"> | Login </a>
      </nav>
    </header>
    <hr>

    <div class="textcenter">
      <h2 class="h2">Feedback</h2>
      <div class="col mb-5"></div>
      <div class="mb-4 small">
        <div>
          Please provide your feedback in the form below
        </div>
        <div class="col mb-5"></div>
        <div class="col">
          <div class="nama">
            <label class="form-label" for="feedback_name">Your Name:</label>
            <input type="text" required name="name" class="form-control" id="feedback_name" />
          </div>
        </div>
        <div class="email">
          <label class="form-label" for="feedback_email">Email:</label>
          <input type="email" name="email" required class="form-control" id="feedback_email" />

        </div>

        <form>
          <p>Rate the experience:</p>
          <form class="star-rating">
            <input class="radio-input" type="radio" id="star5" name="star-input" value="5" />
            <label class="radio-label" class for="star5" title="5 stars">5 stars</label>

            <input class="radio-input" type="radio" id="star4" name="star-input" value="4" />
            <label class="radio-label" for="star4" title="4 stars">4 stars</label>

            <input class="radio-input" type="radio" id="star3" name="star-input" value="3" />
            <label class="radio-label" for="star3" title="3 stars">3 stars</label>

            <input class="radio-input" type="radio" id="star2" name="star-input" value="2" />
            <label class="radio-label" for="star2" title="2 stars">2 stars</label>

            <input class="radio-input" type="radio" id="star1" name="star-input" value="1" />
            <label class="radio-label" for="star1" title="1 star">1 star</label>
            <div class="textcenter">
              <label class="form-label" for="feedback_comments">Comments:</label>
            </div>
            <div class="deskripsi">
              <textarea class="form-control" required rows="5" name="comments" id="feedback_comments"></textarea>
            </div>
      </div>
    </div>
    <div class="textcenter">
      <button type="submit" class="btn btn-success btn-lg">Post</button>
      </form>
    </div>
</body>

</html>