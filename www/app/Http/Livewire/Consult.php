<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Orgao;

class Consult extends Component
{
    public $submit;
    public $orgãos;
    public $orgao;
    public $mes;
    public $ano;
    public $response = false;
    public $empty = false;

    protected $rules = [
        'orgao' => 'required',
        'mes' => 'required|string|size:2',
        'ano' => 'required',
    ];

    public function mount()
    {
        $this->submit = 'submit';
        $this->orgaos = Orgao::get();
        $this->mes = '01';
        $this->ano = '2023';
    }

    public function submit()
    {
        $this->empty = false;
        $this->validate();
        $orgao = Orgao::find($this->orgao)->codigo;
        $this->consultar($orgao, $this->mes, $this->ano);
    }

    public function consultar($orgao, $mes, $ano)
    {
        // Faz uma consulta na API e retorna os dados
        $url = "https://api.portaldatransparencia.gov.br/api-de-dados/cartoes?&codigoOrgao=" . $orgao . "&pagina=1&mesExtratoInicio=" . $mes ."/". $ano . "&mesExtratoFim=" . $mes ."/". $ano;

        $client = curl_init($url);    
    
        $headers = [env('API_GOV_KEY') . ': ' . env('API_GOV_VALUE')];    
    
        curl_setopt($client, CURLOPT_HTTPHEADER, $headers);
    
        curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    
        $response = curl_exec($client);
    
        $this->response = json_decode($response);
        // Se o response for vazio retornar empty
        if (empty($this->response)) {
            $this->empty = true;
        }
        curl_close($client);
    }

    public function render()
    {
        return view('livewire.consult');
    }
}
