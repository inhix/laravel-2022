@props(['team', 'position'])
<tr>
    <td>{{ $position }}</td>
    <td><img src="{{ $team->logo }}" alt="">{{$team->name }}</td>
    <td>{{ $team->played }}</td>
    <td>{{ $team->won }}</td>
    <td>{{ $team->lost }}</td>
</tr>
