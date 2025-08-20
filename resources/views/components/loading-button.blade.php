@props([
    'label' => 'Submit',
])

<button 
    type="{{ $attributes->get('type', 'submit') }}" 
    :disabled="loading" 
    class="w-full bg-bce-blue hover:bg-bce-light-blue text-white font-bold py-3 px-4 rounded-md transition duration-300"
    {{ $attributes->except('type') }}
>
    <template x-if="!loading">
        <span>{{ $label }}</span>
    </template>

    <template x-if="loading">
        <span class="flex items-center">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
            </svg>
            Loading...
        </span>
    </template>
</button>