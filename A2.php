<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve: Bahrain Open Data Portal API</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
    
    <style>
       
        h1{
            color:maroon;
            text-align: center;
        }
        table{
            width:100%;
            border-collapse: collapse;
            border: 2px solid white;
        }
        @media(max-width:600px){
           table{
            width:100%;
            } 
            th,td{
                font-size: x-small;
            }
            h1{
                font-size: medium;
            }
        }
        th,td{
            border: 2px solid white; 
            text-align: left;
        }
    
    </style>
</head>
<body>
    <h1>Comprehensive data of university of bahrain students enrolled</h1>
    <?php
    $URL="https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

    $records=file_get_contents($URL);

    if ($records!=false){
        $result=json_decode($records,true);

        echo"<table>";
        echo "<tr>";
        echo "<th>Year</th>";
        echo "<th>Semester</th>";
        echo "<th>The Programs</th>";
        echo "<th>Nationality</th>";
        echo "<th>Colleges</th>";
        echo "<th>Number of students</th>";
        echo"</tr>";

        foreach ($result['results'] as $re){
            echo"<tr>";
            echo "<td>". $re['year'] ."</td>";
            echo "<td>". $re['semester'] ."</td>";
            echo "<td>". $re['lbrmj'] ."</td>";
            echo "<td>". $re['nationality'] ."</td>";
            echo "<td>". $re['colleges'] ."</td>";
            echo "<td>". $re['number_of_students'] ."</td>";
            echo"</tr>";
            }

    }?> 
</body>


  



