$(function () {
    $("#nextTab").click(function() {
        $('#formTab li:eq(0) a').next().tab('show');
    });
});