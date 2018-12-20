<!DOCTYPE html>
<html lang="da">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="pics/favicon.png">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <title>Frontpage</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Source Sans Pro', sans-serif;

    }

    h2 {
      font-family: 'Open Sans Condensed', sans-serif;
    }

    body {
      display: grid;
      grid-template-rows: 1fr auto;

    }

    #posts {
      padding: 50px 0 80px;

    }

    .data-container {
      display: grid;
      max-width: 400px;
      margin: 0 auto;
      grid-gap: 10px;

    }

    .post-container {
      padding: 1em;
      box-shadow: 0 0px 40px rgba(44, 48, 65, 0.1);
      transition: .3s;
      cursor: pointer;

    }

    .post-container:hover {
      transform: scale(1.08);
    }

    [data-name] {
      font-size: 22px;
    }


    [data-video] {
      z-index: 200;
    }

    .data-bottom {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .data-bottom p {
      margin: 5px 0 0;

    }

    .data-bottom p {
      margin: 5px 0 15px;

    }

    .data-container article img {
      width: 100%;
    }

    .data-container article video {
      width: 100%;
    }

    .slideshow {
      width: 100vw;
      position: relative;
      display: none;

    }

    .slide {
      display: none;
      position: relative;
    }

    .slide img {
      width: 100%;
      max-height: 590px;
    }

    .arrows {
      position: relative;
      left: 2px;
      top: 7px;

    }

    .prev,
    .next {
      color: #575757;
      font-weight: lighter;
      font-size: 1em;
      padding: 10px 15px;
      margin: 0 -2px;
      cursor: pointer;
      background: #dddddd;
      transition: .4s;
    }

    .prev:hover,
    .next:hover {
      background: #989898;
    }

    .slideBoxContainer {

      position: absolute;
      top: 60%;
      left: 5%;


    }

    .slideBoxContainer .textOnSlide a {
      text-decoration: none;
      color: #eadfdf;
    }

    .textOnSlide {
      transition: .3s;
      background-color: #2e2d2d;
      font-size: 1.5em;
      text-transform: uppercase;
      padding: 10px;

    }

    .textOnSlide:hover {
      background-color: #9d9b9b;
    }

    .video-container {
      position: relative;
      height: 150px;
      width: 100vw;
      overflow: hidden;

    }

    .nyhedsbrev-container {
      background-color: #2e2d2d;
      position: absolute;
      color: #eadfdf;
      font-size: 1.1em;
      padding: 10px;
      width: 100%;

    }

    .nyhedsbrev-container p {
      padding: 10px;
    }

    .text-submit-wrapper {
      display: flex;
      justify-content: space-between;
      max-width: 300px;
      padding: 10px;

    }

    input[type=text] {
      width: 200px;
      border: 1px solid #ccc;
      border-radius: 2px;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: none;
      text-indent: 5px;
      height: 40px;

    }

    input[type=submit] {
      background-color: rgba(88, 27, 27, 0.71);
      color: #fff;
      padding: 12px 20px;
      border: 1px solid #ccc;
      border-radius: 2px;
      cursor: pointer;
      height: 42px;
      margin-top: 6px;
      margin-bottom: 16px;
    }

    input[type=submit]:hover {
      background-color: rgba(88, 27, 27, 0.89);
    }

    .overlay {
      position: absolute;
      background-color: rgba(88, 27, 27, 0.71);
      width: 100%;
      height: 100%;
      bottom: 0;
      left: 0;
      z-index: 100;
      display: none;
    }

    .video-container video {
      position: relative;
      width: 100%;
      bottom: 70%;
      display: none;
    }

    #modal {
      background-color: rgba(18, 42, 105, 0.9);
      width: 100vw;
      height: 100vh;
      position: fixed;
      text-align: center;
      opacity: 0;
      pointer-events: none;
      transition: 1s;
      top: 0;
      z-index: 1;
      color: white;
      padding-top: 30%;
    }

    #modal.vis {
      opacity: 1;
      pointer-events: all;
      transition: 0.5s;
    }

    #modal img {
      max-width: 80%;
    }

    #modal .modal-button {
      background-color: rgba(7, 22, 139, 0.84);
      color: #fff;
      padding: 12px 20px;
      border: 1px solid #ccc;
      border-radius: 2px;
      cursor: pointer;
      height: 42px;
      margin-top: 6px;
      margin-bottom: 16px;
      transition: .3s;
    }

    #modal .modal-button:hover {
      background-color: rgba(46, 66, 219, 0.52);
    }

    @media screen and (min-width:650px) {

      .data-container {
        grid-template-columns: 1fr 1fr;
        max-width: 600px;
      }

      [data-name] {
        min-height: 66px;
        margin-bottom: 0px;
      }

      .video-container {
        height: 250px;
      }

      .nyhedsbrev-container {
        bottom: 15%;
        z-index: 200;
        color: #eadfdf;
        left: 25%;
        font-size: 1.1em;
        padding: 10px;
        width: 50%;
      }

      .overlay {
        display: block;
      }

      .video-container video {
        display: block;
        bottom: 25%;
      }

      .text-submit-wrapper {
        max-width: 250px;
        padding: 10px;

      }

      input[type=text] {
        width: 150px;
        margin-top: 0px;
        margin-bottom: 0px;

      }

      input[type=submit] {
        margin-top: 0px;
        margin-bottom: 0px;
      }

      #modal {
        padding-top: 10vw;
      }

      #modal img {
        max-width: 60%;
      }
    }

    @media screen and (min-width:768px) {

      .slideshow {
        display: block;
      }
    }

    @media screen and (min-width:900px) {
      .textOnSlide {
        font-size: 2em;
      }
    }

    @media screen and (min-width:1024px) {


      .data-container {
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
      }

      .data-container {
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
        max-width: 850px;

      }

      .nyhedsbrev-container {

        font-size: 1.7em;
        left: 0;
        right: 0;
        margin-left: auto;
        margin-right: auto;
        width: 500px;
      }

      #modal img {
        max-width: 50%;
      }

    }

    @media screen and (min-width:1300px) {

      .data-container {

        max-width: 1300px;

      }

      .textOnSlide {
        font-size: 3em;
      }

      .slide img {
        max-height: 700px;
      }

      .video-container {
        height: 450px;
      }

      .nyhedsbrev-container {
        font-size: 1.8;
        bottom: 25%;
      }


      .text-submit-wrapper {
        max-width: 350px;
        padding: 10px;

      }

      input[type=text] {
        width: 250px;
        margin-top: 0px;
        margin-bottom: 0px;

      }

      input[type=submit] {
        margin-top: 0px;
        margin-bottom: 0px;
      }

      #modal {
        padding-top: 5vw;
      }

      #modal img {
        max-width: 40%;
      }

    }
  </style>
