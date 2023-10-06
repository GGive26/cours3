 <?php
// $team_1_data=["cameroun",3];
// echo $team_1_data[0];

$team_1_data=[ 
    "name"=>  "cameroun",
    "score"=>  3,
    "url"=> "www.lionsIndomptables.com"
    ];
$team_2_data=[  
    "name"=>  "Togo",
    "score"=>  2,
    "url"=> "www.Togo.com"
    ];
   
var_dump($team_2_data);//permet d afficher le contenu et les informations de type tableau
print_r($team_2_data);
echo $team_2_data["name"];
//var_dump($team_2_data[0]);//*ne fonctionne pas . on a plus acces a l index lorsque nous avons un tableau associative
echo"<br><br>";

foreach( $team_2_data as $data ){
echo"<br><br>";
echo $data;
}
$team_3_data=[  
    "name"=>  "Mali",
    "score"=>  2,
    "url"=> "www.Mali.com"
    ];
echo"<br><br>";

$teams=[$team_1_data,$team_2_data,$team_3_data];
var_dump($teams);
echo"<br><br>";
echo "<ul>";
foreach($teams as $data){
if("score"== 2){
var_dump($teams);
}
echo"<br><br>";


if($data["score"]== 2){
// var_dump($data);
// echo"<li>". $data['name'] ."</li>";
?>
<li>l equipe du <?php echo$data["name"] ?> a <?php echo$data["score"] ?> points  </li>



<?php
}
}
echo "</ul>";

// crud(create , read , update  , delete )

$team_4_data=[  
    "name"=>  "burkina",
    "score"=>  0.5,
    "url"=> "www.burkina.com"
    ];
array_push($teams,$team_4_data);

foreach($teams as $data){
    //if("score"== 2){
    //var_dump($teams);
    //}
    echo"<br><br>";
    
    
    if($data["name"]=="burkina"){
    //var_dump($data);
    //echo"<li>". $data['name'] ."</li>";
    ?>
    <li>l equipe du <?php echo$data["name"] ?> a <?php echo$data["score"] ?> points  </li> 
    
    <?php
    }
    }
    echo "</ul>"; 
 
    function showTeams($teams){
    ?>
    <table border=5 >
        <thead>
            <td>nom </td>
            <td>score</td>
            <td>url</td>
        </thead>
        <tbody>
        <?php
 foreach($teams as $data){
    ?>
    <tr>
        <td> <?php echo$data['name']; ?>
        </td>
        <td><?php echo$data['score'];  ?>
        </td>  
        <td> <?php echo$data['url']; ?>
        </td>
    </tr>
        <?php
        }
?>
        </tbody>
    </table> 
    <?php
    };
    echo showTeams($teams);
    echo"<br><br>";
 function addTeam($teams,$newTeams){

    array_push($teams,$newTeams);
    showTeams($teams);
 };
 $team_5_data=[  
    "name"=>  "Congo",
    "score"=>  5,
    "url"=> "www.Congo.com"
    ];
    addTeam($teams,$team_5_data);
?><?php
    
function readOne($team) {
    echo "<table border='1'>";
    echo "<tr>";
        foreach ($team as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    
    echo "</table>";
}


function readAll($teams) {
    echo "<table border='1'>";
    foreach ($teams as $team) {
        echo "<tr>";
        foreach ($team as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function delTeam(&$teams, $teamName) {
    foreach ($teams as $key => $team) {
        if ($team['name'] == $teamName) {
            unset($teams[$key]);
        }
    }
    
}
function Update(&$teams, $newInfo,$teamName) {

    foreach ($teams as $key => $team) {
        if ($team['name'] == $teamName) {
        $team=[
            "name"  =>$newInfo["newName"],
            "score" =>$newInfo["newScore"],
            "url"   =>$newInfo["newUrl"]
        ];
         $teams[$key]=$team;
    }
    
}
showTeams($teams);
}
 
echo "<h2>team 1:</h2>";
readOne($team_1_data);

echo "<h2>team 2:</h2>";
readOne($team_2_data);
delTeam($teams,'burkina');

echo "<h2>Toutes les equipes avant dajouter burkina :</h2>";
readAll($teams);
echo"<br>";

$newTeamData = [
    "name" => "burkina",
    "score" => 4,
    "url" => "www.burkina.com"
];
addTeam($teams, $newTeamData);

echo "<h2>Toutes les equipes apres ajouter burkina:</h2>";
readAll($teams);


delTeam($teams, "Togo");    

echo "<h2>Toutes les equipes apres supprimer togo:</h2>";
readAll($teams);
$team_6_data=[
    "name"=> 'maroc',
    "score"=>3,
    "url"=>"www.maroc.com"
];
echo"<br>";
addTeam($teams,$team_6_data);
echo"<br>";
$newInfo=[
    "newName"=>"maroc1",
    "newScore"=>1,
    "newUrl"=>"www.Maroc1.com"
];
echo"<br>";
Update($teams,$newInfo,'maroc');
echo"<br>";
echo "<h2>Toutes les equipes apres changer info de maroc:</h2>";
readAll($teams);
?>
