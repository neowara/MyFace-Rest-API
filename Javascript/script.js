


$(document).ready(function() {


    


    $("#savePost").click(function() {

        $.ajax({
            url: "API/addPost.php",
            method: "POST",
            data: {
                "title": $("#postTitle").val(),
                "text": $("#postText").val()
            },
            success: function(results) {
                if (results == "true") {
    
                } else {
                    $("#blogposts").html(results);
                }
            }
        })
    });

});

