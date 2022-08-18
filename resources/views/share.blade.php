<x-app-layout>
    <div class="py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white relative shadow-xl sm:rounded-lg py-10 px-5">
                <div class="absolute -top-3 left-5">Share a Youtube movie</div>
                <form method="POST" action="{{ route('store-share') }}">
                    @csrf
                    <div class="grid grid-cols-4 gap-4 items-center">
                        <div class="">
                            <label for="url">Youtube URL:</label>
                        </div>
                        <div class="col-span-3">
                            <input type="text" value="{{ old('url') }}" name="url" class="form-input
                                                    px-4
                                                    py-3
                                                    w-full
                                                    rounded-md
                                                    bg-gray-200
                                                    @error('url') border-red @enderror
                                                    border-transparent
                                                    focus:border-gray-500 focus:bg-gray-100 focus:ring-0">
                        </div>
                        <div class="col-start-2 col-span-3">
                            @error('url')
                                <div class="text-red-400 mb-5">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 items-center">
                        <div class="">
                            <label for="title">Title:</label>
                        </div>
                        <div class="col-span-3">
                            <input type="text" value="{{ old('title') }}" name="title" class="form-input
                                                    px-4
                                                    py-3
                                                    w-full
                                                    rounded-md
                                                    bg-gray-200
                                                    @error('title') border-red @enderror
                                                    border-transparent
                                                    focus:border-gray-500 focus:bg-gray-100 focus:ring-0">
                        </div>
                        <div class="col-start-2 col-span-3">
                            @error('title')
                                <div class="text-red-400 mb-5">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="">
                            <label for="desc">Description:</label>
                        </div>
                        <div class="col-span-3">
                            <textarea name="desc" class="form-input
                                                    px-4
                                                    py-3
                                                    w-full
                                                    rounded-md
                                                    bg-gray-200
                                                    @error('desc') border-red @enderror
                                                    border-transparent
                                                    focus:border-gray-500 focus:bg-gray-100 focus:ring-0">{{ old('desc') }}</textarea>
                        </div>
                        <div class="col-start-2 col-span-3">
                            @error('desc')
                                <div class="text-red-400 mb-5">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4 items-center">
                        <div class="col-start-2 col-span-3">
                            <button type="submit" class="bg-gray-100 mt-5 p-3 rounded-md w-full">Share</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
