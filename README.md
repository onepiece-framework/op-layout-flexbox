Flexbox layout
===

# Usage

## Install

1. Install
```sh
git submodule -b 2022 https://github.com/onepiece-framework/op-layout-flexbox asset/layout/flexbox 
```
2. Enable
Change layout name to `asset:/config/layout.php`
```sh
return ['name' => 'flexbox'];
```

## Header and Footer

Change to custom header and footer by that directory.

```sh
$layout = [
	'path' => [
		'header' => './header.phtml',
		'footer' => './footer.phtml',
	]
];
OP()->Config('layout',$layout);
```

## Top, bottom and right, left menu.

Change to custom header and footer by that directory.

```sh
$layout = [
	'path' => [
		menu => [
			'top' => './top.phtml',
			'bottom' => './bottom.phtml',
			'left' => './left.phtml',
			'right' => '', // empty
		],
	]
];
OP()->Config('layout',$layout);
```
