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
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Source Sans Pro', sans-serif;

    }

    h1 {
      font-family: 'Open Sans Condensed', sans-serif;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .container {
      display: grid;
      grid-template-columns: 1fr;
      margin: 0 auto;
      max-width: 400px;

    }

    .container div {

      grid-gap: 10px;
      padding: 1em;

    }

    p {
      line-height: 1.5em;
    }

    .picture {
      text-align: center;
    }

    .picture img {
      max-width: 100%;
    }

    @media screen and (min-width:650px) {
      .container {
        max-width: 600px;
      }
    }

    @media screen and (min-width:1024px) {

      .container {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-rows: 1fr auto;
        max-width: 850px;
        padding-top: 25px;
      }

      .about-karl {
        grid-column: span 2;
        grid-row: 1;

      }

      .picture {
        grid-column: span 2;
        grid-row: span 2;


      }

      .picture img {
        max-width: 90%;
        padding-top: 4.5em;
      }

      .history {
        grid-column: span 2;
      }
    }

    @media screen and (min-width: 1300px) {

      .container {
        max-width: 1300px;
      }

      .picture {
        text-align: center;
      }

      .picture img {
        max-width: 65%;
      }
    }

  </style>
</head>

<body>

<?php include "header.html"; ?>

  <div class="container">
    <div class="about-karl">
      <h1>about karlskicks</h1>
      <p> KarlsKicks® is a Danish brand established in a suburb of Copenhagen in 2015 by Karl Faurholt. Before Karlskicks®, Karl simply wanted to restore his own old beat-up sneakers, and when he posted the first result on social media, he was met with so much positive energy and response that he decided to start his own business. The goal was to make customs and restorations from your good old worn sneakers to high-end limited sneakers.</p>
    </div>
    <div class="picture">
      <img src="pics/fucking_vend_dig.JPG" alt="Picture of karl and his shop">
    </div>
    <div class="history">
      <h1>History</h1>
      <p> Starting small with various of simple jobs on worn shoes, Karlskicks® gradually became a well-known brand in Denmark, and steadily Karl moved on to making customs on Adidas Yeezy 350, Adidas Ultra Boost, and lots of other high-end brands. Some of the customs received a great deal of attention, resulting in articles in newspapers and magazines, among them the popular men’s magazine Euroman.</p><br>

      <p> KarlsKicks® also has a store in the city center of Copenhagen where we sell everything from the most hyped high-end sneakers to some of the most spectacular customs in Europe, either by second hand/pre-owned, bespoke, deadstock (DS) or originals (OG).</p><br>

      <p> KarlsKicks® is the supplier of KAPS® products in Denmark.</p>

      <p>To get in contact with KarlsKicks® contact us through our Facebook page, or by writing us: info@karlskicks.com</p>

      <p>To see the greatest customs and follow the daily work of KarlsKicks®, look at our Facebook and Instagram page: Karlskicks</p><br>


      <p> Best regards,</p>

      <p> Karl Faurholt</p>

    </div>
  </div>

<?php include "footer.html"; ?>

</body>

</html>
