<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;Choix inconnu&quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2etat="inactif" F2lignes="" F2para=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurPoint="2" arrondiAuto="vrai" totalBoucles="5000000" totalAffichages="1000" epaisseurLigne="2" nbDecimales="8" maxBoucle="500000"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="stockCoca EST_DU_TYPE NOMBRE" code="1#NOMBRE#stockCoca"/>
        <item algoitem="stockEau EST_DU_TYPE NOMBRE" code="1#NOMBRE#stockEau"/>
        <item algoitem="choix EST_DU_TYPE NOMBRE" code="1#NOMBRE#choix"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="stockCoca PREND_LA_VALEUR 0" code="5#stockCoca#0#pasliste"/>
        <item algoitem="stockEau PREND_LA_VALEUR 2" code="5#stockEau#2#pasliste"/>
        <item algoitem="AFFICHER &quot;Choisissez votre boisson: 1 = coca, 2 = eau&quot;" code="4#Choisissez votre boisson: 1 = coca, 2 = eau#0"/>
        <item algoitem="LIRE choix" code="2#choix#pasliste"/>
        <item algoitem="SI (choix== 1) ALORS" code="6#choix== 1">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="SI (stockCoca > 0) ALORS" code="6#stockCoca > 0">
                <item algoitem="DEBUT_SI" code="7#debutsi"/>
                <item algoitem="AFFICHER &quot;Voici votre Coca&quot;" code="4#Voici votre Coca#1"/>
                <item algoitem="FIN_SI" code="8#finsi"/>
                <item algoitem="SINON" code="9#sinon">
                    <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                    <item algoitem="AFFICHER &quot;Il n'y a plus de Coca&quot;" code="4#Il n'y a plus de Coca#1"/>
                    <item algoitem="FIN_SINON" code="11#finsinon"/>
                </item>
            </item>
            <item algoitem="FIN_SI" code="8#finsi"/>
        </item>
        <item algoitem="SI (choix==2) ALORS" code="6#choix==2">
            <item algoitem="DEBUT_SI" code="7#debutsi"/>
            <item algoitem="SI (stockEau > 0) ALORS" code="6#stockEau > 0">
                <item algoitem="DEBUT_SI" code="7#debutsi"/>
                <item algoitem="AFFICHER &quot;Voici votre eau&quot;" code="4#Voici votre eau#1"/>
                <item algoitem="FIN_SI" code="8#finsi"/>
                <item algoitem="SINON" code="9#sinon">
                    <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                    <item algoitem="AFFICHER &quot;Il n'y a plus d'eau&quot;" code="4#Il n'y a plus d'eau#1"/>
                    <item algoitem="FIN_SINON" code="11#finsinon"/>
                </item>
            </item>
            <item algoitem="FIN_SI" code="8#finsi"/>
            <item algoitem="SINON" code="9#sinon">
                <item algoitem="DEBUT_SINON" code="10#debutsinon"/>
                <item algoitem="AFFICHER &quot;Choix inconnu&quot;" code="4#Choix inconnu#1"/>
                <item algoitem="FIN_SINON" code="11#finsinon"/>
            </item>
        </item>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
