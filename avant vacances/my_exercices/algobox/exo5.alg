<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHERCALCUL e"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param arrondiAuto="vrai" totalAffichages="1000" epaisseurLigne="2" totalBoucles="5000000" nbDecimales="8" maxBoucle="500000" epaisseurPoint="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="a EST_DU_TYPE NOMBRE" code="1#NOMBRE#a"/>
        <item algoitem="b EST_DU_TYPE NOMBRE" code="1#NOMBRE#b"/>
        <item algoitem="c EST_DU_TYPE NOMBRE" code="1#NOMBRE#c"/>
        <item algoitem="d EST_DU_TYPE NOMBRE" code="1#NOMBRE#d"/>
        <item algoitem="e EST_DU_TYPE NOMBRE" code="1#NOMBRE#e"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="a PREND_LA_VALEUR 8%3" code="5#a#8%3#pasliste"/>
        <item algoitem="AFFICHERCALCUL a" code="20#a#1"/>
        <item algoitem="b PREND_LA_VALEUR 4+a" code="5#b#4+a#pasliste"/>
        <item algoitem="AFFICHERCALCUL b" code="20#b#1"/>
        <item algoitem="c PREND_LA_VALEUR b*a" code="5#c#b*a#pasliste"/>
        <item algoitem="AFFICHERCALCUL c" code="20#c#1"/>
        <item algoitem="d PREND_LA_VALEUR (c-a)*b" code="5#d#(c-a)*b#pasliste"/>
        <item algoitem="AFFICHERCALCUL d" code="20#d#1"/>
        <item algoitem="e PREND_LA_VALEUR ((a+7)*(d/a))*0" code="5#e#((a+7)*(d/a))*0#pasliste"/>
        <item algoitem="AFFICHERCALCUL e" code="20#e#1"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
