
{{ include('header.php', {title: 'Ajouter une recette'})}}
<div class="container">
    <div class="box form-box">
        <header>Recette de Cuisine</header>  
        <form action="{{path}}recette/store" method="post">
            <div class="field input">    
                <label>Nom
                    <input type="text" name="nom">
                </label>
            </div>
            <div class="field input"> 
                <label>Description
                <textarea name="description"></textarea>   
            </div>
            <div class="field input"> 
                <label>Temps de préparation (minutes)
                    <input type="number" name="temps_preparation">
                </label>
            </div>
            <div class="field input">
                <label>Temps de cuisson (minutes)
                    <input type="number" name="temps_cuisson">
                </label>
            </div>
            <div class="field input">
                <label>Nombre de portions
                    <input type="number" name="nombre_de_portions">
                </label>
            </div>
            <div class="field input">
                <label>
                    Categorie
                    <select name="Categorie_id">
                        {% for categorie in categories %}
                        <option value="{{categorie.id}}">{{categorie.categorie}}</option>
                        {% endfor%}
                    </select>
                </label>
                </div>
                <div class="field">    
                    <input type="submit" class="btn" value="Save">
                </div>
            </form>
        </div> 
    </div>
</body>
</html>