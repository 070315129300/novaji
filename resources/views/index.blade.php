<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>novaji</title>
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="{{url('styles.css')}}">


</head>
<body style="background-color: black">

<div class="main" >
    <nav>
        <h2 class="logo">Novaji <span>Introserve</span></h2>
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="addproduct">Add Product</a></li>
            <li><a href="cart"><i class="icon-shopping-cart" ></i> </a></li>
        </ul>
        <button type="button"> Subscribe</button>
    </nav>

</div>

<div class="section1">
    <div class="col-6">
        <h1>Give Your Self <br>A New Style</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing <br>
            elit. Aliquid animi eaque fuga hic inventore ipsa iure <br>
            non. Animi asperiores culpa dolores, eum fugiat labore <br>
            laboriosam nesciunt possimus praesentium quos ut.
        </p>
    </div>
    <div class="col-6">
        <img src="img/image1.jpg" alt="">
    </div>
</div>



<div class="featured_product">
    @foreach($user as $users)
    <div class="prod">
        <a href="editproduct/{{$users->id}}"> <img src="productimage/{{$users->image}}" alt=""></a>
        <div class="des">
            <span>{{$users -> name}}</span>
            <h5>{{$users -> description}}</h5>
            <h4>{{$users -> price}}</h4>
            <h4> <a class="btn btn-danger"  onclick="return confirm('are you sure you want to delete this product')" style="color:red" href="{{url('deleteproduct', $users->id)}}">DELETE</a></h4>

        </div>
        <a href=""><span class="icon-shopping-cart cart"></span></a>

    </div>
    @endforeach




</div>


<div class="footer">
    Copyright &copy; <?php echo date('Y'); ?>
    NOVAJI. All rights reserved.Caleb;
</div>
</body>
</html>


