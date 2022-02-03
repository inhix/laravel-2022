<x-layout>
    <div class="team-holder theme-padding">
        <div class="container">
            <div class="main-heading-holder">
                <div class="main-heading sytle-2">
                    <h2>Meet Your Team</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium<br>doloremque
                        laudantium, totam rem aperiam</p>
                </div>
            </div>
            <div id="team-slider">
                <div class="container">
                    @foreach($players as $player)
                        <x-player-card :player="$player"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>
