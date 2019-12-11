module.exports = function (grunt){
    grunt.initConfig({
        
        concat: {
            options: {
                separator: ";",
            },
            dist: {
                src: ["js/concatene.js", "js/pair.js"],
                dest: "dist/built.js",
                
            },
        },
        uglify: {
            options: {
              separator: ";",
            },
            dist: {
                src: ["js/concatene.js", "js/pair.js"],
                dest: "dist/built.js",
            },
        },
        
        watch: {
            scripts: {
              files: '**/*.js', // tous les fichiers JavaScript de n'importe quel dossier
              tasks: ['concat:dist']
            },
        }   
        
    });

    //grunt.loadNpmTasks("grunt-contrib-sass");

    grunt.loadNpmTasks("grunt-contrib-concat");
    grunt.registerTask("default", "concat:dist");
    grunt.loadNpmTasks('grunt-contrib-watch')

    grunt.registerTask('default', ['dev', 'watch'])
    grunt.registerTask('dev', 'concat:dist')
    grunt.registerTask('dist', 'uglify:dist')

};

//c26a09c0786042f48d4052a6bd0b1c4d
