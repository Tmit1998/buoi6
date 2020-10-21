@extends('layout.master');
@section('body')
<div class="panel panel-default">
    <div class="panel-heading">
        Danh sách công việc hiện tại
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">
            <thead>
            <th>Tên công việc</th>
            <th>&nbsp;</th>
            </thead>
            <tbody>

                @foreach($task as $tasks)
                    <tr>
                        <td class="table-text"><div>{{ $tasks->name }} </div></td>
                        <!-- Task Complete Button -->
                        <td>
                            <a href="{{ route('task.complete' , ['task' => $tasks->id]) }}" type="submit" class="btn btn-success">
                                 <i class="fa fa-btn fa-check mr-2"></i>Hoàn thành
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.edit' , ['task' => $tasks->id])}}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check mr-2"></i>Chỉnh sửa
                            </a>
                        </td>

                        <td>

                            @if( $tasks['priority'] == 0 )
                                <a href="/" type="submit" class="btn btn-success">
                                    <i class="fa fa-star mr-2" aria-hidden="true"></i>Bình Thường
                                </a>
                            @elseif($tasks['priority']  == 1)
                                <a href="/" type="submit" class="btn btn-success">
                                    <i class="fa fa-star mr-2" aria-hidden="true"></i>Quan trọng
                                </a>
                            @else
                                <a href="/" type="submit" class="btn btn-success">
                                    <i class="fa fa-star mr-2" aria-hidden="true"></i>Khẩn cấp
                                </a>
                            @endif
                            
                        </td>

                        <!-- Task Delete Button -->
                        <td>
                            <form action="{{ route('task.destroy' , ['task' => $tasks->id])}}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash mr-2"></i>Xoá
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            
            </tbody>
        </table>

        <a href="/Laravel_20/public/task/create" class="btn btn-success">Thêm mới công việc</a>
    </div>
</div>
    
@endsection