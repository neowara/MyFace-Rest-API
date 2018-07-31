var posts = [];
var id = 1;

function postTemplate(post) {
    var html = "<div class='post'><h1>"+ post.title +"</h1>";
    html += "<p>" + post.text + "</p></div>";

    return html;
}

function retrievePosts() {

    $.ajax({
        url: "API/viewPost.php",
        method: "GET",
        data: {
            "id": id
        },
        success: function(result) {

            // Id doesn't exist, break loop
            if(!result) {
                $("#blogposts").html(posts.join(''));
                return;
            }

            var post = JSON.parse(result);

            var html = postTemplate(post);

            posts.push(html);
            
            id++;
            retrievePosts();
        }
    });

}


$(document).ready(function() {


    retrievePosts();

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
                    
                    retrievePosts();
                } else {
                    alert("Please fill the required fields");
                }
                 $('#postText, #postTitle').val("");
            }
        })
    });
    


});


    
