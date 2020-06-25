<!doctype html>
<html>
<head>
    <title>New Reservation</title>
</head>
<body>
    <table border="1" cellpadding="4">
        <thead>
        <tr align="center"><td colspan="2"><h2>Nueva Reservacion</h2></td></tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>Compañia</strong></td>
                <td>{{ $info['company'] }}</td>
            </tr>
            <tr>
                <td><strong>Local</strong></td>
                <td>{{ $info['local'] }}</td>
            </tr>
            <tr>
                <td><strong>Fecha Inicio</strong></td>
                <td>{{ $info['start'] }}</td>
            </tr>
            <tr>
                <td><strong>Fecha Fin</strong></td>
                <td>{{ $info['end'] }}</td>
            </tr>
            <tr>
                <td><strong>Descripcion</strong></td>
                <td>{{ $info['desc'] }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
