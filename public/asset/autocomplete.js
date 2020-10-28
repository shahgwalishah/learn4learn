$( function() {
    let url = '/get/all/lessons';
    console.log('jquery autocomplete start');
    console.log('working......');
    var availableTags = [];
    $.ajax({
        url:url,
        method:'GET',

        success: function(response){
            console.log('response');
            console.log(response);
            response.data.map((data) => {
                console.log('data');
                console.log(data.title);
                availableTags.push({
                   'label':data.name,
                   'value':data.name,
                   'id':data.id
                });
            });
        },
        error: function(error) {
            console.log('error');
            console.log(error);
        }
    });
    console.log('autocomplete in progress get request');
    console.log('getting data');
    $( "#tagsAutoComplete" ).autocomplete({
        source: availableTags,
        select: function (e, ui) {
            console.log('selected!');
            console.log(ui.item.id);
            window.location.href='/search/Subjects?see_all=&subject_id='+ui.item.id+'&level_id=&date_id='
        },
        change: function (e, ui) {
            console.log('changed!');
            console.log(ui);
        }
    });
});