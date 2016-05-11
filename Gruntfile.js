/*!
 * IntoriaChild Gruntfile
 * http://www.intoria.com/
 */

'use strict';

var globalConfig = {
	sass: {
		src: './src/sass',
		dist: './src/css/vendor'
	},
	css: {
		src: './src/css',
		dist: './css'
	},
	js: {
		src: './src/javascripts',
		dist: './js'
	},
	fonts: {
		src: './src/fonts',
		dist: './fonts'
	},
	images: {
		src: './src/images',
		dist: './images'
	},
	build: './src/_build'
};

module.exports = function(grunt) {
	// Force use of Unix newlines
	grunt.util.linefeed = '\n';

	// Displays the elapsed execution time
	require('time-grunt')(grunt);

	// Load NPM Tasks
	require('jit-grunt')(grunt);

	grunt.initConfig({
		globalConfig: globalConfig,

		// Load the Package file so we can reference its info if necessary
		pkg: grunt.file.readJSON('package.json'),

		// CONFIG ===================================/
		copy: {
			foundationjs: {
				expand: true,
				flatten: true,
				filter: 'isFile',
				src: './node_modules/foundation-sites/dist/foundation.min.js',
				dest: '<%= globalConfig.js.dist %>/vendor'
			},
			motionuijs: {
				expand: true,
				flatten: true,
				filter: 'isFile',
				src: './node_modules/motion-ui/dist/motion-ui.min.js',
				dest: '<%= globalConfig.js.dist %>/vendor'
			}
		},

		sass: {
			options: {
				includePaths: [
					'./node_modules/foundation-sites/scss',
					'./node_modules/motion-ui/src'
				],
				environment: 'development',
				force: true,
				sourceMap: false,
				relativeAssets: true
			},
			all: {
				files: {
					'<%= globalConfig.build %>/f6.css': '<%= globalConfig.sass.src %>/f6.scss', '<%= globalConfig.build %>/oncolour.css': '<%= globalConfig.sass.src %>/oncolour.scss', '<%= globalConfig.build %>/abovethefold.css': '<%= globalConfig.sass.src %>/abovethefold.scss'
				}
			}
		},

		postcss: {
			options: {
				map: true,
				processors: [
					require('postcss-import')(),
					require('postcss-cssnext')({
						browsers: 'last 2 versions, IE >= 10, iOS >= 7, Android >= 4'
					}),
					require('postcss-url')({
						url: function(url) {
							url = url.replace('../../..', '..');
							url = url.replace('../..', '..');
							return url;
						}
					})
				]
			},
			all: {
				files: {
					'<%= globalConfig.build %>/<%= pkg.name %>.css' : '<%= globalConfig.css.src %>/<%= pkg.name %>.css',
					'<%= globalConfig.build %>/<%= pkg.name %>-admin.css' : '<%= globalConfig.css.src %>/<%= pkg.name %>-admin.css',
					'<%= globalConfig.build %>/<%= pkg.name %>-tinymce.css' : '<%= globalConfig.css.src %>/<%= pkg.name %>-tinymce.css'
				}
			}
		},

		modernizr: {
			all: {
				cache : false,
				devFile : false,
				dest : '<%= globalConfig.js.dist %>/vendor/modernizr.min.js',
				options : [
					'setClasses',
					'addTest',
					'html5printshiv',
					'html5shiv',
					'testProp',
					'fnBind',
					'prefixes'
				],
				uglify : true,
				tests: [],
				excludeTests: [],
				crawl : true,
				useBuffers : false,
				files: {
					src: [
						'<%= globalConfig.js.src %>/**/*.js',
						'<%= globalConfig.css.src %>/**/*.css'
					]
				},
				customTests : []
			}
		},

		cssmin: {
			options: {
				report: 'min',
				keepSpecialComments: 0,
				sourceMap: true
			},
			target: {
				files: [{
					expand: true,
					cwd: '<%= globalConfig.build %>',
					src: [
						'**/*.css',
						'!**/*.min.css'
					],
					dest: '<%= globalConfig.css.dist %>',
					ext: '.min.css'
				}]
			}
		},

		imagemin: {
			dynamic: {
				options: {
					optimizationLevel: 4,
					progressive: true,
					interlaced: true
				},
				files: [{
					expand: true,
					cwd: '<%= globalConfig.images.src %>',
					src: '**/*.{png,jpg,gif}',
					dest: '<%= globalConfig.images.dist %>'
				}]
			}
		},

		jshint: {
			all: [
				'<%= globalConfig.js.src %>/**/*.js',
				'!<%= globalConfig.js.src %>/vendor/**/*.js'
			]
		},

		uglify: {
			options: {
				report: 'min',
				preserveComments: false,
				sourceMap: true,
				sourceMapIncludeSources: true
			},
			all: {
				files: {
					'<%= globalConfig.js.dist %>/<%= pkg.name %>.min.js': '<%= globalConfig.js.src %>/<%= pkg.name %>.js',
					'<%= globalConfig.js.dist %>/<%= pkg.name %>-admin.min.js': '<%= globalConfig.js.src %>/<%= pkg.name %>-admin.js'
				}
			}
		},

		watch: {
			sass: {
				files: '<%= globalConfig.sass.src %>/**/*.{scss,sass}',
				tasks: 'sass'
			},
			postcss: {
				files: '<%= globalConfig.css.src %>/**/*.css',
				tasks: [
					'postcss',
					'modernizr',
					'cssmin'
				]
			},
			js: {
				files: '<%= globalConfig.js.src %>/**/*.js',
				tasks: [
					'jshint',
					'modernizr',
					'uglify'
				]
			},
			imagemin: {
				files: '<%= globalConfig.images.src %>/**/*.{png,jpg,gif}',
				tasks: 'newer:imagemin'
			},
			configFiles: {
				files: [
					'Gruntfile.js',
					'package.json'
				],
				options: {
					reload: true
				},
				tasks: [
					'copy',
					'sass',
					'postcss',
					'modernizr',
					'cssmin',
					'newer:imagemin',
					'jshint',
					'uglify',
					'watch'
				]
			}
		}
	});

	// TASKS =====================================/
	grunt.registerTask('default', [
		'copy',
		'sass',
		'postcss',
		'modernizr',
		'cssmin',
		'newer:imagemin',
		'jshint',
		'uglify'
	]);
	grunt.registerTask('dev', [
		'newer:copy',
		'newer:sass',
		'newer:postcss',
		'modernizr',
		'newer:cssmin',
		'newer:imagemin',
		'jshint',
		'newer:uglify',
		'watch'
	]);
};
