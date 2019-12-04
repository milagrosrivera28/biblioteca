/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    $('.boton-menu').click(function () {
        $('nav.m').slideToggle();
    });

    $(window).resize(function () {
        if (eval($('body').width()) > 750) {
            $('nav.m').show();
        } else {
            $('nav.m').hide();
        }
    });

});

