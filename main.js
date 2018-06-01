$(document).ready(function(){

    cat();
    brand();
    tree();

    // left corner category list taking from database
	function cat () {
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {category:1},
            success : function(data){
                $("#get_category").html(data);
            }
        })
    }
    // left corner brand list taking from database
    function brand () {
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {brand:1},
            success : function(data){
                $("#get_brand").html(data);
            }
        })
    }
    // middle each trees detailsshowing according to this
    function tree () {
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {tree:1},
            success : function(data){
                $("#get_tree").html(data);
            }
        })
    }
    $("body").delegate(".category","click", function (event) {
        event.preventDefault();
        var cid = $(this).attr('cid');
        $.ajax({

            url : "action.php",
            method : "POST",
            data : {get_selected_Category:1,cat_id:cid},
            success : function(data){
                $("#get_tree").html(data);
            }
        })
    })

})