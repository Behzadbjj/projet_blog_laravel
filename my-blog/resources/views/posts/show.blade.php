{{-- @extends("layouts.post") --}}
@include('template.linkCss')

<x-app-layout>
	
	{{-- @extends("chirps.index") --}}

	{{-- @section("title", $post->title) --}}
	<x-slot name="header">
		<h2>{{ $post->title }}</h2>
	</x-slot>

	{{-- @section("content") --}}
	<div class="myCard" style="width: 25rem;">
		{{-- <h3 class="card-title">{{ $post->title }}</h3> <br> --}}
			<div class="card-body">
				<img class="card-img-top" src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture" style="max-width: 300px;">
			</div>
	{{-- @include('chirps.index') --}}
	</div>
	<div class="content">
	<p class="card-text">{{ $post->content }}</p>
	</div>
	<a class="btn btn-primary" href="{{ route('posts.index') }}" title="Retourner aux articles" >Retourner aux posts</a>

	{{-- @endsection --}}
</x-app-layout>