<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="flex inline-flex">
        <img src="/images/logotipoCP.png" class="block h-16 my-3 w-auto" alt="">
    </div>

    <div class="text-2xl">
        {{ __('Bem-vindo ao sistema de consultas de Cartões de Pagamentos do Governo Federal') }}
    </div>

    <div class="mt-6 text-gray-500">
        Este sistema permite que você busque informações sobre os Cartões de Pagamentos do Governo Federal de forma mais simples e intuitiva. <br>
        Aqui será possível consultar gastos por meio de cartão de pagamento, filtrando por: órgão, mês e ano. <br>
        Navegue pelo menu superior para acessar as funcionalidades do sistema.
    </div>
</div>
<div class="p-6 sm:px-20 bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

    <div class="">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Documentação</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                O sistema foi desenvolvido para a disciplina de Sistemas de Informação Distribuídos do curso de Sistemas de Informação da Universidade Federal de Santa Maria (Frederico Westphalen).
            </div>

            <a href="https://github.com/brunavitoria/cartoesdepagamentos">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                    <div>Veja a documentação do projeto</div>
                    <div class="ml-1 text-indigo-500">
                        <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="pt-4 md:pt-0">
        <div class="flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="w-8 h-8 text-gray-400"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" /></svg>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">API utilizada</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Utilizamos a API de Gastos por meio de cartão de pagamento disponibilizada pelo Governo Federal através da API de dados do Portal da Transparência que é de livre utilização, conforme previsto no 
                DECRETO Nº 8.777, DE 11 DE MAIO DE 2016.
            </div>

            <a href="http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2016/decreto/D8777.htm">
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>Veja o decreto</div>

                        <div class="ml-1 text-indigo-500">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </div>
                </div>
            </a>
        </div>
    </div>
</div>