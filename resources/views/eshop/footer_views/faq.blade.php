@extends('layout.app')

@section('content')
    <div class="  accordion accordion-flush container-md faq-width faq-width1 faq-width2 faq-width3 faq-width4 faq-width5" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Ako mám reklamovať tovar?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Máte 2 možnosti : <br> Možeťe navštíviť našu kamennú predajňu v bratislave na Gagarinovej 1574/82 <br>
                    Vyplníte reklamačný formulár ktorý najdete tu(odkaz). vytlačíte ho a tovar nám zašlete na túto adresu Gagarinová 1574/82 Bratislava
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Musím sa u vás pri prvom nákupe zaregistrovať?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Nemusíte. Ak sa však zaregistrujete , možete počas roka dostať nejaké výhody, napríklad dovoz zdarma počas vianoc.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-headingFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    Kedy mi bude doručený tovar?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Tovary doručujeme počas pracovných dní, do 72 hodín od nákupu (pokiaľ máme tovar skladom a objednávka bola urobená v pracovný deň do 12:00 hod). 72 hodín sa počíta od úhrady nákupu, ak ste sa rozhodli pre platbu prevodom, alebo od schválenia splátkovej zmluvy, ak ste sa rozhodli pre nákup na splátky. Pri nákupe na dobierku sa 72 hodín počíta od zaslania objednávky</div><!-- text nay.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Ako môžete zrušiť svoju objednávku?
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Vašu objednávku môžete zrušiť telefonicky na 09 12 345 678 alebo e-mailom na adrese herny.svet@gmail.com</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Kedy mi budú vrátené peniaze za stornovanú objednávku?
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Peniaze Vám budú vrátené najneskôr do 5 pracovných dní.</div><!-- text nay.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                    Aké sú termíny vyzdvihnutia tovaru z objednávky so spôsobom doručenia „osobný odber“?
                </button>
            </h2>
            <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">a) osobný odber do 1 hodiny = tovar je na sklade vo vybranej predajni Herny svet a do 1 hodiny bude pripravený k vyzdvihnutiu;

                    b) osobný odber do 72 hodín = tovar sa vo vybranej predajni Herny svet nenachádza, je však v hlavnom sklade, odkiaľ ho do 72 hodín prevezieme a pripravíme k vyzdvihnutiu;

                    c) osobný odber po potvrdení objednávky =  tovar sa vo vybranej predajni Herny svet ani v hlavnom sklade nenachádza, objednali sme ho u dodávateľa a čakáme na jeho doskladnenie (tovar sa môže nachádzať v iných predajniach Herny svet, avšak odtiaľ tovar nie je možné do inej predajne presunúť).</div> <!-- text nay.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                    Aká je cena za dopravu na Hernysvet.sk?
                </button>
            </h2>
            <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">tovar do 30 kg doručuje prepravná kuriérska služba DPD alebo Slovenská pošta
                    tovar nad 30 kg doručujeme Špedičnou dopravou, Bežnou dopravou s možnosťou odvozu starého spotrebiča alebo Komfortnou dopravou (NÁŠ TIP!)
                    Nemusíte sa báť, že pri objednávaní dopravy urobíte chybu. Spôsob dopravy, ktorý je pre vami vybraný tovar nevhodný, vám webová stránka v kroku „výber dopravy“ neponúkne.
                    Cena za dopravu je vždy účtovaná za celú objednávku bez ohľadu na to, koľko položiek obsahuje.</div> <!-- text hej.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                    Máte otvorené aj cez víkend?
                </button>
            </h2>
            <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> Áno, otvorené máme i cez víkend s sobotu</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                    Čo je „bežná cena“ uvádzaná pri výrobkoch?
                </button>
            </h2>
            <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Bežná cena je cena odporúčaná výrobcom alebo distribútorom pre maloobchod.

                    V prípade, ak je na kúpu výrobku poskytnutá zľava z kúpnej ceny uverejnená v detaile výrobku, je táto zľava vypočítaná z bežnej ceny (viď vyššie).</div> <!-- text hej.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading5">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                    Môžem objednávku zaplatiť kartou?
                </button>
            </h2>
            <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Áno, platobnou kartou môžete zaplatiť hneď pri objednávke, pri osobnom odbere v predajni  či v partnerských odberných miestach alebo pri doručení kuriérom na dobierku.

                    Kartou nie možné zaplatiť v prípade doručením prostredníctvom Slovenskej pošty.</div> <!-- text hej.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading6">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                    Aká je lehota na vybavenie reklamácie?
                </button>
            </h2>
            <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Lehota pre kupujúceho, ktorý je spotrebiteľom je 30 dní prípade, ak je kupujúcim osoba zapísaná v obchodnom registri:

                    osoba, ktorá podniká na základe živnostenského oprávnenia
                    osoba, ktorá podniká na základe iného než živnostenského oprávnenia podľa osobitných predpisov
                    fyzická osoba, ktorá vykonáva poľnohospodársku výrobu a je zapísaná do evidencie podľa osobitného predpisu je lehota 60 dní.
                    V prípade nepracovného dňa sa predlžuje doba vybavenia reklamácie na prvý nasledujúci pracovný deň.

                    Podľa § 122 ods. 1 zák. č. 40/1964 Zb Občianskeho zákonníka: lehota určená podľa dní sa začína dňom, ktorý nasleduje po udalosti, ktorá je rozhodujúca pre jej začiatok. Podľa § 122 ods. 3 zák. č. 40/1964 Zb Občiansky zákonník ak posledný deň lehoty pripadne na sobotu, nedeľu alebo sviatok, je posledným dňom lehoty najbližší nasledujúci pracovný deň.</div> <!-- text nay.sk-->
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading7">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                    Ako postupovať pri odstúpení do kúpnej zmluvy z dôvodu 3 rovnakých alebo 4 rôznych uznaných chýb?
                </button>
            </h2>
            <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Podľa platného právneho poriadku judikatúry (podľa rozhodnutia ČSSR 1983 R22/1983, ktoré je stále platné) sa za opakovanú vadu považuje tá istá vada 3 krát alebo 4 rôzne. Vyriešenie Vašej reklamácie požadujte vrátením kúpnej ceny, respektíve návrhom na vystavenie dobropisu.</div> <!-- text nay.sk-->
            </div>
        </div>

    </div>
@endsection

