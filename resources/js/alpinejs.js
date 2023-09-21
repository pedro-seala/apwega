// import alipinejs
import Alpine from 'alpinejs';

// import alpinejs plugins
import collapse from '@alpinejs/collapse';
import persist from '@alpinejs/persist'

// initialize alpinejs plugins
Alpine.plugin(persist)
Alpine.plugin(collapse);

// initialize alpinejs
window.Alpine = Alpine;
Alpine.start();
