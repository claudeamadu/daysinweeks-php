# daysinweeks-php
PHP Scripts for getting days in a week and weeks in a month

## Installation & Usage
#### 1. Clone in your project
```
$ git clone https://github.com/claudeamadu/daysinweeks-php.git
```

#### 2. Include in your code(PHP)
```
<?php
	include('daysinweeks-php/daysinweeks.php');
?>
```

#### 3. Call function
```
<?php
	echo json_encode(daysinweek(2,0,0,"Y-m-d"));
?>
```

## Parameters
```
daysinweek(maxDays,month,year,format) //Returns an array
```
#### maxDays:
Total number of days to retrieve. (Default is total days in current month)
Pass 0 for total days in current month
#### month:
Month to get days from. (Default is current month)
Pass 0 for current month
#### year:
Year to get month from. (Default is current year)
Pass 0 for current year
#### format:
format to display dates. (Default Y-m-d)

## Return value Example
```
{
	"month": "05",
	"year": "2022",
	"results": {
		"week 1": {
			"day 1": "2022-05-01",
			"day 2": "2022-05-02",
			"day 3": "2022-05-03",
			"day 4": "2022-05-04",
			"day 5": "2022-05-05",
			"day 6": "2022-05-06",
			"day 7": "2022-05-07"
		},
		"week 2": {
			"day 8": "2022-05-08",
			"day 9": "2022-05-09",
			"day 10": "2022-05-10",
			"day 11": "2022-05-11",
			"day 12": "2022-05-12",
			"day 13": "2022-05-13",
			"day 14": "2022-05-14"
		},
		"week 3": {
			"day 15": "2022-05-15",
			"day 16": "2022-05-16",
			"day 17": "2022-05-17",
			"day 18": "2022-05-18",
			"day 19": "2022-05-19",
			"day 20": "2022-05-20",
			"day 21": "2022-05-21"
		},
		"week 4": {
			"day 22": "2022-05-22",
			"day 23": "2022-05-23",
			"day 24": "2022-05-24",
			"day 25": "2022-05-25",
			"day 26": "2022-05-26",
			"day 27": "2022-05-27",
			"day 28": "2022-05-28"
		},
		"week 5": {
			"day 29": "2022-05-29",
			"day 30": "2022-05-30",
			"day 31": "2022-05-31"
		}
	}
}
```


## Use Example
```php
<?php
$month = [];
$month = json_decode(daysinweek(0,0,0,0), true);
echo $month['month'].'<br/>';
echo $month['year'].'<br/>';
$weeks = $month['results'];
foreach($weeks as $week => $dates){
	$weekday = $dates;
	foreach($weekday as $day => $date){
		echo $date.'<br/>';
	}
}
?>
```