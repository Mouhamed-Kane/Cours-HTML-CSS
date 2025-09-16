<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 4 : Écrire un algorithme qui lit deux nombres entrés par l’utilisateur, puis&#xa;affiche leur moyenne. " courant="AFFICHERCALCUL (a+b)/2"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#a" algoitem="a EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#b" algoitem="b EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Saisir un nombre entier#1" algoitem="AFFICHER &quot;Saisir un nombre entier&quot;"/>
        <item code="2#a#pasliste" algoitem="LIRE a"/>
        <item code="4#Saisir un deuxième nombre#0" algoitem="AFFICHER &quot;Saisir un deuxième nombre&quot;"/>
        <item code="2#b#pasliste" algoitem="LIRE b"/>
        <item code="4#La moyenne de a et b est : #0" algoitem="AFFICHER &quot;La moyenne de a et b est : &quot;"/>
        <item code="20#(a+b)/2#0" algoitem="AFFICHERCALCUL (a+b)/2"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
