$('#event-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/admin/event-activity',
        method: 'POST',
    },
    order: [[0, 'desc']],

    columns: [
        {
            data: "id",
            name: "id"
        },
        {
            data: "photo",
            name: "photo",
            render: data => ` <img src="${data === null ? `${$publicPath}/no-image.png` : `${$publicPathUpload}/small/${data}`}"
                                    class="rounded-circle" alt='${name}' class="table-img-size" width='35' />`
        },
        {
            data: "name",
            name: "name",
            render: data => truncateWithEllipses(data, 15)
        },
        {
            data: "description",
            name: "description",
            render: data => truncateWithEllipses(data, 25)
        },
        {
            data: "location",
            name: "location",
            render: data => truncateWithEllipses(data, 10)
        },
        {
            data: "date_start",
            name: "date_start",
            render: data => data ? moment(data).format('LLL') : 'N/A'
        },{
            data: "created_at",
            name: "created_at",
            render: data => data ? moment(data).format('LLL') : 'N/A'
        },
        {
            data: "action",
            name: "action",
            searchable: false,
            orderable: false
        },
    ]
});

function truncateWithEllipses(text, max)
{
    return text.substr(0,max-1)+(text.length>max?'&hellip;':'');
}
