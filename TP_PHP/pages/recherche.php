<?php
    $Clé_USB_16_GB=5;
    $Cartouche=6;
    $ecran_15=10;
    $Papier=2000;
    $Disque=25000;
    $clavierPc=15000;
    $Chargeur=10000;
    $sacordi=12000;
    $souris=10000;
    $encre=5000;
    $produit=array(
        array('Clé USB 16 GB' ,8000, $Clé_USB_16_GB, $Clé_USB_16_GB*8000),
        array('Cartouche Imprimante' ,10000, $Cartouche ,$Cartouche*10000),
        array("écran 15' " , 35000, $ecran_15, $ecran_15*35000) ,
        array('Papier RAM' ,$Papier, 80, $Papier*80) ,
        array('Disque Dur 500GB' , $Disque, 3, $Disque*3) ,
        array('Clavier PC' , $clavierPc, 6, $clavierPc*6) ,
        array('Chargeur PC' ,$Chargeur, 50,$Chargeur*50) ,
        array('Sac Ordinateur' ,$sacordi, 8,$sacordi*8) ,
        array('Souris Sans fil ' ,$souris, 10, $souris*5) ,
        array('Encre Imprimante' ,$encre, 10, $encre*7) ,    
    );
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche </title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="icon"       type="icon"     href="../images/favicone.ico">
</head>
<body>
    <form action="" method="POST">  
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-collapse">
                 <a class="navbar-brand" href="#">APPLICATION-PHP</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="accueil.php">Liste Produits<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="recherche.php">Rechercher Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ajouter.php">Ajouter Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="modifier.php">Modifier Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="supprimer.php">Supprimer Produit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Se Deconnecter</a>
                        </li>
                    </ul>
                </div>
            </nav >
        </div>
        <div class= "container">
            <br>
            <br>
            <div class= "row">
                <div class= "col-lg-3"></div>
                <div class= "col-lg-9"><h1>RECHERCHER UN PRODUIT <hr></h1></div>
            </div>
            <br>
            <br>

            <div class= "row">
                <div class= "col-lg-3">
                    <label> Nom du produit :</label> 
                    <input type= "text" class="form-control" name="nomprod">
                </div>

                <div class= "col-lg-3">
                    <label> Prix Min :</label>
                    <input type= "text" class="form-control" name="prixmin">
                </div>

                <div class= "col-lg-3">
                    <label> Prix Max : </label> 
                    <input type= "text" class="form-control" name="prixmax">
                </div> <br>
                <div class= "col-lg-3" ><br>
                    <input  type="submit" class="btn btn-primary btnrech" name="rech" value= "Rechercher">
                </div> 
            </div>
        </div>
       

         <br>
         <br>
         <br>
        <div class= "row">
            <div class= "col-lg-1"></div>
            <div class= "col-lg-10">
                <?php
                     echo'
                     <table class="table">
                         <tr>
                             <thead class="bg-success colortitre">
                                 <th class="center" scope="col-lg-3">Nom Produit</th>
                                 <th class="center" scope="col-lg-3">Prix Unitaire</th>
                                 <th class="center" scope="col-lg-3">Quantité</th>
                                 <th class="center" scope="col-lg-3">Montant / Fcfa</th>
                         </tr>
                             </thead>

                        
                             
                     ';
                     if(isset($_POST['rech'])){
                        $np=$_POST['nomprod'];

                        for($ligne=0;$ligne<=10;$ligne++){
                            echo"<tr>";
                            for ($col=0;$col<=10;$col++){

                                if($np==in_array($produit[$ligne][$col])){
                                     echo"<td class='center ligne'>".$produit[$ligne][$col]."</td>";
                                }else{
                                     echo"<td class='center bord'>".$produit[$ligne][$col]."</td>";
                                }
                            }
                            echo"</tr>";
                        }
                    }
                        

                          
                
                           
                ?>
            </div>
    </form>
</body>
</html>

