$(function () {
            
            // date range picker
            $('#dashboard-range').daterangepicker(
                {
                  ranges: {
                     'Today': [moment(), moment()],
                     'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                     'Last 7 Days': [moment().subtract('days', 6), moment()],
                     'Last 30 Days': [moment().subtract('days', 29), moment()],
                     'This Month': [moment().startOf('month'), moment().endOf('month')],
                     'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 6),
                  endDate: moment()
                },
                function(start, end) {
                    $('#dashboard-range .text-date').text(start.format('MMM D, YYYY') + ' - ' + end.format('MMM D, YYYY'));
                }
            );
    
    
            
            // charts
            // chart revenue
            var data1 = [
                {dates: '2013-10-30', sales: 236},
                {dates: '2013-10-31', sales: 137},
                {dates: '2013-11-01', sales: 275},
                {dates: '2013-11-02', sales: 380},
                {dates: '2013-11-03', sales: 655},
                {dates: '2013-11-04', sales: 571}
            ],
            revenueChart = Morris.Line({
                element: 'revenue-chart',
                data: data1,
                lineColors: ['#3498db'],
                gridTextColor: '#34495e',
                pointFillColors: ['#3498db'],
                xkey: 'dates',
                ykeys: ['sales'],
                labels: ['Sales'],
                barRatio: 0.4,
                hideHover: 'auto'
            }),
            salesChart = Morris.Donut({
                element: 'sales-chart',
                data: [
                    {label: 'Download Sales', value: 25 },
                    {label: 'In-Store Sales', value: 40 },
                    {label: 'Mail-Order Sales', value: 25 },
                    {label: 'Respond Sales', value: 10 }
                ],
                colors: ['#f39c12', '#3498db', '#2ecc71', '#e74c3c'],
                gridTextColor: '#3498db',
                formatter: function (y) { return y + "%" }
            }),
            data_items = [
                {themes: 'Stilearn', purchase: 136},
                {themes: 'StilMetro', purchase: 137},
                {themes: 'Syrena', purchase: 675},
                {themes: 'Biosia', purchase: 380},
                {themes: 'GlitFlat', purchase: 655},
                {themes: 'Zahra', purchase: 1571}
            ],
            itemsChart = Morris.Bar({
                element: 'items-chart',
                data: data_items,
                barColors: ['#3498db'],
                gridTextColor: '#34495e',
                xkey: 'themes',
                ykeys: ['purchase'],
                labels: ['Purchase'],
                barRatio: 0.4,
                xLabelAngle: 30,
                hideHover: 'auto'
            });
    
            // update data on content or window resize
            var update = function(){
                revenueChart.redraw();
                salesChart.redraw();
                itemsChart.redraw();
            }
    
            // handle chart responsive on toggle .content
            $(window).on('resize', function(){
                update();
            })
            $('#toggle-aside').on('click', function(){
                // update chart after transition finished
                $("#content").bind("transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd", function(){
                    update();
                    $(this).unbind();
                });
            })
            $('#toggle-content').on('click', function(){
                update();
            })
            // end chart
    
    
    
            // todo list
            $('.icheck').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green',
                increaseArea: '20%' // optional
            }).on('ifChanged', function(){
                var $this = $(this),
                    todo = $(this).parent().parent().parent();
    
                todo.toggleClass('todo-marked');
                todo.find('.label').toggleClass('label-success');
            });
    
    
    
            // Quick Mail
            $('#quick-mail-reseiver').tagsInput({
                height: '70px',
                width:'auto',           // support percent (90%)
                defaultText: '+ reseiver'
            });
            // manual style for .tagsinput
            $('div.tagsinput input').on('focus', function(){
                var tagsinput = $(this).parent().parent();
                tagsinput.addClass('focus');
            }).on('focusout', function(){
                var tagsinput = $(this).parent().parent();
                tagsinput.removeClass('focus');
            });
            $('#quick-mail-content').wysihtml5({
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": false, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": true, //Button to insert a link. Default true
                "image": true, //Button to insert an image. Default true,
                "color": false, //Button to change color of font  
                "size": 'sm' // use button small ion and primary
            });
        })