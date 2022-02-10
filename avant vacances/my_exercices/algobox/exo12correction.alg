<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="stockEau PREND_LA_VALEUR 0"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurPoint="2" totalBoucles="5000000" nbDecimales="8" totalAffichages="1000" maxBoucle="500000" epaisseurLigne="2" arrondiAuto="vrai"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#choix" algoitem="choix EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#stockCoca" algoitem="stockCoca EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#stockEau" algoitem="stockEau EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="5#stockCoca#2#pasliste" algoitem="stockCoca PREND_LA_VALEUR 2"/>
        <item code="5#stockEau#0#pasliste" algoitem="stockEau PREND_LA_VALEUR 0"/>
        <item code="4#Choisissez votre boisson: 1=coca, 2=eau#1" algoitem="AFFICHER &quot;Choisissez votre boisson: 1=coca, 2=eau&quot;"/>
        <item code="2#choix#pasliste" algoitem="LIRE choix"/>
        <item code="6#choix==1" algoitem="SI (choix==1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="6#stockCoca>0" algoitem="SI (stockCoca>0) ALORS">
                <item code="7#debutsi" algoitem="DEBUT_SI"/>
                <item code="4#Voici votre coca#1" algoitem="AFFICHER &quot;Voici votre coca&quot;"/>
                <item code="8#finsi" algoitem="FIN_SI"/>
                <item code="9#sinon" algoitem="SINON">
                    <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                    <item code="4#Il n'y a plus de coca#1" algoitem="AFFICHER &quot;Il n'y a plus de coca&quot;"/>
                    <item code="11#finsinon" algoitem="FIN_SINON"/>
                </item>
            </item>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="6#choix==2" algoitem="SI (choix==2) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="6#stockEau>0" algoitem="SI (stockEau>0) ALORS">
                        <item code="7#debutsi" algoitem="DEBUT_SI"/>
                        <item code="4#Voici votre eau#1" algoitem="AFFICHER &quot;Voici votre eau&quot;"/>
                        <item code="8#finsi" algoitem="FIN_SI"/>
                        <item code="9#sinon" algoitem="SINON">
                            <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                            <item code="4#Il n'y a plus d'eau#1" algoitem="AFFICHER &quot;Il n'y a plus d'eau&quot;"/>
                            <item code="11#finsinon" algoitem="FIN_SINON"/>
                        </item>
                    </item>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                    <item code="9#sinon" algoitem="SINON">
                        <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                        <item code="4#Choix inconnu#1" algoitem="AFFICHER &quot;Choix inconnu&quot;"/>
                        <item code="11#finsinon" algoitem="FIN_SINON"/>
                    </item>
                </item>
                <item code="" algoitem=""/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
