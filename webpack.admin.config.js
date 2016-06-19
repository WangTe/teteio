/**
 * admin的webpack config文件
 *
 * @author 风格独特
 */

var webpack = require('webpack');
var path = require('path');
var ExtractTextPlugin = require("extract-text-webpack-plugin");
var HtmlWebpackPlugin = require('html-webpack-plugin');

// 基础路劲
var bpath = path.join(__dirname, 'public/admin');

// 入口文件
var entries = {
    index : 'entry/index.js',
    // login : 'js/login.js',
}

var config = {
    entry: entries,
    output : {
        path : path.join(bpath, 'static'),
        filename : '[name].js'
    },

    module: {
        loaders: [{
            test: /\.css$/,
            loader: ExtractTextPlugin.extract(['css'])
        }, {
            test: /\.scss$/,
            loader: 'style!css!sass?sourceMap'
        }, {
            test: /\.(png|jpg|gif)$/,
            loader: 'file',
        }, {
            test: /\.(eot|woff|woff2|ttf|svg)$/,
            loader: "file"
        }]
    },
    resolve: {
        extensions: ['', '.js', '.json'],
        alias : {
            entry : path.join(bpath, 'src/entry'),
            html: path.join(bpath, 'src'),
            lib : path.join(bpath, 'src/lib'),
            js : path.join(bpath, 'src/js'),
            sass : path.join(bpath, 'src/sass'),
            adminlte : path.join(__dirname, 'node_modules/admin-lte')
        }
    },
    plugins: [
        // 全局包含jquery对象
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery : 'jquery',
            "window.jQuery" : 'jquery'
        }),

        // 将jquery打包至公共bundle
        new webpack.optimize.CommonsChunkPlugin('jquery', 'vendor.js'),

        new ExtractTextPlugin('vendor.css', {
            allChunk : true
        })
    ],
    externals: {
        // require("jquery") is external and available
        //  on the global var jQuery
        // "layer": "layer"
        // jquery : "jQuery"
}
}

// HTMLWebpackPlugin处理
for(var i in entries){
    config.plugins.push(new HtmlWebpackPlugin({
        filename: path.join(bpath, i +'.html'),
        template: path.join(bpath, 'src/' + i +'.html'),
        inject: true,
        chunks: ['vendor', i] // 只注入当前的chunk，index.html注入index.entry
    }));
}

module.exports = config;
