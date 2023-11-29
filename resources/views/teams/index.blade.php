<html>

<head>
    <title>列出所有球隊</title>
</head>

<body>
<h1>列出所有球隊</h1>

<table>
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>分區</th>
        <th>城市</th>
        <th>主場</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @for($i=0; $i<count($teams); $i++)
        <tr>
            <td>{{ $teams[$i]['id'] }}</td>
            <td>{{ $teams[$i]['name'] }}</td>
            <td>{{ $teams[$i]['zone'] }}</td>
            <td>{{ $teams[$i]['city'] }}</td>
            <td>{{ $teams[$i]['home'] }}</td>
            <td><a href="{{ route('teams.show', ['id'=>$teams[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('teams.edit', ['id'=>$teams[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>


</body>
</html>


