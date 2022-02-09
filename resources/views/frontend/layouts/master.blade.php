{{--header content start--}}
@include('frontend.layouts.includes.header')
{{--header content end--}}

{{--main content start--}}
@yield('frontContent')
{{--main content end--}}

{{--footer content start--}}
@include('frontend.layouts.includes.footer')
{{--footer content end--}}
