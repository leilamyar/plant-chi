'use strict';



$.get('https://www.prevision-meteo.ch/services/json/lat=46.259lng=5.235').done(json => {
            let tmp = json.current_condition.tmp;
            let image = json.current_condition.icon_big;
            $('#temperature').html(tmp);
            $('#image').attr('src', image);
        }).fail().always();