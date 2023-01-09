@props(['store'])
<strong>Store Name:</strong>
<p>{{ $store->name }}</p><br>
<strong>Contact Number</strong>
<p>{{ $store->store->contactNumber }}</p><br>
<strong>Store Name:</strong>
<p>{{ $store->website }}</p><br>
<?php var_dump($store->toArray()); ?>
