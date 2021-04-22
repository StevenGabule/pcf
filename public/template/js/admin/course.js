$('#course-table').DataTable({
    processing: true,
    serverSide: true,
    pageLength: 25,
    ajax: {
        url: '/admin/courses',
        method: 'POST',
    },
    order: [[0, 'desc']],
    columns: [
        {
            data: "id",
            name: "id"
        },
        {
            data: "title",
            name: "title",
        },
        {
            data: "nick_name",
            name: "nick_name",
        },
        {
            data: "short_description",
            name: "short_description"
        },
        {
            data: "type",
            name: "type"
        },
        {
            data: "estimated_time",
            name: "estimated_time"
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

