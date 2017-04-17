@extends('admin.layouts.desktop')
@push('css')
{{html()->style('https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap4.min.css')}}
{{html()->style('admin/css/feedback.css')}}
@endpush
@section('content')
    <div class="card">
        <div class="card-title p-3">
            <h5>{{trans('labels.feedback')}}</h5>
        </div>
        <div class="card-block">
            <table class="table table-striped table-bordered" id="feedbackTable">
                <thead>
                <tr>
                    <th>{{trans('string.id')}}</th>
                    <th>{{trans('string.name')}}</th>
                    <th>{{trans('string.email')}}</th>
                    <th>{{trans('string.content')}}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($feedbacks as $feedback)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$feedback->author ? $feedback->author : $feedback->full_name}}</td>
                        <td>{{$feedback->email}}</td>
                        <td>{{str_limit($feedback->content)}}</td>
                        <td>
                            {!! Form::button('<i class="material-icons">mode_edit</i> ' . trans('buttons.show'), ['class' => 'btn btn-warning btn-show-feedback', 'data-id' => $feedback->id,]) !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$feedbacks->links()}}
        </div>
    </div>
@endsection
@push('modals')
    @include('admin.feedback.show')
@endpush
@push('js')
{{html()->script('https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js')}}
{{html()->script('https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap4.min.js')}}
@endpush
@push('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#feedbackTable').DataTable({
            stateSave: true,
            "paging": true,
            "language": {
                "lengthMenu": "Hiển thị _MENU_ bản ghi trên một trang",
                "zeroRecords": "Không có dữ liệu. Thực hiện tìm kiếm để có dữ liệu",
                "info": "",
                "infoEmpty": "Không có dữ liệu",
                "loadingRecords": "Đang tìm kiếm...",
                "search": "Tìm kiếm:",
                "processing": "Đang xử lý...",
                "paginate": {
                    "first": "Trang đầu",
                    "last": "Trang cuối",
                    "next": "Sau",
                    "previous": "Trước"
                }
            }
        });
    });
</script>
@endpush