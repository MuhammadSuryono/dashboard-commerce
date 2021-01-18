
$(document).ready(function() {
    let url = window.location.href;
    let arr = url.split("/");
    const BASE_URL = arr[0] + "//" + arr[2];
    const URL_APP = "http://localhost:7000/ap/v1/"

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

    $('.button-edit-product').on('click', function () {
        let id = $(this).attr('data-id');
        let category = GetDataCategory();

        $.ajax({
            url: URL_APP + "product/" + id.toString() ,
            type:"get",
            data:{},
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                let obj = JSON.parse(result);
                if (obj.status) {
                    console.log(obj);
                    $('#modal-edit-product').modal('show');
                }else{
                    toastr.error(obj.message)
                }
            },
            error: function (xhr) {
                toastr.error("Something wrong! When get data product")
            }
        });


    })

    function GetDataCategory() {
        let category = [];

        $.ajax({
            url: BASE_URL + "/category/list",
            type:"get",
            data:{},
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function (result) {
                let obj = JSON.parse(result);
                if (obj.status) {
                    category = obj.data
                }else{
                    toastr.error(obj.message)
                }
            },
            error: function (xhr) {
                toastr.error("Something wrong! When get data category")
            }
        });

        return category;
    }


});
