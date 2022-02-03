@props(['player'])
<div class="col-md-3">
    <div class="team-column style-2">
        <img src="{{ $player->photo }}" style="object-fit: cover; width: 268px; height: 368px">
        <div class="player-name">
            <div class="desination-2">{{ $player->category->name }}</div>
            <h5>{{ $player->nickname }}</h5>
            <span class="player-number">{{ $player->number }}</span>
        </div>
    </div>
</div>
