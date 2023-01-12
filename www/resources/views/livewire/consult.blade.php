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
    
    <div class="p-6 sm:p-20 sm:pt-6">
        <div class="container">
            @if ($response)
                @foreach ($response as $item)
                    Dados da transação:
                    <li>id: {{$item->id}}</li>
                    <li>mesExtrato: {{$item->mesExtrato}}</li>
                    <li>dataTransacao: {{$item->dataTransacao}}</li>
                    <li>valorTransacao: {{$item->valorTransacao}}</li>
                    Estabelecimento:
                    <li>nome: {{$item->estabelecimento->nome}}</li>
                    <li>tipo: {{$item->estabelecimento->tipo}}</li>
                    Unidade gestora:
                    <li>nome: {{$item->unidadeGestora->nome}}</li>
                    <li>poder: {{$item->unidadeGestora->descricaoPoder}}</li>
                    Portador:
                    <li>nome: {{$item->portador->nome}}</li>
                @endforeach
            @endif
            @if ($empty)
                <p>Nenhum dado encontrado</p>
            @endif
        </div>
    </div>
</div>
