
<!DOCTYPE html>
<html lang="en">
 <head>
   @include('frontend.partials.frontend.head')
             
 </head>
 <body>
@include('frontend.partials.frontend.header') 
@yield('content')
@include('frontend.partials.frontend.footer')
@include('frontend.partials.frontend.footer-scripts')
 </body>
</html>