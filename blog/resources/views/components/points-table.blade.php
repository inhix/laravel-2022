<h4>Points Table</h4>
<aside id="sidebar" class="left-bar">
    <div class="feature-matchs">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Team</th>
                <th>P</th>
                <th>W</th>
                <th>L</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $team)
                @php($position = $loop->index + 1)
            <x-points-table-team :team="$team" :position="$position"/>
            @endforeach
            </tbody>
        </table>
    </div>
</aside>
