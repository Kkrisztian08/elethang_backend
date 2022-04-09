<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::factory()->create([
            'name'=> 'Zénó',
            "gender"=> "Kandúr",
            "likely_bday"=> "2019-07-15",
            "external_property"=> "Nagy termetű, fehér alapon leopárd cirmos",
            "description"=> "Zénó, testvérével Zillével 2019.08.25-én került a gondozásunkba, miután az akkor kb. 5 hetes apróságokat valaki kitette a gyáli zöldségpiacra. Zénó 2019 július közepén születhetett. A nálunk töltött idő alatt kezeltük a hasmenését, a külső belső élősködőit, kapott oltásokat, chipet és átesett az ivartalantáson is. A FIV/FELV tesztje negatív lett.Nagy termetű. aktív, játékos cica, más cicákkal némi válogatással megtalálja a közös hangot. Szereti a simogatást, bújik, dorombol az emberi érintés hatására.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Jura',
            "gender"=> "Nőstény",
            "likely_bday"=> "2021-06-25",
            "external_property"=> "Fehér alapon fekete foltos, kisgömb forma, buci fejű",
            "description"=> "Jura 2021.06.25-én, a születése napján a mamájával és a testvérével együtt került a gondozásunkba. Jura fehér alapon fekete foltos, kisgömb forma, buci fejű, gyönyörű nőstény kiscica. Korának megfelelő fejlettségű, önállóan eszik, alomra jár, játékos, aktív bársonytalpú. Megkapta az első oltását és a chipet, egészséges, önálló, így gazdikész. A mamája FIV/FELV negatív. Ivartalanítási kötelezettséggel.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Roxy',
            "gender"=> "Nőstény",
            "likely_bday"=> "2020-05-07",
            "external_property"=> "Fehér alapon fekete foltos",
            "description"=> "Roxy 3 testvérével együtt 2020. június közepén került a gondozásunkba. Kb. 2020. május első felében születhetett, fehér alapon fekete foltos kislány. Élénk, játékos, rendkívül bújós, kedves kiscica. Kicsit egyszálbél, de azon vagyunk, hogy a minőségi tápnak és a vetri dmg-nek a segítségével ő és testvérei szépen kikerekedjenek. Játékos kis forgószél, aki testvérével, Rubival együtt a kiscicákra jellemző felfedező, mindent megismerni akaró örökmozgó. Oltva, chippel ellátva, ivartalanítási kötelezettséggel.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Bosco',
            "gender"=> "Kandúr",
            "likely_bday"=> "2021-06-15",
            "external_property"=> "Fehér alapon szürke cirmos",
            "description"=> "Bosco 2021. július közepén született kiskandúr, aki nagyon rossz körülmények közül 2 testvérével együtt került a gondozásunkba 5 hetesen. Hála az életkoruknak megfelelő minőségi eledelnek, a tiszta és biztonságos körülményeknek és a gondos orvosi ellátásnak amit biztostani tudtunk számukra a testvérek életben maradtak és gazdikereső korba léptek. Bosco fehér alapon szürke cirmos kislegény, három testvér közül a legtalpraesettebb, mindig élen jár a felfedezésben. Más cicákkal barátságos, játékos, sokat rohangál, birkózik a testvéreivel és a nagyobb cicákkal is. Életkorának megfelelő fejlettségű, mindenevő, alomra jár. Jelenleg 2 oltással, chipoel rendeljezik, parazitáktól mentes és ivartalan.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Kuglóf',
            "gender"=> "Kandúr",
            "likely_bday"=> "2021-05-15",
            "external_property"=> "Fekete, kis fehér nyakkendővel",
            "description"=> "Kuglóf 2021 májusi születésű nagyon apró kiskandúr. Alig pár naposan mamájával és 2 testvérével mentettük egy gyáli család kertjében található bokorból. Nagyon alulfejlett volt és sokáig kérdéses volt az életben maradása, de szerencsére szépen összeszedte magát. Most már túl van az első oltáson, kapott chipet és kellően eleven, játékos ahhoz, hogy útjára engedjük új otthonába. Kuglóf számára tehát végleges családot keresünk. Nem az a tipikus ölbe cica, de szeret bújni, dorombolni nagyokat rohangálni.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Rea',
            "gender"=> "Nőstény",
            "likely_bday"=> "2020-06-15",
            "external_property"=> "Fekete - fehér foltos",
            "description"=> "Rea 3 testvérével együtt 2020. június közepén került a gondozásunkba. Kb. 2020. május első felében születhetett, fekete fehér kislány. Érdeklődő, felfedező, játékos, nagyon bűjik, dorombol, keresi az emberi társaságot. Oltásai rendben vannak, chippel rendelkezik és már ivartalanításra is került. Más cicákkal megtalálja a közös hangot, nagyon szeret hemperegni, hanyatt fekve ejtőzni a szoba közepén, lehetőség szerint láb alatt.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Selymes',
            "gender"=> "Nőstény",
            "likely_bday"=> "2019-05-15",
            "external_property"=> "Círmos, régen szemprobláma",
            "description"=> "Selymes 2019 május közepén született nőstény cicus, aki 4 testvérével került a gondozásunkba. A mamájuk FIV/FELV negatív. Egy héttel később tudtuk csak befogni, mint a testvéreit, mert nagyon félős volt. Mivel később került a gondozásunkba, ezért a kezelését is később tudtuk megkezdeni. A cica náthából végül szerencsésen kigyógyult, de a jobb szeme makacsul gyulladt marad a kezelés ellenére. Végül kiderült, hogy ennek már nincs köze a náthához, Selymes harmadik szemhéja be volt szakadva. A szakadás végül begyógyult magától. A szemén és félénkségén túl amúgy minden rendben vele. Ő is többször féreghajtott, parazitáktól mentes, ivartalanított, oltási programja rendben és chippel is rendelkezik. Kézhez szoktatott, nem vad, de be kell cserkészni a simogatáshoz.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Abigél',
            "gender"=> "Nőstény",
            "likely_bday"=> "2019-05-05",
            "external_property"=> "Kistestű, barna cirmos bundás",
            "description"=> "Abigél 2021. május elején született FIV/FELV negatív mamától és oltva, chippel, parazitáktól mentesítve, ivartalanítva, kizárólag benti tartással keresünk számára végleges otthont. Kistestű, barna cirmos bundás, picit félénk, de nagyon kedves kiscica. Nyugodt természetű, más cicákkal játékos, de idegen bársonytalpúakhoz szoktatni szükséges, mert eleinte nagyon félénk.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Berci & Borisz',
            "gender"=> "Kandúr",
            "likely_bday"=> "2018-05-01",
            "external_property"=> "Nagytestű, szürke",
            "description"=> "Berci és Borisz megkapták az oltásaikat, paraziták ellen kezeltük őket, átestek az ivartalanításon és hatalmasra nőttek. Szocializációjuk sajnos csak félúton jár. Borisznak voltak / vannak jobb napjai, amikor meg lehet érinteni és akár még a simogatást is engedi, de ez nagyon ritka. Mind a két cica fél tőlünk, pedig gyakorlatilag egy helyen, egy ember mellett és megszokott cica környezetben nőttek fel. Valahogy náluk mégsem sikerült a kézszelídség elérése. Nagyon érdelődőek, közel is jönnek, szinte bele bámulnak az ember arcába, amikor közöttük van az idi befogadójuk, de rettegnek az érintéstől. Szóval amilyen szépek olyan kemény diók is ők. Így csak nagyon tapasztalt gazdinak javasoljuk őket, olyan családba, ahol elfogadják, hogy jó ideig bujkálni fognak, majd érinthetetlenek lesznek, és nagyon-nagyon lassan nyitnak az ember felé.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Cat::factory()->create([
            'name'=> 'Soma',
            "gender"=> "Kandúr",
            "likely_bday"=> "2019-05-15",
            "external_property"=> "Kistestű, vékony csontú, selymes bunda",
            "description"=> "Soma 2019 május közepén született kiskandúr, aki 4 testvérével került a gondozásunkba. A mamájuk FIV/FELV negatív. Csúnya náthával került hozzánk és a testvérek közül ő volt a legrosszabb állapotban, így kórházi kezelésre, infúzióra szorult. A cica náthából szerencsésen kigyógyult, és az egykori elfekvő, beteges kiscica mára igazi örökmozgó kisördög lett. Többször féreghajtott, parazitáktól mentes, oltási programja rendben, chippel is rendelkezik, és már az ivartalanításon is átesett. Játékos, érdeklődő, nagyon aktív kis bársonytalpú, aki dorombolva keresi az emberi simogatást, társaságot. Termetét, kinézetét tekintve a mamájára ütött, mert kistestű, vékony csontú, de gyönyörű selymes bundája van. Alomra jár, szépen eszik.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);

        //Cat::factory(18)->create();
    }
}
