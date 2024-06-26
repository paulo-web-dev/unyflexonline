<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MercadoPago\MercadoPagoConfig;
use MercadoPago\SDK;
use MercadoPago\MercadoPago;    
use MercadoPago\Preference;
use Ramsey\Uuid\Uuid;
class IndexController extends Controller
{
  
    public function home(){
     
        return view('home2');
    }

    public function assinatura(){

        SDK::setAccessToken("APP_USR-5859280420867869-121113-ca91f069250d0ca4925dc33b074357ca-1495697079");
        
        // Criar uma preferência com as informações do produto
        $preference = new Preference();
        $preference->items = [
            [   'id'          => Uuid::uuid4()->toString(),
                'title'      => 'Cursos Unyflex',
                'quantity'   => 1,
                'currency_id'=> 'BRL',
                'unit_price' => 0.6, 
                'installments' => 12   
            ],
            // Adicione mais itens conforme necessário
        ];
        $preference->back_urls = array(
           "success" => 'https://unyflex.com.br/',
           "failure" => "https://online.unyflex.com.br/finalizacao/failure/0",
           "pending" => "https://online.unyflex.com.br/finalizacao/pending/0"
       ); 
       $preference->auto_return = "approved";
               // Configurações de pagamento
               $payment_methods = [
                   'excluded_payment_methods'=> [], 
                   'excluded_payment_types'=> [],
                   'installments'=> 12
               ];
       $preference->payment_methods = $payment_methods; 
         
        $preference->save();
        return view('assinatura', [
            'preference' => $preference,
        ]);
    }
}