</head>

<body>

  <?php include "header.html"; ?>

  <section id="modal">


    <button class="modal-button" id="close">&#10006;</button>


    <div id="modal_content">
      <img src="pics/snapchat-modal.png" alt="Snapchat modal view picture">

    </div>

  </section>

  <div class="slideshow">
    <div class="slide fade">

      <img src="pics/slideshow/ss.jpg" alt="Slideshow picture 1">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/asd.jpg" alt="Slideshow picture 2">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/dkf.jpg" alt="Slideshow picture 3">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/ght.jpg" alt="Slideshow picture 4">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/hhj.jpg" alt="Slideshow picture 5">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/slideshow.jpg" alt="Slideshow picture 6">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/karl-slideshow1.jpg" alt="Slideshow picture 7">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>

    <div class="slide fade">

      <img src="pics/slideshow/ssd.jpg" alt="Slideshow picture 8">
      <div class="slideBoxContainer">
        <div class="textOnSlide">
          <a href="sneakers.php">
            <p>
              Stand out with sneaks from KarlsKicks
            </p>
          </a>
        </div>
        <div class="arrows">
          <a class="prev" onclick="plusOne(-1)">&#10094;</a>
          <a class="next" onclick="plusOne(1)">&#10095;</a>
        </div>
      </div>
    </div>
  </div>

  <main id="posts">
    <section class="data-container">

    </section>
  </main>

  <template class="data-template">
    <article class="post-container">
      <h2 data-name></h2>
      <img data-picture alt="Frontpage shoes">
      <video data-video onmouseover="playVideo(this)" onmouseout="resetVideo(this)"></video>
      <div class="data-bottom">
        <p data-size></p>
        <p data-price></p>
      </div>
    </article>
  </template>

  <div class="video-container">
    <div class="nyhedsbrev-container">
      <p>Sign up for exclusive offers, latest product info and more!</p>
      <div class="text-submit-wrapper">
        <input type="text" placeholder="Email">
        <input type="submit" value="Submit">
      </div>
    </div>
    <div class="overlay"></div>
    <video src="MVI_7120.mp4" autoplay muted loop></video>
  </div>

  <?php include "footer.html"; ?>

  <script>
    let wpJSON;
    let dest = document.querySelector(".data-container");

    document.addEventListener("DOMContentLoaded", hentJson);
    document.querySelector(".snapchat-link").addEventListener("click", visModal);

    async function hentJson() {

      let myJson = await fetch("http://mboegvald.dk/kea/wordpress_mappe/wordpress/wp-json/wp/v2/product_post/?per_page=50");
      wpJSON = await myJson.json();
      visJson();
    }

    function visJson() {

      let taeller = 0;
      let myTemplate = document.querySelector(".data-template");

      wpJSON.forEach(post => {

        if (post.acf.type == "Sneakers") {

          taeller++;

          if (taeller <= 6) {

            let klon = myTemplate.cloneNode(true).content;
            let showPicture = window.matchMedia("(min-width: 768px)");

            klon.querySelector("[data-name]").textContent = post.acf.name;

            if (showPicture.matches) {
              klon.querySelector("[data-video]").src = post.acf.video;
              klon.querySelector("[data-picture]").style.display = "none";
            } else {
              klon.querySelector("[data-video]").style.display = "none"
              klon.querySelector("[data-picture]").src = post.acf.picture;
            }

            klon.querySelector("[data-price]").textContent = "Price: " + post.acf.price + ",-";

            klon.querySelector("[data-size]").textContent = "EUR: " + post.acf.size;


            klon.querySelector(".post-container").addEventListener("click", () => {
              window.location.href = "singleview.php?id=" + post.id;


            })
            dest.appendChild(klon);
          }
        }
      })
    }

    let slideNumber = 1;
    let slides = document.querySelectorAll(".slide");

    function showSlides(n) {
      let i;

      if (n > slides.length) {
        slideNumber = 1
      }
      if (n < 1) {
        slideNumber = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }

      slides[slideNumber - 1].style.display = "block";

    }

    showSlides(slideNumber);


    function plusOne(n) {
      showSlides(slideNumber += n);
    }

    function autoSlide() {

      if (slideNumber <= slides.length) {
        slideNumber++;
      }
      if (slideNumber > slides.length) {
        slideNumber = 1;
      }

      showSlides(slideNumber);

    }
    let modal = document.querySelector("#modal");

    function visModal() {
      modal.classList.add("vis");
      document.querySelector("#close").addEventListener("click", skjulModal);

    }

    function skjulModal() {
      modal.classList.remove("vis");

    }



    function resetVideo(videoReset) {
      videoReset.currentTime = 0;
      videoReset.pause();
    }

    function playVideo(videoPlay) {
      videoPlay.play();

    }

    setInterval(autoSlide, 5000);
  </script>
</body>

</html>
