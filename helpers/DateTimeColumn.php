<?php

use yii\helpers\Html;
namespace wispoz\helpers;

class DateTimeColumn extends \yii\grid\Column
{
    public $label;
	protected function renderDataCellContent($model, $key, $index)
	{
		//	$time = strtotime($model->date_start)  + strtotime($model->time_start_hours) +   strtotime($model->time_start_minutes);
			$hours =  strtotime($model->time_start_hours) ;
			$hours = date('H',$hours);
			$minutes =  strtotime($model->time_start_minutes) ;
			$minutes = date('i',$minutes);
			$date =  strtotime($model->date_start) ;
			$date = date('d.m.Y',$date);
			$date = $hours.':'.$minutes.' '.$date;
			return $date;
	}	
	protected function renderHeaderCellContent()
	{
		return $this->label;
	}
}
