<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php file</title>
</head>
<body>
    <style>
        html {
            background-color: #444444;
            margin: 22px;
        }
        select {
            font-size: 2em;
        }
        input {
            font-size: 2em;
        }
        button {
            font-size: 2em;
        }
    </style>
    
    <form action="functions.php" method="GET">
        <input type="text" name="num1" placeholder="Number 1">
        <select name="operator">
            <label>Choose operation</label>
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="text" name="num2" placeholder="Number 2">
        <button type="submit">=</button>
    </form>
    
</body>
</html>