<!DOCTYPE html>
<html lang="en">
    <base href="/public">

@include('Css')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

@include('Nav')

<main id="main">

  @include('Blog.Blog-Details-Component')


</main>

@include('Footer')

@include('Scroll')

@include('Script')


</body>

</html>
