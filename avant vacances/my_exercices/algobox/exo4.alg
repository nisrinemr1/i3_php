<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;Bienvenue &quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2lignes="" F2defaut="" F2para=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" nbDecimales="8" totalAffichages="1000" totalBoucles="5000000" epaisseurPoint="2" arrondiAuto="vrai" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#nom" algoitem="nom EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#prenom" algoitem="prenom EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Bienvenue! Entrez votre nom et prénom :#0" algoitem="AFFICHER &quot;Bienvenue! Entrez votre nom et prénom :&quot;"/>
        <item code="2#nom#pasliste" algoitem="LIRE nom"/>
        <item code="2#prenom#pasliste" algoitem="LIRE prenom"/>
        <item code="4#Bienvenue #0" algoitem="AFFICHER &quot;Bienvenue &quot;"/>
        <item code="3#nom#1#pasliste" algoitem="AFFICHER nom"/>
        <item code="3#prenom#0#pasliste" algoitem="AFFICHER prenom"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
