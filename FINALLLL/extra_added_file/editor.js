CKEDITOR.replace('editor', {
    skin: 'moono',
    enterMode: CKEDITOR.ENTER_BR,
    shiftEnterMode: CKEDITOR.ENTER_P,
    toolbar: [{ name: 'basicstyles', groups: ['basicstyles'], items: ['Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor'] },
        { name: 'styles', items: ['Format', 'Font', 'FontSize'] },
        { name: 'scripts', items: ['Subscript', 'Superscript'] },
        { name: 'justify', groups: ['blocks', 'align'], items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
        { name: 'paragraph', groups: ['list', 'indent'], items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
        { name: 'links', items: ['Link', 'Unlink'] },
        { name: 'insert', items: ['Image'] },
        { name: 'spell', items: ['jQuerySpellChecker'] },
        { name: 'table', items: ['Table'] }
    ],
});