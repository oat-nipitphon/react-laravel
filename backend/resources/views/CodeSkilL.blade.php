@extends('/backend/resources/css/laravel-style.css')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Start Styles -->

        {{-- Style Bootstrap --}}
        <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

       {{-- Style Laravel   --}}
       @include('/backend/resources/css/laravel-style.css')
        <style>
            .ibox-pd-b-c{
                margin-top: 30px;
                border: 2px;
                padding: 2px;
                background-color: aquamarine;
            }
        </style>
    </head>
    <body>
        <div class="col-lg-12">
            <div class="ibox-pd-b-c">
                <div class="flex justify-center">
                    <h1>.flex justify-center</h1>
                </div>
            </div>
            <div class="ibox-pd-b-c">
                <div class="item-center">
                    <h1>.item-center</h1>
                </div>
            </div>
        </div>
        <div class="ibox-cpntent flex justify-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    ...
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
        </div>

    {{-- Script Bootstrap --}}
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    </body>
</html>
