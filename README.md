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
#### year:
format to display dates. (Default Y-m-d)

##Return value Example
```
{
	"month": "03",
	"year": "2022",
	"results": {
		"week 1": {
			"day 1": "2022-03-01",
			"day 2": "2022-03-02"
		}
	}
}
```