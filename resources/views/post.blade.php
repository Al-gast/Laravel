@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
</article>
<a href="/blog">Back To Posts</a>
@endsection


{{-- Post::create([
    'title' => 'Second Title',
    'author' => 'Atha',
    'slug' => 'second-title',
    'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos id dicta ipsam iure illum eum rem itaque praesentium mollitia. Natus deserunt adipisci quibusdam! Nulla delectus ab animi quae! Fuga,',
    'body' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos id dicta ipsam iure illum eum rem itaque praesentium mollitia. Natus deserunt adipisci quibusdam! Nulla delectus ab animi quae! Fuga, iste? Vero minus, accusamus alias, voluptates eligendi, ab nesciunt omnis explicabo illo repellendus suscipit dicta nisi temporibus consequatur earum.</p><p>Adipisci nihil tempore expedita voluptatibus veniam, illum molestiae ab iusto cupiditate officiis asperiores maiores iste repellendus harum optio vero at illo a ullam temporibus quia excepturi facere? Dolores, magni deleniti dolore reiciendis possimus, sequi recusandae excepturi maiores qui ea optio dicta iusto non! Nam sequi earum id rerum repellendus labore quidem quod assumenda numquam culpa laborum natus saepe,</p><p>officia a doloremque cupiditate libero magnam sapiente! Fugit, autem cupiditate magni modi culpa, quia vel obcaecati aut repudiandae incidunt aliquam qui veniam, unde in? Incidunt fugit cumque asperiores, ut atque ad quia dignissimos placeat, in labore quo? Ut, architecto facilis dolore aperiam earum commodi?</p>'
]) --}}

