<h2 style="text-align:center;"><?php echo $this->title; ?></h2>
<?php 
$this->storePreviousLink = CHtml::link("<< Previous Month", array(Yii::app()->controller->id."/".Yii::app()->controller->action->id,	'month'=>$this->previousMonth, 'year'=>$this->yearPreviousMonth));
$this->storeNextLink = CHtml::link("Next Month >>", array(Yii::app()->controller->id."/".Yii::app()->controller->action->id, 'month'=>$this->nextMonth, 'year'=>$this->yearNextMonth));
echo $this->printStartForm();
echo $this->storePreviousLink;
echo ".::";
echo $this->printControlMenu();
echo "::.";
echo $this->storeNextLink;
echo $this->printCloseForm();
echo $this->printCalendar();
?>
