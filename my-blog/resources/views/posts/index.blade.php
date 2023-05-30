@include('template.linkCss')

<x-app-layout>
    <div class="creePost">
        <!-- Link to create a new article: "posts.create" -->
        <a class="btn btn-success" href="{{ route('posts.create') }}" title="Créer un article">Créer un nouveau post</a>
    </div>
    <img src="https://www.pngarts.com/files/3/Food-Transparent-Image.png" alt="">

    <br>

    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                        </div>
                        <div class="card-footer">
                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
							<a class="btn btn-primary" href="{{ route('posts.edit', $post) }}" title="Modifier l'article">Modifier</a>

                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Supprimer">
                            </form>
						
						<div class="row">

                            <a class="btn btn-primary" href="{{ route('posts.show', $post) }}" title="Lire l'article">More about {{ $post->title }}</a>
                        </div>
					</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>


























