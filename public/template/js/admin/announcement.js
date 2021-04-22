$('#announcement-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/admin/announcement',
        method: 'POST',
    },
    order: [[0, 'desc']],
    columns: [
        {
            data: "id",
            name: "id"
        },
        {
            data: "name",
            name: "name",
            render: data => truncateWithEllipses(data, 15)
        },
        {
            data: "purpose",
            name: "purpose",
            render: data => truncateWithEllipses(data, 15)
        },
        {
            data: "description",
            name: "description",
            render: data => truncateWithEllipses(data, 25)
        },
        {
            data: "status",
            name: "status",
            render: data => parseInt(data) === 1 ? 'Important' : 'Less Important'
        },
        {
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
