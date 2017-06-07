/**
 * ajax.js
 *
 * @category	design
 * @package 	base_default
 * @author  	Shitikov Dmitry <shitikovda@gmail.com>
 * @description Test for position Magento developer
 * @license 	http://opensource.org/licenses/OSL-3.0 The Open Software License 3.0
 */
"use strict";
function ajaxCall() {
    new Ajax.Request(urlToAjax, {
        method: "POST",
        onSuccess: function () {
            var popup = document.getElementById('popup');
            var form = document.getElementById('requestprice-form');
            form.elements['name'].value = "";
            form.elements['email'].value = "";
            form.elements['comment'].value = "";
            popup.style.display = "none";

        },
        onFailure: function (e) {
            console.error(e.statusText);
        }
    })
};

function objectToUrlParams(obj) {
    var str = "";
    for (var key in obj) {
        if (str != "") {
            str += "&";
        }
        str += key + "=" + obj[key];
    }
    return str;
}