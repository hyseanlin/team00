@extends('app')

@section('title', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_theme', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_contents')
<table border="1">
    <tr>
        <td>計畫/案件名稱</td>
        <td>{{ $observation->project_name }}</td>
    </tr>
    <tr>
        <td>西元年月日</td>
        <td>{{ $observation->year }}/{{ $observation->month }}/{{ $observation->day }}</td>
    </tr>
    <tr>
        <td>調查方法</td>
        <td>{{ $observation->survey_method }}</td>
    </tr>
    <tr>
        <td>經度</td>
        <td>{{ $observation->longitude }}</td>
    </tr>
    <tr>
        <td>緯度</td>
        <td>{{ $observation->latitude }}</td>
    </tr>
    <tr>
        <td>直轄市或省轄縣市</td>
        <td>{{ $observation->administrative_region }}</td>
    </tr>
    <tr>
        <td>物種俗名</td>
        <td>{{ $observation->common_species_name }}</td>
    </tr>
    <tr>
        <td>數量</td>
        <td>{{ $observation->quantity }}</td>
    </tr>
    <tr>
        <td>單位</td>
        <td>{{ $observation->quantity_unit }}</td>
    </tr>
    <tr>
        <td>鑑定層級</td>
        <td>{{ $observation->identification_level }}</td>
    </tr>
    <tr>
        <td>物種界</td>
        <td>{{ $observation->kingdom_chinese_name }}</td>
    </tr>
    <tr>
        <td>物種門</td>
        <td>{{ $observation->phylum_chinese_name }}</td>
    </tr>
    <tr>
        <td>物種綱</td>
        <td>{{ $observation->class_chinese_name }}</td>
    </tr>
    <tr>
        <td>物種目</td>
        <td>{{ $observation->order_chinese_name }}</td>
    </tr>
    <tr>
        <td>物種科</td>
        <td>{{ $observation->family_chinese_name }}</td>
    </tr>
    <tr>
        <td>物種屬</td>
        <td>{{ $observation->genus_chinese_name }}</td>
    </tr>
</table>

@endsection
