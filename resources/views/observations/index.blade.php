@extends('app')

@section('title', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_theme', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_contents')
    <table border="1">
            <tr>
                <th>計畫/案件名稱</th>
                <th>西元年月日</th>
                <th>調查方法</th>
                <th>經度</th>
                <th>緯度</th>
                <th>直轄市或省轄縣市</th>
                <th>物種俗名</th>
                <th>數量</th>
                <th>單位</th>
                <th>操作1</th>
                <th>操作2</th>
                <th>操作3</th>
                <!---
                <th>鑑定層級</th>
                <th>物種界</th>
                <th>物種門</th>
                <th>物種綱</th>
                <th>物種目</th>
                <th>物種科</th>
                <th>物種屬</th>
                -->
            </tr>
        @foreach ($observations as $observation)
            <tr>
                <td>{{ $observation->project_name }}</td>
                <td>{{ $observation->year }}/{{ $observation->month }}/{{ $observation->day }}</td>
                <td>{{ $observation->survey_method }}</td>
                <td>{{ $observation->longitude }}</td>
                <td>{{ $observation->latitude }}</td>
                <td>{{ $observation->administrative_region }}</td>
                <td>{{ $observation->common_species_name }}</td>
                <td>{{ $observation->quantity }}</td>
                <td>{{ $observation->quantity_unit }}</td>
                <td><a href="{{ route('observations.show', ['id' => $observation->id]) }}">顯示</a></td>
                <td><a href="{{ route('observations.edit', ['id' => $observation->id]) }}">編輯</a></td>
                <td>
                    <form action="{{ url('/observations/delete', ['id' => $observation->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
                <!--
                <td>{{ $observation->identification_level }}</td>
                <td>{{ $observation->kingdom_chinese_name }}</td>
                <td>{{ $observation->phylum_chinese_name }}</td>
                <td>{{ $observation->class_chinese_name }}</td>
                <td>{{ $observation->order_chinese_name }}</td>
                <td>{{ $observation->family_chinese_name }}</td>
                <td>{{ $observation->genus_chinese_name }}</td>
                -->
            </tr>
        @endforeach
    </table>

@endsection
