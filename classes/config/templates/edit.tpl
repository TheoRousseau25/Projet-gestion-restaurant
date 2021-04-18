<div id="registration">
    <form action="actions/edit.php" method="post">
        <h3>My profile</h3>
        {include file="components/notifications.tpl" notifications=$notifications}

        <input type="text" name="firstname" placeholder="First name" value='{$user.firstname}' />
        <input type="text" name="lastname" placeholder="Last name" value='{$user.lastname}' />
        <input type="password" name="password" placeholder="Password" value='{$user.password}' />

        <div class="actions">
            <input type="submit" value="Update" class="btn primary" />
        </div>
    </form>
</div>