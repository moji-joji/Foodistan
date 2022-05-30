<!DOCTYPE html>
<html lang="en">

<head>
    <title>Foodistan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">


    <link rel="icon" href="/favicon.ico">
</head>

<body>
    <div class="">
        @component('components.header')
        @endcomponent
        <div class="d-flex justify-content-center  round shadow bg-dark  text-white ">
            <form class="w-50 my-10" action="/blog/{{ $blog['id'] }}/edit" method="post">
                @csrf
                <h2>Edit</h2>
                <div class="mb-6">
                    <label class="form-label" for="">Title</label>
                    <input class="form-control rounded" type="text" name="title" placeholder="Title for your blog post"
                        value="{{ $blog['title'] }}">

                </div>
                <div class="mb-6">
                    <label class="form-label" for="">Description</label>
                    <textarea class="form-control rounded" name="description" rows="3" placeholder="Describe your post">{{ $blog['description'] }}
                    </textarea>

                </div>
                <div class="mb-6">
                    <label class="form-label" for="">Content</label>
                    <textarea class="form-control rounded " name="content" rows="3" placeholder="Main content of your blog post">
                        {{ $blog['content'] }}</textarea>


                </div>


                <div class="mb-6">
                    <label class="form-label" for="">Image Url</label>
                    <input class="form-control rounded" type="text" name="imgUrl" placeholder="Image url"
                        value="{{ $blog['imgUrl'] }}">
                </div>
                <div class="mb-6">
                    <label class="form-label" for="">Tags</label>
                    <input class="form-control rounded" type="text" name="tags" placeholder="Title for your blog post"
                        value="{{ $blog['tags'] }}">

                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
        @component('components.footer')
        @endcomponent

    </div>
    <script src="/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
