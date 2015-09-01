 
<?php
$this->embed('login.php');

$this->embed('register.php');
?>

<div class="row">

    <div class="col-sm-8"> 
        <h4>Čerpací zkouška</h4>
        <div class="text text-justify">
            Hydrodynamická zkouška patří mezi základní metody stanovení hydraulických charakteristik zvodnělých vrstev.
            Mezi hlavní vyhodnocované parametry patří transmisivita a storativita vrtu, tyto hlavní dva ukazatele 
            definují základní fyzikální vlastnosti kolektoru, pro jejich stanovení se používají metody odvozené z 
            analytického řešení rovnice pro proudění podzemní vody, které byly odvozené za předpokladů ideálního vrt. 
            Jsou zde však další parametry definující skutečný stav horninového prostředí v průběhu hydrodynamické 
            zkoušky, které nejsou v předpokladech ideální vrtu zahrnuty, v podobě dodatečných odporů a vlastního 
            objemu vrtu. Zde prezentovaná práce si klade za cíl, výše zmíněné charakteristiky reálného vrtu v podobě 
            dodatečných odporů a vlastního objemu vrtu vyhodnotit z terénních dat získaných na čerpacích zkouškách. 
            K samotnému vyhodnocení parametrů byl autorem sestaven aplikační program, který je založen na analytickém 
            řešení proudění podzemních vod zahrnující vliv dodatečných odporů a vlastního objemu vrtu na průběh snížení
            hladiny podzemní vody během hydrodynamické zkoušky. Dále pak posouzení vhodnosti daného přístupu k 
            modelování hydraulických parametrů z hydrodynamické zkoušky a provedení validace dosažených výsledků.   
        </div>
<hr>
        <h4>Vlastní objem vrtu</h4>
        <div class="text text-justify">
            Na samotném začátku čerpací zkoušky odebírané množství vody pochází z vlastního objemu vrtu a nikoliv z  
            okolního porézního prostředí. (Papadopulos and Cooper 1967). Vliv vlastního objemu vrtu na průběh 
            čerpací zkoušky trvá jen několik minut a česem se snižuje (Fenske, 1977), 
            přesto jeho zanedbáním dojde k nadhodnocení hodnoty statorativity vrtu, přestože vlastní objem 
            vrtu ovlivňuje hodnoty snížení jen na počátku čerpací zkoušky (Black and Kipp, 1977).
        </div>
<hr>
        <h4>Dodatečné odpory</h4>
        <div class="text text-justify">
            Dodatečné odpory jsou způsobeny řadou jevů, které vznikají během samotného zhotovení vrtu, ale také v 
            průběhu čerpaní podzemní vody z vrtu. Při vrtání horninovým prostředím dochází ke kolmataci okolí vrtu, 
            což sebou přináší změnu hydraulických vlastností porézního prostředí a následný vliv na dataci podzemní 
            vody do vrtu. Mezi další dodatečné odpory může zařadit zmenšení aktivní plochy vrtu, turbulentní režim 
            proudění v blízkosti vrtu, hloubka vrtu neodpovídá mocnosti kolektoru a 
            další. Díky velkému množství faktorů, které definují výslednou hodnotu dodatečných odporů, je obtížné 
            jejich přesné určení, z toho důvodu se oblast jejich výskyt často zanedbána. Hodnota 
            dodatečných odporů je definováno jako rozdíl hodnot skutečného snížení na vrtu a snížení vycházejícího 
            z Theis modelu, pro delší časový úsek lze definovat vztahem (Van Everdingen 1953).
            
            <br><br>
            <i> sw = sd + s	(1)</i><br>

            kde <b>sw</b> je snížení na vrtu vlivem čerpání, <b>sd</b> je snížení způsobené dodatečnými odpory a <b>s</b> snižení vycházející z Theis modelu.
            <br>

        </div>

    </div>
    <div class="col-sm-4">   
        <img style="padding-left: 20px;" src="./images/pumping_1.png"> 
        <br>
        <i>1. Schéma čerpací zkoušky, kde Q je čerpané množství a h snižení hladiny podz. vody a r poloměr.</i>
        <br><br>
        <img src="./images/skin.png">
        <br>
        <i>2. Vliv dodatečných odporů na průběh snížení hladiny podz. vody během čerpací zkoušky.</i>        
    </div>

</div> 
