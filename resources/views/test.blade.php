<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>
<body>
        <h1>Test Page</h1>
        <h2>Products</h2>
        <ol>
            @foreach($products as $product)
                <li>
                    {{ $product->productName }}
                    <ul>
                        @foreach($product->prices as $price)
                            <li>
                                <strong>Store: </strong> {{ $price->store->storeName }} /
                                <strong>Price: </strong> {{ $price->productPrice }}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ol>
        
        
        <hr>
        
        <h2>Stores</h2>
        <ol>
            @foreach($stores as $store)
                <li>
                    {{ $store->storeName }}
                    <ul>
                        @foreach($store->prices as $price)
                            <li>
                                <strong>Product: </strong> {{ $price->product->productName }} /
                                <strong>Price: </strong> {{ $price->productPrice }}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ol>


</body>
</html>