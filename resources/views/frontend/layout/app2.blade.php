<!DOCTYPE html>
<html lang="en">
   @include('frontend.includes.head2')  
	<body>
		
		@include('frontend.includes.header')

		@include('frontend.includes.nav')
		@yield('content')
		@include('frontend.includes.sponser')

		@include('frontend.includes.social')

@include('frontend.includes.footer')

		@include('frontend.includes.js2')


    </body>
</html>