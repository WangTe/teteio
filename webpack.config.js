/**
 * webpack配置文件
 *
 * @author 风格独特
 */

var webpack = require('webpack');
var path = require('path');
var ExtractTextPlugin = require("extract-text-webpack-plugin");

// 基础路劲
var bpath = 'resources/assets';

module.exports = {
	entry : {
		main : 'js/main.js',
        page : 'js/page.js',
        vendor : ['jquery']
	},
	output : {
		// path : './public/static/js',
		filename : '[name].js'
	},
    module: {
        loaders: [{
                test: /\.css$/,
                loader: ExtractTextPlugin.extract("style-loader", "css-loader")
            }, {
            //    test: /\.css$/,
            //    loader: "style!css"
            //}, {
                test: /\.scss$/,
                loader: 'style!css!sass?sourceMap'
            }, {
                test: /\.(png|jpg|gif)$/,
                loader: 'url?limit=100',
                exclude: [
                    path.join(__dirname, bpath, 'lib/layer')
                ]
            }, {
                // layer图片单独出来
                test: /\.(png|jpg|gif)$/,
                loader: 'url?limit=100&name=../img/vendor/[name]_[hash:8].[ext]',
                include: [
                    path.join(__dirname, bpath, 'lib/')
                ]
            }
        ]
    },
    resolve: {
        extensions: ['', '.js', '.json'],
    	alias : {
            lib : path.join(__dirname, bpath, 'lib'),
            js : path.join(__dirname, bpath, 'js'),
            sass : path.join(__dirname, bpath, 'sass'),
    		jquery : path.join(__dirname, bpath, 'lib/jquery/jquery-1.12.4.min.js')
    	}
    },
    plugins: [
        //// 全局包含jquery对象
        new webpack.ProvidePlugin({
            $: "jquery",
            jQuery : 'jquery',
            "window.jQuery" : 'jquery'
        }),
        // 将jquery打包至公共bundle
        new webpack.optimize.CommonsChunkPlugin('vendor', 'vendor.js'),
        new ExtractTextPlugin('../css/vendor.css', {
            allChunk : true
        })
    ],
    externals: {
        // require("jquery") is external and available
        //  on the global var jQuery
        // "layer": "layer"
    }
};