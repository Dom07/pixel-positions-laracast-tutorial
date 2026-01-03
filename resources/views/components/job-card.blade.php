 @props(['job'])
 
 <div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 text-xl font-bold">
            <a href="{{  $job->url }}" target="_blank">{{  $job->title }}</a>
        </h3>
        <p class="text-sm mt-4">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-tag size="small" :tag="$tag"/>
            @endforeach
        </div>

        <img src="{{ asset('storage/' . $job->employer->logo) }}" alt="" class="rounded-xl" width="{{ 90 }}">
    </div>
</div>