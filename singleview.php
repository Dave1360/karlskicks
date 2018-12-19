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
  <title>Product</title>
</head>

<style>

  * {
            margin: 0;
            padding: 0;
            font-family: 'Source Sans Pro', sans-serif;

        }

  h2,
    h1{
        font-family: 'Open Sans Condensed', sans-serif;
    }

    p {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 15px;
    }

    hr {
        border-color: #f7f7f7;
        border-style: solid;
        border-width: 1px;
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
        margin-top: 60px;
    }

    [data-name] {
        font-size: 25px;
        margin-bottom: 9px;
    }

    [data-price],
    [data-size] {
        font-size: 25px;
        font-family: 'Open Sans Condensed', sans-serif;
    }


    .data-bottom {
        display: flex;
        justify-content: space-between;
    }

    .data-bottom p {
        margin: 5px 0 0;

    }

    .data-bottom p {
        margin: 5px 0 15px;
    }

    .data-container article img {
        display: block;
        margin: auto;
        max-width: 100%;
    }

    .data-container article video {
        display: block;
        margin: auto;
        width: 100%;
    }

    .selector {
        width: 165px;
        height: 50px;
        background-color: #E1E8EE;
        margin: 0 0 10px;
        border: none;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 20px;
        border-radius: 0;
        -webkit-appearance: none;
        padding-left: 10px;
    }

    .selector-wrapper {
        display: flex;
        justify-content: space-between;
        display: none;
    }

    .right-box h3 {
        margin-bottom: 4px;
        font-family: 'Open Sans Condensed', sans-serif;
        color: #666;
        text-transform: uppercase;
        font-size: 20px;
    }

    .buy-button {
        width: 240px;
        height: 50px;
        background: black;
        color: white;
        text-transform: uppercase;
        font-size: 20px;
        border: none;
        font-family: 'Open Sans Condensed', sans-serif;
        cursor: pointer;

    }

    [data-second-name] {
        font-size: 20px;
      margin: 0;
    }

    [data-description] {
        font-size: 13px;
        line-height: 1.5;
        padding-top: 10px;
    }

    .quantity {
        margin-bottom: 10px;
         width: 100%;
        display: flex;
        font-size: 20px;
}

    .quantity-value-box {
        display: flex;
        padding-right: 10px;
    }

     .quantity p {
        background-color:  #E1E8EE;
        width: 30px;
        height: 50px;
        text-align: center;
        vertical-align: middle;
        line-height: 50px;
        margin: 0;
        font-family: 'Open Sans Condensed', sans-serif;
        border-left: 0.8px solid rgba(199, 199, 199, 0.67);
        border-right: 0.8px solid rgba(199, 199, 199, 0.67);
         font-size: 25px;
    }

    .plus-btn, .minus-btn {
        width: 30px;
        height: 50px;
        background-color: #E1E8EE;
        border: none;
        cursor: pointer;
        font-size: 20px;

}

    .plus-btn:hover,
    .minus-btn:hover
   {
     background: #989898;

}
    .plus-btn:focus, .minus-btn:focus {
        outline: 0;
    }
    .buy-more-container h1 {
        text-align: center;
        padding: 70px 0 20px;
        font-size: 2.5em;
    }

    .buy-more {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        max-width: 600px;
        grid-gap: 30px;
        margin: 20px auto 50px;
    }

    .buy-more-box {
        box-shadow: 0 0px 40px rgba(44, 48, 65, 0.1);
        text-align: center;
    }

    .buy-more-box h2 {
        padding: 0 0 5px;
    }

    .buy-more-box p {
        padding: 0 0 15px;
        font-weight: bold;
        font-size: 1.1em;
    }

    .buy-more img {
        max-width: 100%;
    }


    @media screen and (min-width:413px) {
        .buy-button {
            width: 270px;
        }
    }

    @media screen and (min-width:1000px) {
           .data-container {
            max-width: 1000px;
        }

        .post-container {
            display: flex;
        }

        .right-box {
            flex-basis: 450px;
            margin: auto;
            padding-top: 60px;
        }
        .left-box{
            flex-basis: 450px;
        }

           .right-box h3 {
            margin-top: 0px;
        }

        .buy-button {
            width: 370px;
        }

    }

    @media screen and (min-width:1300px) {

        .data-container {
            max-width: 1200px;
        }

        .right-box {
            flex-basis: 550px;
            margin-top: 0px;
        }

        .left-box{
            flex-basis: 550px;

        }

        .buy-button {
            width: 450px;
        }

        .selector {
            width: 270px;
        }

         .quantity {
            min-height: 66px;
        }

         [data-description] {
        font-size: 15px;

    }
    }
</style>

