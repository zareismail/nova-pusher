import Echo from 'laravel-echo';

// Sample instance with Pusher
window.Pusher = require('pusher-js');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: window.Nova.config.pusher.key,
    cluster: window.Nova.config.pusher.options.cluster,
    encrypted: true
});
