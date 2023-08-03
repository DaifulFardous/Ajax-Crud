$(".btn").click(function(){
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
        method:"POST",
        url:"insert.php",
        data:{
            name:name,
            email:email,
            password:password
        },
        success:function(data){
            readData();
        }
    });
});

function readData(){
   var read = ""
   $.ajax({
    method:"POST",
    url:"read.php",
    data:{read:read},
    success:function(data){
        $('#tbody').html(data)
    }
   }); 
}
function Delete(id){
    $con = confirm("Are you sure?");
    if($con == true){
        $.ajax({
            method:"POST",
            url:"delete.php",
            data:{id:id},
            success:function(){
                readData();
            }
        });
    }
}
$(".readbtn").click(function(){
    readData();
});
function Edit(id){
    $.ajax({
        method: "GET",
        url: "edit.php",
        data:{
            id:id
        },
        success:function(data){
            $("body").html(data);
        }
    });
}
function UpdateData(id){
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    $.ajax({
        method:"POST",
        url:"update.php",
        data:{
            name:name,
            email:email,
            password:password,
            id:id
        },
        success:function(data){
            alert(data);
        }
    });
}
function home(){
    var read = "";
    $.ajax({
        method:"POST",
        url:"index.php",
        data:{read:read},
        success:function(data){
            $("body").html(data);
        }
    })
}