<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('Css')

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">



    @include('Nav')

    <main id="main">

        @include('Hero')

        @include('Client')

        @include('About')

        @include('Stats')

        @include('Service')

        @include('Feature')

        @include('Freqn')

        @include('Team')

        @include('Call-Action')

        @include('Testimonials')

        @include('Post')

        @include('Note')

        @include('Contact')

    </main>

    @include('Footer')

    @include('Scroll')

    @include('Script')

    @include('Notification.Message')

</body>

</html>




