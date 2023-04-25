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
    <link rel="stylesheet" href="css/style.css">


</head>
<body style="background-color: black">


<div class="main" >
    <nav>
        <h2 class="logo">Novaji <span>Introserve</span></h2>
        <ul>
            <li><a  href="/">Home</a></li>
            <li><a class="active" href="addproduct">Add Product</a></li>
            <li><a href="cart"><i class="icon-shopping-cart" ></i> </a></li>
        </ul>
        <button type="button"> Subscribe</button>
    </nav>

</div>
<section class="header">

</section>
<section class="form-container">
    @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    <form action="{{url('insertproduct')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid">
            <input
                type="text"
                name="name"
                id="name"
                required
                placeholder="name"

            />

            <input
                type="text"
                name="description"
                id="description"
                required
                placeholder="description"
            />
            <input
                type="text"
                name="price"
                id="price"
                required
                placeholder="price"
            />
            <label class="label" for="inputTag">
                Select Profile Image <br />
                <i class="fa fa-camera"></i>
                <input  name="image" type="file" required />

                <br />
            </label>
        </div>

        <div class="submit"><button type="submit">Submit</button></div>
    </form>
</section>
