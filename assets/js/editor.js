$(function () {
	// Fungsi untuk mengganti textarea dengan ckeditor style
	CKEDITOR.replace('editor1', {
		extraPlugins: 'syntaxhighlight',
		toolbar: [
			['Source'],
			['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink', '-', 'Image'],
		]
	});

});
