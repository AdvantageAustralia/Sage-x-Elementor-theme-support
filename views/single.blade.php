@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'single' ) )
@include('partials.content-single-'.get_post_type())
@endif
@endwhile
@endsection