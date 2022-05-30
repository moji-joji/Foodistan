<div class="col-12 col-md-6 mb-8">
    <div class="bg-light p-6">
        <div class="mb-4">
            <img class="img-fluid w-100" style="height: 277px;" src="{{ $blog['imgUrl'] }}" alt="">

        </div>
        <span class="text-muted" style="font-size: 12px;">{{ $blog['date'] }}</span>
        <h3 class="my-4">{{ $blog['tit;e'] }}</h3>
        <p class="lead lh-lg text-muted mb-6">{{ $blog['description'] }}
            <span>...</span>
        </p>
        <a class="link-primary fw-bold text-decoration-none" href="/blog/{{ $blog['id'] }}">Read More</a>
    </div>
</div>
