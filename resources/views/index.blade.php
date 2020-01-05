<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VueTask</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>



        <div class="alert alert-success" role="alert">
            <div class="flex-center position-ref full-height">
                <div class="top-right links">
                        <a href="{{ url('task') }}">Tasks</a>
                        <a href="">New Task</a>
                        <a href="{{ route('search') }}">Search Task</a>
                </div>
            

            <div class="content">
                <div class="title m-b-md">
                    Tasks
                </div>

                
            </div>
        </div>
    </div>
    </body>
</html>
