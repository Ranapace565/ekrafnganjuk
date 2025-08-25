{{-- <div class="d-flex flex-column w-100 py-7">

    <div class="overflow-x-scroll flex py-4 gap-4 flex-row card px-4 ">
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
        <x-ui.card-low></x-ui.card-low>
    </div>
</div> --}}

<section id="creativeCenter" class="flex flex-col items-center py-10 bg-gray-50 dark:bg-gray-900 transition-colors">
    <h1 class="mb-10 text-3xl font-bold text-gray-900 dark:text-white page4-textboxUp">Creative Center</h1>

    <div class="w-full px-4 flex justify-center">
        <div id="section-article" class="w-full max-w-7xl fade-section page5-cardUp13-2">
            <div class="flex flex-row gap-6 overflow-x-auto px-2 pb-6 dark:dark scrollbar-custom ">
                @foreach ($Sectors as $index => $sector)
                    @if ($loop->iteration % 2 == 1)
                        <x-ui.card-low title="{{ $sector->name }}" :description="$sector->description" icon="{{ $sector->icon }}"
                            size="w-[500px]" />
                    @endif
                @endforeach
            </div>

            {{-- Card Bawah --}}
            <div class="flex flex-row gap-6 overflow-x-auto px-2 py-4 scrollbar-custom page4-cardRight">
                @foreach ($Sectors as $index => $sector)
                    @if ($loop->iteration % 2 == 0)
                        <x-ui.card-low title="{{ $sector->name }}" :description="$sector->description" icon="{{ $sector->icon }}"
                            size="w-[500px]" />
                    @endif
                @endforeach
            </div>


        </div>
    </div>


</section>

<script src="resources/js/visitor/index/page4.js"></script>
<script src="resources/js/visitor/index/animationSlider.js"></script>
{{-- @vite('resources/js/visitor/index/animationSlider.js') --}}
