module.exports = {
  extends: ['stylelint-config-standard'],
  plugins: ['stylelint-declaration-use-variable'],
  rules: {
    'scale-unlimited/declaration-strict-value': [
      ['/color/', 'font-size', 'line-height', 'z-index', 'margin', 'padding'],
      {
        ignoreValues: ['inherit', 'transparent', 'none'],
        disableFix: true
      }
    ],
    'color-no-hex': true,
    'selector-class-pattern': '^[a-z0-9\\-]+$'
  }
};