<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>

    <?php
        require('includes/header.php');
    ?>

    <form action="" method="POST" id="form">

        <ul id="error-container"></ul>

        <label for="name">Name</label>
        <input id="name" type="text" name="name" class="form-input">

        <label for="email">Email</label>
        <input id="email" type="email" name="email" class="form-input">
        
        <label for="phone">Phone</label>
        <input id="phone" type="tel" name="phone" class="form-input">

        <label for="body">Body</label>
        <textarea 
            id="body" 
            name="body" 
            class="form-input" 
            cols="30" rows="10"></textarea>

        <label for="agree">Agree to data processing</label>
        <input id="agree" type="checkbox" name="agree" class="form-input">

        <input type="submit" value="Wyślij ten formularz">
    </form>

    
    <?php
        require('includes/footer.php');
    ?>

    <script src="contact.js"></script>

</body>

</html>

<!-- 

    + GET       pobierz dane
    + POST      stwórz
      PUT       zastąp lub stwórz
      PATCH     edytuj 
      DELETE    usuń
      HEAD      pobierz nagłówki
      OPTIONS   sprawdź opcje

 -->

 <!--
    require
    require_once
    include
    include_once
-->