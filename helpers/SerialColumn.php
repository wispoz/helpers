<?php

use yii\helpers\Html;
namespace wispoz\helpers;

class SerialColumn extends \yii\grid\Column
{
    public $label;
	protected function renderDataCellContent($model, $key, $index)
	{
			$data =  json_decode($model->points,true);
			if(is_array($data)){
				return join(',',$data);
			}else{
				return '';
			}
	}	

	public static function renderCell($points = '' )
	{
			$data =  json_decode($points,true);
			if(is_array($data)){
				return join(',',$data);
			}else{
				return '';
			}
	}
	public static  function renderDateTime($model)
	{
		return $model->date_start  + $model->time_start_hours +  $model->time_start_minutes;	
		
	}
	protected function renderHeaderCellContent()
	{
		return $this->label;
	}
}

/*
pdct.1.1.20141227T114341Z.978619e08ed8191a.26e6df1a5aa151280efe5046b641b248953becd5
*/