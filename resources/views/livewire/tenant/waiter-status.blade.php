<div class="flex justify-center">
    <label class="relative inline-flex items-center cursor-pointer">
        <input wire:click="toggleActive" type="checkbox" class="sr-only peer"
            @if ($waiter->is_active) checked @endif>
        <div
            class="w-20 h-8 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-red-300 dark:peer-focus:ring-red-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-11 peer-checked:after:border-white after:content-[''] after:absolute after:top-1 after:left-[5px] after:bg-white after:border-gray-300 after:border-2 after:border-white-50 after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-red-500">
        </div>
    </label>
</div>
