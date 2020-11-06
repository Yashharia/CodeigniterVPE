<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    $(function() {
        $(document)
            .on("click", ".btn-add", function(e) {
                e.preventDefault();
                var controlForm = $("#myRepeatingFields:first"),
                    currentEntry = $(this).parents(".entry:first"),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find("input").val("");
                controlForm
                    .find(".entry:not(:last) .btn-add")
                    .removeClass("btn-add")
                    .addClass("btn-remove")
                    .removeClass("btn-success")
                    .addClass("btn-danger")
                    .html("x");
            })
            .on("click", ".btn-remove", function(e) {
                e.preventDefault();
                $(this).parents(".entry:first").remove();
                return false;
            });
    });
</script>

<script>
    $(function() {
        $(document)
            .on("click", ".btn-add-2", function(e) {
                e.preventDefault();
                var controlForm = $("#myRepeatingFields-2:first"),
                    currentEntry = $(this).parents(".entry:first"),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find("input").val("");
                controlForm
                    .find(".entry:not(:last) .btn-add-2")
                    .removeClass("btn-add-2")
                    .addClass("btn-remove-2")
                    .removeClass("btn-success-2")
                    .addClass("btn-danger-2")
                    .html("x");
            })
            .on("click", ".btn-remove-2", function(e) {
                e.preventDefault();
                $(this).parents(".entry:first").remove();
                return false;
            });
    });
</script>