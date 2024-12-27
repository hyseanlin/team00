<div class="form-group">
    {!! Form::label('project_name', '計畫/案件名稱:') !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('year','西元年:') !!}
    {!! Form::text('year', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('month','月:') !!}
    {!! Form::text('month', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('day','日:') !!}
    {!! Form::text('day', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('survey_method', '調查方法：') !!}
    {!! Form::text('survey_method', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('longitude', '經度') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('latitude', '緯度：') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('administrative_region', '直轄市或省轄縣市：') !!}
    {!! Form::text('administrative_region',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('identification_level', '鑑定級別：') !!}
    {!! Form::text('identification_level',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('common_species_name', '物種俗名：') !!}
    {!! Form::text('common_species_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('original_species_name', '原始物種名稱：') !!}
    {!! Form::text('original_species_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('original_species_scientific_name', '原始物種學名：') !!}
    {!! Form::text('original_species_scientific_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('verified_species_code', '校定物種識別編碼（若有）：') !!}
    {!! Form::text('verified_species_code', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('quantity', '觀察到的個體數量或範圍：') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('quantity_unit', '個體數量或範圍單位：') !!}
    {!! Form::text('quantity_unit', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kingdom', '物種的界分類（如「Animalia」）	：') !!}
    {!! Form::text('kingdom', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kingdom_chinese_name', '物種界的中文名稱：') !!}
    {!! Form::text('kingdom_chinese_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phylum', '	物種的門分類：') !!}
    {!! Form::text('phylum', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('phylum_chinese_name', '物種門的中文名稱：') !!}
    {!! Form::text('phylum_chinese_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('class', '	物種的綱分類：') !!}
    {!! Form::text('class', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('class_chinese_name', '物種綱的中文名稱：') !!}
    {!! Form::text('class_chinese_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('order', '物種的目分類：') !!}
    {!! Form::text('order', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('order_chinese_name', '物種目的中文名稱：') !!}
    {!! Form::text('order_chinese_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('family', '	物種的科分類：') !!}
    {!! Form::text('family', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('family_chinese_name', '	物種科的中文名稱：') !!}
    {!! Form::text('family_chinese_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genus', '物種的屬分類：') !!}
    {!! Form::text('genus', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('genus_chinese_name', '物種屬的中文名稱：') !!}
    {!! Form::text('genus_chinese_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>