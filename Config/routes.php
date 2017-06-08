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

	// admin
	'ad/remove_prod/([0-9]+)' => 'admin/remove_prod/$1', // adminController remove_prod action
	'ad/edit_prod/([0-9]+)' => 'admin/edit_prod/$1', // adminController edit_prod action
	'ad/add_product' => 'admin/add_product', // adminController add_product action
	'ad' => 'admin/index', // admine index

	//static pages
	'contact' => 'static/contact',
	'ex_rate' => 'static/ex_rate',

	// store
	'brand/([0-9]+)' => 'store/brand/$1',
	'' => 'store/index' // default/start uri
);