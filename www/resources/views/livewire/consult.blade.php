<div>
    <div class="p-6 sm:p-20 sm:pt-6">
        <div class="container">
            <x-jet-form-section submit="submit">
                <x-slot name="title">
                    {{ __('Consultar') }}
                </x-slot>
                <x-slot name="description">
                    {{ __('Consultar') }}
                </x-slot>
                <x-slot name="form">
                    <div class="col-span-4">
                        <x-jet-label for="orgao" value="{{ __('Orgão') }}" />
                        <select name="orgao" wire:model="orgao" class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="" default>Selecione um orgão</option>
                            @foreach ($orgaos as $orgao)
                                <option value="{{ $orgao->id }}">{{ $orgao->nome }}</option>
                            @endforeach
                        </select>
                        @error('orgao') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-1">
                        <x-jet-label for="mes" value="{{ __('Mês') }}" />
                        <select name="mes" wire:model="mes" class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="01" default>01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        @error('mes') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-span-1">
                        <x-jet-label for="ano" value="{{ __('Ano') }}" />
                        <select name="ano" wire:model="ano" class="relative w-full cursor-default rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 text-left shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm">
                            <option value="2023" default>2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                        </select>
                        @error('ano') <span class="text-red-600 text-xs">{{ $message }}</span> @enderror
                    </div>
                </x-slot>
                <x-slot name="actions">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition bg-indigo-500 hover:bg-indigo-600">Consultar</button>
                </x-slot>
            </x-jet-form-section>
        </div>
    </div>
    @if ($empty)
    <hr>    
    <div class="p-6 sm:p-20 sm:pt-10">
        <div class="container">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Resultados da consulta</h3>
            <p class="pt-5">Nenhum dado encontrado</p>
        </div>
    </div>
    @endif
    @if ($response)
    <hr>    
    <div class="p-6 sm:p-20 sm:pt-10">
        <div class="container">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Resultados da consulta</h3>
            <ul role="list" class="grid grid-cols-1 gap-6 md:grid-cols-2 pt-5">
                @foreach ($response as $item)
                <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
                    <div class="flex w-full items-center justify-between space-x-6 p-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="truncate text-sm font-medium text-gray-900" title="{{$item->portador->nome}}">{{$item->portador->nome}}</h3>
                                <span class="flex-shrink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">{{$item->unidadeGestora->nome}}</span>
                            </div>
                            <div>
                            <p class="mt-1 truncate text-sm text-gray-500">PODER {{$item->unidadeGestora->descricaoPoder}}</p>
                            <p class="inline-flex" title="{{$item->estabelecimento->nome}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <span class="ml-3">{{$item->estabelecimento->nome}}</span>
                            </p>
                            </div>
                            <div>
                            <p class="inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="ml-3">R$ {{$item->valorTransacao}}</span>
                            </p>
                            </div>
                            <div>
                            <p class="inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                                </svg>
                                <span class="ml-3">Data do gasto: {{$item->dataTransacao}}</span>
                            </p>
                            </div>
                            <div>
                            <p class="inline-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                </svg>
                                <span class="ml-3">Mês do gasto: {{$item->mesExtrato}}</span>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
</div>
