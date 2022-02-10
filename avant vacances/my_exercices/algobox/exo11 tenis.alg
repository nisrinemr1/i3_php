<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="FIN_SINON" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2lignes="" F2para="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" nbDecimales="8" totalAffichages="1000" epaisseurPoint="2" arrondiAuto="vrai" totalBoucles="5000000" maxBoucle="500000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#panierVide" algoitem="panierVide EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#pret" algoitem="pret EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Vous êtes prêt? #0" algoitem="AFFICHER &quot;Vous êtes prêt? &quot;"/>
        <item code="2#pret#pasliste" algoitem="LIRE pret"/>
        <item code="4#Le pannier est vide? #0" algoitem="AFFICHER &quot;Le pannier est vide? &quot;"/>
        <item code="2#panierVide#pasliste" algoitem="LIRE panierVide"/>
        <item code="6#pret == &quot;true&quot;" algoitem="SI (pret == &quot;true&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Lancer la balle.#1" algoitem="AFFICHER &quot;Lancer la balle.&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Ne pas lancer la balle.#1" algoitem="AFFICHER &quot;Ne pas lancer la balle.&quot;"/>
                <item code="4#Car vous n'êtes pas prêt.#1" algoitem="AFFICHER &quot;Car vous n'êtes pas prêt.&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
        <item code="6#paniervide == &quot;true&quot;" algoitem="SI (paniervide == &quot;true&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Car le pannie est vide.#1" algoitem="AFFICHER &quot;Car le pannie est vide.&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#Le pannier est rempli.#0" algoitem="AFFICHER &quot;Le pannier est rempli.&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
