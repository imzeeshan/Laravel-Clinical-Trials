@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                        <td>ID</td>
                        <td>Name</td>
                        </tr>
                        
                        @foreach($studies as $study)
                        <tr>
                            <td>{{ $study->nct_id }}</td>
                            <td>{{ $study->brief_title }}</td>
                        </tr>
                        @endforeach
                        
                    </table>
                    {{ $studies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
