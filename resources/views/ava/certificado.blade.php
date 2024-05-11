<html lang="pt" class="no-js"><head>
   
    <meta charset="utf-8">
    <title>Certificado Unyflex</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">   

    <?php

    $cpfnovos = Auth::user()->cpf;

function formatCnpjCpf( $value)
{
    $cnpj_cpf = preg_replace("/\D/", '', $value);

    if (strlen($cnpj_cpf) === 11) {
        return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cnpj_cpf);
    }

    return preg_replace("/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/", "\$1.\$2.\$3/\$4-\$5", $cnpj_cpf);
}

$cpfAluno = formatCnpjCpf($cpfnovos);
    ?>


<link rel="stylesheet" href="https://unipublicabrasil.com.br/aluno/css/bootstrap2.min.css"><style>

        td{
            width:600px;
            font-size:12px;
            font-weight:bold;
           
           
        }
        th{
            font-size:15px;
           
        }
        p{
            font-size:13px;
        }
		@media print {
			.botao_imprimir {
				display: none;
			}
		}
	</style><script src="https://www.googleadservices.com/pagead/conversion/429051028/?random=1650480984035&amp;cv=9&amp;fst=1650480984035&amp;num=1&amp;value=0&amp;label=rEabCOT-q4IDEJSZy8wB&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;gtm=2wg4i1&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Funyflex.com.br%2FcertificadoKIEIT&amp;ref=https%3A%2F%2Funyflex.com.br%2FassistirPresencial%2F2612&amp;tiba=Unyflex%20-%20Flexibilidade%20no%20Ensino%20Unip%C3%BAblica&amp;auid=645882134.1649094877&amp;hn=www.googleadservices.com&amp;bttype=purchase&amp;async=1&amp;rfmt=3&amp;fmt=4"></script><script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/429051028/?random=1650480984038&amp;cv=9&amp;fst=1650480984038&amp;num=1&amp;bg=ffffff&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=6&amp;u_tz=-180&amp;u_java=false&amp;u_nplug=5&amp;u_nmime=2&amp;gtm=2wg4i1&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Funyflex.com.br%2FcertificadoKIEIT&amp;ref=https%3A%2F%2Funyflex.com.br%2FassistirPresencial%2F2612&amp;tiba=Unyflex%20-%20Flexibilidade%20no%20Ensino%20Unip%C3%BAblica&amp;hn=www.googleadservices.com&amp;async=1&amp;rfmt=3&amp;fmt=4"></script></head>



<body onload="window.print()">

	<center>
		<div class="botao_imprimir">
			<p><a class="btn btn-default" href="javascript:window.print();">Imprimir</a></p>
		</div>
	</center>
	<div class="container">
    
		<div style="position: absolute;">
        
			<!--<img src="http://www.unipublicabrasil.com.br/aluno/img/certificado_presencial.jpg" style="width: 595px; height: 842px;">-->
                        <img src="https://unyflex.com.br/storage/galeria/certificadocursodeextensaobranco.png" style="width: 1000px;">
		</div>
		<div class="info" style="position: absolute;margin-left: 340px; margin-top: 270px ">

			 <p style="color:#000; font-size:22px; font-family: Century Schoolbook regular  "> {{Auth::user()->name}}</p> 
			
		</div>

        <div class="info" style="position: absolute; margin-left: 463px; margin-top: 319px ">

			 <p style="color:#000; font-size:22px; font-family: Century Schoolbook regular "> <?=$cpfAluno?></p> 
			
		</div>
	

		<div class="info" style="position: absolute; margin-top:368px;  margin-left: 395px ">
			<p style="color:#000; font-size:15px;font-family: Century Schoolbook regular"> {{$certificado->class->title}}</p>
					</div>

                      <div class="info" style="position: absolute; margin-top:390px; margin-left: 565px ">
        <p style="color:#000; font-size:20px;font-family: Century Schoolbook regular"> {{ $certificado->class->workload }}</p>
    </div>

                                 <div class="info" style="position: absolute; margin-top:425px; margin-left: 405px ">
        <p style="color:#000; font-size:20px;font-family: Century Schoolbook regular">{{ date('d/m/Y', strtotime($certificado->created_at)) }} </p>
    </div>
                 

 
{{-- 
                    		<div class="info" style="position: absolute; margin-top:650px;  margin-left: 263px ">
			<p style="color:#000; font-size:12px;font-family: Century Schoolbook regular"> <b>Token:</b> {{$tokeen}}</p>
					</div> --}}

                   

	</b></div><b>

</b></div></body></html>