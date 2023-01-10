@props(['store'])
<strong>Store Name:</strong>
<p>{{ $store->store->storeName }}</p><br>
<strong>Contact Number:</strong>
<p>{{ $store->store->contactNumber }}</p><br>

<strong>Store Website:</strong>
<p>{{ $store->store->website ?? 'Not provided' }}</p><br>


<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<strong>Store Location:</strong>
<a href="{{ $store->store->storeLocation }}" target="_blank">
    <span class="material-symbols-outlined">
    where_to_vote
    </span>
    Google Map</a><br>


