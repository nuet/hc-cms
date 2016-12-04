/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	config.height=300;
	// Define changes to default configuration here. For example:
	 config.language = 'vi';
	// config.uiColor = '#AADC6E';
	
	config.enterMode=CKEDITOR.ENTER_BR;
    config.filebrowserBrowseUrl = "http://laravel.demo/backend/plugins/ckfinder/ckfinder.html";

    config.filebrowserImageBrowseUrl = "http://laravel.demo/backend/plugins/ckfinder/ckfinder.html?type=Images";

    config.filebrowserFlashBrowseUrl = "http://laravel.demo/backend/plugins/ckfinder/ckfinder.html?type=Flash";

    config.filebrowserUploadUrl = "http://laravel.demo/backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";

    config.filebrowserImageUploadUrl = "http://laravel.demo/backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";

    config.filebrowserFlashUploadUrl = "http://laravel.demo/backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'about', groups: [ 'about' ] },
		{ name: 'others', groups: [ 'others' ] }
	];

	config.removeButtons = 'About,Maximize,Save,NewPage,Preview,Print,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField';
};
