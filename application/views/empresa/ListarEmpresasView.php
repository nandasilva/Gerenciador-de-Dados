
{% include '/partials/Header.php' %}

<div class="wrap">
    <h3>Empresas</h3>

    <table cellpadding="0" cellspacing="0" border="0" class="table_lista">

       <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
                <th>Nome da Empresa</th>
                <th>URL da empresa</th>
                <th>Servidor de Entrada</th>
                <th>Porta do Servidor de Entrada</th>
                <th>Servidor de Saída</th>
                <th>Porta do Servidor de Saída</th>
            </tr>
        </thead>

        <tbody >
            {% for e in empresas %}
                <tr>
                    <td class="td_maior"><a href="#">{{e.NomeEmpresa}}</a></td>
                    <td class="td_maior"><a href="#">{{e.URLEmpresa}}</a></td>
                    <td class="td_menor">{{e.ServidorEntradaEmpresa}}</td>
                    <td class="td_menor">{{e.PortaServidorEntradaEmpresa}}</td>
                    <td class="td_menor">{{e.ServidorSaidaEmpresa}}</td>
                    <td class="td_menor">{{e.PortaServidorSaidaEmpresa}}</td>
                </tr>
            {% endfor %}

        </tbody>
    </table>
</div>

{% include '/partials/Footer.php' %}