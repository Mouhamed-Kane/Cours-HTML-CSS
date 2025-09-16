<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 7 : Lire deux nombres a et b, puis afficher le plus grand des deux.&#xa;" courant="AFFICHER &quot;B est plus grand&quot;"/>
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
        <item code="4#Donner le premier nombre#0" algoitem="AFFICHER &quot;Donner le premier nombre&quot;"/>
        <item code="2#a#pasliste" algoitem="LIRE a"/>
        <item code="4#Donner le deuxième nombre#0" algoitem="AFFICHER &quot;Donner le deuxième nombre&quot;"/>
        <item code="2#b#pasliste" algoitem="LIRE b"/>
        <item code="6#a>b" algoitem="SI (a>b) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#A est plus grand#0" algoitem="AFFICHER &quot;A est plus grand&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#B est plus grand#0" algoitem="AFFICHER &quot;B est plus grand&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
