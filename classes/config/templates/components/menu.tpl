<ul class="actions">
    {if !$isConnected}
        <li><a href="login.php">Connexion</a></li>
    {else}
        <li><a href="tableauUsagers.php">Liste des usagers</a></li>
		<li><a href="tableauTarifs.php">Liste des tarifs</a></li>
		<li><a href="creerUsager.php">Créer un nouvel usager</a></li>
        <li><a href="actions/logout.php">Déconnexion</a></li>
    {/if}
 
</ul>