<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 13. Accès à un site (contrôle d’âge)&#xa;&#xa;Écrire un algorithme qui :&#xa;&#xa;• Demande l’âge de l’utilisateur.&#xa;&#xa;• Si l’âge est ≥ 18 → afficher : Accès autorisé.&#xa;&#xa;• Sinon → afficher : Accès refusé, réservé aux majeurs. " courant="AFFICHER &quot;Accès non autorisé. réservé au majeur&quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2etat="inactif" F2lignes="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param maxBoucle="500000" epaisseurLigne="2" nbDecimales="8" totalBoucles="5000000" arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#age" algoitem="age EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Donnes moi ton age#1" algoitem="AFFICHER &quot;Donnes moi ton age&quot;"/>
        <item code="2#age#pasliste" algoitem="LIRE age"/>
        <item code="6#age >= 18" algoitem="SI (age >= 18) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Accès autorisé#1" algoitem="AFFICHER &quot;Accès autorisé&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Accès non autorisé. réservé au majeur#1" algoitem="AFFICHER &quot;Accès non autorisé. réservé au majeur&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
