var gulp = require("gulp");
var sass = require("gulp-sass");
var notify = require("gulp-notify");

// Copia todos os css, em sass, para a pasta de css
gulp.task("compilar-css",function(){
    return gulp.src("./bin-src/sass/**/*.scss")
        .pipe(sass({outputStyle:'compressed'}))
        .on('error', notify.onError({ title: 'Erro ao Compilar',message: '<%= error.message %>'}))
        .pipe(gulp.dest("./public/css"));
});

// Copia os arquivos de .js para a pasta js
gulp.task('appjs',function(){
    return gulp.src('./bin-src/src/js/*.js')
        .pipe(gulp.dest("./public/js"));
});


// Copila todos Sass para Css
gulp.task('escuta-me',function(){
    gulp.watch('./bin-src/sass/**/*.scss',['compilar-css']);
    gulp.watch('./bin-src/src/js/*.js',['appjs']);
});


// Tarefa Padrão
gulp.task('default',[
    'compilar-css',
    'appjs',
    'escuta-me'
]);

