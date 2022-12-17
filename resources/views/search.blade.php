<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search result</title>
</head>
<body>
    <h1>Search Result</h1>
    {{ dump($products) }}

    @unless (count($products) == 0)
    <ol>
        @foreach ($products as $product)
        
           <li><h3>{{ $product->productName }}</h3></li>
                <ul>
                    {{-- @foreach($product->prices as $price)
                            <li>
                                <strong>Store: </strong> {{ $price->store->storeName }} / --}}
                                {{-- <strong>Price: </strong> {{ $price->productPrice }} --}}
                                {{-- / <strong>wilayah: </strong> {{ $price->store->wilayah->wilayah }} -> <strong>Region: </strong> {{ $price->store->wilayah->region->regionName }} --}}
                            {{-- </li>
                            @endforeach --}}
                </ul>  
        @endforeach
    </ol> 
        @else
        <h2>No Products Found</h2>
    @endunless

    


</body>
</html>