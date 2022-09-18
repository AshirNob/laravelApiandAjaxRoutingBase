<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>All Shops</span>
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10"
                        data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                        data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                        data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">

                    <table id="dt-button" class="table table-bordered table-hover table-striped w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Shop Name</th>
                                <th>Shop Description</th>
                                <th>Shop Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $count = 1;
                            @endphp
                            @foreach ($shops as $item)
                                @php
                                    $status="";
                                    if ($item->status == '0') {
                                        $status="In-Active";
                                    } else {
                                        $status="Active";
                                    }
                                @endphp
                                <tr>
                                    <th>{{ $count }}</th>
                                    <th>{{ $item->name }}</th>
                                    <th>{{ $item->description }}</th>
                                    <th>{{ $status }}</th>
                                    <th>
                                        <button onclick="LoadPage('shopfields/{{$item->id}}')" class="btn btn-sm btn-primary">Manage Fields</button>
                                        |
                                        <button onclick="LoadPage('ViewShopFields/{{$item->id}}')" class="btn btn-sm btn-primary">View Data</button>
                                    </th>
                                    @php
                                        $count = $count + 1;
                                    @endphp
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dt-button').dataTable({
            responsive: true,
            dom: "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            buttons: [{
                    extend: 'colvis',
                    text: 'Column Visibility',
                    titleAttr: 'Col visibility',
                    className: 'btn-outline-default'
                },
                {
                    extend: 'csvHtml5',
                    text: 'CSV',
                    titleAttr: 'Generate CSV',
                    className: 'btn-outline-default'
                },
                {
                    extend: 'copyHtml5',
                    text: 'Copy',
                    titleAttr: 'Copy to clipboard',
                    className: 'btn-outline-default'
                },
                {
                    extend: 'print',
                    text: 'Print',
                    titleAttr: 'Print Table',
                    className: 'btn-outline-default'
                }
            ]
        });
    });
</script>
