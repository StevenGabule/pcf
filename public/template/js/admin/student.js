$('#students-table').DataTable({
    processing: true,
    serverSide: true,
    pageLength: 25,
    ajax: {
        url: '/admin/students',
        method: 'POST',
    },
    order: [[0, 'desc']],
    columns: [
        {
            data: "id",
            name: "id"
        },
        {
            data: null,
            name: "first_name",
            render: ({first_name,  last_name}) => `${first_name}  ${last_name}`
        },
        {
            data: "email",
            name: "email",
            render: data => `<a href="mailto:${data}" target="_blank" class="link">${data}</a>`
        },
        {
            data: "birthday",
            name: "birthday"
        },
        {
            data: "citizenship",
            name: "citizenship"
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

