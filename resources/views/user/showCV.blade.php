

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Dashboard</title>

    @include('user.css')
</head>
<body>

@include('user.nav')

<section>
    <br>
    <br>
    <br>

</section>
<div class="container">
    <br>

   <div>
    <h4>My Resume Here and You Download Any Time</h4>
   </div>
    <br>
    <br>

    <!-- PDF ফাইল দেখানোর জন্য -->
    <iframe src="{{ asset('cv/cv.pdf') }}" width="100%" height="700 px"></iframe>

    <!-- অথবা, ডাউনলোড লিঙ্কও থাকতে পারে -->

</div>

</body>

@include('user.footer')







@include('user.js')
</html>


