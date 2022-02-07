<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @stack('meta')


    <title>@yield('title')</title>

    {{--Stylesheet area start--}}
    @include('admin.layouts.inc.style')
    {{--Stylesheet area end--}}
</head>
<body>

<div class="container-scroller">
    {{--Admin top area start--}}
    @include('admin.layouts.topbar')
    {{--Admin top area end--}}

    <div class="container-fluid page-body-wrapper">

        {{--Admin nav bar area start--}}
        @include('admin.layouts.navbar')
        {{--Admin nav bar area end--}}

        {{--Admin main content area start--}}
        <div class="main-panel">
            <div class="content-wrapper">

                @yield('contents')

            </div>
        </div>
        {{--Admin main content area end--}}

    </div>

</div>

{{--Script area start--}}
@include('admin.layouts.inc.script')
{{--Script area end--}}

</body>

</html>
