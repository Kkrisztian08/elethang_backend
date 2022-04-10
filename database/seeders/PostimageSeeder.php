<?php

namespace Database\Seeders;

use App\Models\Postimage;
use Illuminate\Database\Seeder;

class PostimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Postimage::factory()->create([  
            "image"=> "202204101853271238246_4757226630981811_6536312182949322322_n.jpg",
            "user_id"=> 3,
            "description"=> "Kölyök kutya szemek"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101854271931254_4789474294423711_7297319594981781010_n.jpg",
            "user_id"=> 3,
            "description"=> "Mi van nálad? Add ide!"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101854271937405_4789748754396265_5970852804031421514_n.jpg",
            "user_id"=> 3,
            "description"=> "Szia, Szeretlek!"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101855271978513_4789498381087969_4295068719648262960_n.jpg",
            "user_id"=> 3,
            "description"=> "Életem gyöngyei"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101856271994902_4789497641088043_3490093572357251210_n.jpg",
            "user_id"=> 3,
            "description"=> "Elegáns"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101856272594208_4832539653450508_3720028756746840512_n.jpg",
            "user_id"=> 3,
            "description"=> "Hogy vagy?"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101857272660574_4832542493450224_1957852313893896449_n.jpg",
            "user_id"=> 3,
            "description"=> "Mini me"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101857273434974_4874244109280062_6598763927489739873_n.jpg",
            "user_id"=> 3,
            "description"=> "Jutifali a láthatáron"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101858273467643_4873694679335005_2281052736974556634_n.jpg",
            "user_id"=> 3,
            "description"=> "Doppelganger"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101859274336615_4920285998009206_4759042502329565472_n.jpg",
            "user_id"=> 3,
            "description"=> "Pocak simi rendelt!"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101859275424367_4960813350623137_8081058452658985254_n.jpg",
            "user_id"=> 3,
            "description"=> "Pocak simi rendelt!"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101900276117654_4993341237370348_5620879546080215584_n.jpg",
            "user_id"=> 3,
            "description"=> "Mesél a szél"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101901276149341_4993294794041659_844609555768743910_n.jpg",
            "user_id"=> 3,
            "description"=> "Szia, Imádlak!"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101902276158432_4993341784036960_4042511419671271939_n.jpg",
            "user_id"=> 3,
            "description"=> "Tájkép"
        ]);
        Postimage::factory()->create([  
            "image"=> "202204101907270050004_4717866224917852_1722494045323081113_n.jpg",
            "user_id"=> 3,
            "description"=> "Kis karácsony, nagy karácsony..."
        ]);
    }
}
