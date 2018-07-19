<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
</head>
<body>
<br><br>
<div class="container" style="width: 500px;">
    <form method="post" action="{{ url( '/orders' ) }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" name="price" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Place Order</button>
    </form>
</div>

</body>
</html>