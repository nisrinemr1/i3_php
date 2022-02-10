<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot;car vous n'etes pas pret&quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2etat="inactif" F2lignes="" F2para="" F2defaut=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param totalAffichages="1000" epaisseurLigne="2" nbDecimales="8" maxBoucle="500000" epaisseurPoint="2" totalBoucles="5000000" arrondiAuto="vrai"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#CHAINE#pret" algoitem="pret EST_DU_TYPE CHAINE"/>
        <item code="1#CHAINE#panierVide" algoitem="panierVide EST_DU_TYPE CHAINE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="4#Etes-vous prêt?#0" algoitem="AFFICHER &quot;Etes-vous prêt?&quot;"/>
        <item code="2#pret#pasliste" algoitem="LIRE pret"/>
        <item code="4#Le panier est-it vide?#0" algoitem="AFFICHER &quot;Le panier est-it vide?&quot;"/>
        <item code="2#panierVide#pasliste" algoitem="LIRE panierVide"/>
        <item code="6#pret==&quot;true&quot; &amp;&amp; panierVide ==&quot;false&quot;" algoitem="SI (pret==&quot;true&quot; &amp;&amp; panierVide ==&quot;false&quot;) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#Lancer la balle#0" algoitem="AFFICHER &quot;Lancer la balle&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#ne pas lancer la balle#1" algoitem="AFFICHER &quot;ne pas lancer la balle&quot;"/>
                <item code="6#panierVide ==&quot;true&quot; " algoitem="SI (panierVide ==&quot;true&quot; ) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="4#car le panier est vide#1" algoitem="AFFICHER &quot;car le panier est vide&quot;"/>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                </item>
                <item code="6#pret ==&quot;false&quot;" algoitem="SI (pret ==&quot;false&quot;) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="4#car vous n'etes pas pret#0" algoitem="AFFICHER &quot;car vous n'etes pas pret&quot;"/>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                </item>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
