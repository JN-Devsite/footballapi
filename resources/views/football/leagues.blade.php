<x-layout>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($data as $item)
        {{-- @dd($item) --}}
            <div class="border p-2">
                <div class="text-2xl font-bold text-sky-800">{{ $item['league']['name'] }}</div>
                <div class="flex">
                    <div class="flex-initial w-32 p-2"><img src="{{ $item['league']['logo'] }}" alt="" class="w-full h-auto"></div>
                    <div class="flex-1 w-32">
                        <div><span class="font-bold text-sky-800">Country:</span> {{ $item['country']['name'] }}</div>
                        <div>
                            <div class="font-bold text-sky-800">Seasons</div>
                            <div class="p-1 h-40 border overflow-y-auto">
                                @foreach ($item['seasons'] as $season)
                                    <div class="border mb-2 p-1 ">
                                        <h4>{{ $season['year'] }}</h4>
                                        <span class="font-bold">Start:</span> {{ $season['start'] }}
                                        <span class="font-bold">End:</span> {{ $season['end'] }}
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="pagination mt-3">{{ $data->links() }}</div>
</x-layout>
