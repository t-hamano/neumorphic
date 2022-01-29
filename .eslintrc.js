module.exports = {
	extends: [ 'plugin:@wordpress/eslint-plugin/recommended' ],
	rules: {
		'@wordpress/no-global-active-element': 'off',
		'no-undef': 'off',
		'jsdoc/valid-types': 'off',
	},
	parserOptions: {
		requireConfigFile: false,
	},
};
