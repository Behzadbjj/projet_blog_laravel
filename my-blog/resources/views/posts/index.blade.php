

@include('template.linkCss')

<x-app-layout>
{{-- <div class="allPost"> --}}
	
<div class="creePost">
	<h1 >Tous les articles</h1>
	<!-- Lien pour créer un nouvel article : "posts.create" -->
	<a  class="btn btn-success"  href="{{ route('posts.create') }}" title="Créer un article">Créer un nouveau post</a>
</div>

<br>
<div class="containerCard">
	<!-- On parcourt la collection de Post -->
	@foreach ($posts as $post)
		<div class="myCard">
			<div class="col">
				
					<span class="text-gray-800">{{ $post->user->name }}</span>
					<small class="ml-2 text-sm text-gray-600">{{ $post->created_at->format('j M Y, g:i a') }}</small>
				<img class="card-img-top" src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture" style="max-width: 300px;">
				{{-- <a href="#!"><img  src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a> --}}
					<div class="card-body">
						{{-- <div class="small text-muted">January 1, 2022</div> --}}
						<h2 class="card-title h4">{{ $post->title }}</h2> <br>
						<a class="btn btn-primary" href="{{ route('posts.show', $post) }}" title="Lire l'article">more about-> {{ $post->title }}</a>
						<a class="btn btn-primary" href="{{ route('posts.edit', $post) }}" title="Modifier l'article">Modifier</a> 
						<form method="POST" action="{{ route('posts.destroy', $post) }}">
							<!-- CSRF token -->
							@csrf
							<!-- <input type="hidden" name="_method" value="DELETE"> -->
							@method("DELETE") <br>
							<input class="btn btn-danger" type="submit" value="x Supprimer">
						</form>
					</div>
			</div>
		</div>
		<br>
	@endforeach

</div>

</x-app-layout>



