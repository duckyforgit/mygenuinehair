 /* jshint esversion: 8 */
 
import { resolve } from 'path';
import webpack from 'webpack';


export const entry = './src/js/index.js';
export const output = {
  path: resolve(__dirname, 'dist'),
  filename: 'bundle.js',
};
export const module = {
  rules: [{
    test: /\.js$/,
    exclude: /node_modules/,
    loader: 'babel-loader',
  }, {
    test: /.s?css$/,
    use: [
      'style-loader',
      'css-loader',
      'sass-loader'
    ]
  }]
};
export const presets = [
  [
    '@babel/preset-env',
    {
      targets: {
        esmodules: true,
      },
    },
  ],
];