<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Dog::factory()->create([  
            "name"=> "Pötyi",
            "gender"=> "Szuka",
            "likely_bday"=> "2021-01-01",
            "species"=> "Simaszőrű foxi",
            "external_property"=> "Kistermetű, energikus ",
            "description"=> "Oltásait megkapta, egészsége rendben van. Nagyon elkezdett nyúlni, így már több mint 10 kg, de nem lesz egy nagy kutya, leginkább egy simaszőrű foxira hasonlít. Most váltja a fogait, energikus, de szépen tanulja a mindennapi feladatokat. Leginkább kertes házba ajánljuk (természetesen kinti-benti tartással), hogy le lehessen mozgatni, de egy kirándulós, pörgős gazdi mellett lakásban is szuper társ lehet. Kutyákkal jól kijön, a cicákat is szereti, kicsi gyerek mellé, lehet kicsit sok.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Watson",
            "gender"=> "Kan",
            "likely_bday"=> "2016-12-01",
            "species"=> "Sinka keverék",
            "external_property"=> "Kistermetű, fekete, energikus, foltos nyelv ",
            "description"=> "Viselkedését tekintve egy energiabomba, tele lendülettel, tenni akarással. Vélhetően terelő kutya keverék lehet. Mi sinkára tippelünk a felépítése, kunkori farka, a nyelv foltja…stb miatt, de lehet, hogy aki jobban ért hozzá ezt cáfolja. Állandóan mozgásban van, folyton menne, terelgetné a szomszéd tanya állatait. Nehezen viseli a kötöttségeket, de azért már sokat tanult az elmúlt hónapokban. Más kutyákkal remekül kijön, imád játszani, rohangálni, vegzálni a többieket. Mindezek mellett az emberekért is rajong, legalábbis akit kiválaszt magának, azt feltétel nélkül imádja, bújik, követeli a simogatást. Makacs, akaratos, de kedves és szeretetreméltó, aki tele van szabadságvággyal, iszonyú sok energiával és munkakedvvel.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Kendra",
            "gender"=> "Szuka",
            "likely_bday"=> "2017-03-01",
            "species"=> "Németjuhász",
            "external_property"=> "Nagy termetű, sportos, játékos",
            "description"=> "Kendra 5 év feletti jó húsban lévő szuka kutya, aki működő chippel nem rendelkezett így gazdáját nem tudtuk értesíteni és a hirdetésre sem jelentkezett érte az eredeti gazdája. Tőlünk kapott chipet, oltásokat, parazita ellen kezelve lett, teljes vérképe rendben és a szívféreg vizsgálata is negatív lett, és átesett az ivartalanításon is. Eleinte bizalmatlan, visszahúzódó volt, mára azonban idi befogadóját maximálisan elfogadta, teljes bizalommal van felé. Játékos, kedves, nagyon labdás, viszonylag szépen sétál, behívható, és nagyon jó házőrző. Más kutyákkal tartózkodó, de hozzáértő kezekben összeszoktatható. Imád lakásban lenni, szobatiszta, nem rombol.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Joker",
            "gender"=> "Kan",
            "likely_bday"=> "2013-11-01",
            "species"=> "Keverék",
            "external_property"=> "Közepes méretű, fekete alapon kis fehér mellényel és zoknival",
            "description"=> "Joker nagyon kedves, simulékony kutyus, hamar beilleszkedett a két- és négylábú Élethangos csapatba. Ahogy kinyílt a csipája az illeszkedés után, megmutatta, hogy a kanokkal nincs jó viszonyban a szuka kutyákkal viszont összeszoktatható. Nálunk már a kozmetikát is kipróbálta, amiért annyira nem lelkesedett. A bundája fésüléssel szépen karban tartható.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Berta",
            "gender"=> "Szuka",
            "likely_bday"=> "2017-10-01",
            "species"=> "Keverék",
            "external_property"=> "Lapos, hosszú tesű, izmos",
            "description"=> "Bertus nagyon vehemens, mindent és mindenkit azonnal akar és meg akar ismerni. Intenzív közeledését a többiek legtöbbször félreértik, így csak forgószélhez szokott és türelmes négylábúval lehet összeengedni ismerkedni. Sokszor ugrál két lábon, és teljes erőbedobással nyomul az emberre egy is figyelemért, simogatásért. Rengeteg energiája van, ami vélhetően csillapodik majd, ha nagy kertben rohangálhat és rendszeresen sétálhat, mozoghat a mostani kenneles elhelyezés után. Pórázt, nyakörvet megszokta, a séta azonban nem mindig leányálom vele, itt még van mit tanulnunk. A kerti kutyákat megugatja, ha falkában sétálunk, akkor nekifeszül a póráznak és teljes erőbedobással próbál húzni. Ha egyedül vagy kevés állattal megyünk, akkor könnyebben kezelhető, már-már álom kutya a póráz végén.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Tádé",
            "gender"=> "Kan",
            "likely_bday"=> "2016-01-01",
            "species"=> "Keverék",
            "external_property"=> "Kis méretű, szürkés",
            "description"=> "Tádé hatósági eljárás során került a gondozásunkba. Kistermetű, 12 kilós, 5 év körüli, oltott, chippel ellátott, ivartalanított, paraziták ellen kezelt kan kutyus. Szívféreg PCR szűrése végül bőrféregre lett pozitív, így arra folyamatosan kezeljük. Végtelenül kedves, de nagyon félénk kiskutya. Türelmes, kutyákhoz értő gazdit és szökésbiztos otthont keresünk számára.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Byron",
            "gender"=> "Kan",
            "likely_bday"=> "2013-11-01",
            "species"=> "Boxer keverék",
            "external_property"=> "Játékos, közepes méretű ",
            "description"=> "Kapott oltást, chipet és ivartalanítva lett, parazitamentesítése és évenkénti oltása folyamatos. Byron teljesen süket. Viszonylag nagytestű, csupa izom, energiabomba lett belőle. Süketsége miatt valamennyire a kézjelekre reagál. Rendkívül aktív, játékos, imád rágni, borogatni, szétszedni mindent. Bár nagy élettere és mozgási lehetősége van, sokszor így is túlpörgi magát. Hörögve játszik és nem igazán tudja megtalálni a közös hangot más kutyákkal. Minden az övé, amit talál vagy amit az ember kezében lát, így óvatosan kell vele játszani, mert hajlamos kikapni az ember kezéből kikapni amit lát, és sajnos nem feltétlenül finoman. 'Örök Élethangos'",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Csenge",
            "gender"=> "Szuka",
            "likely_bday"=> "2018-11-01",
            "species"=> "Keverék",
            "external_property"=> "Apró termetű morzsa színű",
            "description"=> "Mindentől és mindenkitől rettegett. Ideiglenes befogadóját jelenleg maximálisan elfogadja, csak vele és az ott élő falkával érzi magát biztonságban. Más emberektől, érintéstől retteg. Ha izgatott vagy fél, akkor fejhangon ugat. Pórázon szépen sétál, behívható. Oltásokkak, chippel rendelkezik, parazitamentesítése folyamatos, szívféreg negatív, ivartalanított. Kertes házas helyre képzeltük el új otthonát, ahol nem annyira zavaró az időnkénti fejhangú ugatás.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Nasi",
            "gender"=> "Kan",
            "likely_bday"=> "2018-03-15",
            "species"=> "Keverék",
            "external_property"=> "Közepes termetű zsemle színű, hátsó lábain fehér zokni",
            "description"=> "Nagyon bújós, játékos, kedves kiskutya, de új szituációkban, új helyeken sokszor félős, főleg a férfiaktól tart. Sok simivel, kedves szavakkal gyorsan oldani lehet nála a feszültséget. A stressz, túlpörgés miatt hajlamos a fogyásra és a bepisilésre, de ha biztonságban érzi magát és megkapja a számára szükséges állandóságot, akkor ezek a tünetek szerencsére megszűnnek. Rágni szeret, így lakásban egyedül hagyni nem szerencsés. Kertes házas megoldást keresünk számára kinti benti tartással.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);
        Dog::factory()->create([  
            "name"=> "Marwin",
            "gender"=> "Kan",
            "likely_bday"=> "2015-01-01",
            "species"=> "Keverék",
            "external_property"=> "Kistermetű fehér félős",
            "description"=> "Marwin kb 2015-ös születésű, nagyon ragaszkodó, de egyben retteg is az emberi érintéstől. Elsőként rohan oda idi befogadójához, de még mindig rettegve kushad le a földre és kúszik amikor hozzá akarnak érni. Marwin 2020 nyarán szívféreg tekintetében egészségesnek lett nyilvánítva, így megkezdhettük az ortopéd problémáinak a kezelését. 2021 elején a jobb hátsó lábán patella árok mélyítést végeztek, és hamarosan a másik lábával is kés alá kell feküdnie.",
            "interest"=> 1,
            "adoption_id"=> null
        ]);


        //Dog::factory(15)->create();
    }
}
