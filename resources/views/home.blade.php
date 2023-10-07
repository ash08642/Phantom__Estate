<x-layout>
<h1>Home Page</h1>
<h3>{{$office}}</h3>
@php
    $test = 1;
    echo '<h1>'. $test . '</h1>'
@endphp
@foreach ($sponseredAds as $Ad)
    <h2>{{$Ad['title']}}</h2>
    <h4>{{$Ad['description']}}</h4>
@endforeach

<p class="text-lg font-semibold">
        “Tailwind CSS is the only framework that I've seen scale
        on large teams. Its easy to customize, adapts to any design,
        and the build size is tiny.”
      </p>
      <p>
        “Tailwind CSS is the only framework that I've seen scale
        on large teams. Its easy to customize, adapts to any design,
        and the build size is tiny.”
      </p>
</x-layout>