module.exports = {
	extends: [
		"@wordpress/stylelint-config",
		"stylelint-config-rational-order",
	],
  ignoreFiles: [
		"node_modules/**/*.css",
		"assets/sass/vendor/**/*.scss",
		"assets/**/*.css",
  ],
	rules: {
		'selector-id-pattern': null,
		'max-line-length': null,
		'no-descending-specificity': null,
		'font-weight-notation': null,
		'font-family-no-missing-generic-family-keyword': null,
		"selector-class-pattern": null,
		"at-rule-no-unknown": [
			true,
			{"ignoreAtRules": ["include","mixin","each", "for", "use"]}
		],
	}
}
