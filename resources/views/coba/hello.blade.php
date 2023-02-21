@extends('layout.main')
@section('konten')

    @if ($message = Session::get('success'))
    <div>
        <p>{{$message}}</p>
    </div>
    @endif
    
    <div class="row">
        <div class="colmd-12">
          <div class="card">
            <div class="card-header">
                <h4>Activity</h4>

    <table class="table table-bordered">
        <tr bgcolor="grey">
            <td>No</td>
            <td>Id</td>
            <td>Activity</td>
            <td>Action</td>
        </tr>
    <?php $i = 1; ?>
    @foreach($data as $datas)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$datas->id}}</td>
            <td>{{$datas->name_activity}}</td>
            <td>

            
            <form action="{{route('deleteActivity', $datas->id) }}"method="post">
            <a href="{{ route('indexEditActivity', $datas->id) }}">edit</a>
            <button>delete</button>
             @csrf
            </form>
        </tr>
    @endforeach
      </tbody>
    </table>
    @endsection
