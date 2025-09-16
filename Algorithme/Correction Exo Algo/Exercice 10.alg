<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="Exercice 10 : Écrire un algorithme qui demande :&#xa;o le nom de l’utilisateur&#xa;o son âge&#xa;o son pays&#xa;Puis :&#xa;&#xa;o S’il a moins de 18 ans, afficher : Bonjour [nom], tu es mineur.&#xa;o Sinon, afficher : Bonjour [nom], tu es majeur.&#xa;o Enfin, afficher : Tu habites au [pays]. " courant="AFFICHER pays"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2etat="inactif" F2lignes="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8" arrondiAuto="vrai" epaisseurLigne="2"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#user" algoitem="user EST_DU_TYPE CHAINE"/>
        <item code="1#NOMBRE#age" algoitem="age EST_DU_TYPE NOMBRE"/>
        <item code="1#CHAINE#pays" algoitem="pays EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Entrer votre nom d'utiisateur#1" algoitem="AFFICHER &quot;Entrer votre nom d'utiisateur&quot;"/>
        <item code="2#user#pasliste" algoitem="LIRE user"/>
        <item code="4#Entrer votre age#1" algoitem="AFFICHER &quot;Entrer votre age&quot;"/>
        <item code="2#age#pasliste" algoitem="LIRE age"/>
        <item code="4#Entrer votre pays#1" algoitem="AFFICHER &quot;Entrer votre pays&quot;"/>
        <item code="2#pays#pasliste" algoitem="LIRE pays"/>
        <item code="6#age &lt; 18" algoitem="SI (age &lt; 18) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Bonjour #0" algoitem="AFFICHER &quot;Bonjour &quot;"/>
            <item code="3#user#0#pasliste" algoitem="AFFICHER user"/>
            <item code="4#, tu es mineur #1" algoitem="AFFICHER &quot;, tu es mineur &quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Bonjour #0" algoitem="AFFICHER &quot;Bonjour &quot;"/>
                <item code="3#user#0#pasliste" algoitem="AFFICHER user"/>
                <item code="4#, tu es majeur.#1" algoitem="AFFICHER &quot;, tu es majeur.&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
        <item code="4#tu habites au #0" algoitem="AFFICHER &quot;tu habites au &quot;"/>
        <item code="3#pays#1#pasliste" algoitem="AFFICHER pays"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
