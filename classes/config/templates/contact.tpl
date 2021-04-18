<div id="registration">
    <form action="actions/contact.php" method="post">
        <h3>Contact - {$time}</h3>
        {include file="components/notifications.tpl" notifications=$notifications}
        
        <input type="text" name="title" placeholder="Message title" />
        <textarea name="message" placeholder="Your message" ></textarea>
        <div class="actions">
            <input type="submit" value="Log me !" class="primary btn" />
        </div>
    </form>
</div>