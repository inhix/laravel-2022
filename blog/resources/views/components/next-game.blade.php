<div class="matchs-info">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="full">
                <div class="matchs-vs">
                    <div class="vs-team">
                        <div class="team-btw-match">
                            <ul>
                                <li>
                                    <img src="images/img-03.png" alt="">
                                    <span>Team Spirit</span>
                                </li>
                                <li class="vs"><span>vs</span></li>
                                <li>
                                    <img src="{{ $nextGame->opponent_logo }}" alt="">
                                    <span>{{ $nextGame->opponent_name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="row">
            <div class="full">
                <div class="right-match-time">
                    <h2>Next Match</h2>
                    <span>{{ date('l, F jS Y, H:i A', strtotime($nextGame->start_time)) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
