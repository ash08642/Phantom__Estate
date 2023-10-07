<x-layout>
<form method="POST" action="/Properties/{{$property->id}}" enctype="multipart/form-data" class="bg-gray-50 max-w-5xl mx-auto my-8 rounded border-2 p-6 shadow-xl">
  @csrf
  @method('PUT')
  <div class="border-b border-gray-900/10 pb-12">
    <h2 class="text-base font-semibold leading-7 text-gray-900">Property Information</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <div class="sm:col-span-4">
        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
        <div class="mt-2">
          <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
            <x-text-input id="title" class="block flex-1 py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 sm:text-sm sm:leading-6"
              type="text"
              name="title"
              value="{{(old('title') ?? $property->title)}}"
              placeholder="Fully Furnished Apartment"/>
          </div>
          @error('title')
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
              <p>{{$message}}</p>
            </div>
          @enderror
        </div>
      </div>

      <div class="col-span-full">
        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">About</label>
        <div class="mt-2">
          <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-gray-300 focus:border-secondary-500 focus:ring-secondary-500 rounded-md shadow-sm py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{(old('description') ?? $property->description)}}</textarea>
        </div>
        @error('description')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the Property.</p>
      </div>

      <div class="col-span-full">
        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Add a photo</label>
        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
          <div class="text-center">
          <?php if($property->photo) : ?>
                <img class="mx-auto w-48 text-gray-300" src="{{asset('storage/' . $property->photo)}}" alt="">
            <?php else : ?>
              <img id="picture" src="/images/27002.jpg" alt="" class="mx-auto w-48 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <?php endif; ?>
            <div class="mt-4 flex text-sm leading-6 text-gray-600">
              <label for="photo" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                <span>Upload a file</span>
                <input id="photo" name="photo" type="file" class="sr-only">
              </label>
              <p class="pl-1">or drag and drop</p>
            </div>
            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 border-b border-gray-900/10 pb-10">
    <div class="sm:col-span-3">
        <label for="propertytype" class="block text-sm font-medium leading-6 text-gray-900">Type of Property</label>
        <div class="mt-2">
          <select id="propertytype" name="propertytype" autocomplete="propertytype" class="block w-full border-gray-300 focus:border-secondary-500 focus:ring-secondary-500 rounded-md shadow-sm py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option value="{{$property->propertytype}}" selected hidden>
              {{$property->propertytype}}
            </option>
            <option>Apartment</option>
            <option>Home</option>
          </select>
        </div>
        @error('propertytype')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-3">
        <label for="purchasetype" class="block text-sm font-medium leading-6 text-gray-900">Type of Lease</label>
        <div class="mt-2">
          <select id="purchasetype" name="purchasetype" autocomplete="purchasetype" class="block w-full border-gray-300 focus:border-secondary-500 focus:ring-secondary-500 rounded-md shadow-sm py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option value="{{$property->purchasetype}}" selected hidden>
              {{$property->purchasetype}}
            </option>
            <option>Buy</option>
            <option>Rent</option>
          </select>
        </div>
        @error('purchasetype')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-3">
        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
        <div class="mt-2">
          <x-text-input id="price" class="block rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="number"
            name="price"
            value="{{(old('price') ?? $property->price)}}"/>
        </div>
        @error('price')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-2 sm:col-start-1">
        <label for="bedrooms" class="block text-sm font-medium leading-6 text-gray-900">Number of Bedrooms</label>
        <div class="mt-2">
          <x-text-input id="bedrooms" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="number"
            name="bedrooms"
            value="{{(old('bedrooms') ?? $property->bedrooms)}}"/>
        </div>
        @error('bedrooms')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-2">
        <label for="bathrooms" class="block text-sm font-medium leading-6 text-gray-900">Number of Bathrooms</label>
        <div class="mt-2">
          <x-text-input id="bathrooms" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="number"
            name="bathrooms"
            value="{{(old('bathrooms') ?? $property->bathrooms)}}"/>
        </div>
        @error('bathrooms')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-2">
        <label for="size" class="block text-sm font-medium leading-6 text-gray-900">Size (in meter squares)</label>
        <div class="mt-2">
          <x-text-input id="size" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="number"
            name="size"
            value="{{(old('size') ?? $property->size)}}"/>
        </div>
        @error('size')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
            <p>If your unsure about the exact size, then just add an estimate value</p>
          </div>
        @enderror
      </div>
  </div>
  <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
  <h2 class="text-base font-semibold leading-7 text-gray-900 sm:col-span-6">Property Location</h2>
    <div class="sm:col-span-3">
        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
        <div class="mt-2">
          <x-text-input id="country" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:max-w-xs sm:text-sm sm:leading-6"
            type="text"
            name="country"
            value="{{(old('country') ?? $property->country)}}"
            autocomplete="country-name"/>
        </div>
        @error('country')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="col-span-full">
        <label for="street" class="block text-sm font-medium leading-6 text-gray-900">Street address</label>
        <div class="mt-2">
          <x-text-input id="street" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="text"
            name="street"
            value="{{(old('street') ?? $property->street)}}"
            autocomplete="street-address"/>
        </div>
        @error('street')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-2 sm:col-start-1">
        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
        <div class="mt-2">
          <x-text-input id="city" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="text"
            name="city"
            value="{{(old('city') ?? $property->city)}}"
            autocomplete="home city"/>
        </div>
        @error('city')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-2">
        <label for="state" class="block text-sm font-medium leading-6 text-gray-900">State / Province</label>
        <div class="mt-2">
          <x-text-input id="state" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="text"
            name="state"
            value="{{(old('state') ?? $property->state)}}"
            autocomplete="address-level1"/>
        </div>
        @error('state')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-2">
        <label for="plz" class="block text-sm font-medium leading-6 text-gray-900">ZIP / Postal code</label>
        <div class="mt-2">
          <x-text-input id="plz" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="number"
            name="plz"
            value="{{(old('plz') ?? $property->plz)}}"
            autocomplete="postal-code"/>
        </div>
        @error('plz')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>{{$message}}</p>
          </div>
        @enderror
      </div>
  </div>

  <div class="border-b border-gray-900/10 pb-12 border-t pt-10 mt-10">
    <h2 class="text-base font-semibold leading-7 text-gray-900">Agent Information</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">Add Contact Information for potential clients to reach out to you.</p>

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
      <div class="sm:col-span-3">
        <label for="agentfirstname" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
        <div class="mt-2">
          <x-text-input id="agentfirstname" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="text"
            name="agentfirstname"
            value="{{(old('agentfirstname') ?? $property->agentfirstname)}}"
            autocomplete="given-name"/>
        </div>
        @error('plz')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>The First name field is missing</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-3">
        <label for="agentlastname" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
        <div class="mt-2">
          <x-text-input id="agentlastname" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="text"
            name="agentlastname"
            value="{{(old('agentlastname') ?? $property->agentlastname)}}"
            autocomplete="family-name"/>
        </div>
        @error('plz')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>The Last name field is missing</p>
          </div>
        @enderror
      </div>

      <div class="sm:col-span-4">
        <label for="agentemail" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
        <div class="mt-2">
          <x-text-input id="agentemail" class="block w-full rounded-md py-1.5 text-gray-900 shadow-sm ring-gray-300 sm:text-sm sm:leading-6"
            type="email"
            name="agentemail"
            value="{{(old('agentemail') ?? $property->agentemail)}}"
            autocomplete="email"/>
        </div>
        @error('plz')
          <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-2" role="alert">
            <p>The Contact Email field is missing</p>
          </div>
        @enderror
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/Properties/MyProperties" class="text-sm text-red-400 font-semibold leading-6 text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-secondary-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-secondary-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</x-layout>