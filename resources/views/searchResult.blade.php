<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> 
    <x-nav-bar-guest />
</head>
<body>
    <main>
    <h1>Search Result</h1>
    {{-- {{ dump($products) }} --}}

    <section class="py-5 text-center container">
       
    
      <div class="album py-5 bg-light">
        <div class="container">
    
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            @unless (count($products) == 0)
            @foreach ($products as $product)
            <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
      
                  <div class="card-body">
                    <h5 class="card-title">{{ $product['productName'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $product['storeName'] }}</h6>

                    <ul class="list-group list-group-flush">
                      
                      <li class="list-group-item">Price : <strong>{{ $product['productPrice'] }}</strong></li>
                     
                    </ul>
                    
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        
                        <a href="{{ $product['storeLocation'] }}" target="_blank" class="btn btn-sm btn-outline-secondary">Location</a>
                        <a href="{{ $product['website'] }}" target="_blank" class="btn btn-sm btn-outline-secondary {{ empty($product['website']) ? 'disabled' : '' }}"  >Website</a>
          

                      </div>
                      <small class="text-muted">{{ $product['wilayah'] }}</small>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              @else
              <h2>No Products Found</h2>
          @endunless
          </div>
        </div>
      </div>
    

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>



