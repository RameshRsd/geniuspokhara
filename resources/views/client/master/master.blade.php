@include($masterPath.'.layouts.header')
@include($masterPath.'.layouts.footer')
@include($masterPath.'.layouts.main_header')
@include($masterPath.'.layouts.main_footer')

@yield('header')
@yield('main_header')
@yield('content')
@yield('main_footer')
@yield('footer')

