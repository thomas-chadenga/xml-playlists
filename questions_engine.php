<html>
<head>
<style>
    .button{
        padding:10px;
        color:#fff;
        background-color:#0000bf;
        display:inline-block;
        cursor:pointer;
    }
    #result{
        padding:10px;
        background-color:#ccc;
        margin-top:10px;
        border:1px solid #999;
        width:400px;
        min-height:200px;
    }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
        $(".button").click(function(){
            var id = $(this).attr('id');
            $.ajax({
                url: "http://localhost/playlists/questions_engine_loader.php",
                data: "id="+id,
                dataType: 'json',
                success: function(result){
                    var ran = Math.floor(Math.random() * 6);
                    var question = result[ran]['question_text'];
                    $('#result').html(question);
                }
            });
        });
    });
</script>
    </head>
<body>
<h1>Questions Engine</h1>

<div class="button" id="multichoice">Multiple Choice</div>
<div class="button" id="truefalse">True/False</div>
<div class="button" id="matching">Matching</div>
<div class="button" id="shortanswer">Fill The Gap</div>

<div id="result"></div>

<
</body>

</html>
