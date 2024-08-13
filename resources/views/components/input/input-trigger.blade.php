<div x-data="{ aiPromptIsVisible: false }" class="fixed bottom-5 z-10 w-full max-w-xl" x-on:click.away="aiPromptIsVisible = false" x-on:keydown.cmd.shift.a.window.prevent="aiPromptIsVisible = ! aiPromptIsVisible" x-on:keydown.ctrl.shift.a.window.prevent="aiPromptIsVisible = ! aiPromptIsVisible" x-on:keydown.esc.window.prevent="aiPromptIsVisible = false">
    <div x-show="aiPromptIsVisible" class="relative w-full" x-transition" x-trap="aiPromptIsVisible">
    <label for="aiPromt" for="aiPromt" class="sr-only">ai prompt</label>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" aria-hidden="true" class="absolute left-3 top-1/2 size-4 -translate-y-1/2 fill-blue-700 dark:fill-blue-600">
        <path fill-rule="evenodd" d="M5 4a.75.75 0 0 1 .738.616l.252 1.388A1.25 1.25 0 0 0 6.996 7.01l1.388.252a.75.75 0 0 1 0 1.476l-1.388.252A1.25 1.25 0 0 0 5.99 9.996l-.252 1.388a.75.75 0 0 1-1.476 0L4.01 9.996A1.25 1.25 0 0 0 3.004 8.99l-1.388-.252a.75.75 0 0 1 0-1.476l1.388-.252A1.25 1.25 0 0 0 4.01 6.004l.252-1.388A.75.75 0 0 1 5 4ZM12 1a.75.75 0 0 1 .721.544l.195.682c.118.415.443.74.858.858l.682.195a.75.75 0 0 1 0 1.442l-.682.195a1.25 1.25 0 0 0-.858.858l-.195.682a.75.75 0 0 1-1.442 0l-.195-.682a1.25 1.25 0 0 0-.858-.858l-.682-.195a.75.75 0 0 1 0-1.442l.682-.195a1.25 1.25 0 0 0 .858-.858l.195-.682A.75.75 0 0 1 12 1ZM10 11a.75.75 0 0 1 .728.568.968.968 0 0 0 .704.704.75.75 0 0 1 0 1.456.968.968 0 0 0-.704.704.75.75 0 0 1-1.456 0 .968.968 0 0 0-.704-.704.75.75 0 0 1 0-1.456.968.968 0 0 0 .704-.704A.75.75 0 0 1 10 11Z" clip-rule="evenodd" />
    </svg>
    <input id="aiPromt" type="text" class="w-full border-outline bg-slate-100 border border-slate-300 rounded-xl px-2 py-2 pl-10 pr-24 text-sm text-slate-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 disabled:cursor-not-allowed disabled:opacity-75 dark:border-slate-700 dark:bg-slate-800/50 dark:text-slate-300 dark:focus-visible:outline-blue-600" name="prompt" placeholder="Ask AI to generate ..." />
    <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer bg-blue-700 rounded-xl px-2 py-1 text-xs tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">Generate</button>
</div>
