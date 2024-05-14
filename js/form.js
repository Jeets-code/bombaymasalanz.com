/* Web form script
Author: Manjeet Panwar
Date: 2021
*/

$(function() {

    $(".form-control").on('focus', function(){

        $(this).parents(".form-group").addClass('focused');

    });

    $(".form-control").on('blur', function(){

        $(this).parents(".form-group").removeClass('focused');

    });

});