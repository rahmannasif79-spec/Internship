<?php

// Function
function getGrade($average)
{
    if($average >= 80)
    {
        return "A+";
    }
    elseif($average >= 70)
    {
        return "A";
    }
    elseif($average >= 60)
    {
        return "A-";
    }
    elseif($average >= 50)
    {
        return "B";
    }
    elseif($average >= 40)
    {
        return "C";
    }
    else
    {
        return "F";
    }
}

$result = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];

    // Indexed Array
    $marks = [
        $_POST["sub1"],
        $_POST["sub2"],
        $_POST["sub3"],
        $_POST["sub4"],
        $_POST["sub5"]
    ];

    $total = 0;

    // foreach Loop
    foreach($marks as $mark)
    {
        $total += $mark;
    }

    $average = $total / count($marks);

    $grade = getGrade($average);

    $status = "Pass";

    foreach($marks as $mark)
    {
        if($mark < 33)
        {
            $status = "Fail";
            break;
        }
    }

    // Associative Array
    $student = [
        "Name" => $name,
        "Total" => $total,
        "Average" => round($average,2),
        "Grade" => $grade,
        "Result" => $status
    ];

    $result = true;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result Calculator</title>

    <style>

        body{
            font-family:Arial;
            padding:30px;
        }

        input{
            width:250px;
            padding:8px;
            margin:5px;
        }

        button{
            padding:10px 20px;
        }

        .box{
            border:1px solid gray;
            padding:20px;
            margin-top:20px;
            width:350px;
        }

    </style>

</head>
<body>

<h2>Student Result Calculator</h2>

<form method="POST">

    <input type="text" name="name" placeholder="Student Name" required>
    <br>

    <input type="number" name="sub1" placeholder="Bangla" required>
    <br>

    <input type="number" name="sub2" placeholder="English" required>
    <br>

    <input type="number" name="sub3" placeholder="Math" required>
    <br>

    <input type="number" name="sub4" placeholder="Science" required>
    <br>

    <input type="number" name="sub5" placeholder="ICT" required>
    <br><br>

    <button type="submit">
        Calculate Result
    </button>

</form>

<?php if($result){ ?>

<div class="box">

    <h3>Result</h3>

    <?php

    foreach($student as $key => $value)
    {
        echo "<b>$key:</b> $value <br>";
    }

    ?>

</div>

<?php } ?>

</body>
</html>