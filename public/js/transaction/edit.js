let driver = $('#driver_id');
let account_select = $('#driver_bank_account_id');
let url            =  window.location.protocol + "//" + location.host +  "/" ;


driver.on('change',function (e)
{
    e.preventDefault();
    // let form   = new FormData(this);
    let user_id = $(this).find(':selected').attr('data-user_id');

    axios({
        method: 'POST',
        url: url + 'bank_account/get',
        data: {
            key: "user_id",
            value:user_id
        }
    }).then((response) =>
    {
        if (response.data != null && response.data.length > 0)
        {
            account_select.empty();
            account_select.append('<option value="">--</option>');
            $.each(response.data, function(k, v)
            {
                account_select.append(`<option value="${v.id}">&nbsp;&nbsp;${v.name}</option>`);
            });
            account_select.prop( "disabled", false );
        }
        else
        {
            account_select.empty();
        }
    }, (error) =>
    {
        account_select.prop( "disabled", true );
        return error;
    });
});
