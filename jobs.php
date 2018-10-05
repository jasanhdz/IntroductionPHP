<?php 
# Creando Template Jobs

$job1 = [
  'title' => 'PHP Developer',
  'description' => 'this is a amazing',
  'months' => 10,
  'visible' => true
];
$job2 = [
  'title' => 'JavaScript Developer',
  'description' => 'This is awesoome!!',
  'months' => 12,
  'visible' => true
];
$job3 = [
  'title' => 'Java Dev',
  'description' => 'is a lenguages interesting!!',
  'months' => 18,
  'visible' => true
];

$jobs = [
  $job1,
  $job2,
  $job3
];

function getDuration($months) {
  $years = floor($months / 12);
  $meses =  $months % 12;

  if($years > 0) {
    if ($years == 1) {
      return "<strong>Total de Job:</strong> $years Year, $meses Months";
    } else {
      return "<strong>Total de Job:</strong> $years Years, $meses Months";
    }
  } else {
    return "<strong>Total de Job:</strong> $meses Months";
  }
}

function printJobs($job) {
  if($job['visible'] == false) {
    return;
  }
  echo '<li class="work-position">';
  echo '<h3>'. $job['title'] .'</h3>';
  echo '<p>'. $job['description'] .'</p>';
  echo '<p>'. getDuration($job['months']) .'</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}