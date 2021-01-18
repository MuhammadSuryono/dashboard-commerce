import { BASE_URL_API, URL_APP } from "./module.js";

function httpRequest (url, method, body, handle)
{
    $.ajax({
        url: BASE_URL_API + url,
        type:method,
        dataType: "json",
        data: JSON.stringify(body),
        processData:false,
        contentType:'application/json',
        cache:false,
        async:false,
        success: function (result) {
            handle(result)
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            $('#post').html(msg);
            toastr.error(msg)
        }
    });
}

function httpRequestUrlApp (url, method, body, handle)
{
    $.ajax({
        url: URL_APP() + url,
        type:method,
        dataType: "json",
        data: body,
        processData:false,
        contentType:'application/json',
        cache:false,
        async:false,
        success: function (result) {
            handle(result)
        },
        error: function (jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            $('#post').html(msg);
            toastr.error(msg)
        }
    });
}

export {httpRequest, httpRequestUrlApp}