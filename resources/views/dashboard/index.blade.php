<x-dashboard.main title="Dashboard">
    <div class="grid sm:grid-cols-1 xl:grid-cols-3 gap-5 md:gap-6">
        @foreach (['total_tag', 'total_category', 'total_artikel'] as $type)
            <div class="flex items-center px-4 py-3 bg-base-100 border-back rounded-xl">
                <span
                    class="
                      {{ $type == 'total_tag' ? 'bg-blue-300' : '' }}
                      {{ $type == 'total_category' ? 'bg-green-300' : '' }}
                      {{ $type == 'total_artikel' ? 'bg-rose-300' : '' }}
                      p-3 mr-4 text-gray-700 rounded-full"></span>
                <div>
                    <p class="text-sm font-medium capitalize text-white line-clamp-1">
                        {{ str_replace('_', ' ', $type) }}
                    </p>
                    <p class="text-lg font-semibold text-white line-clamp-1">
                        {{ $type == 'total_tag' ? $totaltag ?? '- ': '' }}
                        {{ $type == 'total_category' ? $totalcategory ?? '- ': '' }}
                        {{ $type == 'total_artikel' ? $totalartikel ?? '- ': '' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>  

</x-dashboard.main>