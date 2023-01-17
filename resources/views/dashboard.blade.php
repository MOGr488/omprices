<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if (session()->has('success'))
                <div class="bg-green-200 text-green-800 p-4 rounded-md">
                    {{ session()->get('success') }}
                </div>
              @endif

              @if (session()->has('error'))
              <div class="bg-red-200 text-red-800 p-4 rounded-md">
                  {{ session()->get('error') }}
              </div>
            @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    @if($userHasStore)                
                    <p>{{ $store->contactNumber }}</p><br>
                    <x-forms.store-information :store='$store' />         
                    @else
                        <x-forms.store :regions='$regions' />
                    @endif

                      
                   


                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
