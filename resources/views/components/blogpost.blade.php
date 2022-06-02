<h3 class="mb-6">{{ $blog['title'] }}</h3>
<div class="d-flex justify-content-center align-items-center">

    <div class="text-start">
        <pre class="text-muted">{{ $blog['author'] }} | {{ $blog['date'] }} </pre>
    </div>
</div>
</div>
</div>
<div class="position-relative mb-12">
    <img class="d-none d-md-block position-absolute top-0 end-0" src="/cronos-assets/elements/warning-light-small.svg"
        alt="">
    <img class="d-none d-md-block position-absolute bottom-0 start-0" src="/cronos-assets/elements/white-green-dark.svg"
        alt="">
    <img class="img-fluid w-100" style="object-fit: cover;" src="{{ $blog['imgUrl'] }}" alt="">
</div>
<div class="container">
    <div class="mw-2xl mx-auto">
        <p class="mb-6 lead lh-lg text-muted">
            {{ $blog['description'] }}

        </p>
        <p class="mb-6 lead lh-lg text-muted">
            {{ $blog['content'] }}
        </p>
        <h3>Tags</h3>
        <p class="text-muted bg-gray shadow rounded w-content">{{ $blog['tags'] }}</p>
        @auth
            @if ($blog['user_id'] == Auth::user()->id)
                <div class="d-flex justify-content-between">
                    <form action="/blog/{{ $blog['id'] }}/edit" method="GET">
                        @csrf

                        <button type="submit" class="btn btn-success">Edit</button>
                    </form>
                    <form action="/blog/{{ $blog['id'] }}/delete" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            @endif
        @endauth

    </div>
