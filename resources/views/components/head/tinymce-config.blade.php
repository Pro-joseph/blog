{{-- @push('scripts')
<script>
tinymce.init({
    selector: '#editor',
    height: 500,

    menubar: 'file edit view insert format tools table help',

    plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap',
        'preview', 'anchor', 'searchreplace', 'visualblocks',
        'code', 'fullscreen', 'insertdatetime', 'media',
        'table', 'help', 'wordcount'
    ],

    toolbar: `
        undo redo | blocks |
        bold italic underline strikethrough |
        alignleft aligncenter alignright alignjustify |
        bullist numlist outdent indent |
        link image media table |
        removeformat code fullscreen
    `,

    content_style: `
        body { font-family:Helvetica,Arial,sans-serif; font-size:16px }
    `
});
</script>
@endpush --}}