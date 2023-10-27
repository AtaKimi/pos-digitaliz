
<div class="flex gap-5 w-full bg-white-50 border-b-2 pb-8 mb-8">
    <div class="">
        <img src="{{ $data->getFirstMediaUrl('default') }}" alt="" class="w-20 h-20 rounded-full">
    </div>
    <div class="flex flex-col justify-center gap-2">
        <h4 class="text-2xl">{{ $data->name }}</h4>
        <label for="dropzone-file"
            class=" w-fit flex flex-col items-center justify-center border-2 border-red-500 rounded-lg cursor-pointer p-2">
            <div class="flex flex-col items-center justify-center">
                <p class="text-sm text-red-500"><span class="font-semibold">Upload New Photo</span></p>
            </div>
            <input id="dropzone-file" type="file" name="image" class="hidden"
                onchange="this.closest('form').submit()" />
        </label>
    </div>
</div>
