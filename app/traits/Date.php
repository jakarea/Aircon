<?php namespace Traits;

trait Date {
	public function convertIntoDatabaseDateFormat($date) {
	      return date('Y-m-d', strtotime($date));
	}
	public function convertIntoLocalDateFormat($date) {
	      return date('d-m-Y', strtotime($date));
	}
}