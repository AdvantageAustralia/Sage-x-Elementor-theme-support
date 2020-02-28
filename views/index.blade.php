@extends('layouts.app')


@section('content')
@if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) )

@if (!have_posts())
<div class="alert alert-warning">
  {{ __('Sorry, no results were found.', 'sage') }}
</div>
{!! get_search_form(false) !!}
@endif

@while (have_posts()) @php the_post() @endphp
@include('partials.content-'.get_post_type())

@endwhile

{!! get_the_posts_navigation() !!}

@endif
@endsection