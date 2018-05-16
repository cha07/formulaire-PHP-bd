<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet"> 
<link rel="stylesheet" href="style.css" />
<title>Formulaire PHP</title>
</head>

<body>
<?php
include 'bdd.php';
?>
       
    <header class="body">
    </header>

    <h1>Contactez moi</h1>

    <section class="body">
        
    <form method="post" action="traitement.php"name="formul" onsubmit="return(validate());">

    <fieldset>   
    <legend>NOM</legend>
                        <input name="name" placeholder="Ecrire ici">
    </fieldset>

            
    <fieldset>           
    <legend>Email</legend>
                        <input name="email" type="email" placeholder="Ecrire ici">
    </fieldset>

    <fieldset>
    <legend>Votre genre</legend>
                    <div>
                        <input type="radio" name="genre" value="Un homme" id="genre">
                        <label for="outils"> Un homme</label>
                        <input type="radio" name="genre" value="Une femme" id="genre">
                        <label for="outils"> Une femme</label>
                    </div>
    </fieldset>

    <fieldset>
    <legend>Vous êtes</legend>
                <select id="speci" name="speci">
                        <option disabled selected >-</option>
                        <option value="Un particulier" >Un particulier</option>
                        <option value="Un professionnel" >Un professionnel</option>
                        <option value="Autres" >Autres</option> 
                </select>
    </fieldset>

    <fieldset>
    <legend>Choisissez vos centres d'intérêts</legend>
                    <div id="checkbox">
                        <label for="coding">Coder<input type="checkbox" id="interet" name="interets[]" value="0">
                        </label>
                        
                        <label for="music">Musique
                        <input type="checkbox" id="interet" name="interets[]" value="1">
                        </label>
                        <label for="interet">lecture
                        <input type="checkbox" id="interet" name="interets[]" value="2">
                        </label>
                        <label for="sport">Sport
                        <input type="checkbox" id="interet" name="interets[]" value="3">
                        </label>
                    </div>
    </fieldset>
    
    <fieldset>        
    <legend>Message</legend>
                        <textarea name="message" placeholder="Ecrire ici"></textarea>
    </fieldset>
    
    <br>

    <fieldset>
    <legend></legend>                    
    <label>*Combien font 2+2? (Anti-spam)</label>
                        <input name="human" placeholder="Réponse?"> 
                        <input id="submit" name="submit" type="submit" value="Envoyer">
    </fieldset>
       
    <script type="text/javascript" src="form.js"></script>

    </form>
    </section>
    

    <footer class="body">
    </footer>

</body>

</html>