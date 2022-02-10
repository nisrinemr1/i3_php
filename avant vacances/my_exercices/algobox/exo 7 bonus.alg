<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2lignes="" F2etat="inactif" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" epaisseurLigne="2" arrondiAuto="vrai" maxBoucle="500000" totalBoucles="5000000" epaisseurPoint="2" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="convertisseur EST_DU_TYPE NOMBRE" code="1#NOMBRE#convertisseur"/>
        <item algoitem="jour EST_DU_TYPE NOMBRE" code="1#NOMBRE#jour"/>
        <item algoitem="heure EST_DU_TYPE NOMBRE" code="1#NOMBRE#heure"/>
        <item algoitem="minute EST_DU_TYPE NOMBRE" code="1#NOMBRE#minute"/>
        <item algoitem="secondes EST_DU_TYPE NOMBRE" code="1#NOMBRE#secondes"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE convertisseur" code="2#convertisseur#pasliste"/>
        <item algoitem="jour PREND_LA_VALEUR floor(convertisseur/86400)" code="5#jour#floor(convertisseur/86400)#pasliste"/>
        <item algoitem="" code="103#commentaire"/>
        <item algoitem="heure PREND_LA_VALEUR floor(convertisseur/3600)" code="5#heure#floor(convertisseur/3600)#pasliste"/>
        <item algoitem="minute PREND_LA_VALEUR floor(convertisseur/60)" code="5#minute#floor(convertisseur/60)#pasliste"/>
        <item algoitem="secondes PREND_LA_VALEUR floor(convertisseur/1)" code="5#secondes#floor(convertisseur/1)#pasliste"/>
        <item algoitem="AFFICHERCALCUL jour" code="20#jour#1"/>
        <item algoitem="AFFICHERCALCUL heure" code="20#heure#1"/>
        <item algoitem="AFFICHERCALCUL minute" code="20#minute#1"/>
        <item algoitem="" code="103#commentaire"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
