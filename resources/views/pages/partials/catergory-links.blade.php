
<ul class="list-disc pl-5 space-y-2 text-gray-700 mb-6">
         @foreach($catergoryLinks->pages as $link)
                    <li><a href="{{$catergoryLinks->slug}}/{{$link->slug ?? 'NAN'}}" class="text-bce-blue hover:text-bce-accent transition">{{$link->title ?? 'NAN'}}</a></li>
        @endforeach
</ul>