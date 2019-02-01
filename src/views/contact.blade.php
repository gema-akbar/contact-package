<!doctype html>

<html>


<head>
    <title>Contact Us</title>
</head>

<body>

<h3>Contact Us</h3>

<form action="{{route('contact')}}" method="POST">
    {{ csrf_field() }}

    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <textarea name="message" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="submit">


</form>


</body>


</html>

