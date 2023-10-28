<!-- <h1>User List from test_db_1</h1>
<h1>User List from test_db_2</h1>
<h1>User List from test_db_3</h1>
 -->

<h1>User List from test_db_1</h1>
<table>
    @foreach ( $users as $use )
    <tr>
        <td>{{$use['name']}}</td>
    </tr>
    @endforeach
</table>


<h1>User List from test_db_2</h1>
<table>
    @foreach ( $users2 as $use )
    <tr>
        <td>{{$use['name']}}</td>
    </tr>
    @endforeach
</table>

<h1>User List from test_db_3</h1>
<table>
    @foreach ( $users3 as $use )
    <tr>
        <td>{{$use['name']}}</td>
    </tr>
    @endforeach
</table>



