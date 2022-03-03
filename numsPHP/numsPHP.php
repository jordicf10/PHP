<?php
// Write your code below:
  
$num_languages = array(
1 => 'HTML', 
2 => 'CSS', 
3 => 'Javascript', 
4 => 'PHP'
);

$languages_length = count($num_languages);
$months = 11;
$days = $months * 16;
$days_per_language = $days / $languages_length;
echo "You had $months months, and you have studied $days days in total, so if you had $languages_length languages you have to dedicated $days_per_language days for every language, that's $days_per_language days for $num_languages[1], $days_per_language days for $num_languages[2], $days_per_language days for $num_languages[3], $days_per_language days for $num_languages[4].";