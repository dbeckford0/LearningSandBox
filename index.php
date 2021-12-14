<?php

$newTask = new WorkTask;

$newTask->title = "Learn Git";
$newTask->task = "Learn Git version control";
$newTask->status = "new";

var_dump($newTask);

class WorkTask {
	public function __construct() {
		$this->title = "";
		$this->task = "";
		$this->status = "";
	}
}