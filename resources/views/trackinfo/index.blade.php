@extends('layout')
@section('dashboard-content')

    @if(Session::get('deleted'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('deleted') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::get('delete-failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('delete-failed') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            All Track Information </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th> Track info Title </th>
                        <th> Track info Description </th>
                        <th> Track info person phone </th>
                        {{-- <th> User Name</th> --}}
                        <th>Actions </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> Track info Title </th>
                        <th> Track info Description </th>
                        <th> Track info person phone </th>
                        {{-- <th> User Name</th> --}}
                        <th>Actions </th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($tracks as $track)

                        <tr>
                            <td> {{ $track->track_title }} </td>
                            <td> {{ $track->track_description }} </td>
                            <td> {{ $track->phone }} </td>
                            {{-- <td> {{ $track->name}} </td> --}}
                            {{-- <td> <img src="{{ $requestbook->icon }}" width="100" height="100"></td> --}}
                            <td>
                                {{-- <a href="{{ URL::to('edit-requestbook') }}/{{ $requestbook->id }}" class="btn btn-outline-primary btn-sm"> Edit </a> --}}
                                |
                                <a href="{{ URL::to('delete-trackinfo') }}/{{ $track->id }}" class="btn btn-outline-danger btn-sm" onclick="checkDelete()"> Delete </a>
                            </td>

                        </tr>


                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <script>
        function checkDelete() {
            var check = confirm('Are you sure you want to Delete this?');
            if(check){
                return true;
            }
            return false;
        }
    </script>

@stop
