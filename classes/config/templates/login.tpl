<div id="registration">
    {if !$isConnected}
        <form action="actions/login.php" method="post">
            <h3>Connexion</h3>
            {include file="components/notifications.tpl" notifications=$notifications}
            
            <input type="text" name="login" placeholder="Nom d'utilisateur" />
            <input type="password" name="password" placeholder="Mot de passe" />
            <div class="actions">
                <input type="submit" value="Connexion" class="primary btn" />
            </div>
        </form>
    {else}
        <div id="dashboard">
            <h3>Bienvenue, chef !</h3>
            <img class="fit-picture"
            src="images/etchebest.jpg" height="500" width="500" 
            alt="Etch et best">
        </div>
    {/if}
</div>