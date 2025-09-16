<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 11. Connexion (Login simple)&#xa;&#xa;Écrire un algorithme qui :&#xa;&#xa;• Demande à l’utilisateur son identifiant et son mot de passe.&#xa;&#xa;• Vérifie si l’identifiant est &quot;admin&quot; et le mot de passe &quot;1234&quot;.&#xa;&#xa;o Si oui → afficher : Connexion réussie !&#xa;&#xa;o Sinon → afficher : Identifiant ou mot de passe incorrect " courant="LIRE identifiant"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#identifiant" algoitem="identifiant EST_DU_TYPE CHAINE"/>
        <item code="1#NOMBRE#password" algoitem="password EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrer votre identifiant#1" algoitem="AFFICHER &quot;Entrer votre identifiant&quot;"/>
        <item code="2#identifiant#pasliste" algoitem="LIRE identifiant"/>
        <item code="4#Entrer votre mot de passe#1" algoitem="AFFICHER &quot;Entrer votre mot de passe&quot;"/>
        <item code="2#password#pasliste" algoitem="LIRE password"/>
        <item code="6#(identifiant == &quot;admin&quot; ET password == 1234)" algoitem="SI ((identifiant == &quot;admin&quot; ET password == 1234)) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Connexion réussie#1" algoitem="AFFICHER &quot;Connexion réussie&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Identifiant ou mot de passe incorrect#1" algoitem="AFFICHER &quot;Identifiant ou mot de passe incorrect&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
