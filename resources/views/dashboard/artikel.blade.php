<x-dashboard.main title="Kelola artikel">
    <div class="grid sm:grid-cols-2 gap-5 md:gap-6">
        @foreach (['total_artikel', 'artikel_terbaru'] as $type)
            <div class="flex items-center px-4 py-3 bg-neutral border-back rounded-xl">
                <span
                    class="{{ $type == 'total_artikel' ? 'bg-blue-300' : '' }} {{ $type == 'artikel_terbaru' ? 'bg-amber-300' : '' }} p-3 mr-4 text-white rounded-full"></span>
                <div>
                    <p class="text-sm font-medium capitalize text-white line-clamp-1">
                        {{ str_replace('_', ' ', $type) }}
                    </p>
                    <p class="text-lg font-semibold text-white line-clamp-1">
                        {{ $type == 'total_artikel' ? $total_artikel ?? '-' : '' }}
                        {{ $type == 'artikel_terbaru' ? $artikel_terbaru->title ?? '-' : '' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex flex-col lg:flex-row gap-5">
        @foreach (['tambah_artikel'] as $item)
            <a href="{{ route('create_article') }}"
                class="flex items-center justify-between p-5 sm:p-7 hover:shadow-md active:scale-[.97] border border-blue-200 bg-neutral cursor-pointer border-back rounded-xl w-full">
                <div>
                    <h1 class="flex items-start gap-3 font-semibold font-[onest] sm:text-lg capitalize">
                        {{ str_replace('_', ' ', $item) }}
                    </h1>
                    <p class="text-sm opacity-60">
                        {{ $item == 'tambah_artikel' ? 'Menambahkan artikel terbaru' : '' }}
                    </p>
                </div>
                <x-lucide-plus class="{{ $item == 'tambah_artikel' ? '' : 'hidden' }} size-5 sm:size-7 opacity-60" />
            </a>
        @endforeach
    </div>
    <div class="flex gap-5">
        @foreach (['kelola_artikel'] as $item)
            <div class="flex flex-col border-back rounded-xl w-full">
                <div class="p-5 sm:p-7 bg-neutral rounded-t-xl">
                    <h1 class="flex items-start gap-3 font-semibold font-[onest] text-lg capitalize">
                        {{ str_replace('_', ' ', $item) }}
                    </h1>
                </div>
                <div class="flex flex-col bg-neutral rounded-b-xl gap-3 divide-y pt-0 p-5 sm:p-7">
                    <div class="overflow-x-auto">
                        <table class="table table-zebra">
                            <thead>
                                <tr>
                                    @foreach (['no', 'judul'] as $item)
                                        <th class="uppercase font-bold text-center">{{ $item }}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($artikel as $i => $item)
                                    <tr>
                                        <th class="text-center">{{ $i + 1 }}</th>
                                        <td class="font-semibold capitalize text-center">{{ $item->title }}</td>
                                        <td class="flex items-center gap-4">
                                            <x-lucide-pencil class="size-5 hover:stroke-yellow-500 cursor-pointer"
                                                onclick="window.location.href='{{ route('edit.artikel', ['id' => $item->id]) }}';" />

                                            <x-lucide-trash class="size-5 hover:stroke-red-500 cursor-pointer"
                                                onclick="document.getElementById('hapus_modal_{{ $item->id }}').showModal();" />
                                            <dialog id="hapus_modal_{{ $item->id }}"
                                                class="modal modal-bottom sm:modal-middle">
                                                <div class="modal-box bg-base-100">
                                                    <h3 class="text-lg font-bold capitalize">Hapus {{ $item->judul }}
                                                    </h3>
                                                    <div class="mt-3">
                                                        <p class="text-white font-semibold">Perhatian! Anda sedang
                                                            mencoba untuk menghapus artikel <strong
                                                                class="text-white font-bold">{{ $item->title }}</strong>.
                                                            <span class="text-zinc">Tindakan ini akan menghapus semua
                                                                data terkait. Apakah Anda yakin ingin
                                                                melanjutkan?</span>
                                                        </p>
                                                    </div>
                                                    <div class="modal-action">
                                                        <button type="button"
                                                            onclick="document.getElementById('hapus_modal_{{ $item->id }}').close()"
                                                            class="btn">Batal</button>
                                                        <form action="{{ route('destroy_article', $item->id) }}"
                                                            method="POST" class="inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </dialog>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center font-gray-500" colspan="6">Tidak ada artikel</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-dashboard.main>
