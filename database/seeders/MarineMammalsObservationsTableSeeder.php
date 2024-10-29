<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MarineMammalsObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            '基隆市', '台北市', '新北市', '桃園市', '新竹市', '新竹縣', 
            '宜蘭縣', '苗栗縣', '台中市', '彰化縣', '雲林縣', '嘉義市', 
            '嘉義縣', '台南市', '高雄市', '屏東縣', '花蓮縣', '台東縣', 
            '澎湖縣', '金門縣', '連江縣'
        ];
        $methods = [
            '水下攝影',            // Underwater Photography
            '遙感探測',            // Remote Sensing
            '聲納掃描',            // Sonar Scanning
            '潛水調查',            // Diving Survey
            '拖網調查',            // Trawling Survey
            '水質取樣',            // Water Sampling
            '底棲生物取樣',        // Benthic Sampling
            '生物多樣性調查',      // Biodiversity Survey
            '環境DNA檢測',         // Environmental DNA (eDNA) Analysis
            '衛星追蹤',            // Satellite Tracking
            '標記重捕法',          // Mark and Recapture
            '水聲監測',            // Acoustic Monitoring
            '水流量測量',          // Current Measurement
            '海洋氣象觀測',        // Oceanographic Weather Observation
            '底泥取樣',            // Sediment Sampling
            '浮游生物取樣',        // Plankton Sampling
            '漁獲量統計',          // Fish Catch Statistics
            '自動水下航行器調查',  // Autonomous Underwater Vehicle (AUV) Survey
            '潛水艇調查',          // Submersible Survey
            '無人機航拍',          // Drone Aerial Survey
            '目視調查',
        ];

        $species_names_cn = [
            '偽虎鯨',             // False Killer Whale
            '瓶鼻海豚',           // Bottlenose Dolphin
            '真海豚',             // Common Dolphin
            '抹香鯨',             // Sperm Whale
            '藍鯨',               // Blue Whale
            '座頭鯨',             // Humpback Whale
            '長鬚鯨',             // Fin Whale
            '小鬚鯨',             // Minke Whale
            '大王烏賊',           // Giant Squid
            '短鰭領航鯨',         // Short-finned Pilot Whale
            '寬吻海豚',           // Rough-toothed Dolphin
            '圓頭鯨',             // Beluga Whale
            '虎鯨',               // Orca
            '白鯨',               // Beluga
            '琉球海龜',           // Ryukyu Sea Turtle
            '綠蠵龜',             // Green Turtle
            '紅蠵龜',             // Loggerhead Turtle
            '太平洋海馬',         // Pacific Seahorse
            '石斑魚',             // Grouper
            '曼波魚',             // Ocean Sunfish
            '黑潮帆蜥',           // Black Sailfin Lizard
            '珊瑚礁鰻魚',         // Coral Reef Eel
            '大西洋金槍魚',       // Atlantic Bluefin Tuna
            '鬼蝠魟',             // Giant Manta Ray
            '長尾鯊',             // Thresher Shark
            '錘頭鯊',             // Hammerhead Shark
            '虎紋珊瑚蛇',         // Tiger Coral Snake
            '雙髻鯊',             // Great Hammerhead Shark
            '藍圈章魚',           // Blue-ringed Octopus
            '海獅',               // Sea Lion
            '海豹',               // Seal
            '鰻鯖',               // Barracuda
            '鰻魚',               // Eel
            '海洋刺鰓',           // Marine Nudibranch
        ];

        $species_names_en = [
            'False Killer Whale',           // 偽虎鯨
            'Bottlenose Dolphin',           // 瓶鼻海豚
            'Common Dolphin',               // 真海豚
            'Sperm Whale',                  // 抹香鯨
            'Blue Whale',                   // 藍鯨
            'Humpback Whale',               // 座頭鯨
            'Fin Whale',                    // 長鬚鯨
            'Minke Whale',                  // 小鬚鯨
            'Giant Squid',                  // 大王烏賊
            'Short-finned Pilot Whale',     // 短鰭領航鯨
            'Rough-toothed Dolphin',        // 寬吻海豚
            'Beluga Whale',                 // 圓頭鯨
            'Orca',                         // 虎鯨
            'Beluga',                       // 白鯨
            'Ryukyu Sea Turtle',            // 琉球海龜
            'Green Turtle',                 // 綠蠵龜
            'Loggerhead Turtle',            // 紅蠵龜
            'Pacific Seahorse',             // 太平洋海馬
            'Grouper',                      // 石斑魚
            'Ocean Sunfish',                // 曼波魚
            'Black Sailfin Lizard',         // 黑潮帆蜥
            'Coral Reef Eel',               // 珊瑚礁鰻魚
            'Atlantic Bluefin Tuna',        // 大西洋金槍魚
            'Giant Manta Ray',              // 鬼蝠魟
            'Thresher Shark',               // 長尾鯊
            'Hammerhead Shark',             // 錘頭鯊
            'Tiger Coral Snake',            // 虎紋珊瑚蛇
            'Great Hammerhead Shark',       // 雙髻鯊
            'Blue-ringed Octopus',          // 藍圈章魚
            'Sea Lion',                     // 海獅
            'Seal',                         // 海豹
            'Barracuda',                    // 鰻鯖
            'Eel',                          // 鰻魚
            'Marine Nudibranch',            // 海洋刺鰓
        ];
        $kingdoms_en = [
            'Animalia',       // 動物界
            'Plantae',        // 植物界
            'Fungi',          // 真菌界
            'Protista',       // 原生生物界
            'Chromista',      // 色素體界
            'Bacteria',       // 細菌界
            'Archaea'         // 古菌界
        ];
        $kingdoms_cn = [
            '動物界',    // Animalia
            '植物界',    // Plantae
            '真菌界',    // Fungi
            '原生生物界', // Protista
            '色素體界',  // Chromista
            '細菌界',    // Bacteria
            '古菌界'     // Archaea
        ];
        $phyla_en = [
            'Chordata',         // 脊索動物門
            'Arthropoda',       // 節肢動物門
            'Mollusca',         // 軟體動物門
            'Cnidaria',         // 刺絲胞動物門
            'Echinodermata',    // 棘皮動物門
            'Porifera',         // 海綿動物門
            'Annelida',         // 環節動物門
            'Platyhelminthes',  // 扁形動物門
            'Nematoda',         // 線蟲動物門
            'Bryozoa',          // 苔蘚動物門
            'Ctenophora',       // 櫛水母門
            'Chaetognatha'      // 毛顎動物門
        ];
        
        $phyla_cn = [
            '脊索動物門',       // Chordata
            '節肢動物門',       // Arthropoda
            '軟體動物門',       // Mollusca
            '刺絲胞動物門',     // Cnidaria
            '棘皮動物門',       // Echinodermata
            '海綿動物門',       // Porifera
            '環節動物門',       // Annelida
            '扁形動物門',       // Platyhelminthes
            '線蟲動物門',       // Nematoda
            '苔蘚動物門',       // Bryozoa
            '櫛水母門',         // Ctenophora
            '毛顎動物門'        // Chaetognatha
        ];

        $classes_en = [
            'Mammalia',            // 哺乳綱
            'Actinopterygii',      // 硬骨魚綱
            'Chondrichthyes',      // 軟骨魚綱
            'Cephalopoda',         // 頭足綱
            'Gastropoda',          // 腹足綱
            'Bivalvia',            // 雙殼綱
            'Anthozoa',            // 珊瑚綱
            'Holothuroidea',       // 海參綱
            'Asteroidea',          // 海星綱
            'Echinoidea',          // 海膽綱
            'Hydrozoa',            // 水螅綱
            'Scyphozoa'            // 缽水母綱
        ];
        
        $classes_cn = [
            '哺乳綱',              // Mammalia
            '硬骨魚綱',            // Actinopterygii
            '軟骨魚綱',            // Chondrichthyes
            '頭足綱',              // Cephalopoda
            '腹足綱',              // Gastropoda
            '雙殼綱',              // Bivalvia
            '珊瑚綱',              // Anthozoa
            '海參綱',              // Holothuroidea
            '海星綱',              // Asteroidea
            '海膽綱',              // Echinoidea
            '水螅綱',              // Hydrozoa
            '缽水母綱'             // Scyphozoa
        ];
        $orders_en = [
            'Cetacea',             // 鯨目
            'Perciformes',         // 鱸形目
            'Decapoda',            // 十足目
            'Octopoda',            // 八腕目
            'Scorpaeniformes',     // 鮋形目
            'Carcharhiniformes',   // 鼠鯊目
            'Rajiformes',          // 鰩目
            'Lampriformes',        // 鰧目
            'Scombriformes',       // 鯖形目
            'Salmoniformes',       // 鮭形目
            'Myliobatiformes',     // 魟形目
            'Alcyonacea'           // 軟珊瑚目
        ];
        
        $orders_cn = [
            '鯨目',                // Cetacea
            '鱸形目',              // Perciformes
            '十足目',              // Decapoda
            '八腕目',              // Octopoda
            '鮋形目',              // Scorpaeniformes
            '鼠鯊目',              // Carcharhiniformes
            '鰩目',                // Rajiformes
            '鰧目',                // Lampriformes
            '鯖形目',              // Scombriformes
            '鮭形目',              // Salmoniformes
            '魟形目',              // Myliobatiformes
            '軟珊瑚目'            // Alcyonacea
        ];
        $families_en = [
            'Delphinidae',           // 海豚科
            'Serranidae',            // 石斑魚科
            'Labridae',              // 隆頭魚科
            'Lutjanidae',            // 鯛科
            'Carcharhinidae',        // 真鯊科
            'Rajidae',               // 鰩科
            'Myliobatidae',          // 魟科
            'Scombridae',            // 鯖科
            'Scyliorhinidae',        // 鬚鯊科
            'Cheloniidae',           // 海龜科
            'Octopodidae',           // 章魚科
            'Alcyoniidae'            // 軟珊瑚科
        ];
        
        $families_cn = [
            '海豚科',                // Delphinidae
            '石斑魚科',              // Serranidae
            '隆頭魚科',              // Labridae
            '鯛科',                  // Lutjanidae
            '真鯊科',                // Carcharhinidae
            '鰩科',                  // Rajidae
            '魟科',                  // Myli
        ];

        $genera_en = [
            'Tursiops',           // 寬吻海豚屬
            'Pseudorca',          // 偽虎鯨屬
            'Delphinus',          // 海豚屬
            'Thunnus',            // 鮪屬
            'Sphyrna',            // 錘頭鯊屬
            'Chelonia',           // 綠蠵龜屬
            'Octopus',            // 章魚屬
            'Carcharhinus',       // 真鯊屬
            'Raja',               // 鰩屬
            'Myliobatis',         // 魟屬
            'Gadus',              // 鱈屬
            'Alcyonium'           // 軟珊瑚屬
        ];
        
        $genera_cn = [
            '寬吻海豚屬',         // Tursiops
            '偽虎鯨屬',           // Pseudorca
            '海豚屬',             // Delphinus
            '鮪屬',               // Thunnus
            '錘頭鯊屬',           // Sphyrna
            '綠蠵龜屬',           // Chelonia
            '章魚屬',             // Octopus
            '真鯊屬',             // Carcharhinus
            '鰩屬',               // Raja
            '魟屬',               // Myliobatis
            '鱈屬',               // Gadus
            '軟珊瑚屬'           // Alcyonium
        ];
        $identification_levels_en = [
            'Species',         // 種
            'Genus',           // 屬
            'Family',          // 科
            'Order',           // 目
            'Class',           // 綱
            'Phylum',          // 門
            'Kingdom',         // 界
            'Unidentified'     // 未知
        ];
        
        $identification_levels_cn = [
            '種',               // Species
            '屬',               // Genus
            '科',               // Family
            '目',               // Order
            '綱',               // Class
            '門',               // Phylum
            '界',               // Kingdom
            '未知'              // Unidentified
        ];
        
        $year_roc = rand(90, 110); // 民國年
        $year_ad = $year_roc + 1911; // 西元年

        for ($i = 0; $i < 100; $i++) {
            $species_name_id = rand(0, count($species_names_cn)-1);
            $species_name_cn = $species_names_cn[$species_name_id];
            $species_name_en = $species_names_en[$species_name_id];

            $kingdom_id = rand(0, count($kingdoms_cn)-1);
            $kingdom_cn = $kingdoms_cn[$kingdom_id];
            $kingdom_en = $kingdoms_en[$kingdom_id];

            $phylum_id = rand(0, count($phyla_cn)-1);
            $phylum_cn = $phyla_cn[$phylum_id];
            $phylum_en = $phyla_en[$phylum_id];

            $class_id = rand(0, count($classes_cn)-1);
            $class_cn = $classes_cn[$class_id];
            $class_en = $classes_en[$class_id];

            $order_id = rand(0, count($orders_cn)-1);
            $order_cn = $orders_cn[$order_id];
            $order_en = $orders_en[$order_id];

            $family_id = rand(0, count($families_cn)-1);
            $family_cn = $families_cn[$family_id];
            $family_en = $families_en[$family_id];

            $genus_id = rand(0, count($genera_cn)-1);
            $genus_cn = $genera_cn[$family_id];
            $genus_en = $genera_en[$family_id];

            $identification_level_id = rand(0, count($identification_levels_cn)-1);
            $identification_level_cn = $identification_levels_cn[$identification_level_id];

            $month = rand(1, 12);
            $date = rand(1, 31);
            $random_date = Carbon::createFromDate($year_ad, $month, $date)->addMonths(rand(0, 2))->addRealDays(rand(0,31));

            DB::table('marine_mammals_observations')->insert([
                [
                    'project_name' => $year_roc . '年度臺灣鯨豚族群調查計畫',
                    'year' => $year_ad,
                    'month' => $month,
                    'day' => $date,
                    'survey_method' => $methods[rand(0, count($methods)-1)],
                    'longitude' => rand(119.5 * 1000, 123.5 * 1000) / 1000.0,
                    'latitude' => rand(20.5 * 1000, 25.5 * 1000) / 1000.0,
                    'administrative_region' => $cities[rand(0, count($cities)-1)],
                    'identification_level' => $identification_level_cn,
                    'common_species_name' => $species_name_cn,
                    'original_species_name' => $species_name_cn,
                    'original_species_scientific_name' => $species_name_en,
                    'verified_species_code' => null,
                    'quantity' => rand(1, 3) . '-' . rand(4, 12),
                    'quantity_unit' => '隻',
                    'kingdom' => $kingdom_en,
                    'kingdom_chinese_name' => $kingdom_cn,
                    'phylum' => $phylum_en,
                    'phylum_chinese_name' => $phylum_cn,
                    'class' => $class_en,
                    'class_chinese_name' => $class_cn,
                    'order' => $order_en,
                    'order_chinese_name' => $order_cn,
                    'family' => $family_en,
                    'family_chinese_name' => $family_cn,
                    'genus' => $genus_en,
                    'genus_chinese_name' => $genus_cn,
                    'created_at' => $random_date,
                    'updated_at' => $random_date,
                ],
            ]);
        }
    }
}
