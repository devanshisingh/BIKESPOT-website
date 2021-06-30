function modal_show(id)
{
    document.getElementById(id).style.display = 'block';
    return true;
}

function modal_close(id)
{
    document.getElementById(id).style.display = 'none';
    return true;
}

function modal_show_close(show_id, close_id)
{
    modal_close(close_id);
    modal_show(show_id);
    return true;
}
