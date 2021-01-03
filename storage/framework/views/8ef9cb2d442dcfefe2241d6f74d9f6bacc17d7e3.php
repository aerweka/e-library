<p id="title">Ini Ajax</p>
<button onclick="ajax()">Coba Ajax</button>

<!-- JQuery libs -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    function ajax() {
        $.ajax({
            type: "get",
            url: "/indexAjax/action",
            success: function(results) {
                console.log(results);
                document.getElementById('title').innerHTML = results;
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script><?php /**PATH C:\xampp\htdocs\web_laraboots\resources\views/ajax.blade.php ENDPATH**/ ?>