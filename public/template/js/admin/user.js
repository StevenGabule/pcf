// USER TYPES 0-admin|1-custodian|2-employeer/staff|3-students
const ArrUserTypeColor = ['bg-danger', 'bg-primary', 'bg-success', 'bg-info'];
const ArrUserTypeText = ['Admin', 'Custodian', 'Faculty/Staff', 'Student'];
$('#accounts-table').DataTable({
    processing: true,
    serverSide: true,
    pageLength: 25,
    ajax: {
        url: '/admin/account',
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
            name: "name",
            render: ({avatar, name, email}) => {
                return `<div class="d-flex">
                            <div class="position-relative">
                              <img src="${avatar === null ? `${$publicPath}/no-image.png` : `${$publicPathUpload}/small/${avatar}`}"
                                    class="rounded-circle" alt='${name}' class="table-img-size" width='35' />
                            </div>
                              <div class="d-flex flex-column ml-3">
                                <span class="text-capitalize font-weight-bold">${name}</span>
                                <span>${email}</span>
                            </div>
                        </div>`
            },
        },
        {
            data: "email",
            name: "email",
            render: data => `<a href="mailto:${data}" target="_blank" class="link">${data}</a>`
        },
        {
            data: "user_type",
            name: "user_type",
            render: data => {
                return `<div class="badge ${ArrUserTypeColor[data]} p-2 text-white font-weight-bold">${ArrUserTypeText[data]}</div>`
            }
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
