<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <form action="/products/<?php echo $products->id?>" method="post">
        @csrf() <!-- hidden input protect against CSRF attacks.-->
        @method("PUT") <!--this is often used when you want to update a resource using a PUT request instead of a POST -->
        <input type="text" name="name" value="<?php echo $products->product?>">
        <input type="submit" value="save" name="save">
    </form>

</hr>

<form action="/products/<?php echo $products->id?>" method="post">
        @csrf() <!-- hidden input protect against CSRF attacks.-->
        @method("DELETE") <!--this is often used when you want to DELETE a resource using a DELETE request instead of a POST -->
        
        <input type="submit" value="DELETE" name="DELETE">
    </form>


    
</body>
</html>