<?php

function printDetails(string $title, int $year, int $duration=0): void
{
	echo "<p>The film {$title} was released in {$year}. It is {$duration} minutes in length.</p>";
}

function convertToEuros(int $pounds): int
{
	return $pounds * 1.18;
}



function getPositiveNumbers(array $arrOfNumbers): array
{
	$matches = [];
	foreach ($arrOfNumbers as $num) {
		if ($num > 0) {
			array_push($matches, $num);
		}
	}
	return $matches;
}


function filterImageFileNames(array $arrOfFileNames): array
{
	$matchingFileNames = [];
	foreach ($arrOfFileNames as $filename) {
		$fileExtension = substr($filename, strrpos($filename, '.') + 1);
		if ($fileExtension === "png" || $fileExtension === "jpg" || $fileExtension === "jpeg") {
			$matchingFileNames[] = $filename;
		}
	}
	return $matchingFileNames;
}

function calcAverage(array $nums)
{
	$total=0;
	foreach($nums as $num){
		$total+=$num;
	}
	$avg = $total/count($nums);
	return $avg;
}