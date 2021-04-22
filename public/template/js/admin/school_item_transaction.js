$('#school-item-transaction-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: '/admin/school-items-transaction',
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
            name: "school_item.name",
            render: ({school_item}) => school_item.name
        },
        {
            data: "qty",
            name: "qty",
        },
        {
            data: "student_id",
            name: "student_id"
        },
        {
            data: "employee_id",
            name: "employee_id"
        },
        {
            data: "purpose",
            name: "purpose"
        },
        {
            data: "expected_return_date",
            name: "expected_return_date",
            render: data => data ? moment(data).format('LLL') : 'N/A'
        },
        {
            data: "status",
            name: "status"
        },
        {
            data: "date_return",
            name: "date_return",
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

