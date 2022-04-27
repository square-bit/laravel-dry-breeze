/* add your postCSS plugins ex: postcss-preset-env */
const postcssImport     = require('postcss-import')

module.exports = {
    plugins: [
      postcssImport(),
    ]
  }