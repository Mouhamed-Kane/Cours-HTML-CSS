<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="salaireNet PREND_LA_VALEUR salaireDeBase - impot" texte="Exercice 17. Calcul du salaire&#xa;&#xa;Une entreprise calcule le salaire net ainsi :&#xa;&#xa;• Salaire de base saisi par l’utilisateur.&#xa;&#xa;• Si le salaire est > 200 000 → appliquer un impôt de 10 %.&#xa;&#xa;• Sinon → appliquer un impôt de 5 %.&#xa;&#xa;• Afficher le salaire net. "/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2lignes="" F2defaut="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" arrondiAuto="vrai" nbDecimales="8" epaisseurLigne="2" totalBoucles="5000000" maxBoucle="500000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#salaireDeBase" algoitem="salaireDeBase EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#impot" algoitem="impot EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#salaireNet" algoitem="salaireNet EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Donnes moi ton salaire de base#1" algoitem="AFFICHER &quot;Donnes moi ton salaire de base&quot;"/>
        <item code="2#salaireDeBase#pasliste" algoitem="LIRE salaireDeBase"/>
        <item code="6#salaireDeBase > 200000" algoitem="SI (salaireDeBase > 200000) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#impot#salaireDeBase * 0.10#pasliste" algoitem="impot PREND_LA_VALEUR salaireDeBase * 0.10"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="5#impot#salaireDeBase * 0.05#pasliste" algoitem="impot PREND_LA_VALEUR salaireDeBase * 0.05"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
        <item code="5#salaireNet#salaireDeBase - impot#pasliste" algoitem="salaireNet PREND_LA_VALEUR salaireDeBase - impot"/>
        <item code="4#Le salaire net est : #0" algoitem="AFFICHER &quot;Le salaire net est : &quot;"/>
        <item code="3#salaireNet#0#pasliste" algoitem="AFFICHER salaireNet"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
