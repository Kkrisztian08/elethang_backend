<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::factory()->create([
            "event_name"=> "Szemétszedés",
            "description"=> "2020.08.03-án a BlackRock alkalmazottak önkéntes csapatának segítségével, valamint a XVII. kerületi önkormányzat és a Hotel Vau kutyapanzió támogatásával önkéntes napot tartottunk az Élethang Alapítvány tagjaival.
            Rendszeresen járunk védenceinkkel sétálni egy XVII. kerületi kiserdőbe, ahol az illegális szemétlerakók „jóvoltából” rengeteg szemetet szoktak felhalmozni. 2019 szeptemberében egyszer már eltakarítottunk 3 konténernyi szemetet, de mostanra újra megtelt az erdő.
            Szerettük volna szebbé tenni a környéket és megszabadítani a kiserdőt szeméthalomtól, ezért szervezésbe kezdtünk.
            A BlackRock alkalmazottak önkéntes csapata meghívásunkra idén is azonnal igent mondott és a XVII. kerületi Önkormányzat is rábólintott a projektre és biztosították számunkra a szemétszedéshez szükséges konténereket. Idén is a Hotel Vau kutyapanzió biztosította a pihenéshez, étkezéshez szükséges bázist, illetve a szemétszedéshez, festéshez szükséges eszközöket.
            A 8 órásra tervezett nap szinte pihenés nélkül telt el. 2 konténert pakoltunk meg szeméttel, és mivel a lerakatok szerteszét voltak az erdőben, így most sok cipekedés, talicskázás vitte el az időnk nagyobb részét. A délután a levezetésről szólt és az állatbarát önkéntesek segítségével megsétáltattuk a Hotel Vauban panziózó kutyáinkat.",
            "date"=> "2020-08-03"
        ]);
        Event::factory()->create([
            "event_name"=> "DogAtlon",
            "description"=> "Az Élethang Alapítvány védenceivel részt vettünk a 2 napos DogAtlon kutyás futóversenyen, melyet a gyáli motocross pályán rendeztek 2019.09.28-29-én
            A jól szervezett, vidám hangulatú két napos eseményen nagyon jól éreztük magunkat. A szervezők és az önkéntesek, kedvesek, segítőkészek voltak, a királydinnyéktől eltekintve a versenypálya is kellően nehéz, játékos, ötletes volt. A profi műsorvezetés Petrus Krisztina személyében garancia volt, aki a tőle megszokott lendülettel és profizmussal vezette végig a két napos eseményt.
            Az Élethangos csapat sátrában lehetőség volt ismerkedni a munkánkkal, védenceinkkel, akik közül Athos, Mia, Mandy, Maya, Stacy, Levente, Bria, Zorka voltak jelen és egy röpke pillanatra Marci is megtisztelt minket a jelenlétével. Sajnos számára túl sok volt az inger, így rövid tanakodás után vissza kellett vinni a megállás nélkül ugató bicebócánkat a panzióba.
            A már gazdis kutyáink közül Cora, Leon és Lipton tartottak velünk.
            Mind a két napon érdekeltek voltunk a versenyeken. Szombaton délután a 6 kilométeres távon Ibolya indult Leonnal és szuper időeredménnyel végeztek. Gratulálunk nekik!
            Vasárnap a 6 kilométeres távnak csapatban vágtunk neki. Az alapítványt Ingrid, Barbi, Eszter, Kitti és Benedek képviselték Zorkával, Corával, Briával, Liptonnal és Aidennel (ő nem Élethangos) Nagyon szépen futottak mind a két-, mind pedig a négylábúak. Nagyon büszkék vagyunk rájuk. Ahhoz képest, hogy mindenkinek ez volt az első kutyás versenye volt, gyönyörűen együtt dolgoztak a kutyákkal, és a védenceink is kitettek magukért, húztak, futottak, bátran vették a pályán lévő akadályokat.",
            "date"=> "2019-09-28"
        ]);
        Event::factory()->create([
            "event_name"=> "Postás Juniális",
            "description"=> "Bemutathattuk az alapitványunkat és gyűjthettünk védenceink számára.
            A jó hangulatról Peller Anna és édesanyja,, párja Lukács Miki és Dolhai Attila gondoskodtak. A nagy meleg ellenére rengetegen jöttek el és sok érdeklődő volt az Élethangos sátornál is.
            Köszönjük Éberling Ibolyának, hogy ismét készített számunkra a támogatásokért cserébe adható apró ajándékokat és Szimatot is bevetette az adománygyűjtés érdekében. Szimat mellett Boni kutyánk állta a simogató kezek hadát. 33.975 forint támogatás gyűlt össze a rendezvényen résztvevők jóvoltából.",
            "date"=> "2019-06-22"
        ]);
        Event::factory()->create([
            "event_name"=> "Csapatépítés",
            "description"=> "Néhány Élethangos gazdikeresőink céges csapatépítő túrán vett részt 2019 április első hétvégéjén. Alba, Zorka, Zokni, Bria és Elza számukra ismeretlen emberekkel és kutyákkal túráztak és a visszajelzések alapján nagyon szépen viselkedtek. Jól bírták a több kilométeres távot, mindenkivel megtalálták a közös hangot és nagyon élvezték hogy egész nap a figyelem középpontjában, jutifalatok közelében és simogató kezek között lehettek.
            Köszönjük szépen Éberling Ibolyának, hogy megszervezte és lebonyolította a skacoknak a részvételét, köszönjük Fülöp Gábornak a kutyáink körüli segítséget és a remek fotókat és köszönjük a céges csapat minden kétlábú résztvevőjének a pesztrálást és hogy ilyen szeretettel foglalkoztak védenceinkkel.",
            "date"=> "2019-04-06"
        ]);
        Event::factory()->create([
            "event_name"=> "EbFieszta",
            "description"=> "2017.06.03-án egy jó hangulatú, tartalmas napot töltöttünk az Összefogás a Szánhúzókért Közhasznú Alapítvány által szervezett örökbefogadó napon, az EbFiesztán.
            Köszönjük az alapítványnak a szervezést, a meghívást, hogy ismét lehetőséget kaphattunk arra, hogy rendezvényükön bemutathassuk gazdikereső kutyusainkat és megismertessük az érdeklődőkkel az alapítványunk munkáját.
            Kutyusaink türelmesen fogadták az idegen emberek közeledését, simogatását, és a próbasétákat. Nagyon szépen viselkedtek a számukra ismeretlen emberekkel és szituációkban, büszkék vagyunk arra, hogy megállták a helyüket a sokuk számára első ilyen jellegű próbatételen is. Ehhez persze az is kellett, hogy igazán jó kezekben voltak, hiszen ahogy a heti ligeti séták során, most is sokan segítettek az Élethangos sátornál a kutyáink sétáltatásában, lemozgatásában, bemutatásában. Kézről kézre jártak a pórázok, mindig volt valaki, aki a fáradt, vagy éppen nyugtalan, éhes, vagy szomjas, vagy sétálni vágyó ebeket pátyolgatta. Nagyon köszönjük a kutyáink és a bemutató sátor körüli segítséget Andi, Ágnes, Alíz, Kata, Niki, Eszter, Kitti, Barbara és Melinda.",
            "date"=> "2017-06-03"
        ]);
        Event::factory()->create([
            "event_name"=> "VIII. Kutyás Családi nap és Örökbefogadó nap",
            "description"=> "2016.09.10-én csodaszép napsütéses délutánon részt vettünk az Összefogás a Szánhúzókért Közhasznú Alapítvány által szervezett kutyás rendezvényen a Strázsa Kutyaiskola és Panzióban.
            A szép időt és jó hangulatot fokozta a jó társaság, érdekes programok, önkéntes segítőink remek csapata és a rendezvényre kilátogató egykori védenceink mosolygós pofija.
            Most sem távoztunk kupa nélkül, ezen a rendezvényen Szofi kutyánk lett harmadik helyezett a nagytestű fajtatiszta kutyák versenyében. Büszkék vagyunk rá és köszönjük Beke Katának a felvezetést.
            Az őszi rendezvény jó hangulatához a kilátogató gazdik, az érdeklődő gazdi jelölteken túl most is önkéntes segítőink járultak hozzá, aki az Élethangos sátor körüli teendőkkel és a kutyáink felvigyázásával kapcsolatban nagy segítségünkre voltak:Katalin Beke , Ibolya Éberling , Zsuzsanna Farkas , Melinda Szabó Réka Kelemen, Gazdag Tímea, Katonáné Nagy Ilona, Kozák András , Lévay Kata , Dobos Gyöngyi, Andrea Berger , Zsófia Szűts",
            "date"=> "2016-09-10"
        ]);

        //Event::factory(5)->create();
    }
}
