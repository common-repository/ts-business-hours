<?php
/*
 * Plugin Name: TS Business Hours
 * Plugin URI: https://github.com/zackphilipps/ts-business-hours
 * Description: TSBusinessDay class with functions used for restricting content based on hours of operation. Requires Advanced Custom Fields and 3 of its add-ons, 2 of which are premium.
 * Author: Zack Philipps, Lead Web Developer at Tribeswell
 * Author URI: http://www.tribeswell.com
 * Version: 0.1.1
 */

require_once('acf.php');

class TSBusinessDay {
    
    protected $timezone;
    protected $timestamp;
    protected $dayName;
    protected $yesterdayName;
    protected $open;
    protected $close;
    protected $lastNightClose;
    protected $isOpenLate;
    protected $wasOpenLate;
    
    public function __construct ($days, $timezone = 'UTC') {
        
        $this->timezone = $timezone;
        date_default_timezone_set($this->timezone);
        $dayCount = date('w');
        $this->timestamp = time();
        
        if($dayCount == 0) {
            $sub = 6;
        } else {
            $sub = $dayCount - 1;
        }
    
        $today = $days[$dayCount];
        $yesterday = $days[$sub];
    
        $this->dayName = $today['name'];
        $this->yesterdayName = $yesterday['name'];
        $this->open = strtotime($today['open']);
        $this->close = strtotime($today['close']);
        $this->lastNightClose = strtotime($yesterday['close']);
        $this->isOpenLate = $today['is_open_late'];
        $this->wasOpenLate = $yesterday['is_open_late'];
    
    }
    
    public function getTimezone() {
        return $this->timezone;
    }
    public function getTimestamp() {
        return $this->timestamp;
    }
    public function getDayName() {
        return $this->dayName;
    }
    public function getYesterdayName() {
        return $this->yesterdayName;
    }
    public function getOpen() {
        return $this->open;
    }
    public function getClose() {
        return $this->close;
    }
    public function getLastNightClose() {
        return $this->lastNightClose;
    }
    public function getIsOpenLate() {
        return $this->isOpenLate;
    }
    public function getWasOpenLate() {
        return $this->wasOpenLate;
    }
    
    public function isOpen() {
        
        if($this->isOpenLate) {
            if($this->wasOpenLate) {
                if($this->timestamp > $this->lastNightClose && $this->timestamp < $this->open) {
                    return false;
                } else {
                    return true;
                }
            } else {
                if($this->timestamp < $this->open) {
                    return false;
                } else {
                    return true;
                }
            }
        } elseif($this->wasOpenLate) {
            if(($this->timestamp > $this->lastNightClose && $this->timestamp < $this->open) || $this->timestamp > $this->close) {
                return false;
            } else {
                return true;
            }
        } else {
            if($this->timestamp < $this->open || $this->timestamp > $this->close) {
                return false;
            } else {
                return true;
            }
        }
        
    }
    
}

?>
