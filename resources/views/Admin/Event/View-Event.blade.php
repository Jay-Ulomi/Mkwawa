<!DOCTYPE html>
<html>
    <base href="/public">

@include("Admin.Css")

<body>
    <div id="wrapper">

        @include('Admin.Sidebar')

    <div id="page-wrapper" class="gray-bg">

        @include('Admin.Nav')

        <div class="wrapper wrapper-content animated fadeInRight">

        @include('Admin.Event.View-Event-Component')
        </div>
    </div>

    </div>

    @include('Admin.Script')

</body>

</html>
