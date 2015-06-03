
<h1>Articles</h1>

<h1>Articles</h1>

@foreach($ar as $article)

<article> <h2> <a href="article/{{ $article->id }}"> {{ $article->title}}</a></h2></article>

<article> <h2> <a href="{{  action('ArticlesController@show',[$article->id ]) }}"> {{ $article->title}}</a></h2></article>
<article> <h2> <a href="{{  url( 'article', $article->id ) }}"> {{ $article->title}}</a></h2></article>


<div class="body"> {{ $article->body}}</div>

@endforeach