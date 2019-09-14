<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>
<body>
<div id="paginationdata"></div>
    
    
    
    <script>
    $(document).ready(function()
    {
        load_data();
    
     function load_data(page)
{
    
    $.ajax({
    url:"backend.php",
    type:"post",
    data:{
        page:page
    },
    success:function(data) {
       $("#paginationdata").html(data);
    }

})
}


var y= document.querySelector('.paginationlink'); 
console.log(y)
$(document).on('click','.paginationlink',function()
{
    page=$(this).attr('id');
    console.log(page);
        load_data(page);
})

}
    )
    </script>
</body>
</html>