<body>
  <?php include "header.html"; ?>

  <section class="data-container">
    <article class="post-container">
      <div class="left-box">
        <h2 data-name></h2>
        <div class="image-wrapper">
          <img data-picture alt="Picture of a shoe or product">
          <video data-video onmouseover="play(this)" onmouseout="reset(this)"></video>

        </div>
      </div>
      <div class="right-box">

        <div class="selector-wrapper">
          <div class="size">
            <h3>Size</h3>
            <select data-option="option1" class="selector">
              <option value="Big">Big</option>
              <option value="Small">Small</option>
            </select>
          </div>
          <div class="set">
            <h3>Set</h3>
            <select data-option1="option1" class="selector">
              <option value="1">1</option>
              <option value="3">3</option>
              <option value="5">5</option>
              <option value=10>10</option>
            </select>
          </div>
        </div>
        <h3>Quantity</h3>
        <div class="quantity">
          <div class="quantity-value-box">
            <button class="minus-btn" type="button" name="button">
              -
            </button>

            <p><a class="clicks">1</a></p>

            <button class="plus-btn" type="button" name="button">
              +
            </button>
          </div>
          <div class="quantity-buy-button">
            <button class="buy-button">add to cart</button>
          </div>
        </div>
        <hr>


        <div class="data-bottom">
          <p data-size></p>
          <p data-price></p>
        </div>
        <h2 data-second-name></h2>
        <p data-description></p>
      </div>
    </article>
  </section>
  <div class="buy-more-container">
    <h1>You may also like...</h1>
    <div class="buy-more">
      <div class="buy-more-box">
        <img data-second src="pics/yellowbuster.png" alt="picture of Yellow Buster">
        <h2>Yellow Buster</h2>
        <p>45,-</p>
      </div>
      <div class="buy-more-box">
        <img data-second src="pics/nanoprotector.png" alt="Picture of Nano protector">
        <h2>Nano Protector</h2>
        <p>49,-</p>
      </div>
      <div class="buy-more-box">
        <img data-second src="pics/sneakerprotector.png" alt="Picture of Sneaker protector">
        <h2>Sneaker Protector</h2>
        <p>59,-</p>
      </div>
    </div>
  </div>

  <?php include "footer.html"; ?>
  <script>
    let urlParams = new URLSearchParams(window.location.search);
    let id = urlParams.get("id");
    let wpJSON;
    let wpProductJSON;
    document.addEventListener("DOMContentLoaded", hentJson);

    console.log(id);

    async function hentJson() {
      let myJson = await fetch("http://mboegvald.dk/kea/karlskicks/wordpress/wp-json/wp/v2/product_post/?per_page=50");
      wpJSON = await myJson.json();
      visJson();
    }

    function visJson() {
      let display = document.querySelector(".data-container");

      wpJSON.forEach(post => {
        if (post.id == id) {

          display.querySelector("[data-name]").textContent = post.acf.name;

          let showPicture = window.matchMedia("(min-width: 768px)");

          if (showPicture.matches) {
            display.querySelector("[data-video]").src = post.acf.video;
            display.querySelector("[data-picture]").style.display = "none";
              if (post.acf.video == false) {
                display.querySelector("[data-picture]").src = post.acf.picture;
                display.querySelector("[data-picture]").style.display = "block";

            }
          } else {
            display.querySelector("[data-video]").style.display = "none"
            display.querySelector("[data-picture]").src = post.acf.picture;
              if (post.acf.video == false) {
                display.querySelector("[data-picture]").src = post.acf.picture;
                display.querySelector("[data-picture]").style.display = "block";

            }
          }


          if (post.acf.type == "Sneakers") {
            display.querySelector("[data-size]").textContent = "EUR: " + post.acf.size;
          }


          display.querySelector("[data-price]").textContent = "Price: " + post.acf.price + ",-";

          display.querySelector("[data-description]").textContent = post.acf.description;

          display.querySelector("[data-second-name]").textContent = post.acf.name;

          if (post.acf.type != "Sneakers") {
            display.querySelector(".selector-wrapper").style.display = "flex";
          }

          let clicks = 1;
          let totalPrice = post.acf.price;
          let currentPrice;
          let finalPrice;

          display.querySelector(".plus-btn").addEventListener("click", plusOne);

          function plusOne() {
            clicks += 1;
            currentPrice = clicks * totalPrice;
            document.querySelector(".clicks").innerHTML = clicks;
            console.log(currentPrice)
            display.querySelector("[data-price]").textContent = "Price: " + currentPrice + ",-";
          }

          display.querySelector(".minus-btn").addEventListener("click", minusOne);

          function minusOne() {
            if (clicks > 1) {
              clicks -= 1;
              finalPrice = (totalPrice * clicks);
              document.querySelector(".clicks").innerHTML = clicks;
              console.log(finalPrice)
              display.querySelector("[data-price]").textContent = "Price: " + finalPrice + ",-";
            } else {
              document.querySelector(".clicks").innerHTML = 1;

            }
          }
          if (post.acf.type == "Sneakers") {
            display.querySelector(".data-container article img").style.width = "100%";
          }
        }
      })
    };

    function reset(videoReset) {
      videoReset.currentTime = 0;
      videoReset.pause();
    }

    function play(videoPlay) {
      videoPlay.play();
    }

  </script>
</body>

</html>
