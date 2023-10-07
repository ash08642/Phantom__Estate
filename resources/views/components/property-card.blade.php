@props(['property'])

<a href="/Properties/{{$property->id}}" class="mx-auto my-4 md:m-4 bg-gray-100 w-96 md:w-80 transform transition duration-500 hover:scale-105 rounded overflow-hidden shadow-lg">
    <?php if($property->photo) : ?>
        <img class="h-48 w-full" src="{{asset('storage/' . $property->photo)}}" alt="">
    <?php else : ?>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-48 w-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
        </svg>
    <?php endif; ?>
    <div class="h-full bg-primary-300 px-6 py-4">
        <div class="text-primary-950 mx-auto w-fit font-bold text-xl mb-2">
            <h3>{{$property->title}}</h3>
        </div>
        <div class="text-primary-950 text-base">
            {{$property->street}}, {{$property->city}}
        </div>
        <div class="mb-12 text-primary-950 text-base">
            {{$property->plz}}, {{$property->state}}
        </div>
        <x-property-tags :property="$property" />
    </div>
</a>