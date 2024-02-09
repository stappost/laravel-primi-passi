<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="d-flex justify-content-between pt-2">
                        <h2 class="text-light">Logo</h2>
                        <ul class="list-unstyled d-flex pt-2">
                            <li>
                                <a href="{{ route('homepage') }}" class="btn btn-sm btn-primary mx-3">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about_us') }}" class="btn btn-sm btn-primary mx-3">About us</a>
                            </li>
                            <li>
                                <a href="{{ route('shop') }}" class="btn btn-sm btn-primary mx-3">Shop</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="conainer">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">About us</h1>
            </div>
        </div>
    </div>
</body>

</html>
