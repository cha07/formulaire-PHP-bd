<?php
include 'bdd.php';
?>
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $genre = $_POST['genre'];
    $speci = $_POST['speci'];
    $interets = $_POST['interets'];
    $message = $_POST['message'];
    $from = 'From: '; 
    $to = 'charlotte.t@codeur.online'; 
    $subject = 'Bonjour vous avez un nouveau message de votre site';
    $human = $_POST['human'];

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Message envoyé!</p>';
            header('Location: index.php');
        } else { 
            echo '<p> Message non envoyé </p>'; 
        }
    } else if ($_POST['submit'] && $human != '4') {
        echo '<p>Réponse incorrecte</p>';
    }
    else {
        echo '<p>On recommence</p>';
        
    }
?>
<?php
$reponse = "INSERT INTO formulaire_php VALUES (NULL, '$name', '$email', '$genre','$speci', '$interets', '$message')";
$db->exec($reponse);

?>
