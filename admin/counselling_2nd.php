<?php
if (isset($_POST['refresh']))
{
	include "connect.inc.php";
$sql_pre="UPDATE `college_details` SET `seat1` = `seat2`";
mysql_query($sql_pre);
$sql_deact="UPDATE `seat_allotments` SET `active` = '' where pref_clg='1'";
mysql_query($sql_deact);
$event="Round two Counselling is in processing, Please check after 10 Mins. ";
$sql_news="insert into counselling_date values('','$event','')";
mysql_query($sql_news);
header("location: index.php");
}


if (isset($_POST['button_start_counselling']))
{
	//include "dbcon.php";
	include "connect.inc.php";
$sql_fetch_pref="select * from candidate_preferences where rank in (select rank from seat_allotments where upgrd_sts='Y') order by rank";
//echo $sql_fetch_pref." ";
$result_fetch_pref=mysql_query($sql_fetch_pref);
$count_result_fetch_pref=mysql_num_rows($result_fetch_pref);

	//echo "count ".$count_result_fetch_pref." ";
	if($count_result_fetch_pref >=1)
	{
		while($result_pref_array=mysql_fetch_array($result_fetch_pref))
		{
			//$rand=mt_rand();
			$rank=$result_pref_array['rank'];
		
			$pref1=$result_pref_array['pref_1'];
			$pref2=$result_pref_array['pref_2'];
			$pref3=$result_pref_array['pref_3'];
		
		//echo "rank ".$rank."pref1 ".$pref1." pref2 ".$pref2." pref3 ".$pref3;
		
			$sql_pref1_seat="select * from college_details where college_cuid='$pref1' and seat1 >= 1";
			$result_pref1_seat=mysql_query($sql_pref1_seat);
			$count_result_fetch_pref1=mysql_num_rows($result_pref1_seat);
			$result_pref1_array=mysql_fetch_array($result_pref1_seat);
		
			$sql_pref2_seat="select * from college_details where college_cuid='$pref2' and seat1 >= 1";
			$result_pref2_seat=mysql_query($sql_pref2_seat);
			$count_result_fetch_pref2=mysql_num_rows($result_pref2_seat);
			$result_pref2_array=mysql_fetch_array($result_pref2_seat);
			
			$sql_pref3_seat="select * from college_details where college_cuid='$pref3' and seat1 >= 1";
			$result_pref3_seat=mysql_query($sql_pref3_seat);
			$count_result_fetch_pref3=mysql_num_rows($result_pref3_seat);
			$result_pref3_array=mysql_fetch_array($result_pref3_seat);
			
			//echo "COLLEGE PREF- ".$result_pref1_array['college_cuid']."  ".$result_pref2_array['college_cuid']."  ".$result_pref3_array['college_cuid'];
			
		
			if ($count_result_fetch_pref1 >= 1)
			{
				$assign1_clg = $result_pref_array['pref_1'];
				$assign1_seat = $result_pref1_array['seat1'];
				$assign1_seat = $assign1_seat - 1;
				$sql_update1=" update college_details set seat1= $assign1_seat where college_cuid = $assign1_clg ";
				mysql_query($sql_update1);
				$sql_update2="update seat_allotments set allot_clg_id='$assign1_clg' , pref_clg='1' , upgrd_sts='N' where rank='$rank'";
				/*$sql_insert=" insert into seat_allotments values('$rank','$assign1_clg','1','$rand','N','')";*/
				mysql_query($sql_update2);
				
				//echo "<br>".$sql_update1."<br>".$sql_update2."<br>";
			
			}
			else if ($count_result_fetch_pref2 >= 1)
			{
				$assign2_clg = $result_pref_array['pref_2'];
				$assign2_seat = $result_pref2_array['seat1'];
				$assign2_seat = $assign2_seat - 1;
				$sql_update1=" update college_details set seat1= $assign2_seat where college_cuid = $assign2_clg ";
				mysql_query($sql_update1);
				$sql_update2="update seat_allotments set allot_clg_id='$assign2_clg' , pref_clg='2' , upgrd_sts='N' where rank='$rank'";
				/*$sql_insert=" insert into seat_allotments values('$rank','$assign2_clg','2','$rand','','')";*/
				mysql_query($sql_update2);
				
				//echo "<br>".$sql_update1."<br>".$sql_update2."<br>";
			}
			else if ($count_result_fetch_pref3 >= 1)
			{
				$assign3_clg = $result_pref_array['pref_3'];
				$assign3_seat = $result_pref3_array['seat1'];
				$assign3_seat = $assign3_seat - 1;
				$sql_update1=" update college_details set seat1= $assign3_seat where college_cuid = $assign3_clg ";
				$sql_update2="update seat_allotments set allot_clg_id='$assign3_clg' , pref_clg='3' where rank='$rank'";
				mysql_query($sql_update1);
				/*$sql_insert=" insert into seat_allotments values('$rank','$assign3_clg','3','$rand','','')";*/
				mysql_query($sql_update2);
				
				//echo "<br>".$sql_update1."<br>".$sql_update2."<br>";
			}
			else
			{
				$noseat_clg='';
				$sql_update2="update seat_allotments set allot_clg_id='$noseat_clg' where rank='$rank'";
				mysql_query($sql_update2);
			}
		}	
	}
	else
	{
		echo "SORRY ERROR IN PREFERENCE";
	}
	header("location: index.php");
}

/*if (isset($_POST['button_restore_seats']))
{
	//include "dbcon.php";
		include "connect.inc.php";
$sql_restore=" UPDATE `college_details` SET `seat1`=4";
$result_fetch_pref=mysql_query($sql_restore);
$sql_trncat=" TRUNCATE TABLE seat_allotments ";
mysql_query($sql_trncat);
	header("location: index.php");

}*/
?>
