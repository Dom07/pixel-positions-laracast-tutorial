 @props(['job'])

 <div class="p-4 bg-white/5 rounded-xl flex flex-row gap-x-6 border border-transparent hover:border-blue-800 group transition-colors duration-300">
    <div>
        <img src="{{ asset('storage/' . $job->employer->logo) }}" alt="" class="rounded-xl">
    </div>
    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
        <h3 class="group-hover:text-blue-600 transition-colors duration-300 font-bold text-lg mt-3 text-xl">
            <a href="{{  $job->url }}" target="_blank">{{  $job->title }}</a>
        </h3>
        <p class="mt-auto">{{ $job->schedule }} - From {{ $job->salary }}</p>
    </div>

    <div>
        @foreach($job->tags as $tag)
            <x-tag :tag="$tag"/>
        @endforeach
    </div>        
</div>