@props(['property'])
<div class="bg-transparent text-primary-50 absolute left-3 bottom-0">
    <div class="w-fit mx-auto">
        <span class="inline-block text-secondary-50 bg-secondary-600 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$property->purchasetype}}</span>
        <span class="inline-block text-secondary-50 bg-secondary-600 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$property->propertytype}}</span>
    </div>
</div>
<div class="bg-transparent absolute right-3 bottom-0">
    <div class="w-fit mx-auto">
        <span class="inline-block text-secondary-50 bg-secondary-600 rounded px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">${{number_format($property->price)}}</span>
    </div>
</div>
