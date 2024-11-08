<html>
    <head>
        <title>臺灣鯨豚族群調查計畫-生態調查標準資料</title>
    </head>
    <body>
        <h1>臺灣鯨豚族群調查計畫-生態調查標準資料</h1>

        <table border="1">
            @foreach ($observations as $observation)
                <tr>
                    <td>{{ $observation->project_name }}</td>
                    <td>{{ $observation->year }}</td>
                    <td>{{ $observation->month }}</td>
                    <td>{{ $observation->day }}</td>
                </tr>
            @endforeach
        </table>


    </body>
</html>