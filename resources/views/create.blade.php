<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <form action="/products" method="post">
        @csrf() <!-- hidden input protect against CSRF attacks.-->
        <input type="text" name="name" >
        <input type="submit" value="save" name="save">
    </form>
    
</body>
</html>