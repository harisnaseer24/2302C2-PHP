$(document).ready(function(){
    tablebody=$("#tablebody");
    // getTrashData
    function getTrashData(){
    $.ajax({
    method:"POST",
    url:"fetchtrash.php",
    success:function(data){
        tablebody.html(data);}
    })
    }
    getTrashData();
    //restore
    $("tbody").on("click",".res",function(e){
    userid=$(this).attr("data-id");
        $.ajax({
        method:"POST",
        url:"restore.php",
        data:{
            userid:userid,},
        success:function(data){
            alert(data);
            getTrashData();}
        })
        })
    //permanent delete
    $("tbody").on("click",".perdel",function(e){
    userid=$(this).attr("data-id");
        $.ajax({
        method:"POST",
        url:"perdel.php",
        data:{
            userid:userid,
        },
        success:function(data){
            alert(data);
            getTrashData();
        }
        })
        })
   
    
    })