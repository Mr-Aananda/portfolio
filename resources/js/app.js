import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import assets so Vite bundles them and adds them to manifest.json
import.meta.glob([
    '../assets/images/**',
    '../assets/icons/**',
]);
