<?php
// Arrays to compare
$array1 = array(new stdclass, new stdclass,
                new stdclass, new stdclass,
               );

$array2 = array(
                new stdclass, new stdclass,
               );

// Set some properties for each object
$array1[0]->width = 11; $array1[0]->height = 3;
$array1[1]->width = 7;  $array1[1]->height = 1;
$array1[2]->width = 2;  $array1[2]->height = 9;
$array1[3]->width = 5;  $array1[3]->height = 7;

$array2[0]->width = 7;  $array2[0]->height = 5;
$array2[1]->width = 9;  $array2[1]->height = 2;

function compare_by_area($a, $b) {
    $areaA = $a->width * $a->height;
    $areaB = $b->width * $b->height;

    if ($areaA < $areaB) {
        return -1;
    } elseif ($areaA > $areaB) {
        return 1;
    } else {
        return 0;
    }
}

// print_r(array_udiff($array1, $array2, 'compare_by_area'));



class MyCalendar {
  public $free = array();
  public $booked = array();

  public function __construct($week = 'now') {
      $start = new DateTime($week);
      $start->modify('Monday this week midnight');
      $end = clone $start;
      $end->modify('Friday this week midnight');
      $interval = new DateInterval('P1D');
      foreach (new DatePeriod($start, $interval, $end) as $freeTime) {
          $this->free[] = $freeTime;
      }
  }

  public function bookAppointment(DateTime $date, $note) {
      $this->booked[] = array('date' => $date->modify('midnight'), 'note' => $note);
  }

  public function checkAvailability() {
      return array_udiff($this->free, $this->booked, array($this, 'customCompare'));
  }
  
  public function customCompare($free, $booked) {
      if (is_array($free)) $a = $free['date'];
      else $a = $free;
      if (is_array($booked)) $b = $booked['date'];
      else $b = $booked;
      if ($a == $b) {
          return 0;
      } elseif ($a > $b) {
          return 1;
      } else {
          return -1;
      }
  }
}

// Create a calendar for weekly appointments
$myCalendar = new MyCalendar;

// Book some appointments for this week
$myCalendar->bookAppointment(new DateTime('Monday this week'), "Cleaning GoogleGuy's apartment.");
$myCalendar->bookAppointment(new DateTime('Wednesday this week'), "Going on a snowboarding trip.");
$myCalendar->bookAppointment(new DateTime('Friday this week'), "Fixing buggy code.");

// Check availability of days by comparing $booked dates against $free dates
echo "I'm available on the following days this week...\n\n";
foreach ($myCalendar->checkAvailability() as $free) {
  echo $free->format('l'), "\n"; 
}
echo "\n\n";
echo "I'm busy on the following days this week...\n\n";
foreach ($myCalendar->booked as $booked) {
  echo $booked['date']->format('l'), ": ", $booked['note'], "\n"; 
}
