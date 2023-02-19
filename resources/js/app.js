import './bootstrap';
$(".edit").click(function (){
    let id=$(this).parent()[0].id
    let name=$(this).prev().val()
    console.log(name);
    console.log(id);
    if($.trim(name)==""){
        alert("Please input task name")
    }
    $.ajax({

        type: "post",
        url: "/update",
        data: {id:id,name:name},
        success: function(msg) {
            alert(msg)
            window.location.reload()
        },
        failed:function (msg){
            alert(msg)
        }
    });
});
$(".add").click(function (){
    let project_id=$(this).parent().parent().parent()[0].id
    let name=$(this).prev().val()
    if($.trim(name)==""){
        alert("Please input task name")
    }
    $.ajax({

        type: "post",
        url: "/add",
        data: {project_id:project_id,name:name},
        success: function(msg) {
            window.location.reload()
        },
        failed:function (msg){
            alert(msg)
        }
    });
});
$(".delete").click(function () {
    let id=$(this).parent()[0].id
    $.ajax({

        type: "post",
        url: "/delete",
        data: {id:id},
        success: function(msg) {
            alert(msg);
            window.location.reload()
        },
        failed:function (msg){
            alert(msg)
        }
    });
})

$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".task-list").sortable({
        cursor:"move",
        items:".task",
        opacity:0.6,
        revert:true,
        // cancel:".task-add",
        update:function (event,ui){
            let new_order=$(this).sortable("toArray")
            $.ajax({

                type: "post",
                url: "/change_order",
                data: {order:new_order },
                success: function(msg) {
                    //alert(msg);

                },
                failed:function (msg){
                    alert(msg)
                }
            });
        }

    });
})
