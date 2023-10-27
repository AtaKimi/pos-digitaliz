<button type="button"
    class="pl-4 pt-1 text-sm font-semibold text-center inline-flex items-center focus:ring-gray-300 text-red-500">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 12H19M5 12L11 18M5 12L11 6" stroke="#F54748" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
    </svg>
    <span>{{ $slot ?? 'Back Button' }}</span>
</button>
