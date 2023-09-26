{{ include('header.php', {title: 'Liste de recette'})}}
    <h2>Liste de recette</h2>
    <a href="{{path}}recette/create" class="bouton1">Ajouter une recette</a>
    <table class="styled-table">
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Temps de préparation</th>
            <th>Temps de cuisson</th>
            <th>Nombre de portions</th>
            <th>Catégorie_id</th>
            
        </tr>
      
        {% for recette in recettes %}

            <tr>
                <td><a href='{{path}}recette/show/{{recette.id}}'>{{ recette.nom }}</a></td>
                <td>{{ recette.description }}</td>
                <td>{{ recette.temps_preparation }}</td>
                <td>{{ recette.temps_cuisson }}</td>
                <td>{{ recette.nombre_de_portions }}</td>
                <td>{{ recette.Categorie_id }}</td>
            </tr>

        {% endfor %}

    </table>
</body>
</html>