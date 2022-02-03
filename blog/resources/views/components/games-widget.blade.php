<h4>Match Fixture</h4>
<aside id="sidebar" class="left-bar">
    <div class="feature-matchs">
        <div class="team-btw-match">
            @foreach($games as $game)
            <x-game-widget :game="$game"/>
            @endforeach
        </div>
    </div>
</aside>
