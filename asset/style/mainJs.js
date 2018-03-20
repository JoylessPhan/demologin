$(document).ready(function () {

    // Show modal detail.
    $(".show_detail").click(function(){
        var url = $(this).attr('href');
        $.ajax({
            url: url,
            success: function(result){
                $(".detail_content").html(result);
                $("#detailsUser").modal('show');
            }
        });
    }); // end show_detail.

    // Show model delete.
    $(".btn_delete").click(function(){
        var id = $(this).attr('data-id');
        $('.user_id_delete').val(id);
        $('#deleteUser').modal('show');
    }); // end show_detail.

    // Show modal edit.
    // $(".show_edit").click(function(){
    //     var url = $(this).attr('href');
    //     $.ajax({
    //         url: url,
    //         success: function(result){
    //             $(".edit_content").html(result);
    //             $("#editUser").modal('show');
    //         }
    //     });
    // }); // end show_edit.

    // Show modal create.
    // $(".show_create").click(function(){
    //     var url = $(this).attr('href');
    //     $.ajax({
    //         url: url,
    //         success: function(result){
    //             $(".create_content").html(result);
    //             $("#createUser").modal('show');
    //         }
    //     });
    // }); // end show_edit.

});
