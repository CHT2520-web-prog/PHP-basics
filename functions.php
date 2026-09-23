<?php

function printDetails(string $title, int $year): void
{
	echo "<p>The film {$title} was released in {$year}.</p>";
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
