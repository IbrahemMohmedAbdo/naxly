import preset from './vendor/filament/support/tailwind.config.preset';
import forms from '@tailwindcss/forms';

export default {
    presets: [preset],
    plugins: [forms],

    content: [
        './app/Filament/**/*.php',
        './resources/views/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './vendor/brandymedia/turbine-ui-core/**/*.php',
        './resources/views/**/*.php',

    ],
}
