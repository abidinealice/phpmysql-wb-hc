<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="dist/styles.css" />
    <title>Document</title>    
</head>
<body class="body__index">
    <!-- nav bar -->

    <?php include('header.php'); ?>
    
    <!-- body -->

    <main>
        <h3 class="contacts__h3">Envie de nous faire patarger une de vos recettes ?</h3>
        
        <div class="contacts__formbox">
            <form action="traitement.php" method="post" class="contacts__form">

                <div class="contacts__inputbox">
                    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required>
                </div>

                <div class="contacts__inputbox">
                    <input type="email" name="email" id="email" placeholder="Adresse Mail" required>
                </div>

                <div class="contacts__textarea">
                    <textarea type="text" name="message" id="message" placeholder="Ecrivez ici..."></textarea>
                </div>
                <input type="submit" class="contacts__button" value="ENVOYEZ">
            </form>
        </div>
    </main>    
    
    <!-- foot bar -->

    <?php include('footer.php'); ?>
    
    <!-- script js -->
    <script src="app/js/script.js"></script>
</body>
</html>