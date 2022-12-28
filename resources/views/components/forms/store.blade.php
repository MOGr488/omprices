@if($errors->any())
<div class="bg-red-100 border border-red-400 text-red-500 px-4 py-3 rounded relative" role="alert">
  <ul class="list-disc">
  @foreach($errors->all() as $error)
    <li><strong class="font-bold">{{ $error }}</strong></li>

    @endforeach
  </ul>
</div>


@endif
<form action="/store" method="POST">
  @csrf
    <div class="overflow-hidden shadow sm:rounded-md">
      <div class="bg-white px-4 py-5 sm:p-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label for="storeName" class="block text-sm font-medium text-gray-700">Store Name</label>
            <input type="text" name="storeName" id="storeName" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('storeName') }}" >
          </div>
  
          <div class="col-span-6 sm:col-span-3">
            <label for="contactNumber" class="block text-sm font-medium text-gray-700">Contact Number</label>
            <input type="number" name="contactNumber" id="contactNumber" autocomplete="tel" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" min='0' step="any" value="{{ old('contactNumber') }}">
          </div>
            
          <div class="col-span-6 sm:col-span-3">
            <label for="Region" class="block text-sm font-medium text-gray-700">Region</label>
            <select id="Region" name="Region" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              @props(['regions'])
              <option value='x'>Select The Region</option>
              @foreach ($regions as $region)
              <option value="{{$region->id}}">{{$region->regionName}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label for="Wilayah" class="block text-sm font-medium text-gray-700">Wilayah</label>
            <select id="Wilayah" name="Wilayah" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              
             <option value='x'>Select a Wilayah</option>
            </select>
          </div>

       
            <div class="col-span-6 sm:col-span-3">
              <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
              <input type="text" name="location" id="location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('location') }}">
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="website" class="block text-sm font-medium text-gray-700">Website</label>
              <input type="text" name="website" id="website" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ old('website') }}">
            </div>
    
    
        </div>
      </div>
      <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
        <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
      </div>
      
    </div>
  </form>


  
  {{-- <script src="{{ asset('wilayatrequest.js') }}"></script> --}}
 
  <script>
    // In your JavaScript file

document.addEventListener('DOMContentLoaded', () => {
        
    const regionSelect = document.getElementById('Region');
    const citySelect = document.getElementById('Wilayah');

    regionSelect.addEventListener('change', () => {
        const regionId = regionSelect.value;

        // Make an AJAX request to retrieve the list of cities for the selected region
        fetch(`/cities?region_id=${regionId}`)
            .then(response => response.json())
            .then(cities => {
                // Clear the current options in the city select box
                citySelect.innerHTML = '<option value="x">Select a Wilayah</option>';

                // Add the new options to the city select box
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.text = city.wilayah;
                    citySelect.appendChild(option);
                });
            });
    });
});

  </script>