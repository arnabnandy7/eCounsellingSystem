<?php

function counselling_available_college($collegeId)
{
    $result = mysql_query("SELECT college_cuid, seat1 FROM college_details WHERE college_cuid='$collegeId' AND seat1>=1");
    return $result ? mysql_fetch_array($result) : false;
}

function counselling_run_first_round($minimumRank = 1, $maximumRank = 100)
{
    $preferences = mysql_query("SELECT * FROM candidate_preferences WHERE rank >= " . (int) $minimumRank . " AND rank <= " . (int) $maximumRank . " ORDER BY rank");
    $processed = 0;
    while ($preferences && ($preference = mysql_fetch_array($preferences))) {
        $rank = (int) $preference['rank'];
        $existing = mysql_query("SELECT rank FROM seat_allotments WHERE rank=$rank");
        if ($existing && mysql_num_rows($existing) > 0) {
            continue;
        }
        $allocatedCollege = 0;
        $allocatedPreference = 0;
        foreach (array(1, 2, 3) as $number) {
            $college = counselling_available_college((int) $preference['pref_' . $number]);
            if ($college) {
                $allocatedCollege = (int) $college['college_cuid'];
                $allocatedPreference = $number;
                mysql_query("UPDATE college_details SET seat1=seat1-1 WHERE college_cuid=$allocatedCollege");
                break;
            }
        }
        $sequence = (string) mt_rand();
        $upgradeStatus = $allocatedPreference === 1 ? 'N' : '';
        mysql_query("INSERT INTO seat_allotments VALUES ($rank,$allocatedCollege,$allocatedPreference,'$sequence','$upgradeStatus','','Y')");
        $processed++;
    }
    return $processed;
}

function counselling_run_second_round($minimumRank = 1, $maximumRank = 100)
{
    $preferences = mysql_query("SELECT p.* FROM candidate_preferences p JOIN seat_allotments s ON s.rank=p.rank WHERE s.upgrd_sts='Y' AND p.rank >= " . (int) $minimumRank . " AND p.rank <= " . (int) $maximumRank . " ORDER BY p.rank");
    $processed = 0;
    while ($preferences && ($preference = mysql_fetch_array($preferences))) {
        $rank = (int) $preference['rank'];
        $allotmentResult = mysql_query("SELECT * FROM seat_allotments WHERE rank=$rank");
        $allotment = $allotmentResult ? mysql_fetch_array($allotmentResult) : false;
        if (!$allotment) {
            continue;
        }
        $currentCollege = (int) $allotment['allot_clg_id'];
        $currentPreference = (int) $allotment['pref_clg'];
        $targetCollege = 0;
        $targetPreference = 0;
        for ($number = 1; $number < $currentPreference; $number++) {
            $college = counselling_available_college((int) $preference['pref_' . $number]);
            if ($college) {
                $targetCollege = (int) $college['college_cuid'];
                $targetPreference = $number;
                break;
            }
        }
        if ($targetCollege > 0) {
            mysql_query("UPDATE college_details SET seat1=seat1-1 WHERE college_cuid=$targetCollege");
            if ($currentCollege > 0 && $currentCollege !== $targetCollege) {
                mysql_query("UPDATE college_details SET seat1=seat1+1 WHERE college_cuid=$currentCollege");
            }
            mysql_query("UPDATE seat_allotments SET allot_clg_id=$targetCollege, pref_clg=$targetPreference, upgrd_sts='N' WHERE rank=$rank");
        } else {
            mysql_query("UPDATE seat_allotments SET upgrd_sts='N' WHERE rank=$rank");
        }
        $processed++;
    }
    return $processed;
}

