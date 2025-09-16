<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;Mot de passe incorrect&quot;" texte="Exercice 18. Vérification d’accès Wi-Fi&#xa;&#xa;Écrire un algorithme qui demande le mot de passe Wi-Fi.&#xa;&#xa;• Si le mot de passe saisi est &quot;wifi2025&quot;, afficher Connexion établie.&#xa;&#xa;• Sinon, afficher Mot de passe incorrect, réessayez "/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2lignes="" F2defaut="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" arrondiAuto="vrai" nbDecimales="8" epaisseurLigne="2" totalBoucles="5000000" maxBoucle="500000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#password" algoitem="password EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Quel est le mot de passe du Wi-fi ?#1" algoitem="AFFICHER &quot;Quel est le mot de passe du Wi-fi ?&quot;"/>
        <item code="2#password#pasliste" algoitem="LIRE password"/>
        <item code="6#password == &quot;wifi2025&quot;" algoitem="SI (password == &quot;wifi2025&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Connexion établie#1" algoitem="AFFICHER &quot;Connexion établie&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Mot de passe incorrect#1" algoitem="AFFICHER &quot;Mot de passe incorrect&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
