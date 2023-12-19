<!doctype html>
<html lang="{{-- {{ str_replace('_', '-', app()->getLocale()) }} --}}">

<head>
    <title>{{config('app.name')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @vite(['resources/css/app.css', 'resources/scss/app.scss','resources/js/app.js'])

</head>

<body>

    <main>
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold text-body-emphasis">Centered screenshot</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive
                    grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                </div>
            </div>
            <div class="overflow-hidden">
                <div class="container px-5">
                    <img src="{{asset('img/bootstrap-docs.png')}}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                     loading="lazy">
                </div>
            </div>
        </div>

    </main>


</body>

</html>
