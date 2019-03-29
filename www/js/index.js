// depends indicator_data, indicator_lang

$(function() {

    updateIndicators(2018);

    $('.ac_change-year').click(function () {
        updateIndicators($(this).data('year'));
    });

    for(var ind_bar in indicator_data.root_bar_heights) {
        $('#ind_'+ind_bar).find('.mp-db__bar__l1').css('height',indicator_data.root_bar_heights[ind_bar]);
    }


});

var g_updateIndicators_index;
var g_updateIndicators_year;

function updateIndicators(year)
{
    g_updateIndicators_index = 0;
    g_updateIndicators_year = year;

    $('.ac_change-year').removeClass('sel');
    $('.ac_change-year[data-year="'+year+'"]').addClass('sel');

    updateIndicators_proc();
}

function updateIndicators_proc()
{
    var trend_name;
    var trend_value;
    var data = indicator_data[g_updateIndicators_year][g_updateIndicators_index];
    window.console.log(data);

    var obj = $('#ind_'+data.id);

    obj.find('.mp-db__bar__l2').css('height',data.bar_height);

    obj.find('.mp-db__value__cont').fadeOut('fast', function () {
        var value = data.value;
        if(indicator_lang=='ru') {
            value = value.replace(","," ");
            value = value.replace(".",",");
        }
        obj.find('.mp-db__text').html(value);
        obj.find('.mp-db__value__cont').fadeIn('fast');
    });


    if(data.trend>0) {
        trend_name='up';
        trend_value = data.trend;
    }
    else {
        trend_name='down';
        trend_value = data.trend * -1;
    }
    var trend_obj = obj.find('.ac_trend');


    obj.find('.mp-db__top__arrows').fadeOut('fast', function () {
        trend_obj.hide();
        for(var i=1; i<=trend_value; i++) {
            trend_obj.filter('[data-trend="'+trend_name+'_'+i+'"]').show();
        }
        obj.find('.mp-db__top__arrows').fadeIn('fast');
    });


    g_updateIndicators_index++;
    if(g_updateIndicators_index<5) {
        setTimeout(updateIndicators_proc, 100);
    }

}