<?
class Gil{
    const $GIL_ABILITY = 1; 
    $CHALLENGE_FLAG = false;

    function getGilsTaskEndDay($difficulty, $condition=10){
        $ability_gap = $GIL_ABILITY - $difficulty;
        $CHALLENGE_FLAG = function($ability_gap){
            if($ability_gap < 0) return true;
            return false;
        } 
        $gil_ability = getGilAbility($CHALLENGE_FLAG);
        $end_day = 0
        while ($condition > 0){
            $difficulty -= $gil_ability;
            $end_day += 1;
            if($difficulty <= 0) break;
            $condition -= 1;
        }
        if($difficulty <= 0) return $end_day;
        else return -1;
    }

    function getGilAbility($CHALLENGE_FLAG){
        if(!$CHALLENGE_FLAG) return $GIL_ABILITY;
        return getBurningUp(function () {
            return $GIL_ABILITY * 2;
        });
    }

    function getBurningUp(callable $call){ return $call(); }
} 
?>

