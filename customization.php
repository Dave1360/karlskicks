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
  <title>Customization</title>
<style>
  * {
    margin: 0;
    padding: 0;
    font-family: 'Source Sans Pro', sans-serif;

  }



  main h2,
  main h1,
  main h3,
  main h4 {
    font-family: 'Open Sans Condensed', sans-serif;
    text-align: center;
    text-transform: uppercase;
    font-size: 2em;
    margin: 0 auto;


  }

  h1 {
    padding: 50px 0 0;
  }


  h3 {
    font-family: 'Open Sans Condensed', sans-serif;
    text-transform: uppercase;
    padding: 30px 0;

  }

  label {
    font-family: 'Open Sans Condensed', sans-serif;
    font-weight: bold;
    font-size: 1.4em;
  }

  .before-after-image-wrapper {
    padding: 1em;
    max-width: 400px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
  }

  .before-after-image-wrapper img {
    width: 100%;
    margin: 5px 0 20px;
  }

  .before-image,
  .after-image {
    box-shadow: 0 0px 40px rgba(44, 48, 65, 0.1);
    padding: 1em;
    margin-bottom: 20px;
  }

  .progress-container {
    max-width: 400px;
    margin: 0 auto;
    text-align: center;

  }

  .progress-container img {
    width: 80%;
  }

  .contact-formular {
    padding: 1em;
    max-width: 400px;
    margin: 0 auto;
  }

  .contact-container {
    box-shadow: 0 0px 40px rgba(44, 48, 65, 0.1);
    padding: 1em;
  }

  input[type="text"],
  select,
  textarea {
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 2px;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: none;
    text-indent: 5px;
    font-size: 1.2em;

  }

  input::placeholder,
  textarea::placeholder,
  select {
    color: rgba(38, 38, 38, 0.6);
  }

  option {
    width: 100%;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 1em;
    font-weight: bold;
  }

  input[type=submit] {
    background-color: rgba(88, 27, 27, 0.71);
    color: #fff;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer
  }

  input[type=submit]:hover {
    background-color: rgba(88, 27, 27, 0.89);
  }

  @media screen and (min-width:768px) {

    h2,
    h1 {
      font-size: 35px;
    }

    .before-after-image-wrapper {
      max-width: 700px;
      flex-wrap: nowrap;
    }

    .before-image,
    .after-image {
      margin: 20px;
    }

    .progress-container {
      max-width: 600px;
    }

    .contact-formular {
      max-width: 600px;
    }
  }

  @media screen and (min-width:1024px) {

    .before-after-image-wrapper {
      max-width: 900px;
    }

    .progress-container {
      max-width: 800px;
    }

    .contact-formular {
      max-width: 800px;
    }

  }
</style>
</head>

<body>
  <?php include "header.html"; ?>
  <main>
    <div class="before-after-image-container">
      <h1>full restoration or customization</h1>
      <h2>499 DKK</h2>
      <div class="before-after-image-wrapper">
        <div class="before-image">
          <h4>Before</h4>
          <img src="pics/before-gucci.jpg" alt="Before gucci got clean">
        </div>
        <div class="after-image">
          <h4>After</h4>
          <img src="pics/after-gucci.jpg" alt="After gucci got clean">
        </div>
      </div>
    </div>

    <div class="progress-container">
      <h3>Process</h3>
      <img src="pics/progress.png" alt="Cleaning progress">
    </div>

    <div class="contact-formular">
      <h3>Contact us</h3>
      <div class="contact-container">
        <label for="fname">Full Name</label>
        <input type="text" class="fname" name="fullname" placeholder="Your name">

        <label for="category">Category</label>
        <select class="category" name="category">
          <option value="restoration">Restoration</option>
          <option value="customization">Customization</option>
        </select>

        <label for="subject">Subject</label>
        <textarea class="subject" name="subject" placeholder="What can we do for you?" style="height: 200px;" maxlength="200"></textarea>

        <input type="submit" value="Submit">
      </div>
    </div>




  </main>

  <?php include "footer.html"; ?>
</body>

</html>
