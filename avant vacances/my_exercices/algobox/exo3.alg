<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot; nb2=&quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" arrondiAuto="vrai" totalBoucles="5000000" totalAffichages="1000" epaisseurLigne="2" nbDecimales="8" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#nb1" algoitem="nb1 EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#nb2" algoitem="nb2 EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#temp" algoitem="temp EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#nb1#&quot;5&quot;#pasliste" algoitem="nb1 PREND_LA_VALEUR &quot;5&quot;"/>
        <item code="5#nb2#&quot;7&quot;#pasliste" algoitem="nb2 PREND_LA_VALEUR &quot;7&quot;"/>
        <item code="4#Avant nb1=#0" algoitem="AFFICHER &quot;Avant nb1=&quot;"/>
        <item code="3#nb1#0#pasliste" algoitem="AFFICHER nb1"/>
        <item code="4# nb2=#0" algoitem="AFFICHER &quot; nb2=&quot;"/>
        <item code="3#nb2#1#pasliste" algoitem="AFFICHER nb2"/>
        <item code="5#temp#nb1#pasliste" algoitem="temp PREND_LA_VALEUR nb1"/>
        <item code="5#nb1#nb2#pasliste" algoitem="nb1 PREND_LA_VALEUR nb2"/>
        <item code="5#nb2#temp#pasliste" algoitem="nb2 PREND_LA_VALEUR temp"/>
        <item code="4#Après nb1=#0" algoitem="AFFICHER &quot;Après nb1=&quot;"/>
        <item code="3#nb1#0#pasliste" algoitem="AFFICHER nb1"/>
        <item code="4# nb2=#1" algoitem="AFFICHER &quot; nb2=&quot;"/>
        <item code="3#nb2#0#pasliste" algoitem="AFFICHER nb2"/>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
