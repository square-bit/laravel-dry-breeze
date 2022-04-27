# laravel-dry-breeze
Laravel Breeze default blade stack without Tailwindcss or alpinejs.

> A dry martini, not shaken, not stirred, no gin and no olives.

An opinionated edition for personal reference when starting new projetcs. Shipped with minimal styles to get you started. Delete them, start your own or build on top of them. Uses postcss and postcss-import, autoprefixer is off by default. Add your postcss plugins and config in ``postcss.config.js`` as needed. Enjoy!

## How to

1. install breeze [docs](https://laravel.com/docs/9.x/starter-kits#laravel-breeze)
2. when finished, __do not run__ ``npm install`` just yet
3. delete tailwind.config.js
4. copy this repo (without README.md, LICENSE, .gitignore) to your project root, overwrite files when asked.
5. run ``npm install``
6. run ``npm run dev``
7. done!