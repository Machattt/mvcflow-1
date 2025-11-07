<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
 
    <style>
body {
    font-family: 'Arial', sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 20px;
}

table {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    border-collapse: collapse;
    background: white;
    border: 2px solid #000000;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

tr:first-child {
    background: #2c3e50;
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
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>