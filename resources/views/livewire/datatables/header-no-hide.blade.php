@unless($column['hidden'])
    <div
        @if (isset($column['tooltip']['text'])) title="{{ $column['tooltip']['text'] }}" @endif
                                                class="relative table-cell h-12 overflow-hidden align-top" @include('datatables::style-width')>
        @if($column['sortable'])
            <button wire:click="sort('{{ $index }}')" class="w-full h-full px-6 py-3 border-b border-black bg-project-primary text-left text-sm leading-4 font-bold text-black tracking-wider flex items-center focus:outline-none @if($column['headerAlign'] === 'right') justify-end @elseif($column['headerAlign'] === 'center') justify-center @endif">
                <span class="inline ">{{ str_replace('_', ' ', $column['label']) }}</span>
                <span class="inline text-sm text-blue-400">
                    @if($sort === $index)
                        @if($direction)
                            <x-icons.chevron-up wire:loading.remove class="w-6 h-6 text-black stroke-current" />
                        @else
                            <x-icons.chevron-down wire:loading.remove class="w-6 h-6 text-black stroke-current" />
                        @endif
                    @endif
                </span>
            </button>
        @else
            <div class="w-full h-full px-6 py-3 border-b border-black bg-project-primary text-left text-sm leading-4 font-bold text-black tracking-wider flex items-center focus:outline-none @if($column['headerAlign'] === 'right') justify-end @elseif($column['headerAlign'] === 'center') justify-center @endif">
                <span class="inline ">{{ str_replace('_', ' ', $column['label']) }}</span>
            </div>
        @endif
    </div>
@endif
