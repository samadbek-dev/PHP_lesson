<?php
$people=[
    ['name'=>'Samadbek','surname'=>'Bahodirov','age'=>15],
    ['name'=>'John','surname'=>'Doe','age'=>30],
    ['name'=>'Jane','surname'=>'Smith','age'=>25],
]
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple Table</title>
    <style>
  body {
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
            background: #f5f7fa;
            color: #333;
            margin: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        table {
            width: 480px;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border-radius: 8px;
            overflow: hidden;
        }
        caption {
            padding: 12px 16px;
            font-weight: 600;
            text-align: left;
            color: #111827;
            background: linear-gradient(#fbfdff, #f3f6f9);
        }
        th, td {
            padding: 12px 16px;
            border-bottom: 1px solid #e6e9ee;
            text-align: left;
        }
        th {
            background: linear-gradient(#f7fafc, #f1f5f9);
            font-weight: 700;
            color: #0f172a;
        }
        tr:nth-child(even) td { background: #fbfdff; }
        tr:last-child td { border-bottom: none; }
        td:first-child {
            width: 40%;
            font-weight: 600;
            color: #374151;
            background: rgba(0,0,0,0.01);
        }
    </style>
</head>
<body>
    <table>
        <caption>Simple Table</caption>
                <?php foreach ($people as $person): ?>
                    <tr><th>Field</th><th></th></tr>
        <tr><td>Name</td><td><?=  $person['name'] ?></td></tr>
        <tr><td>Surname</td><td><?=  $person['surname'] ?></td></tr>
        <tr><td>Age</td><td><?= $person['age'] ?></td></tr>
        <?php endforeach; ?>
    </table>
</body>
</html>