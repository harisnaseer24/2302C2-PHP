$(document).ready(function(){

form=$("#form");
id=$("#id");
uname=$("#uname");
email=$("#email");
pass=$("#pass");
btn=$("#btn");
tablebody=$("#tablebody");

// getData
function getData(){
$.ajax({
method:"POST",
url:"fetch.php",
success:function(data){
    tablebody.html(data);
}
})
}
getData();
//Insert
btn.on("click",function(e){
e.preventDefault();
$.ajax({
method:"POST",
url:"insert.php",
data:{
    id:id.val(),
    uname:uname.val(),
    email:email.val(),
    pass:pass.val()
},
success:function(data){
    alert(data);
    getData();
    form.trigger("reset");
}
})
})
//trash
$("tbody").on("click",".del",function(e){
userid=$(this).attr("data-id");
    $.ajax({
    method:"POST",
    url:"delete.php",
    data:{
        userid:userid,
    },
    success:function(data){
        alert(data);
        getData();}
    })
    })
//update
$("tbody").on("click",".upd",function(e){
    userid=$(this).attr("data-id");
    $.ajax({
        method:"POST",
        url:"update.php",
        data:{
            userid:userid, } ,
        success:function(data){
      record=JSON.parse(data);
      console.log(record);
        id.val(record.id)
        uname.val(record.uname)
        email.val(record.email)
        pass.val(record.pass)
    }
    })
    })


})