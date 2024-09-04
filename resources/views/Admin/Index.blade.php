<!DOCTYPE html>
<html>
    <base href="/public">

@include("Admin.Css")

<body>
    <div id="wrapper">

        @include('Admin.Sidebar')

    <div id="page-wrapper" class="gray-bg">

        @include('Admin.Nav')
        <div class="wrapper wrapper-content">
            @include('Admin.Dashboard')
        </div>
    </div>

    </div>

    @include('Admin.Script')

</body>

</html>
