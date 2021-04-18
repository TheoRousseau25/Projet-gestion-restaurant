{foreach $notifications as $notification}
    <div class='noty {$notification.type}'>{$notification.message}</div>
{/foreach}