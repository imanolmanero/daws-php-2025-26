<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agenda de contactos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Agenda de contactos</h2>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Email</th>
        </tr>

        <?php
        for ($i = 0; $i < count($agenda); $i++) {
            echo "<tr>";
                echo "<td>" . $agenda[$i]['nombre'] . "</td>";
                echo "<td>" . $agenda[$i]['apellidos'] . "</td>";
                echo "<td>" . $agenda[$i]['telefono'] . "</td>";
                echo "<td>" . $agenda[$i]['email'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
