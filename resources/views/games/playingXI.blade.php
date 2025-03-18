<button type="button" class="btn-submit">Save</button>

<h1>{{ $game->team_a }}</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th>Playing XI</th>
        <th>Substitute</th>
        <th>Name</th>
        <th>Jersey No</th>
    </tr>
    </thead>
    <tbody>
    @foreach($team_a as $player)
        <tr>
            <td>
                <input type="checkbox" class="team_a_playing-xi" data-id="{{ $player->id }}"/>
            </td>
            <td>
                <input type="checkbox" class="team_a_substitute"  data-id="{{ $player->id }}"/>
            </td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->pivot->jersey_no }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
&nbsp;
<hr>
&nbsp;
<h1>{{ $game->team_b }}</h1>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
    <tr>
        <th>Playing XI</th>
        <th>Substitute</th>
        <th>Name</th>
        <th>Jersey No</th>
    </tr>
    </thead>
    <tbody>
    @foreach($team_b as $player)
        <tr>
            <td>
                <input type="checkbox" class="team_b_playing-xi" data-id="{{ $player->id }}"/>
            </td>
            <td>
                <input type="checkbox" class="team_b_substitute"  data-id="{{ $player->id }}"/>
            </td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->pivot->jersey_no }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>

</script>


