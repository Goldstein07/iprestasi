const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js")
    .ts("resources/js/app.tsx", "public/js")
    .react("resources/js/app.jsx", "public/js")
    .sass("resources/sass/app.scss", "public/css");
