$(() => {
    $('.edit-category').on('click', function () {
        $('#edit-modal-category').modal('show')
        let id = $(this).attr('data-id');
        let name = $(this).attr('data-name');

        $('.category-id-edit').val(id)
        $('.category-name-edit').val(name)
    })
})