<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
 
    <style>
body {
    font-family: 'Arial', sans-serif;
    background: #ffc0cb;
    margin: 0;
    padding: 20px;
}

table {
    width: 100%;
    max-width: 800px;
    margin: 0 auto;
    border-collapse: collapse;
    background: white;
    border: 2px solid #000000;
}

tr:first-child {
    background: #e74c3c;
    color: white;
}

tr:not(:first-child) {
    background: white;
}

tr:not(:first-child):hover {
    background: #f8f9fa;
}

td {
    padding: 12px 15px;
    border: 1px solid #000000;
    text-align: center;
}
</style>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>