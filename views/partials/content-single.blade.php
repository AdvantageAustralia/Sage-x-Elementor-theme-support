<article @php post_class() @endphp>
  @php the_post_thumbnail( 'post-thumbnail' ) @endphp
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-content">
    @php the_content() @endphp
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
      <p>' . __('Pages:', 'sage'), 'after' => '</p>
    </nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>