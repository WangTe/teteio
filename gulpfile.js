var elixir = require('laravel-elixir');
var gulp = require('gulp');
var imagemin = require('gulp-imagemin');
var webpack = require('webpack');
var webpackStream = require('webpack-stream');


// 设置elixir config
elixir.config.publicPath = 'public/static';

var path = {
    image : {
        src : './resources/assets/img/*',
        dest : './public/static/img',
        build : './public/static/build/img'
    },
    webpack : {
        src : 'resources/assets/js/*',
        dest : './public/static/js'
    }
}

var config = require('./webpack.config.js');

// gulp-imagemin的扩展，压缩图片使用
elixir.extend('image', function() {
    new elixir.Task('image', function() {
        return gulp.src(path.image.src)
            .pipe(imagemin())
            .pipe(gulp.dest(path.image.dest));
    });
});

// webpack的任务扩展
elixir.extend('webpack', function() {
    new elixir.Task('webpack', function() {
        return gulp.src('')
            .pipe(webpackStream(config))
            .pipe(gulp.dest(path.webpack.dest));
        // run webpack
        //webpack(config, function(err, stats) {
        //    if(err) {
        //        console.log('webpack error');
        //        console.log(stats.toString());
        //    } else {
        //        console.log('webpack success');
        //        gulp.start('version');
        //    }
        //});
    }).watch(path.webpack.src);
});

// 主任务
elixir(function(mix) {
    mix.sass('app.scss')
        .webpack()
        .image()
        .copy(path.image.dest, path.image.build)
        .version([
            'css/*.css',
            'js/*.js',
        ]);
});

elixir(function(mix) {
    mix.browserSync({
        proxy: 'http://te.lc.te168.cn'
    });
});
