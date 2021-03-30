<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Jarditou</title>

</head>

<body>
    <div class="container-fluide">
        <div class="row">
            <div class="col-8"></div> 
            <div class="col-4"></div> 
         </div>
     </div>  
     <p class="rounded float-left" >
    <img src="jarditou_logo.jpg" alt="Logo_Jarditou" title="Logo_Jarditou" width="20%" height="15%">
    </p>
    </div>

<p>
    <blockquote class="blockquote text-right">
    <p class="h1">La qualité depuis 70 ans</p>
</blockquote>
  </p>  
    
    <header>
        
<p>  

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Jarditou.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarTogglerDemo01"aria-controls="navbarTogglerDemo01" aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        
        <p>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
        </nav>

        <a class="navbar-brand"href="index.html"></a> 
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="index.html">Accueil</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="tableau.html">Tableau</a>
        </li>

        <li class="nav-item">
        <a class="nav-link disabled" href="Contact.html">Contact</a>
        </li>

    </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="Votre promotion" placeholder="Votre promotion">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
          </form>
        </div>
    </nav>
    </p>

    
     <img src="Promotion.jpg" alt="Promotion" title="Promotion" width="100%" height="100%">
    </header>
     
<body>


     <!-- On appelle la page validation qui contient tous nos tests -->
<?php 
include("validation.php");
?>

<div class="container">

  <!-- Header -->
  <?php include("header.php") ?>

<!--  Si le premier POST n'a pas encore eu lieu, on affiche un formulaire vierge qui sera traité sur la même page -->

  <?php 
  if (empty($_POST))
  {  
  ?>
    

            <form action="http://bienvu.net/script.php" method="GET" id="formulaire_contact">
                <div class="form-group">
                <p>*Ces zones sont obligatoires</p>
                
                <fieldset>
                    <legend>Vos coordonnées</legend>
                    <label>Votre nom*: </label><input type="text" class="form-control" name="nom" placeholder="Veuillez saisir votre nom"><br>
                    <label> Votre prenom*: </label><input type="text" class="form-control" placeholder="Veuillez saisir votre prenom"><br>
                    <label> Sexe*: </label><br>
                    <input type="radio" name="sexe" value="homme"> Masculin
                    <input type="radio" name="sexe" value="femme"> Féminin
                    <input type="radio" name="sexe" value="Neutre"> Neutre
                    <br>
    
                    
                    <label for="date">Date de naissance*:</label><input type="date" class="form-control" name="ddn" id="date"><br>
                
                    <label> Adresse:</label><input type="text" class="form-control" required><br>
                    <label > Code postal*:</label><input type="text" class="form-control" required><br>
                    <label>Ville:</label><input type="text" class="form-control" ><br>
                    
                    <label>Email*:</label><input type="email" class="form-control" name="email"><br>
    
                   </fieldset>
    
                
                 <br>
                 <fieldset>
                    <legend>Votre demande</legend>
                    <label>Sujet*</label>
                    <input type="text" class="form-control" name="sujet1" id="sujet2" list="sujet3" placeholder="Veuillez selectionner un sujet">
                    <datalist id="sujet3">
                        <option value="Mes commandes">
                        <option value="Question sur un produit">
                        <option value="Réclamation">
                        <option value="Autres">
                    </datalist>
                
                    <br>
                    
                    <label>Votre question*:</label><textarea class="form-control"></textarea>
                    
                    <br>

    
    
            </fieldset>  
            <br>
            <input type="checkbox">
            <label>*J'accepte le traitement informatique de ce formulaire</label>
            <br>
            
            <input type="submit" class="btn btn-dark" value="Envoyer" >
            <input type="reset" class="btn btn-dark" value="Annuler" >
            <br>
        </br>
            </form>
            
</body>    

            <footer>
                
                    
                    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                        <!-- Toggler/collapsibe Button -->
        
                    <ul class="navbar-nav mr-auto mt-0 mt-lg-0">
                        
                        <li class="nav-item">
                        <a class="nav-link" href="index.html">Mention légales</a>
                        </li>
        
                        <li class="nav-item">
                        <a class="nav-link" href="index.html">Horaires</a>
                        </li>
        
                        <li class="nav-item">
                        <a class="nav-link" href="index.html">Plan du site</a>
                        </li>
                    </ul>
                    </nav>
                
            </footer>   
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    </html>