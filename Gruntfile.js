module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-shell');
    grunt.loadNpmTasks('grunt-concurrent');

    grunt.initConfig({
        sass: {
            options: {
                sourceMap: true
            },
            dist: {
                files: {
                    'public/css/app.css': 'resources/assets/sass/main.scss'
                }
            }
        },
        concat: {
            depsCss: {
                files: {
                    'public/css/deps.css': [
                        'node_modules/bootstrap/dist/css/bootstrap.css',
                        'node_modules/components-font-awesome/css/font-awesome.css'
                    ]
                }
            },
            depsJs: {
                files: {
                    'public/js/deps.js': [
                        'node_modules/jquery/dist/jquery.min.js',
                        'node_modules/bootstrap/dist/js/bootstrap.min.js'
                    ]
                }
            }
        },
        shell: {
            webpack: {
                command: 'webpack -d --watch'
            },
            webpack_build: {
                command: 'webpack -d'
            }
        },
        concurrent: {
            watcher: ['shell:webpack', 'watch:scss'],
            options: {
                logConcurrentOutput: true
            }
        },
        watch: {
            scss: {
                files: 'resources/assets/sass/**/*.scss',
                tasks: ['sass'],
                options: {
                    interrupt: true
                }
            }
        },
        copy: {
            bs_fonts: {
                cwd: "node_modules/bootstrap/fonts/",
                src: '**/*',
                dest: 'public/fonts',
                expand: true
            },
            fa_fonts: {
                cwd: "node_modules/components-font-awesome/fonts/",
                src: '**/*',
                dest: 'public/fonts',
                expand: true
            }
        }
    });

    grunt.registerTask('build', ['copy', 'concat', 'shell:webpack_build', 'sass']);
    grunt.registerTask('default', ['concurrent:watcher']);
};
