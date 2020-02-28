@if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) )
<header class="main-navigation">
  @if (has_nav_menu('top_bar'))
  <nav class="top-bar">
    {!! wp_nav_menu(['theme_location' => 'top_bar', 'menu_class' => 'top-nav']) !!}
  </nav>
  @endif
  <div class="container">
    <div class="brand-logo">
      @if ( has_custom_logo() )
      {!! the_custom_logo() !!}
      @else
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      @endif
    </div>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
    <div class="feature-button">
      @if (has_nav_menu('feature_button'))
      {!! wp_nav_menu(['theme_location' => 'feature_button', 'menu_class' => 'feature-nav']) !!}
      @endif
    </div>
    <button class="hamburger hamburger--squeeze" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
  </div>
</header>
@endif