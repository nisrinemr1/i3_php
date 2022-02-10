<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="a EST_DU_TYPE NOMBRE"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2lignes="" F2etat="inactif"/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" arrondiAuto="vrai" epaisseurPoint="2" totalBoucles="5000000" nbDecimales="8" maxBoucle="500000" epaisseurLigne="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="a EST_DU_TYPE NOMBRE" code="1#NOMBRE#a"/>
        <item algoitem="b EST_DU_TYPE NOMBRE" code="1#NOMBRE#b"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="a PREND_LA_VALEUR 5" code="5#a#5#pasliste"/>
        <item algoitem="b PREND_LA_VALEUR 2" code="5#b#2#pasliste"/>
        <item algoitem="a PREND_LA_VALEUR a+b" code="5#a#a+b#pasliste"/>
        <item algoitem="b PREND_LA_VALEUR a-b" code="5#b#a-b#pasliste"/>
        <item algoitem="a PREND_LA_VALEUR a-b" code="5#a#a-b#pasliste"/>
        <item algoitem="AFFICHER &quot;a =&quot;" code="4#a =#0"/>
        <item algoitem="AFFICHER a" code="3#a#0#pasliste"/>
        <item algoitem="AFFICHER &quot;b =&quot;" code="4#b =#0"/>
        <item algoitem="AFFICHER b" code="3#b#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
