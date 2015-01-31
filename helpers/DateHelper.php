<?php

namespace wispoz\helpers;
use yii\base\InvalidConfigException;
class DateHelper extends \yii\helpers\Inflector
{
    public static function getDates($days = 7,$format='Y-m-d 00:00:00'){
       $dates_array = [];
        $dates_array[] = array('id'=>date($format,strtotime("+0 day")),'value'=>date('d.m.Y ('.\Yii::t('app',date('D',strtotime("+0 day"))).')',strtotime("+0 day")));
        $dates_array[] = array('id'=>date($format,strtotime("+1 day")),'value'=>date('d.m.Y ('.\Yii::t('app',date('D',strtotime("+1 day"))).')',strtotime("+1 day")));
        $dates_array[] = array('id'=>date($format,strtotime("+2 days")),'value'=>date('d.m.Y ('.\Yii::t('app',date('D',strtotime("+2 day"))).')',strtotime("+2 days")));
        $dates_array[] = array('id'=>date($format,strtotime("+3 days")),'value'=>date('d.m.Y ('.\Yii::t('app',date('D',strtotime("+3 day"))).')',strtotime("+3 days")));
        $dates_array[] = array('id'=>date($format,strtotime("+4 days")),'value'=>date('d.m.Y ('.\Yii::t('app',date('D',strtotime("+4 day"))).')',strtotime("+4 days")));
         return $dates_array;
    }
	public static function getMinutes ($min = 1,$max = 6,$multiplier= 1){
		$minutes = [];
		for($i=$min;$i<$max;$i++){
			$z = str_pad($i*$multiplier, 2, '0', STR_PAD_LEFT);
			$minutes[] = ['id'=>'00:'.$z.':00','value'=>$z];
		}
	return $minutes;
	}
	public static function getHours ($min = 0, $max = 24){
		$hours = [];
		for($i=$min;$i<$max;$i++){
			$hour = str_pad($i, 2, '0', STR_PAD_LEFT);
			$hours[] = ['id'=>$hour.':00:00','value'=>$hour];
		}
	return $hours;
	}

}
