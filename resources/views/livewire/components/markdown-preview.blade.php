<div class="space-y-2">
    <div class="flex items-center justify-between mb-2">
        <label class="text-sm font-medium text-gray-700 dark:text-gray-300">
            Preview Markdown
        </label>
        <button type="button" wire:click="$refresh" wire:loading.attr="disabled"
            class="inline-flex items-center gap-1.5 px-2.5 py-1.5 text-xs font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700 transition disabled:opacity-50 disabled:cursor-not-allowed">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" wire:loading.class="animate-spin">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
            </svg>
            <span wire:loading.remove>Refresh</span>
            <span wire:loading>Refreshing...</span>
        </button>
    </div>

    <div
        class="prose prose-sm max-w-none dark:prose-invert bg-white dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 p-6 shadow-sm overflow-auto max-h-[600px] min-h-[200px]">
        @if (empty(trim(strip_tags($html ?? ''))))
            <p class="text-gray-400 dark:text-gray-600 italic text-center py-8">
                Mulai menulis untuk melihat preview...
            </p>
        @else
            {!! $html !!}
        @endif
    </div>
</div>
