$('#school-items-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/admin/school-items',
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
        },
        {
            data: "unit",
            name: "unit",
        },
        {
            data: "qty",
            name: "qty"
        },
        {
            data: "status",
            name: "status",
            render: data => parseInt(data) === 1 ? 'Available' : 'Unavailable'
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

