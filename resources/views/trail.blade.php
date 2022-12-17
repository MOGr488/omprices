<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="/search" method="GET">
        <input type="text" name="search" value="" >

        <select name="region">
            @foreach ($regions as $region)
            <option value="{{$region->id}}">{{$region->regionName}}</option>
                
            @endforeach

        </select>
        <select name="category">
            @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->CatName }}</option>
                   @endforeach

        </select>
        <button type="submit">submit</button>
    </form>


</body>
</html>