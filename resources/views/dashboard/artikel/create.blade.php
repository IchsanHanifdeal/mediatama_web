<x-dashboard.main title="Bikin Artikel">
    <h3 class="text-lg font-bold text-white">Tambah artikel</h3>
    <div class="mt-3 bg-[#20293a] p-6 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('store_article') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="kategori_artikel" class="block mb-2 text-sm font-medium text-white">Kategori Artikel</label>
                <select id="id_kategori_artikel" name="id_kategori_artikel" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white">
                    <option value="">Pilih Kategori Artikel</option>
                    @foreach ($category as $i => $item)
                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="kategori_artikel" class="block mb-2 text-sm font-medium text-white">Tag Artikel</label>
                <select id="id_tag" name="id_tag" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white">
                    <option value="">Pilih Tag Artikel</option>
                    @foreach ($tag as $i => $item)
                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="author_id" class="block mb-2 text-sm font-medium text-white">Author Artikel</label>
                <select id="author_id" name="author_id" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white">
                    <option value="">Pilih Author Artikel</option>
                    @foreach ($author as $i => $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
                <input type="text" id="title" name="title" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white" />
            </div>
            <div class="mb-4">
                <label for="content" class="block mb-2 text-sm font-medium text-white">Content</label>
                <textarea name="content" id="content" class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white" cols="20"></textarea>
            </div>
            <div class="flex justify-between items-center space-x-3">
                <button type="button" onclick="document.getElementById('tambah_artikel_modal').close()"
                    class="btn bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg">Batal</button>
                <button type="submit"
                    class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Tambah</button>
            </div>
        </form>
    </div>
</x-dashboard.main>
