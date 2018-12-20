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
  <title>Miscellaneous</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Source Sans Pro', sans-serif;

    }

    h2 {
      font-family: 'Open Sans Condensed', sans-serif;

    }

    p {
      font-family: 'Source Sans Pro', sans-serif;

    }

    body {
      display: grid;
      grid-template-rows: 1fr auto;

    }

    #posts {
      padding-top: 20px;

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
      position: relative;
      cursor: pointer;

    }

    .post-container:hover {
      transform: scale(1.08);

    }

    [data-name] {
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

    .data-container article .image-wrapper {
      height: 235px;

    }

    .data-container article img {
      display: block;
      margin: auto;
      max-height: 100%;
      max-width: 100%;

    }

    .filtrering {
      text-align: center;
      margin: 50px 0 0px;

    }

    .menu-item {
      border: 2px solid transparent;
      background-color: transparent;
      padding: 10px 20px;
      cursor: pointer;
      font-size: 1em;

    }

    .menu-item:hover {
      border-color: rgba(7, 22, 139, 0.84);

    }

    .menu-item:focus {
      border-color: rgba(7, 22, 139, 1);

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
    }

    @media screen and (min-width:1024px) {

      .data-container {
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 20px;

      }

      .data-container {
        max-width: 850px;

      }

      .menu-item {
        padding: 10px 20px;

      }

    }

    @media screen and (min-width:1300px) {

      .data-container {

        max-width: 1300px;

      }

    }

  </style>

</head>

<body>
  <?php include "header.html"; ?>

  <div class="filtrering">
    <button class="menu-item" data-kategori="Menu">All products</button>
    <button class="menu-item" data-kategori="Cleaning">Cleaning</button>
    <button class="menu-item" data-kategori="Protection">Protection</button>
    <button class="menu-item" data-kategori="Restoration">Restoration</button>
    <button class="menu-item" data-kategori="Kits">Kits</button>
    <button class="menu-item" data-kategori="Laces">Laces</button>
    <button class="menu-item" data-kategori="Paint">Paint</button>
  </div>

  <main id="posts">
    <div class="container">
      <section class="data-container"></section>
    </div>
  </main>


  <template class="data-template">
    <article class="post-container">
      <h2 data-name></h2>
      <div class="image-wrapper">
        <img data-picture alt="Picture of Karls products">
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
    let productFilter = "Menu";

    document.addEventListener("DOMContentLoaded", hentJson);

    async function hentJson() {

      let myJson = await fetch("http://mboegvald.dk/kea/karlskicks/wordpress/wp-json/wp/v2/product_post/?per_page=50");
      wpJSON = await myJson.json();
      visJson();

    }

    document.querySelectorAll(".menu-item").forEach(button => {
      button.addEventListener("click", filtrering);
    });

    function filtrering() {
      dest.textContent = "";
      productFilter = this.getAttribute("data-kategori");
      visJson();

    }

    function visJson() {

      let myTemplate = document.querySelector(".data-template");

      wpJSON.forEach(post => {

        if (post.acf.type == productFilter || productFilter == "Menu" && post.acf.type != "Sneakers") {

          let klon = myTemplate.cloneNode(true).content;
          klon.querySelector("[data-name]").textContent = post.acf.name;


          klon.querySelector("[data-picture]").src = post.acf.picture;

          klon.querySelector("[data-price]").textContent = "Price: " + post.acf.price + ",-";

          klon.querySelector(".post-container").addEventListener("click", () => {
            window.location.href = "singleview.php?id=" + post.id;

          })
          dest.appendChild(klon);

        }
      })
    }

  </script>

</body>

</html>
