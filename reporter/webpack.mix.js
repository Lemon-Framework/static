const mix = require('laravel-mix')

mix.js("src/js/app.js", "dist/js")
    .vue({version: 3})
    .postCss("src/css/app.css", "dist/css", [
        require("tailwindcss"),
    ])
    .webpackConfig({
        module: {
            rules: [
                { test: /\.coffee$/, loader: "coffee-loader" },
                { test: /\.vue$/, loader: "vue-loader" },
                { test: /\.ls$/, loader: "6du-livescript-loader" }
            ]
    }
    })
