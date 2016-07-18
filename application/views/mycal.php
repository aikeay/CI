<?php
/**
 * Created by PhpStorm.
 * User: alanakeay
 */
?>
<!DOCTYPE>
<html>
<head>
    <title>Schedule Manager</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style type="text/css">
        .calendar{
            font-family: "Myriad Pro", "Arial";
            font-size: 12px;
        }
        table.calendar{
            margin: auto;
            border-collapse: collapse;
        }
        .calendar .days td{
            width: 80px;
            height: 80px;
            padding: 4px;
            border: 1px solid #999;
            vertical-align: top;
            background-color: #DEF;
        }
    </style>
</head>
<body>

<div class="cal">
    <?php echo $calendar; ?>
</div>
