
<?php

require 'ketnoi.php';
$callback = $_REQUEST['callback'];

function fomatTime($date) {
    $time = strtotime($date);
    $chuoi = date('H:i', $time) . '<br>' . date('d-m', $time);
    return $chuoi;
}

function fomatDate($date) {
    $time = strtotime($date);
    $chuoi = date('d-m', $time);
    return $chuoi;
}

$date = date('d-m');
//fomatTime($date);
//select league
$sqlleague = mssql_query("select distinct mi.LeagueID,si.LeagueName,mi.StartTime,type=0 from dbo.Soccer_Match_Info as mi
left join dbo.Soccer_Score_Info as si on mi.LeagueID=si.LeagueID
 where mi.MatchState=0");
$League = array();
while ($rowsLeague = mssql_fetch_assoc($sqlleague)) {
    if (fomatDate($rowsLeague['StartTime']) == $date) {
        $League[] = array(
            "LeagueID"=>$rowsLeague['LeagueID'],
            "LeagueName"=> utf8_encode($rowsLeague['LeagueName']) ,
            "StartTime"=>$rowsLeague['StartTime'],
            "type"=>$rowsLeague['type'],
                );
         //echo $rowsLeague['StartTime'].'<br>'.$rowsLeague['StartTime'];
    }
    //echo 'Mang 1:'.$rowsLeague['league'] . '<br>';
    $sqlMatch = mssql_query("select m.MatchID,mi.AName,mi.BName,m.DatetimeVN,mi.Score,mo.Hda,mo.Hdr,mo.Ov,mi.MinutePlaying 
from dbo.Soccer_Match as m 
LEFT JOIN dbo.Soccer_Match_Info as mi ON m.MatchID=mi.MatchID
LEFT JOIN dbo.Soccer_Match_Odd as mo ON m.MatchID=mo.MatchID
where  mi.MatchState=0 and mi.LeagueID=" . $rowsLeague['LeagueID']);
    while ($rowsMatch = mssql_fetch_assoc($sqlMatch)) {

         if (fomatDate($rowsMatch['DatetimeVN']) == $date) {
        $League[] = array(
            "id" => utf8_encode($rowsMatch['MatchID']),
            "AName" => utf8_encode($rowsMatch['AName']),
            "BName" => utf8_encode($rowsMatch['BName']),
            "Score" => utf8_encode($rowsMatch['Score']),
            "Hda" => utf8_encode($rowsMatch['Hda']),
            "Odds" => utf8_encode($rowsMatch['Odds']),
            "Ov" => utf8_encode($rowsMatch['Ov']),
            "StartTime" => fomatTime($rowsMatch['DatetimeVN']),
            "name" => utf8_encode($rowsMatch['name']),
            "MinutePlaying"=>utf8_encode($rowsMatch['MinutePlaying']),
            "type" => 2,
            "isOdd" => 1
        );
        }
    }
}


//header('Content-Type: text/javascript');
echo json_encode(array('Match' => $League));
?>
