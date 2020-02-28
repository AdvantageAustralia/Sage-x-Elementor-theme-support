<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
  @php do_action('get_header') @endphp
  @include('partials.header')
  <div class="vendors-container" data-barba='wrapper'>
    <div class="container" id="content-container" data-barba="container" data-barba namespace="one-pager">
      <div id="body-classes" @php body_class() @endphp>
        <div class="wrap container" role="document">
          <div class="content">
            <main class="main">
              @yield('content')
            </main>
            @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar')
            </aside>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  @php do_action('get_footer') @endphp
  @include('partials.footer')
  @php wp_footer() @endphp
</body>

</html>