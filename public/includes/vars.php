<?php
/*********************connexion BDD***************/
    $host = 'localhost';
    $dbName = 'businesscase';
    $user = 'root';
    $password = '';

/*********************requetes***************/

$productDetail='SELECT D.id_declinaison , P.nomProd productName, M.marque, Pr.prix, P.descProd Description,`couleur`, `taille`, C.nomCat Catégorie, Ph.chemin PhotoName, Ph.txtRemplacement altValue
FROM `declinaison` D
JOIN `prix` Pr ON Pr.IdDeclinaison=D.id_declinaison
JOIN `produit` P ON P.Id_Produit=D.Id_Produit
JOIN `imager` I ON P.Id_Produit=I.Id_Produit
JOIN `photo` Ph ON I.Id_Photo=Ph.Id_Photo
JOIN `marque` M ON M.Id_Marque=P.Id_Marque
JOIN `appartenir` A ON A.Id_Produit=P.Id_Produit
JOIN `categorie` C ON C.Id_Categorie=A.Id_Categorie
WHERE Pr.dateDebut<=DATE(NOW()) AND Pr.dateFin>=DATE(NOW())';



?>