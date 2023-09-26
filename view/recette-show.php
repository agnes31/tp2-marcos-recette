{{ include('header.php', {title: 'Recette'})}}

<div class="container">
    <div class="box form-box"> 
        <p><strong>Nom : </strong>{{ recette.nom }}</p>
        <p><strong>Description : </strong>{{ recette.description}}</p>
        <p><strong>Temps_preparation : </strong>{{ recette.temps_preparation }}</p>
        <p><strong>Temps_cuisson : </strong>{{ recette.temps_cuisson }}</p>
        <p><strong>Nombre_de_portions : </strong>{{ recette.nombre_de_portions }}</p>
        <p><strong>Categorie_id : </strong>{{recette.Categorie_id}}</p>
        <a  href="{{path}}recette/edit/{{recette.id}}" class="bouton1">Mise à jour</a>   
    </div>
</div>  
</body>
</html>