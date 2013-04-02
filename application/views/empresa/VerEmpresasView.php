
{% include '/partials/Header.php' %}

<div class="wrap">
    <h3>{{empresa.NomeEmpresa}}</h3>

    <p>URL da empresa: <span>{{empresa.URLEmpresa}}</span></p>
    <p>Servidor de entrada: <span>{{empresa.ServidorEntradaEmpresa}}</span></p>
    <p>Porta do servidor de entrada: <span>{{empresa.PortaServidorEntradaEmpresa}}</span></p>
    <p>Servidor de saída: <span>{{empresa.ServidorSaidaEmpresa}}</span></p>
    <p>Porta do servidor de saída: <span>{{empresa.PortaServidorSaidaEmpresa}}</span></p>


</div>

{% include '/partials/Footer.php' %}