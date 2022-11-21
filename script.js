$('.kaas').each(function () {
    $(this).html($(this).html().replace(/([\\]|\.\\|[\/]|\.\/)/g, '<span class="special-sets-colors">$1</span>'));
});

// if( $("blockquote").children("p:contains('\')").length ){
//     console.log("kaas")
//     $(this).html($(this).html().replace(/(\/|\\|\.\u002f|\.\u005C)/g, '<span style="color: red;">$1</span>'));
// }