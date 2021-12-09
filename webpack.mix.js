let mix = require('laravel-mix');

const path = require('path');
let directory = path.basename(path.resolve(__dirname));

console.log('directory: ', directory);

const source = 'resources/';
const dist = 'public/';

mix
    .copyDirectory(source + '/adminui/', dist + '/adminui/')