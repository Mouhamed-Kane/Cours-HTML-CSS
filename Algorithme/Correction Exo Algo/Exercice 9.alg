<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 9 : Lire un caractère (par exemple &quot;F&quot; ou &quot;M&quot;) et afficher Féminin si c’est&#xa;&quot;F&quot;, Masculin si c’est &quot;M&quot;, sinon afficher Inconnu. " courant="SI (genre == &quot;M&quot;) ALORS"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#genre" algoitem="genre EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Donner un caractère#1" algoitem="AFFICHER &quot;Donner un caractère&quot;"/>
        <item code="2#genre#pasliste" algoitem="LIRE genre"/>
        <item code="6#genre == &quot;F&quot;" algoitem="SI (genre == &quot;F&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Féminin#1" algoitem="AFFICHER &quot;Féminin&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="6#genre == &quot;M&quot;" algoitem="SI (genre == &quot;M&quot;) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="4#Masculin#1" algoitem="AFFICHER &quot;Masculin&quot;"/>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                    <item code="9#sinon" algoitem="SINON">
                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                        <item code="4#Inconnu#0" algoitem="AFFICHER &quot;Inconnu&quot;"/>
                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                    </item>
                </item>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
