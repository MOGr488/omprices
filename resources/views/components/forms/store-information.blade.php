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

    

<form method="POST" action="{{ route('stores.destroy', $store->store->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white my-3 py-2 px-4 rounded-full">Delete Store</button>
    </form>
    