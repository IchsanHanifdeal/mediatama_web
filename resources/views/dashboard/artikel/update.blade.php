<x-dashboard.main title="Edit Artikel">
    <h3 class="text-lg font-bold text-white">Edit Artikel</h3>
    <div class="mt-3 bg-[#20293a] p-6 rounded-lg shadow-lg">
        <form method="POST" action="{{ route('update_article', $article->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="author_id" class="block mb-2 text-sm font-medium text-white">Author Artikel</label>
                <select id="author_id" name="author_id" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white">
                    <option value="">Pilih Author Artikel</option>
                    @foreach ($author as $item)
                        <option value="{{ $item->id }}" 
                            {{ $article->author_id == $item->id ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title', $article->title) }}" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white" />
            </div>
            <div class="mb-4">
                <label for="content" class="block mb-2 text-sm font-medium text-white">Content</label>
                <textarea name="content" id="content" required
                    class="input input-bordered w-full bg-gray-600 border border-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-white" cols="20">{{ old('content', $article->content) }}</textarea>
            </div>
            <div class="flex justify-between items-center space-x-3">
                <a href="{{ route('article') }}" 
                    class="btn bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded-lg">Batal</a>
                <button type="submit"
                    class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</x-dashboard.main>
