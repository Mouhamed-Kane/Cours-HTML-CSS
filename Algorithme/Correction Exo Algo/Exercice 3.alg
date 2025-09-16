<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Écrire un algorithme qui demande à l’utilisateur son prénom, puis affiche :&#xa;Bienvenue [prénom] ! " courant="AFFICHER prenom"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#prenom" algoitem="prenom EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Veuillez saisir votre nom#1" algoitem="AFFICHER &quot;Veuillez saisir votre nom&quot;"/>
        <item code="2#prenom#pasliste" algoitem="LIRE prenom"/>
        <item code="4#Bienvenue #0" algoitem="AFFICHER &quot;Bienvenue &quot;"/>
        <item code="3#prenom#0#pasliste" algoitem="AFFICHER prenom"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
