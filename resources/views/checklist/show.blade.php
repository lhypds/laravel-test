<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <title>Checklist</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <a class="btn btn-primary" href="{{ action('Web\ChecklistController@edit', ['id' => $checklist->id]) }}">Edit</a>
        <form action="{{ action('Web\ChecklistController@destroy', ['id' => $checklist->id]) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger" href="">Delete</button>
        </form>
        <table class="table">
            <tr>
                <td>Name</td>
                <td>{{ $checklist->name}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{ $checklist->is_completed}}</td>
            </tr>
            <tr>
                <td>Created At</td>
                <td>{{ $checklist->created_at}}</td>
            </tr>
            <tr>
                <td>Updated At</td>
                <td>{{ $checklist->updated_at}}</td>
            </tr>
        </table>
    </body>
</html>
