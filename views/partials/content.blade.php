@if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) )
<article @php post_class() @endphp>
  @php the_post_thumbnail( 'post-thumbnail' ) @endphp
  <header>
    <h3 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h3>
    @include('partials/entry-meta')
  </header>
</article>
@endif