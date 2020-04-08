const path = require('path');

module.exports = {
  entry: './src/main.scripts',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.scripts'
  }
};