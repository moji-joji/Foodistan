<div class="col-12 col-md-6 col-lg-4 mb-8 mb-lg-0">
    <div class="p-4 bg-white rounded shadow">
        <div class="position-relative mb-4">
            <img class="img-fluid w-100 rounded" style="height: 155px; object-fit: cover;"
                src="/cronos-assets/images/{{ $listing->main_image }}" alt="">
            <span class="position-absolute top-0 end-0 mt-2 me-2 bg-primary py-1 px-2 text-white rounded small">
                @for ($i = 0; $i < floor($listing->avg_rating); $i++)
                    <img src="/cronos-assets/logos/golden-star-icon.png" width="15px" alt="" srcset="">
                @endfor

            </span>
        </div>
        <div class="pb-4">
            <div class="d-flex align-items-center justify-content-between mb-6">
                <div>

                    <h3 class="small mb-1">{{ $listing->title }} </h3>
                    <a href="#">
                        <span class="text-muted small">{{ $listing->address }}</span>
                    </a>
                </div>

            </div>
            <div class="d-flex mb-1 align-items-center justify-content-between">
                <h4 class="mb-0 small">Price</h4>
                <span
                    class="d-inline-block px-2 bg-success-light text-success rounded-pill small">~{{ $listing->price_approx }}
                    PKR</span>
            </div>
            <div class="d-flex mb-1 align-items-center justify-content-between">
                <h4 class="mb-0 small">Phone</h4>
                <span class="d-inline-block px-2 bg-danger-light text-danger rounded-pill small">
                    {{ $listing->phone_number }}</span>
            </div>
            <div class="d-flex mb-1 align-items-center justify-content-between">
                <h4 class="mb-0 small">Open Hours</h4>
                <span class="d-inline-block px-2 bg-secondary-light text-danger rounded-pill small">
                    {{ $listing->open_hours }}</span>
            </div>
            <div class="d-flex mb-1 align-items-center justify-content-between">
                <h4 class="mb-0 small">Category</h4>
                <span class="d-inline-block px-2 bg-primary-light text-danger rounded-pill small">
                    {{ $listing->category }}</span>
            </div>
            <div class="mb-1 align-items-center justify-content-between">
                <h4 class="mb-0 small my-5 margin-bottom-10 ">Tags</h4>
                <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Restaurant
                </span>
                <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Fast food
                </span>
                <span class="d-inline-block px-2 bg-primary-light text-primary rounded-pill small  my-2">
                    Kids
                </span>
            </div>

            <div class="mb-1 align-items-center justify-content-between">
                <a href="" class="heart text-decoration-none">
                    @if (Auth::check())

                        @if (Auth::user()->likes->contains($listing->id))
                            <img src="/cronos-assets/images/heart-red.svg" width="25px" alt="">
                        @else
                            <img src="/cronos-assets/images/heart-black.svg" width="25px" alt="">
                        @endif
                    @else
                        <img src="/cronos-assets/images/heart-black.svg" width="25px" alt="">
                    @endif
                </a>
                <span class="mx-2">{{ $listing->no_of_likes }}</span>
            </div>




            <div class="pt-4 border-top border-light">
                <div class="d-flex w-100 justify-content-between">
                    <a class="ms-auto btn btn-sm btn-primary" href="/listing/{{ $listing->id }}">See Details</a>
                </div>
            </div>
        </div>
    </div>
