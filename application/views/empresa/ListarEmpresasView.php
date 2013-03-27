
{% include '/partials/Header.php' %}

    <table cellpadding="0" cellspacing="0" border="0">

       <!-- Cabeçalho da tabela -->
        <thead>
            <tr>
                <th>Nome da Empresa</th>
            </tr>
        </thead>

        <tbody>
            {% for e in empresas %}
                <tr>
                    <td><a href="#">{{e.NomeEmpresa}}</a></td>
                </tr>
            {% endfor %}

        </tbody>
    </table>

{% include '/partials/Footer.php' %}