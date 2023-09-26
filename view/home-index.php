{{ include('header.php', {title: 'Welcome'})}}
{# comments #}
    <main>
        <header>
            <div>
                <h1 class="titre-principale">Bienvenue dans votre site de recette de Cuinine</h1>
                <p>Savourez les meilleurs plats dans le respect total de la nature.</p>
                <a href="{{path}}recette" class="bouton1">Liste des recettes</a>
                <a href="{{path}}recette/create" class="bouton1">Ajouter une recette</a>
            </div>
        </header>
    </main>
</body>
</html>