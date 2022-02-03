@props(['game'])
<ul>
    <li>
        <img src="/images/img-01_002.png" alt="">
        <span>Team Spirit</span>
    </li>
    <li><span>vs</span></li>
    <li>
        <img src="{{ $game->opponent_logo }}" alt="">
        <span>{{ $game->opponent_name }}</span>
    </li>
</ul>
