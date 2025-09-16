<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 15. Application de réduction (E-commerce)&#xa;&#xa;Un site applique une remise de 10 % si le montant des achats dépasse 10000 FCFA.&#xa;&#xa;• Lire le montant d’achat de l’utilisateur.&#xa;&#xa;• Calculer le prix final avec ou sans remise.&#xa;&#xa;• Afficher le prix à payer " courant="LIRE montant"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2etat="inactif" F2lignes="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param maxBoucle="500000" epaisseurLigne="2" nbDecimales="8" totalBoucles="5000000" arrondiAuto="vrai" totalAffichages="1000" epaisseurPoint="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#montant" algoitem="montant EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#prixFinal" algoitem="prixFinal EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#remise" algoitem="remise EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Le montant d'achat #1" algoitem="AFFICHER &quot;Le montant d'achat &quot;"/>
        <item code="2#montant#pasliste" algoitem="LIRE montant"/>
        <item code="6#montant > 10000" algoitem="SI (montant > 10000) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="5#remise#montant * 0.10#pasliste" algoitem="remise PREND_LA_VALEUR montant * 0.10"/>
            <item code="5#prixFinal#montant - remise#pasliste" algoitem="prixFinal PREND_LA_VALEUR montant - remise"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="5#prixFinal#montant#pasliste" algoitem="prixFinal PREND_LA_VALEUR montant"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
        <item code="4#Prix à payer : #0" algoitem="AFFICHER &quot;Prix à payer : &quot;"/>
        <item code="3#prixFinal#1#pasliste" algoitem="AFFICHER prixFinal"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
