$(document).ready(function(){
    var graph;
    $('.graph-links').click(function(){
        $('.graph-links').removeClass('is-dark');
        if($(this).hasClass('show-weekly'))
        {
            $(this).addClass('is-dark');
            $('.monthly-graph').hide();
            $('.yearly-graph').hide();
            $('.weekly-graph').show();
        }
        else if($(this).hasClass('show-monthly'))
        {
            $(this).addClass('is-dark');
            $('.weekly-graph').hide();
            $('.yearly-graph').hide();
            $('.monthly-graph').show();
        }
        else if($(this).hasClass('show-yearly'))
        {
            $(this).addClass('is-dark');
            $('.weekly-graph').hide();
            $('.monthly-graph').hide();
            $('.yearly-graph').show();
        }

    });
});