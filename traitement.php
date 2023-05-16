<?php
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $db = new PDO(
        'mysql:host=localhost;dbname=site_recette15062022;charset=utf8',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
?>

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
        <?php
            if(!isset($pseudo) || !isset($email) || $message==NULL
            ){
                echo "<p class='traitement__msg'><strong>ATTENTION : </strong></br>Vous n'avez pas rempli correctement ce formulaire.</p>";
                echo "<a href='contacts.php'><p class='traitement__retour'> Retour </p></a>";
            }else{
                $insertSubmit = $db->prepare('INSERT INTO submit(pseudo, email, message) VALUES (:pseudo, :email, :message)');
                $insertSubmit->execute([
                    'pseudo' => $pseudo,
                    'email' => $email,
                    'message' => $message,
                ]);
                echo "<p class='traitement__msg'> Le formulaire vient d'être envoyé ! </br>Merci ! </p>";
                echo "<p class='traitement__retouracc'><a href='index.php'>Retour à l'accueil</a></p>";
            }
        ?>
    </main>    
    
    <!-- foot bar -->

    <?php include('footer.php'); ?>
    
    <!-- script js -->
    <script src="app/js/script.js"></script>
</body>
</html>