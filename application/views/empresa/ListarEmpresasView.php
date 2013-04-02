
{% include '/partials/Header.php' %}

<div class="wrap">
    <h3>{{template.titulo}}</h3>

    <table cellpadding="0" cellspacing="0" border="0" class="table_lista">

       <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
                <th>Nome da Empresa</th>
                <th>URL da empresa</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody >
            {% for e in empresas %}
                <tr>
                    <td class="td_nome"><a href="/empresa/{{e.IDEmpresa}}">{{e.NomeEmpresa}}</a></td>
                    <td class="td_url"><a href="http://{{e.URLEmpresa}}" target="_blank">{{e.URLEmpresa}}</a></td>
                    <td>
                        <ul class="td_btn">
                            <li class="btn_acoes btn_editar"><a href="#"></a></li>
                            <li class="btn_acoes btn_excluir"><a href="#"></a></li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}

        </tbody>
    </table>
</div>

{% include '/partials/Footer.php' %}