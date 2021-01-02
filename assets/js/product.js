$(document).ready(function() {
    let url = window.location.href;
    let arr = url.split("/");
    const BASE_URL = arr[0] + "//" + arr[2];
// product/create
    $('#create-product').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: BASE_URL + "/product/create",
            type:"post",
            data:new FormData(this),
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                let obj = JSON.parse(result);
                if (obj.status) {
                    toastr.success(obj.message);
                    document.getElementById("create-product").reset();
                    $('#modal-add-product').modal('hide');
                    setInterval(function(){ window.location.reload(); }, 1000);
                }else{
                    toastr.error(obj.message)
                }
            },
            error: function (xhr) {
                toastr.error("Something wrong!")
            }
        });
    });
});
