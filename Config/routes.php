<?php 

return array(
	// more complicated patterns must be higher
	// medium complicated patterns (3)
	// simple patterns (2)
	// default and other simple pattern (1)
	// Below all there should be an empty pattern ('')
	
	'product/([0-9]+)' => 'product/view/$1', // add parameters to array , actionView in productController

	// cart 
	'cart/add/([0-9]+)' => 'cart/add/$1',
	'cart/del/([0-9]+)' => 'cart/del/$1',
	'cart' => 'cart/index',

	// admin/products
	'ad/products/remove_prod/([0-9]+)' => 'adminProducts/removeProd/$1', // adminController remove_prod action
	'ad/products/edit_prod/([0-9]+)' => 'adminProducts/editProd/$1', // adminController edit_prod action
	'ad/products/add_product' => 'adminProducts/addProduct', // adminController add_product action
	'ad/products' => 'adminProducts/index', // admine/products index

	// admin/brands
	'ad/brands/remove_brand/([0-9]+)' => 'adminBrands/removeBrand/$1', // adminController remove_prod action
	'ad/brands/add_brand' => 'adminBrands/AddBrand', // adminController add brand action	
	'ad/brands' => 'adminBrands/index', // admine/products index

	// admin/users
	'ad/users/remove_user/([0-9]+)' => 'adminUsers/removeUser/$1', // adminController remove_prod action
	'ad/users/add_user' => 'adminUsers/AddUser', // adminController add brand action	
	'ad/users' => 'adminUsers/index', // admine/products index

	'ad' => 'adminProducts/index', // admine/products index

	//static pages
	'contact' => 'static/contact',
	'ex_rate' => 'static/ex_rate',
	'payment' => 'static/payment',

	//user pages
	'register' => 'user/register',
	'login' => 'user/login',
	'logout' => 'user/logout',

	// store
	'brand/([0-9]+)' => 'store/brand/$1',
	'' => 'store/index' // default/start uri
);