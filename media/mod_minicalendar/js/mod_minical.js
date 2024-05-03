document.addEventListener('DOMContentLoaded', minical_add_events);

function minical_add_events()
{
    if (document.getElementById('minical_left'))
        document.getElementById('minical_left').addEventListener('click', minical_ajax);
    if (document.getElementById('minical_right'))
        document.getElementById('minical_right').addEventListener('click', minical_ajax);
}

function minical_ajax()
{
    id = this.getAttribute('id');
    if (id == 'minical_left')
        offset = -1;
    else
        offset = 1;
    year = this.getAttribute('data-year');
    month = this.getAttribute('data-month');
    var url = '?option=com_ajax&module=minicalendar&format=raw&offset='+offset+'&year='+year+'&month='+month;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) 
            {
            var elements = document.getElementsByClassName('mod_minical_outer');
            for (var i = 0; i < elements.length; i++)
                elements[i].innerHTML = xhttp.responseText;
            minical_add_events();
            }
        };
    xhttp.open('GET', url, true);
    xhttp.send();
}
