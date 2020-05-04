function move(option_id) {
    var url = $('meta[name=move-url]');
    var csrf = $('meta[name=csrf-token]');
    
    data = {
        _method : 'PUT',
        _token : csrf[0]['content'],
        option_id : option_id
    }
    
    $.ajax({
        type : "POST",
        url : url[0]['content'],
        data : data,
    }).done(function(data) {
        let log_title = $('<div/>')
        .addClass("log-title")
        .text(data['title']);
        
        let log_description = $('<div/>')
        .addClass("log-description")
        .text(data['description']);
        
        let log_options = $('<div/>')
        .addClass("log-options");
        
        $('.log').append(log_title);
        $('.log').append(log_description);
        $('.log').append(log_options);
        
        for(var i in data['options'])
        {
            let func = "move("+data['options'][i]['next_scene']+")";
            let log_option = $('<div/>')
            .addClass("log-description")
            .text(data['options'][i]['description'])
            .attr('onclick', func);
            $('.log-options').last().append(log_option);
        }
    });
}

function get_game()
{
    var url = $('meta[name=get-game-url]');
    var csrf = $('meta[name=csrf-token]');
    
    data = {
        _method : 'GET',
        _token : csrf[0]['content']
    }
    
    $.ajax({
        type : "POST",
        url : url[0]['content'],
        data : data,
    }).done(function(data) {
        let log_title = $('<div/>')
        .addClass("log-title")
        .text(data['title']);
        
        let log_description = $('<div/>')
        .addClass("log-description")
        .text(data['description']);
        
        let log_options = $('<div/>')
        .addClass("log-options");
        
        $('.log').append(log_title);
        $('.log').append(log_description);
        $('.log').append(log_options);
        
        for(var i in data['options'])
        {
            let func = "move("+data['options'][i]['next_scene']+")";
            let log_option = $('<div/>')
            .addClass("log-description")
            .text(data['options'][i]['description'])
            .attr('onclick', func);
            $('.log-options').last().append(log_option);
        }
    });
}

$(document).ready(function() {
    get_game();
});