<div id="registration">
    <form action="actions/creer.php" method="post">
        <h3>Créer un usager</h3>
        {include file="components/notifications.tpl" notifications=$notifications}

        <input type="text" name="nom" placeholder="Nom" />
        <input type="text" name="num_carte" placeholder="Numéro de carte" />
        <input type="text" name="num_categ" placeholder="Numéro de catégorie" />
        <input type="date" name="date_carte" placeholder="Date de la carte" />
		<input type="text" name="mt_caution" placeholder="Montant de la caution" />
        <div class="actions">
            <input type="submit" value="Enregistrer" class="primary btn" />
        </div>
    </form>
</div>
