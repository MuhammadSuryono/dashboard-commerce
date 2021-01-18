const BASE_URL_API = "http://localhost:7000/api/v1/";

/***
 *
 * @returns {string}
 * @constructor
 */
function URL_APP() {
    let url = window.location.href;
    let arr = url.split("/");
    const BASE_URL = arr[0] + "//" + arr[2];
    return BASE_URL
}

/***
 *
 * @returns {boolean}
 */
function statusLogin() {
    let isLogin = localStorage.getItem("userIsLogin");
    let status = false;

    if (isLogin) status = true;
    if (typeof isLogin == "undefined") status = false;
    return status;
}

/***
 *
 */
function redirectLogin() {
    window.location.href = URL_APP() + "/auth/login";
}

/***
 *
 * @param angka
 * @returns {string}
 */
function convertRupiah(angka) {

    let	number_string = angka.toString(),
        sisa 	= number_string.length % 3,
        rupiah 	= number_string.substr(0, sisa),
        ribuan 	= number_string.substr(sisa).match(/\d{3}/g);

    if (ribuan) {
        let separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    return rupiah
}

/***
 *
 */
export {URL_APP, BASE_URL_API, statusLogin, redirectLogin, convertRupiah}