<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 2 : Déclarer deux variables entières a et b, leur donner des valeurs, puis&#xa;afficher leur somme, leur différence et leur produit. " courant="prod PREND_LA_VALEUR a*b"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#a" algoitem="a EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#b" algoitem="b EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#som" algoitem="som EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#dif" algoitem="dif EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#prod" algoitem="prod EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Saisir une première valeur#1" algoitem="AFFICHER &quot;Saisir une première valeur&quot;"/>
        <item code="2#a#pasliste" algoitem="LIRE a"/>
        <item code="4#Saisir une deuxième valeur#1" algoitem="AFFICHER &quot;Saisir une deuxième valeur&quot;"/>
        <item code="2#b#pasliste" algoitem="LIRE b"/>
        <item code="5#som#a+b#pasliste" algoitem="som PREND_LA_VALEUR a+b"/>
        <item code="4#La somme de a et b est : #0" algoitem="AFFICHER &quot;La somme de a et b est : &quot;"/>
        <item code="3#som#1#pasliste" algoitem="AFFICHER som"/>
        <item code="5#dif#a-b#pasliste" algoitem="dif PREND_LA_VALEUR a-b"/>
        <item code="4#La diiférence entre a et b est : #0" algoitem="AFFICHER &quot;La diiférence entre a et b est : &quot;"/>
        <item code="3#dif#0#pasliste" algoitem="AFFICHER dif"/>
        <item code="5#prod#a*b#pasliste" algoitem="prod PREND_LA_VALEUR a*b"/>
        <item code="4#Le produit de a et b est : #0" algoitem="AFFICHER &quot;Le produit de a et b est : &quot;"/>
        <item code="3#prod#1#pasliste" algoitem="AFFICHER prod"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
