<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="DEBUT_ALGORITHME" texte="Exercice 16. Guichet automatique (retrait)&#xa;&#xa;Écrire un algorithme qui :&#xa;&#xa;• Demande le code secret de l’utilisateur.&#xa;&#xa;• Vérifie si c’est le bon code (ex: &quot;2025&quot;).&#xa;&#xa;• Si correct → demander le montant à retirer et vérifier si le solde est suffisant (ex:&#xa;solde initial = 50 000).&#xa;&#xa;o Si oui → afficher Retrait accepté, nouveau solde : …&#xa;&#xa;o Sinon → afficher Solde insuffisant.&#xa;&#xa;• Si code incorrect → afficher Accès refusé. "/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2lignes="" F2defaut="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" arrondiAuto="vrai" nbDecimales="8" epaisseurLigne="2" totalBoucles="5000000" maxBoucle="500000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#code" algoitem="code EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#montant" algoitem="montant EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#solde" algoitem="solde EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrer votre code secret#1" algoitem="AFFICHER &quot;Entrer votre code secret&quot;"/>
        <item code="2#code#pasliste" algoitem="LIRE code"/>
        <item code="6#code == 2025" algoitem="SI (code == 2025) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Veuillez entrer le montant à retirer#1" algoitem="AFFICHER &quot;Veuillez entrer le montant à retirer&quot;"/>
            <item code="2#montant#pasliste" algoitem="LIRE montant"/>
            <item code="5#solde#50000#pasliste" algoitem="solde PREND_LA_VALEUR 50000"/>
            <item code="6#solde >= montant" algoitem="SI (solde >= montant) ALORS">
                <item code="7#debutsi" algoitem="DEBUT_SI"/>
                <item code="5#solde#solde - montant#pasliste" algoitem="solde PREND_LA_VALEUR solde - montant"/>
                <item code="4#Retrait accepté. Nouveau solde : #1" algoitem="AFFICHER &quot;Retrait accepté. Nouveau solde : &quot;"/>
                <item code="3#solde#0#pasliste" algoitem="AFFICHER solde"/>
                <item code="8#finsi" algoitem="FIN_SI"/>
                <item code="9#sinon" algoitem="SINON">
                    <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                    <item code="4#Solde insuffisant#1" algoitem="AFFICHER &quot;Solde insuffisant&quot;"/>
                    <item code="11#finsinon" algoitem="FIN_SINON"/>
                </item>
            </item>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Accès refusé#1" algoitem="AFFICHER &quot;Accès refusé&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
