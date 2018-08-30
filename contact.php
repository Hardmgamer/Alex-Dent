<html>
<head>
  <title>Contact us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/Main.css">
  <link rel="stylesheet" type="text/css" href="./Stylesheets/contact.css">
</head>
<?php include('./header.html'); ?>
<?php include('./footer.html'); ?>
<body>
  <div class="Sectiona">
    <h1>Get in touch with us</h1>
  </div>
  <center>
  <div class="formcont">
  <form action="/Alexdent/submitcontacting.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="email">email</label>
    <input type="email" id="email" name="email" placeholder="Your email..">
    <label for="email">Phone number</label>
    <input type="tel" id="number" name="phone" placeholder="Number" pattern="[0-9]{10}{+}" maxlength="13">
    <label for="message">Your message</label>
    <textarea name="message" placeholder="Your message here"></textarea>
    <input type="submit" value="Submit" name="submit">
  </form>
</center>

</div>
<!-- <div class="texting">
<p>example text</p>
</div> -->
</body>
</html>
