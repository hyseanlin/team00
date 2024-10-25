<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarineMammalsObservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marine_mammals_observations')->insert([
            [
                'project_name' => '111年度臺灣鯨豚族群調查計畫',
                'year' => 2022,
                'month' => 3,
                'day' => 15,
                'survey_method' => '目視調查',
                'longitude' => 121.91832,
                'latitude' => 25.29699,
                'administrative_region' => '基隆市',
                'identification_level' => '種',
                'common_species_name' => '偽虎鯨',
                'original_species_name' => '偽虎鯨',
                'original_species_scientific_name' => 'Pseudorca crassidens',
                'verified_species_code' => null,
                'quantity' => '8-10',
                'quantity_unit' => '隻',
                'kingdom' => 'Animalia',
                'kingdom_chinese_name' => '動物界',
                'phylum' => 'Chordata',
                'phylum_chinese_name' => '脊索動物門',
                'class' => 'Mammalia',
                'class_chinese_name' => '哺乳綱',
                'order' => 'Artiodactyla',
                'order_chinese_name' => '偶蹄目',
                'family' => 'Delphinidae',
                'family_chinese_name' => '海豚科',
                'genus' => 'Pseudorca',
                'genus_chinese_name' => '偽虎鯨屬',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => '111年度臺灣鯨豚族群調查計畫',
                'year' => 2022,
                'month' => 3,
                'day' => 15,
                'survey_method' => '目視調查',
                'longitude' => 122.05455,
                'latitude' => 25.52609,
                'administrative_region' => '基隆市',
                'identification_level' => '屬',
                'common_species_name' => '瓶鼻海豚',
                'original_species_name' => '瓶鼻海豚',
                'original_species_scientific_name' => 'Tursiops spp.',
                'verified_species_code' => null,
                'quantity' => '4-5',
                'quantity_unit' => '隻',
                'kingdom' => 'Animalia',
                'kingdom_chinese_name' => '動物界',
                'phylum' => 'Chordata',
                'phylum_chinese_name' => '脊索動物門',
                'class' => 'Mammalia',
                'class_chinese_name' => '哺乳綱',
                'order' => 'Artiodactyla',
                'order_chinese_name' => '偶蹄目',
                'family' => 'Delphinidae',
                'family_chinese_name' => '海豚科',
                'genus' => 'Tursiops',
                'genus_chinese_name' => '寬吻海豚屬',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more records based on the provided data in the same format
        ]);
    }
}
