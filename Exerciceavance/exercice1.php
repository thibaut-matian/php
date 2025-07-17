<?php

const VICTORY_POINTS = 3;
const DRAW_POINTS = 1;

$teams = [
    "OM" => [
       "points" => 0,
       "matches_played" => 0,
       "victories" => 0,
       "draws" => 0,
       "defeats" => 0,
       "goal_score" => 0
    ],
    "Milan AC " => [
       "points" => 0,
       "matches_played" => 0,
       "victories" => 0,
       "draws" => 0,
       "defeats" => 0,
       "goal_score"=>0
    ],
    "PSG" => [
       "points" => 0,
       "matches_played" => 0,
       "victories" => 0,
       "draws" => 0,
       "defeats" => 0,
       "goal_score"=>0
    ],
    "Chelsea" => [
       "points" => 0,
       "matches_played" => 0,
       "victories" => 0,
       "draws" => 0,
       "defeats" => 0,
       "goal_score" =>0
    ],
    "Barcelone" => [
       "points" => 0,
       "matches_played" => 0,
       "victories" => 0,
       "draws" => 0,
       "defeats" => 0,
       "goal_score"=>0
    ],
    "Real Madrid" => [
       "points" => 0,
       "matches_played" => 0,
       "victories" => 0,
       "draws" => 0,
       "defeats" => 0,
       "goal_score" =>0
    ]
    ];


function playMatch($team1,$team2){
    $score1 = rand(0,5);
    $score2 = rand(0,5);

      return [
        'team1_name' => $team1,
        'team2_name' => $team2,
        'team1_score' => $score1,
        'team2_score' => $score2
    ]; 
}

function updateStats(&$teams,$team1,$team2,$score1,$score2){
    $teams[$team1]["matches_played"]++;
    $teams[$team2]["matches_played"]++;
    $teams[$team1]["goal_score"] += $score1;
    $teams[$team2]["goal_score"] += $score2;

//EGALIT2
    if ($score1 === $score2 ){
        $teams[$team1]["draws"]++;
        $teams[$team2]["draws"]++;
        $teams[$team1]["points"]+= DRAW_POINTS;
        $teams[$team2]["points"]+= DRAW_POINTS;
    }
    elseif ($score1>$score2){
        $teams[$team1]["victories"]++;
        $teams[$team2]["defeats"]++;
        $teams[$team1]["points"]+= VICTORY_POINTS;
    }
    else {
        $teams[$team2]["victories"]++;
        $teams[$team1]["defeats"]++;
        $teams[$team2]["points"]+= VICTORY_POINTS;
    }

}

function printMatchResult($team1, $team2,$score1,$score2){
    echo"⚽ $team1 $score1 - $score2 $team2 <br>";
}


$teamNames = array_keys($teams); 

$nbTeams = count($teamNames);
for ($i = 0; $i < $nbTeams; $i++) {
    for ($j = $i + 1; $j < $nbTeams; $j++) {
        $team1 = $teamNames[$i];
        $team2 = $teamNames[$j];

        $match = playMatch($team1, $team2);

        printMatchResult(
            $match['team1_name'],
            $match['team2_name'],
            $match['team1_score'],
            $match['team2_score']
        );

        updateStats(
            $teams,
            $match['team1_name'],
            $match['team2_name'],
            $match['team1_score'],
            $match['team2_score']
        );
    }
}

uasort($teams, function($a, $b) {
    if ($a['points'] === $b['points']) {
        if ($a['victories'] === $b['victories']) {
            return $b['goal_score'] <=> $a['goal_score'];
        }
        return $b['victories'] <=> $a['victories'];
    }
    return $b['points'] <=> $a['points'];
});


echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Rang</th><th>Équipe</th><th>Points</th><th>Victoires</th><th>Nuls</th><th>Défaites</th><th>Matchs</th><th>Buts</th></tr>";
$rank = 1;
foreach ($teams as $name => $stats) {
    echo "<tr>";
    echo "<td>$rank</td>";
    echo "<td>" . ($rank == 1 ? "🏆 $name" : $name) . "</td>";
    echo "<td>{$stats['points']}</td>";
    echo "<td>{$stats['victories']}</td>";
    echo "<td>{$stats['draws']}</td>";
    echo "<td>{$stats['defeats']}</td>";
    echo "<td>{$stats['matches_played']}</td>";
    echo "<td>{$stats['goal_score']}</td>";
    echo "</tr>";
    $rank++;
}
echo "</table>";


