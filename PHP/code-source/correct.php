<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$etu = array (
    // 'Abdou Aziz Dabakh Diop',
    // 'Abdou Aziz Diallo',
    // 'Abdoulaye Sylla',
    // 'Adja Kiné Traoré',
    // 'Cheikh Abdoulahi Mbacké Gassama',
    // 'Cheikh Tidane Samba',
    // 'Dieynaba Niang',
    // 'Djilo Diana Kouam',
    // 'El Hadj Massamba Diouf',
    // 'Léon Toupane',
    // 'Mohamed Yacoup Coly',
    // 'Mohamed Dramé',
    // 'Mouhamed Moustapha Sy',
    // 'Mouhamed Ngom',
    // 'Oumou Salamata Keita',
    // 'Serigne Abdou Khadre Diop',
    // 'Seydina Ngom',
    // 'Sidy Makhtar Sy'
    'Mame Diarra',
    'Lissa Gueye',
    'Amina Dabo',
    'Sayo Cissé'
);
$correct = rand(0, count($etu));
echo ($etu[$correct] . ' doit corrigé');


?>
</body>
</html>