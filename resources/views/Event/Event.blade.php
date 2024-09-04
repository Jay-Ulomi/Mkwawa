<!DOCTYPE html>
<html lang="en">
    <base href="/public">

@include('Css')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

@include('Nav')

<main id="main">

  @include('Event.Event-Component')

@include('Event.Event-Image')

  @include('Contact')

</main>

@include('Footer')

@include('Scroll')

@include('Script')


</body>

</html>
