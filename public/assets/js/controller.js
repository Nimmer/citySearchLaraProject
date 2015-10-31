
$('#citySearchInput').keypress(function (e) {
    if (e.which == 13) {
        $("#appendPoint").after('<p>asd</p>');


        return false;    //<---- Add this line
    }
});

$(function()
{
    $( "#citySearchInput" ).autocomplete({
        source: "search/autocomplete",
        minLength: 1,
        select: function(event, ui) {
            $('#citySearchInput').val(ui.item.value);
        }
    });
});

