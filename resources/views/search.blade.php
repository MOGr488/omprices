<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            border-radius: 20px;
        }
    </style>
</head>

<body>
    
    <form action="/searchResult" method="GET">
    <div class="container position-absolute top-50 start-50 translate-middle"
        style="padding: 20px; background-color:rgb(112, 187, 209);">
        <input class="form-control form-control-lg" type="text" placeholder="Enter Keywords"
            aria-label=".form-control-lg example">
        <hr style="color:black">
        <h5 style="text-align: center;">ADVANCED SEARCH</h5>
        <div class="row">
            <div class="col-md-6" style="padding: 10px;">
                <select class="form-select" aria-label="Default select example" name="region">
                    <option selected>Select a region</option>
                    @foreach ($regions as $region)
                    <option value="{{$region->id}}">{{$region->regionName}}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="col-md-6" style="padding: 10px;">
                <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Select a category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->CatName }}</option>
                   @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-dark" type="sumbit" style="width: 20%; margin-top:30px; float: right;">Search</button>
    </div>
</form>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script> --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        
</body>

</html>