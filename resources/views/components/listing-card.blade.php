@props(['listing1'])

<x-card>
    <div class="flex">
        <img
            class="hidden w-48 mr-6 md:block"
            src="{{$listing1->logo ? asset('storage/' . $listing1->logo) : asset('/images/no-image.png')}}" alt="" 
        />

        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing1->id}}">{{$listing1->title}}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing1->company}}</div>
            <x-listing-tag :tagCsv="$listing1->tag"></x-listing-tag>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i>{{$listing1->location}}
            </div>
        </div>
    </div>
</x-card>
