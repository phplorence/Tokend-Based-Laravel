<?php
/**
 * Created by PhpStorm.
 * User: lorence
 * Date: 27/08/2018
 * Time: 10:30
 */
?>
        <!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
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

        .content {
            text-align: center;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <form method="post" action="{{route('note.store')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputEmail1"><strong>Note text</strong></label>
                <input name="text" class="form-control" id="example" placeholder="Your text here!!!">
                <input name="api_token" value="ATNeeS1fZSmzj2Kn7VsQdhLTJ6TIMaNQlpY5g6rK5G06n1jT2kaQmTGK426p">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

