module.exports = function (grunt) {
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');

    grunt.initConfig({
        concat: {
            depsCss: {
                files: {
                    'public/css/deps.css': [
                        'node_modules/bootstrap/dist/css/bootstrap.css',
                        'node_modules/components-font-awesome/css/font-awesome.css'
                    ]
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

    grunt.registerTask('build', ['copy', 'concat']);
    grunt.registerTask('init', ['concat']);
};
