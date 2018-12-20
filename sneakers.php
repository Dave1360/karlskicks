<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="16x16" href="pics/favicon.png">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="footer.css">
  <title>Sneakers</title>
</head>

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
    padding: 50px 0;
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
    min-height: 66px;
    font-size: 22px;

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

  @media screen and (min-width:650px) {

    .data-container {
      grid-template-columns: 1fr 1fr;
      max-width: 600px;
    }
  }

  @media screen and (min-width:1000px) {

    .data-container {
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 20px;

    }

    .data-container {
      max-width: 850px;

    }
  }

  @media screen and (min-width:1300px) {

    .data-container {
      max-width: 1300px;
    }

  }
</style>

<body>
  <?php include "header.html"; ?>

  <main id="posts">
    <div class="container">
      <section class="data-container"></section>
    </div>
  </main>

  <template class="data-template">
    <article class="post-container">
      <h2 data-name></h2>
      <div class="image-wrapper">
        <img data-picture alt="Picture of Karls sneakers">
        <video data-video onmouseover="playVideo(this)" onmouseout="resetVideo(this)"></video>
      </div>
      <div class="data-bottom">
        <p data-size></p>
        <p data-price></p>
      </div>
    </article>
  </template>

  <?php include "footer.html"; ?>
  <script>
    let wpJSON;
    let dest = document.querySelector(".data-container");

    document.addEventListener("DOMContentLoaded", hentJson);

    async function hentJson() {

      let myJson = await fetch("http://mboegvald.dk/kea/karlskicks/wordpress/wp-json/wp/v2/product_post/?per_page=50");
      wpJSON = await myJson.json();
      visJson();
    }

    function visJson() {

      let myTemplate = document.querySelector(".data-template");

      wpJSON.forEach(post => {

        if (post.acf.type == "Sneakers") {

          let klon = myTemplate.cloneNode(true).content;

          klon.querySelector("[data-name]").textContent = post.acf.name;

          let showPicture = window.matchMedia("(min-width: 768px)");


          if (showPicture.matches) {
            klon.querySelector("[data-video]").src = post.acf.video;
            klon.querySelector("[data-picture]").style.display = "none";
          } else {
            klon.querySelector("[data-video]").style.display = "none"
            klon.querySelector("[data-picture]").src = post.acf.picture;
          }

          klon.querySelector("[data-size]").textContent = "EUR: " + post.acf.size;

          klon.querySelector("[data-price]").textContent = "Price: " + post.acf.price + ",-";

          klon.querySelector(".post-container").addEventListener("click", () => {
            window.location.href = "singleview.php?id=" + post.id;

          })
          dest.appendChild(klon);

        }
      });

    }

    function resetVideo(videoReset) {
      videoReset.currentTime = 0;
      videoReset.pause();
    }

    function playVideo(videoPlay) {
      videoPlay.play();

    }

  </script>


</body>

</html>
