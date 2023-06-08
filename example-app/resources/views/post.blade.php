<!doctype>
<title>web sit</title>
<link rel="stylesheet" href="/dd.css">
<body>
@foreach($posts as $post)
<article>
 {!!  $post  !!}
</article>
@endforeach
<a href="/" >go back</a>
