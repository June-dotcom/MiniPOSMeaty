@php
    $history_list = DB::table('histories')->get();
@endphp
<div class="col col-lg-12 col-md-12">

    <div class="card">
        <div class="card-body">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th colspan="2" class="text-right"><a href="/clear-history" style="text-decoration:none;"> Clear
                                all</a></th>
                    </tr>
                    @foreach($history_list as $hist_item)
                        <tr>
                            <th>{{ $hist_item->created_at }}</th>
                            <td>{{ $hist_item->actions }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
