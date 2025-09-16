<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 12. Système de paiement&#xa;&#xa;Un magasin vend un article à 5000 FCFA.&#xa;&#xa;• Demander à l’utilisateur combien il paie.&#xa;&#xa;• Si le montant est égal à 5000 → afficher Paiement accepté.&#xa;&#xa;• Si le montant est supérieur → afficher Paiement accepté, voici votre monnaie : …&#xa;&#xa;• Si le montant est inférieur → afficher Montant insuffisant, il manque : … " courant="AFFICHER &quot;Entrer votre montant&quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#montant" algoitem="montant EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#prix" algoitem="prix EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#monnaie" algoitem="monnaie EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#manque" algoitem="manque EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrer votre montant#1" algoitem="AFFICHER &quot;Entrer votre montant&quot;"/>
        <item code="2#montant#pasliste" algoitem="LIRE montant"/>
        <item code="5#prix#5000#pasliste" algoitem="prix PREND_LA_VALEUR 5000"/>
        <item code="5#monnaie#montant - prix#pasliste" algoitem="monnaie PREND_LA_VALEUR montant - prix"/>
        <item code="5#manque#prix - montant#pasliste" algoitem="manque PREND_LA_VALEUR prix - montant"/>
        <item code="6#montant == prix" algoitem="SI (montant == prix) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Paiement accepté#1" algoitem="AFFICHER &quot;Paiement accepté&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="6#montant > prix" algoitem="SI (montant > prix) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="4#Paiement accepté. Votre monnaie est de : #0" algoitem="AFFICHER &quot;Paiement accepté. Votre monnaie est de : &quot;"/>
                    <item code="3#monnaie#0#pasliste" algoitem="AFFICHER monnaie"/>
                    <item code="4# F CFA#1" algoitem="AFFICHER &quot; F CFA&quot;"/>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                    <item code="9#sinon" algoitem="SINON">
                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                        <item code="4#Montant insuffisant. Il vous manque #0" algoitem="AFFICHER &quot;Montant insuffisant. Il vous manque &quot;"/>
                        <item code="3#manque#0#pasliste" algoitem="AFFICHER manque"/>
                        <item code="4# F CFA#1" algoitem="AFFICHER &quot; F CFA&quot;"/>
                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                    </item>
                </item>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
