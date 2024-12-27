<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateObservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'project_name' => 'required|string|min:5',
            'year' => 'required|numeric|min:1980',
            'month' => 'required|numeric|min:1|max:12',
            'day' => 'required|numeric|min:1|max:31',
            'survey_method' => 'required|string|min:2',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
            'administrative_region' => 'required|string|min:2',
            'identification_level' => 'required|string|min:2',
            'common_species_name' => 'required|string|min:2',
            'original_species_name' => 'required|string|min:2',
            'original_species_scientific_name' => 'string|min:2',
            'verified_species_code' => 'string|min:2',
            'quantity' => 'string|min:2',
            'quantity_uint' => 'string|min:2',
            'kingdom' => 'required|string|min:2',
            'kingdom_chinese_name' => 'string|min:2',
            'phylum' => 'string|min:2',
            'phylum_chinese_name' => 'string|min:2',
            'class' => 'string|min:2',
            'class_chinese_name' => 'string|min:2',
            'order' => 'string|min:2',
            'order_chinese_name' => 'string|min:2',
            'family' => 'string|min:2',
            'family_chinese_name' => 'string|min:2',
            'genus' => 'string|min:2',
            'genus_chinese_name' => 'string|min:2',
        ];
    }

    public function messages()
    {
        return [
            'project_name.required' => '計畫名稱是必填項。',
            'project_name.min' => '計畫名稱至少需要 5 個字元。',
            
            'year.required' => '年份是必填項。',
            'year.numeric' => '年份必須是數字。',
            'year.min' => '年份必須大於或等於 1980。',

            'month.required' => '月份是必填項。',
            'month.numeric' => '月份必須是數字。',
            'month.min' => '月份不能小於 1。',
            'month.max' => '月份不能大於 12。',

            'day.required' => '日期是必填項。',
            'day.numeric' => '日期必須是數字。',
            'day.min' => '日期不能小於 1。',
            'day.max' => '日期不能大於 31。',

            'survey_method.required' => '調查方法是必填項。',
            'survey_method.min' => '調查方法至少需要 2 個字元。',

            'longitude.required' => '經度是必填項。',
            'longitude.numeric' => '經度必須是數字。',

            'latitude.required' => '緯度是必填項。',
            'latitude.numeric' => '緯度必須是數字。',

            'administrative_region.required' => '行政區域是必填項。',
            'administrative_region.min' => '行政區域至少需要 2 個字元。',

            'identification_level.required' => '鑑定級別是必填項。',
            'identification_level.min' => '鑑定級別至少需要 2 個字元。',

            'common_species_name.required' => '常見物種名稱是必填項。',
            'common_species_name.min' => '常見物種名稱至少需要 2 個字元。',

            'original_species_name.string' => '原始物種必須是字串。',
            'original_species_name.required' => '原始物種名稱是必填項。',
            'original_species_name.min' => '原始物種名稱至少需要 2 個字元。',

            'original_species_scientific_name.string' => '原始物種學名必須是字串。',
            'original_species_scientific_name.min' => '原始物種學名至少需要 2 個字元。',

            'verified_species_code.string' => '原始物種學名必須是字串。',
            'verified_species_code.min' => '驗證物種代碼至少需要 2 個字元。',

            'quantity.string' => '原始物種學名必須是字串。',
            'quantity.min' => '數量至少需要 2 個字元。',

            'quantity_uint.string' => '原始物種學名必須是字串。',
            'quantity_uint.min' => '數量單位至少需要 2 個字元。',

            'kingdom.string' => '門必須是字串。',
            'kingdom.required' => '界是必填項。',
            'kingdom.min' => '界至少需要 2 個字元。',

            'kingdom_chinese_name.string' => '界中文必須是字串。',
            'kingdom_chinese_name.min' => '界中文名稱至少需要 2 個字元。',

            'phylum.string' => '門必須是字串。',
            'phylum.min' => '門至少需要 2 個字元。',
            
            'phylum_chinese_name.string' => '門必須是字串。',
            'phylum_chinese_name.min' => '門中文名稱至少需要 2 個字元。',

            'class.string' => '綱必須是字串。',
            'class.min' => '綱至少需要 2 個字元。',

            'class_chinese_name.string' => '綱中文必須是字串。',
            'class_chinese_name.min' => '綱中文名稱至少需要 2 個字元。',

            'order.string' => '目必須是字串。',
            'order.min' => '目至少需要 2 個字元。',

            'order_chinese_name.string' => '目中文必須是字串。',
            'order_chinese_name.min' => '目中文名稱至少需要 2 個字元。',

            'family.string' => '科必須是字串。',
            'family.min' => '科至少需要 2 個字元。',

            'family_chinese_name.string' => '科中文名稱必須是字串。。',
            'family_chinese_name.min' => '科中文名稱至少需要 2 個字元。',

            'genus.string' => '屬必須是字串。',
            'genus.min' => '屬至少需要 2 個字元。',

            'genus_chinese_name.string' => '屬中文名稱必須是字串。',
            'genus_chinese_name.min' => '屬中文名稱至少需要 2 個字元。',
        ];
    }
}
