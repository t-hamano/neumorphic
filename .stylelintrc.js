module.exports = {
	extends: [
		"stylelint-config-wordpress/scss",
		"stylelint-config-rational-order",
	],
  ignoreFiles: [
		"node_modules/**/*.css",
		"packages/**/*.css",
		"assets/**/*.css",
  ],
	rules: {
		'selector-id-pattern': null,
		'max-line-length': null,
		'no-descending-specificity': null,
		'font-weight-notation': null,
		'font-family-no-missing-generic-family-keyword': null,
		"selector-class-pattern": null,
	}
}
