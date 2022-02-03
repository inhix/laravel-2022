@props(['game'])
<ul>
    <li>
        <img src="/images/img-01_002.png" alt="">
        <span>Team Spirit</span>
    </li>
    <li><span>{{ $game->score }}</span></li>
    <li>
        <img src="{{ $game->opponent_logo }}" alt="">
        <span>{{ $game->opponent_name }}</span>
    </li>
</ul>
