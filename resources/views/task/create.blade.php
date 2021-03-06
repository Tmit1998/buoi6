@extends('layout.master');
@section('body')

<div class="panel panel-default">
    <div class="panel-heading">
        Thêm công việc mới
    </div>

    <div class="panel-body">
        <!-- Display Validation Errors -->

    <!-- New Task Form -->
    <!-- {{ route('task.store')}}  dùng cho action form-->
        <form action="{{ route('task.store')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Deadline  </label>
                <div class="col-sm-6">
                    <input type="datetime-local" name="deadline" id="task-name" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Content  </label>
                <div class="col-sm-6">
                    <textarea name="content"></textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Ưu tiên  </label>
                <div class="col-sm-6">
                    <input type="text" name="priority" id="task-priority"  class="form-control" value="">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-btn fa-plus"></i>Thêm công việc
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection