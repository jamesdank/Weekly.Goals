<!DOCTYPE html> 
<html>
<head>
    <title>This weeks daily goals</title>
    <meta name="description" content="This weeks daily goals">
    <script src="js/jquery-3.7.1.min.js"></script>
    <script>
    $(document).ready(function() {

        $("#btn1").click(function() {

            $("span").append("<center>Add Daily Goal: <input type=text name=goal[] size=30 /></center></br>");
        });
    });

    </script>

    <style>
    .title {
        font-family: "Calisto MT"; font-size: 32px; font-weight: bold; text-align: center;
    }
    table.border {
        border: 1px solid black; border-collapse: collapse;
    }
    table.border th {
        border: 1px solid black;
    }
    table.border tr {
       border-bottom: 1pt solid black;
    }
    .date {
        font-family: "Calisto MT"; font-size: 18px; font-weight: bold; text-align: center;
    }
    </style>

</head>
<body>

<?php 
if (!isset($_POST['submit'])) {

    echo '
        <p class="title">Easily create a printout for setting daily goals this week</p>
        </br></br>
        <center>

        To use this simply write a goal category (Vitamins, Productivity, Chores, etc..) where it says </br>
        "weekly goal name", click the add goal button for as many goals as you want, then add a name </br>
        and description to each goal (example "Walk 30 minutes a day", or "shower daily").</br>
        After you\'re finished adding goals click "Create this weeks daily goals" button and it will generate </br>
        your goals.  Right click anywhere on the webpage that is generated then click print, make sure</br>
        to select landscape when printing it will give you a bit more room.

        </br></br></br></br></center></br>
        <center><button id="btn1">Add Goal</button></center></br></br>
        <form method="post" action="">
        <center><label for="">Weekly Goals Name: </label></center>
        <center><input type="text" name="name"></center><br><br>
        <span></span>
        
        <center><input type="submit" id="submit" name="submit" value="Create this weeks daily goals" /></center>
        </form>
    ';
}

if (isset($_POST['submit'])) { 
    $name = $_POST['name'];
    echo '
        <p class="title">This weeks ' . $name . ' Goals</p>
        </br></br>
        <table class="border" width="97%" align="center">
        <tr>
            <th width="52%" align="center">
            Daily Habits
            </th>
            <th width="7%" align="center">
            Monday
            </th>
            <th width="7%" align="center">
            Tuesday
            </th>
            <th width="7%" align="center">
            Wednesday
            </th>
            <th width="7%" align="center">
            Thursday
            </th>
            <th width="7%" align="center">
            Friday
            </th>
            <th width="7%" align="center">
            Saturday
            </th>
            <th width="7%" align="center">
            Sunday
            </th>
        </tr>
    ';

foreach ($_POST['goal'] as $goal) {

    echo '
        <tr>
            <td>
            ' . $goal . '
            </td>
            <td align="center">
            <input type="radio">
            </td>
            <td align="center">
            <input type="radio">
            </td>
            <td align="center">
            <input type="radio">
            </td>
            <td align="center">
            <input type="radio">
            </td>
            <td align="center">
            <input type="radio">
            </td>
            <td align="center">
            <input type="radio">
            </td>
            <td align="center">
            <input type="radio">
            </td>
        </tr>
    ';
}

echo '
    </table></br>
    <table class="border" width="97%" align="center">
        <tr align="left">
            <th width="100%">
            Notes (List the things you did really well this week and what you want to give special attention to next week)
            </th>
        </tr>
        <tr>
            <td>
            <b>Things I did well:</b></br></br></br></br></br>
            </td>
        </tr>
        <tr>
            <td>
            <b>Things I want to improve on:</b></br></br></br></br></br>
            </td>
        </tr>
    </table>
';

}
?>
</body>
</html>
