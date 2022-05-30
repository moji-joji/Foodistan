<div class="p-6 bg-white rounded shadow mb-10">
    <div class="d-flex mb-4 align-items-start justify-content-between">
        <div class="d-flex align-items-center">

            <div>
                <div class="d-flex mb-2 align-items-center">

                    <h3 class="h6">{{ $review['name'] }}</h3>
                    <span
                        class="d-inline-block mx-3 py-1 px-2 me-2 bg-primary-light text-primary rounded small">{{ $review['rating'] }}/5</span>
                </div>
            </div>
        </div>
        <button class="btn p-0 text-secondary">
            <svg viewBox="0 0 12 4" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 12px;height: 12px">
                <path
                    d="M6 0.666687C5.26667 0.666687 4.66667 1.26669 4.66667 2.00002C4.66667 2.73335 5.26667 3.33335 6 3.33335C6.73333 3.33335 7.33333 2.73335 7.33333 2.00002C7.33333 1.26669 6.73333 0.666687 6 0.666687ZM1.33333 0.666687C0.6 0.666687 0 1.26669 0 2.00002C0 2.73335 0.6 3.33335 1.33333 3.33335C2.06667 3.33335 2.66667 2.73335 2.66667 2.00002C2.66667 1.26669 2.06667 0.666687 1.33333 0.666687ZM10.6667 0.666687C9.93333 0.666687 9.33333 1.26669 9.33333 2.00002C9.33333 2.73335 9.93333 3.33335 10.6667 3.33335C11.4 3.33335 12 2.73335 12 2.00002C12 1.26669 11.4 0.666687 10.6667 0.666687Z"
                    fill="currentColor"></path>
            </svg>
        </button>
    </div>
    <div class="mb-5">
        <p class="mb-8 small">{{ $review['content'] }}</p>

    </div>
</div>
