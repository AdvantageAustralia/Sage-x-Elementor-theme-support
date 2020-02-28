@if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) )
<footer class="content-info">
  <div class="container">
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
@endif