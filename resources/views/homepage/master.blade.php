@include('homepage._partials.seo')
<body>

@include('homepage._partials.header')

@include('homepage.sections.contents')

@yield('content')

	<div id="instafeed"></div>
@include('homepage._partials.footer')
