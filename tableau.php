 <?php
$team_1_data=["cameroun",3];
echo $team_1_data[0];

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
//if("score"== 2){
//var_dump($teams);
//}
echo"<br><br>";


if($data["score"]== 2){
//var_dump($data);
//echo"<li>". $data['name'] ."</li>";
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
    <li>l equipe du <?php echo$data["name"] ?> a <?php echo$data["score"] ?> points  </li> -->
    
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
?>
<?php
function redOne ($teams,) {
    foreach($teams as $data){     
        ?>
            <ul>
                <li>
                    <?php echo$data["name"];?>
    </li>
                <li>
                    <?php echo$data["score"];?>
                </li>
                <li>
                    <?php echo$data["url"];?>
                </li>
    </ul>
        <?php
      break;  }
    }
echo redOne($teams);
?>